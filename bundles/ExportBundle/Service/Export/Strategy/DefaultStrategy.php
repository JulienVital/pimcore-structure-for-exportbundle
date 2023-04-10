<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Exception;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

class DefaultStrategy implements FieldStrategyInterface
{

  const TYPE = [
    "textarea",
    "input",
    "wysiwyg",
    "languagemultiselect",
    "countrymultiselect",
    "multiselect",
    "language",
    "country",
    "user",
    "select",
    "time",
    "booleanSelect",
    "booleanSelect"
  ];

  public function support($fieldDefinitionType): bool
  {
    return in_array($fieldDefinitionType->fieldtype, self::TYPE);
  }

  public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {

    return new Property(
      $fieldDefinition->fieldtype,
      $fieldDefinition->name,
      [$value]
    );
  }
}
