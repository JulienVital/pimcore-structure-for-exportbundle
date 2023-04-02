<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\Properties;
use Activepublishing\ExportBundle\Classes\Property;
use Activepublishing\ExportBundle\Service\Queue\ExportQueueInterface;
use Exception;
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
     */
    private function getProperty($fieldDefinition, $object):Property
    {
        $value = $object->getValueForFieldName($fieldDefinition->name);

        foreach ($this->strategy as $strategy) {
            if($strategy->support($fieldDefinition)){
                return $strategy->extractPropertyAndAddRelationsToQueue($fieldDefinition, $value, $this->queue);

            }
        }
        throw new Exception($fieldDefinition->fieldtype, 1);

    }
}
