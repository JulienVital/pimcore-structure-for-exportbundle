<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\Properties;
use Activepublishing\ExportBundle\Classes\Property;
use Activepublishing\ExportBundle\Service\Export\Strategy\HotSpotImageStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\ImageStrategy;
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
                return   new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $value->getFullPath()
                    )
                ;
            case "datetime":
            case "date":
                return $this->getDateProperty($fieldDefinition, $value);

            case "imageGallery":
                $newValue = [];
                foreach ($value as $item) {
                    $this->queue->enqueue($item->getImage());
                    $newValue[] = $item->getImage()->getFullPath();
                }
                return   new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $newValue
                );
            case "externalImage":
                return  new Property(
                        $fieldDefinition->fieldtype,
                        $fieldDefinition->name,
                        $value->getUrl()
                );
            case "image":
                $strategy = new ImageStrategy();
                return $strategy->getPropertyValueAndAddRelationToQueue($fieldDefinition, $value, $this->queue);
            case "hotspotimage":
                $strategy = new HotSpotImageStrategy();
                return $strategy->getPropertyValueAndAddRelationToQueue($fieldDefinition, $value, $this->queue);
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
        return  new Property(
                $fieldDefinition->fieldtype,
                $fieldDefinition->name,
                $array
        );
    }
    private function getSimpleProperty($fieldDefinition, $value)
    {
        return new Property(
                $fieldDefinition->fieldtype,
                $fieldDefinition->name,
                $value
            );
    }

    private function getDateProperty($fieldDefinition, $value)
    {
        return new Property(
                $fieldDefinition->fieldtype,
                $fieldDefinition->name,
                $value->toIso8601String()
            );
    }
}
