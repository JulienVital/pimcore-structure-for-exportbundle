<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class ExternalImageStrategy implements FieldStrategyInterface
{

  const TYPE = "externalImage";

  public function support($fieldDefinitionType): bool
  {
    return $fieldDefinitionType->fieldtype === self::TYPE;
  }

  public function getPropertyValueAndAddRelationToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {
    return  new Property(
      $fieldDefinition->fieldtype,
      $fieldDefinition->name,
      $value->getUrl()
    );
  }
}
