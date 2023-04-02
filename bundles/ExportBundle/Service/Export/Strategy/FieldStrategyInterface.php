<?php
namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Activepublishing\ExportBundle\Service\Queue\ExportQueueInterface;

Interface FieldStrategyInterface{

    public function support(Data $fieldDefinitionType): bool;

    public function getPropertyValueAndAddRelationToQueue(Data $fieldDefinition, mixed $value, ExportQueueInterface $queue): Property;

}