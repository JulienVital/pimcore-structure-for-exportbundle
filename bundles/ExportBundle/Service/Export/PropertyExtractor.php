<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\Properties;
use Activepublishing\ExportBundle\Classes\Property;
use Activepublishing\ExportBundle\Service\Export\Strategy\DateStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\ExternalImageStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\HotSpotImageStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\ImageGalleryStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\ImageStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\ManyTomanyStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\ManyToOneStrategy;
use Activepublishing\ExportBundle\Service\Queue\ExportQueueInterface;
use Pimcore\Model\DataObject;

class PropertyExtractor
{
    private $queue;

    public function __construct(ExportQueueInterface  $queue, $fieldsStrategy = [])
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
     */
    private function getProperty($fieldDefinition, $object):Property
    {
        $value = $object->getValueForFieldName($fieldDefinition->name);

        switch ($fieldDefinition->fieldtype) {
            case "manyToManyObjectRelation":
            case "manyToManyRelation":
                $strategy = new ManyTomanyStrategy();
                break;
            case "manyToOneRelation":
                $strategy = new ManyToOneStrategy();
                break;
            case "datetime":
            case "date":
                $strategy = new DateStrategy();
                break;
            case "imageGallery":
                $strategy = new ImageGalleryStrategy();
                break;
            case "externalImage":
                $strategy = new ExternalImageStrategy();
                break;
            case "image":
                $strategy = new ImageStrategy();
                break;
            case "hotspotimage":
                $strategy = new HotSpotImageStrategy();
                break;
            default:
                $strategy = new DefaultStrategy();
                break;
        }
        return $strategy->extractPropertyAndAddRelationsToQueue($fieldDefinition, $value, $this->queue);
    }
}
