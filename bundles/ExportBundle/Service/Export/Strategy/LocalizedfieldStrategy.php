<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class LocalizedfieldStrategy implements FieldStrategyInterface
{

    const TYPE = "localizedfields";
    private $strategyList;

    public function __construct(
        #[TaggedIterator('field_strategy')] iterable $strategyList,
    ) {
        $this->strategyList = $strategyList;
    }
    public function support($fieldDefinitionType): bool
    {
        return $fieldDefinitionType->fieldtype === self::TYPE;
    }

    public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): ?Property
    {
        if(count($value->getItems())===0){
            return null;
        }
        $response = [];
        foreach ($value->getItems() as $lang => $langValue) {
            foreach ($langValue as $fieldName => $fieldValue) {
                # code...
                $fieldDef = $value->getFieldDefinition($fieldName);

                $response[$lang][$fieldName] = $this->getProperty($fieldDef, $fieldValue, $queue);
            }
        }
        return  new Property(
            $fieldDefinition->fieldtype,
            $fieldDefinition->name,
            $response
        );
    }

    /**
     * @param mixed $fieldDefinition
     * @param DataObject $object
     */
    private function getProperty($fieldDefinition, $value, $queue): ?Property
    {
        foreach ($this->strategyList as $strategy) {
            if ($strategy->support($fieldDefinition)) {
                return $strategy->extractPropertyAndAddRelationsToQueue($fieldDefinition, $value, $queue);
            }
        }
        return null;
    }
}
