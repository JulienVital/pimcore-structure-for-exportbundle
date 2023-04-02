<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class HotSpotImageStrategy implements FieldStrategyInterface
{

  const TYPE = "hotspotimage";

  public function support($fieldDefinitionType): bool
  {
    return $fieldDefinitionType->fieldtype === self::TYPE;
  }

  public function getPropertyValueAndAddRelationToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {
    $queue->enqueue($value->getImage());
    return   new Property(
      $fieldDefinition->fieldtype,
      $fieldDefinition->name,
      $value->getImage()->getFullPath()
    );
  }
}
