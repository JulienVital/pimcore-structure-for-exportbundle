<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\ObjectDto;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use PhpParser\Node\Expr\Instanceof_;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Concrete;

class ExportObject
{

    private $queue;

    private $assetList = [];

    public function __construct(ExportQueue $queue)
    {
        $this->queue = $queue;
    }

    public function export(DataObject $object)
    {

        $objectDto = new ObjectDto();
        $objectDto->setClassName($object::class)
            ->setKey($object->getKey())
            ->setPath($object->getPath());
        if ($object::class !== "Pimcore\Model\DataObject\Folder") {
            $objectDto->setProperties($this->getProperties($object));
        }

        return $objectDto;
    }

    private function getProperties(DataObject $object)
    {

        $fields = $object->getClass()->getFieldDefinitions();
        $properties = [];
        foreach ($fields as $fieldDefinition) {
            if (is_null($value = $object->getValueForFieldName($fieldDefinition->name))) {
                continue;
            }
            $property = $this->getProperty($fieldDefinition, $value);
            $properties[$property["type"]][$fieldDefinition->name] = $property["value"];
        }

        return $properties;
    }

    private function getProperty($fieldDefinition, $value)
    {
        switch ($fieldDefinition->fieldtype) {
            case "manyToManyObjectRelation":
                $array = [];
                foreach ($value as $currentRelation) {
                    $this->queue->enqueue($currentRelation);

                    $array[]= $currentRelation->getFullPath();
                }
                return  [
                    "type" => "relation",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $array
                    ]
                ];    
            case "manyToManyRelation":
                $array = [];
                foreach ($value as $currentRelation) {
                    $this->queue->enqueue($currentRelation);

                    $array[]= $currentRelation->getFullPath();
                }
                return  [
                    "type" => "relation",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $array
                    ]
                ];          
            case "manyToOneRelation":
                $this->queue->enqueue($value);
                return  [
                    "type" => "relation",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $value->getFullPath()
                    ]
                ];
            case "datetime":
                return  [
                    "type" => "simple",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $value->toIso8601String()
                    ]
                ];
            case "date":
                return  [
                    "type" => "simple",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $value->toIso8601String()
                    ]
                ];
            case "imageGallery":
                $newValue = [];
                foreach ($value as $item) {
                    $this->queue->enqueue($item->getImage());
                    $newValue[] = $item->getImage()->getFullPath();
                }
                return  [
                    "type" => "asset",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $newValue
                    ]
                ];
            case "externalImage":
                return  [
                    "type" => "simple",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $value->getUrl()
                    ]
                ];
            case "image":
                $this->queue->enqueue($value);
                return  [
                    "type" => "asset",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $value->getFullPath()
                    ]
                ];
            case "hotspotimage":
                $this->queue->enqueue($value->getImage());
                return  [
                    "type" => "asset",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $value->getImage()->getFullPath()
                    ]
                ];
            default:
                return  [
                    "type" => "simple",
                    "value" => [
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $value
                    ]
                ];
        }
    }

    public function exportTree(DataObject $object, $arrayOfNodes = [])
    {

        $this->queue->enqueue($object);
        while (!$this->queue->isEmpty()) {
            $currentNode = $this->queue->dequeue();
            if ($currentNode instanceof Asset) {
                $this->assetList[] = $currentNode->getFullPath();
                continue;
            }

            $arrayOfNodes  =  $this->exploreParent($currentNode, $arrayOfNodes);
            $arrayOfNodes  =  $this->exploreChildren($currentNode, $arrayOfNodes);
        }


        return $arrayOfNodes;
    }

    private function exploreChildren($object, $arrayOfNodes)
    {
        $arrayOfNodes[] = $this->export($object);
        if (!$children = $object->getChildren()) {
            return $arrayOfNodes;
        }
        foreach ($children as $actualChildren) {
            # code...
            $arrayOfNodes  =  $this->exploreChildren($actualChildren, $arrayOfNodes);
        }
        return $arrayOfNodes;
    }

    private function exploreParent($object, $arrayOfNodes)
    {

        if ($parent = $object->getParent()) {
            $arrayOfNodes[] = $this->export($parent);
            $arrayOfNodes  =  $this->exploreParent($parent, $arrayOfNodes);
        }
        return $arrayOfNodes;
    }

    public function getAssetsList()
    {
        return $this->assetList;
    }
}
