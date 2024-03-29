<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class DateStrategy implements FieldStrategyInterface
{

  const TYPE = ["datetime", "date"];

  public function support($fieldDefinitionType): bool
  {
    return in_array($fieldDefinitionType->fieldtype ,self::TYPE);
  }

  public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {
    return new Property(
      $fieldDefinition->fieldtype,
      $fieldDefinition->name,
      [$value->toIso8601String()]
    );
  }
}
