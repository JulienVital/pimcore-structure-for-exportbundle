<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject;

class PropertyAdapter
{
    private $queue;

    public function __construct(ExportQueue $queue)
    {
        $this->queue = $queue;
    }

    public function getProperties(DataObject $object)
    {

        $fields = $object->getClass()->getFieldDefinitions();
        $properties = [];
        foreach ($fields as $fieldDefinition) {
            if (is_null($value = $object->getValueForFieldName($fieldDefinition->name))) {
                continue;
            }
            $property = $this->getProperty($fieldDefinition, $value, $object);
            $properties[$property["type"]][] = $property["value"];
        }

        return $properties;
    }
    private function getProperty($fieldDefinition, $value, $object)
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
                        "value" => $value->getFullPath()]
                ];
            case "hotspotimage":
                $this->queue->enqueue($value->getImage());
                return  [
                    "type" => "asset",
                    "value" =>[
                        "name" => $fieldDefinition->name,
                        "type" => $fieldDefinition->fieldtype,
                        "value" => $object->getValueForFieldName($fieldDefinition->name)->getImage()->getFullPath()
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
}