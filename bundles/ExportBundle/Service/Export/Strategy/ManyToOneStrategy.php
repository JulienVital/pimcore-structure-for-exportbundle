<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class ManyToOneStrategy implements FieldStrategyInterface
{

  const TYPE = "manyToOneRelation";

  public function support($fieldDefinitionType): bool
  {
    return $fieldDefinitionType->fieldtype === self::TYPE;
  }

  public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {
    $queue->enqueue($value);
    return   new Property(
            $fieldDefinition->fieldtype,
            $fieldDefinition->name,
            [
              "type"=>$value::class,
              "path"=>$value->getFullPath()
            ]
        )
    ;
  }
}
