<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\Properties;
use Activepublishing\ExportBundle\Classes\Property;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject;

class PropertyExtractor
{
    private $queue;

    public function __construct(ExportQueue $queue)
    {
        $this->queue = $queue;
    }

    public function getProperties(DataObject $object)
    {

        $fields = $object->getClass()->getFieldDefinitions();
        $properties = new Properties();
        foreach ($fields as $fieldDefinition) {
            if (is_null($object->getValueForFieldName($fieldDefinition->name))) {
                continue;
            }
            $properties->push($this->getProperty($fieldDefinition, $object));
        }

        return $properties;
    }

    private function getProperty($fieldDefinition, $object)
    {
        switch ($fieldDefinition->fieldtype) {
            case "manyToManyObjectRelation":
                $array = [];
                foreach ($object->getValueForFieldName($fieldDefinition->name) as $currentRelation) {
                    $this->queue->enqueue($currentRelation);

                    $array[]= $currentRelation->getFullPath();
                }
                return  [
                    "type" => "relation",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $array
                    )
                ];    
            case "manyToManyRelation":
                $array = [];
                foreach ($object->getValueForFieldName($fieldDefinition->name)as $currentRelation) {
                    $this->queue->enqueue($currentRelation);

                    $array[]= $currentRelation->getFullPath();
                }
                return  [
                    "type" => "relation",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $array
                    )
                ];          
            case "manyToOneRelation":
                $this->queue->enqueue($object->getValueForFieldName($fieldDefinition->name));
                return  [
                    "type" => "relation",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $object->getValueForFieldName($fieldDefinition->name)->getFullPath()
                    )
                ];
            case "datetime":
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $object->getValueForFieldName($fieldDefinition->name)->toIso8601String()
                    )
                ];
            case "date":
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $object->getValueForFieldName($fieldDefinition->name)->toIso8601String()
                    )
                ];
            case "imageGallery":
                $newValue = [];
                foreach ($object->getValueForFieldName($fieldDefinition->name) as $item) {
                    $this->queue->enqueue($item->getImage());
                    $newValue[] = $item->getImage()->getFullPath();
                }
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $newValue
                    )
                ];
            case "externalImage":
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $object->getValueForFieldName($fieldDefinition->name)->getUrl()
                    )
                ];
            case "image":
                $this->queue->enqueue($object->getValueForFieldName($fieldDefinition->name));
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $object->getValueForFieldName($fieldDefinition->name)->getFullPath()
                        )
                ];
            case "hotspotimage":
                $this->queue->enqueue($object->getValueForFieldName($fieldDefinition->name)->getImage());
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $object->getValueForFieldName($fieldDefinition->name)->getImage()->getFullPath()
                    )
                ];
            default:
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $object->getValueForFieldName($fieldDefinition->name)
                    )
                ];
        }
    }
}