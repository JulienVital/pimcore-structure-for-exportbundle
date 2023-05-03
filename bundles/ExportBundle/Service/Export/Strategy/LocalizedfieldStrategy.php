<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class LocalizedfieldStrategy implements FieldStrategyInterface
{

    const TYPE = "localizedfields";

    public function support($fieldDefinitionType): bool
    {
        return $fieldDefinitionType->fieldtype === self::TYPE;
    }

    public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): ?Property
    {
        if(count($value->getItems())===0){
            return null;
        }
        return  new Property(
            $fieldDefinition->fieldtype,
            $fieldDefinition->name,
            [
                "en"=>[]
            ]
        );
    }
}
