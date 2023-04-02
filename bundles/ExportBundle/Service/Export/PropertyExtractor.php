<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\Properties;
use Activepublishing\ExportBundle\Classes\Property;
use Activepublishing\ExportBundle\Service\Queue\ExportQueueInterface;
use Pimcore\Model\DataObject;

class PropertyExtractor
{
    private $queue;

    public function __construct(ExportQueueInterface  $queue)
    {
        $this->queue = $queue;
    }

    /**
     * @param DataObject $object
     * @return Properties
     */
    public function getProperties(DataObject $object): Properties
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

    /**
     * @param mixed $fieldDefinition
     * @param DataObject $object
     * @return array
     */
    private function getProperty($fieldDefinition, $object)
    {
        $value = $object->getValueForFieldName($fieldDefinition->name);

        switch ($fieldDefinition->fieldtype) {
            case "manyToManyObjectRelation":
            case "manyToManyRelation":
                return $this->getRelationProperty($fieldDefinition, $value);
            case "manyToOneRelation":
                $this->queue->enqueue($value);
                return  [
                    "type" => "relation",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $value->getFullPath()
                    )
                ];
            case "datetime":
            case "date":
                return $this->getDateProperty($fieldDefinition, $value);

            case "imageGallery":
                $newValue = [];
                foreach ($value as $item) {
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
                        $value->getUrl()
                    )
                ];
            case "image":
                $this->queue->enqueue($value);
                return  [
                    "type" => "simple",
                    "value" => new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $value->getFullPath()
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
                return $this->getSimpleProperty($fieldDefinition, $value);
        }
    }

    private function getRelationProperty($fieldDefinition, $value)
    {
        $array = [];
        foreach ($value as $currentRelation) {
            $this->queue->enqueue($currentRelation);
            $array[] = $currentRelation->getFullPath();
        }
        return [
            "type" => "relation",
            "value" => new Property(
                $fieldDefinition->fieldtype,
                $fieldDefinition->name,
                $array
            )
        ];
    }
    private function getSimpleProperty($fieldDefinition, $value)
    {
        return [
            "type" => "simple",
            "value" => new Property(
                $fieldDefinition->fieldtype,
                $fieldDefinition->name,
                $value
            )
        ];
    }

    private function getDateProperty($fieldDefinition, $value)
    {
        return [
            "type" => "simple",
            "value" => new Property(
                $fieldDefinition->fieldtype,
                $fieldDefinition->name,
                $value->toIso8601String()
            )
        ];
    }
}