<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Exception;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

class DefaultArrayStrategy implements FieldStrategyInterface
{

  const TYPE = [
    "languagemultiselect",
    "countrymultiselect",
    "multiselect",
    "table"
  ];

  public function support($fieldDefinitionType): bool
  {
    return in_array($fieldDefinitionType->fieldtype, self::TYPE);
  }

  public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): ?Property
  {
    if(count($value)===0){
        return null;
    }
    return new Property(
      $fieldDefinition->fieldtype,
      $fieldDefinition->name,
      $value
    );
  }
}
