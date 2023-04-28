<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class BlockStrategy implements FieldStrategyInterface
{

  const TYPE = ["block"];

  public function support($fieldDefinitionType): bool
  {
    return in_array($fieldDefinitionType->fieldtype ,self::TYPE);
  }

  public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {
    return new Property(
      $fieldDefinition->fieldtype,
      $fieldDefinition->name,
      []
    );
  }
}
