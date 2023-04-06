<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class ManyTomanyStrategy implements FieldStrategyInterface
{

  const TYPE = ["manyToManyObjectRelation", "manyToManyRelation"];

  public function support($fieldDefinitionType): bool
  {
    return in_array($fieldDefinitionType->fieldtype ,self::TYPE);
  }

  public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): ?Property
  {
    $array = [];
    if (count($value)==0){
      return null;
    }
    foreach ($value as $currentRelation) {
        $queue->enqueue($currentRelation);
        $array[] = ["type"=>$currentRelation::class, "path"=>$currentRelation->getFullPath()];
    }
    return  new Property(
            $fieldDefinition->fieldtype,
            $fieldDefinition->name,
            $array
    );
  }
}
