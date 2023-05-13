<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\Property;
use Activepublishing\ExportBundle\Service\Queue\ExportQueueInterface;
use Pimcore\Model\DataObject;

class PropertyExtractor
{
    private $queue;
    private $strategy;

    public function __construct(ExportQueueInterface  $queue, $fieldsStrategy = [])
    {
        $this->queue = $queue;
        $this->strategy = $fieldsStrategy;
    }

    /**
     * @param DataObject $object
     * @return array
     */
    public function getProperties(DataObject $object): array
    {

        $fields = $object->getClass()->getFieldDefinitions();
        $properties = [];
        foreach ($fields as $fieldDefinition) {
            $getter = "get". ucfirst($fieldDefinition->name);
            if (is_null($object->$getter())) {
                continue;
            }
            $property = $this->getProperty($fieldDefinition, $object);
            if($property){

                $properties[] =$property;
            }
        }

        return $properties;
    }

    /**
     * @param mixed $fieldDefinition
     * @param DataObject $object
     */
    private function getProperty($fieldDefinition, $object):?Property
    {
        $getter = "get". ucfirst($fieldDefinition->name);

        $value = $object->$getter();

        foreach ($this->strategy as $strategy) {
            if($strategy->support($fieldDefinition)){
                return $strategy->extractPropertyAndAddRelationsToQueue($fieldDefinition, $value, $this->queue);

            }
        }
        // throw new Exception($fieldDefinition->fieldtype ." have no strategy extract", 1);
        return null;
    }
}
