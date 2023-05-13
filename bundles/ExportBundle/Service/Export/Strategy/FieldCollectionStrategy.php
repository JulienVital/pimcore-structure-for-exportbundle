<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Model\DataObject\Data\BlockElement;
use Pimcore\Model\DataObject\Fieldcollection;
use Pimcore\Model\DataObject\Fieldcollection\Data\FieldCollectionOne;
use stdClass;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class FieldCollectionStrategy implements FieldStrategyInterface
{
    private $strategyList;

    public function __construct(
        #[TaggedIterator('field_strategy')] iterable $strategyList,
    ) {
        $this->strategyList = $strategyList;
    }
    const TYPE = ["fieldcollections"];

    public function support($fieldDefinitionType): bool
    {

        return in_array($fieldDefinitionType->fieldtype, self::TYPE);
    }

    public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): Property
    {
        // $items = $value->getItems()[0]->getDefinition();
        $extracted = $this->extractSubProperties($value, $queue);
        return new Property(
            $fieldDefinition->fieldtype,
            $fieldDefinition->name,
            $extracted

        );
    }

    public function extractSubProperties($value, $queue)
    {
        $result = [];
        $items = $value->getItems();

        foreach ($items as $item) {
            $def = $item->getDefinition()->getFieldDefinitions();
            $result[]=  $this->getProperties($item, $def, $queue);
        }
        return   $result;
    }

    public function getProperties($object, $fields, $queue): array
    {

        $properties = [];
        foreach ($fields as $fieldDefinition) {
            $getter = "get" . ucfirst($fieldDefinition->name);
            if (is_null($object->$getter())) {
                continue;
            }
            $property = $this->getProperty($fieldDefinition, $object, $queue);
            if ($property) {

                $properties[] = $property;
            }
        }

        return $properties;
    }
    /**
     * @param mixed $fieldDefinition
     * @param DataObject $object
     */
    private function getProperty($fieldDefinition, $object, $queue): ?Property
    {
        $getter = "get" . ucfirst($fieldDefinition->name);

        $value = $object->$getter();

        foreach ($this->strategyList as $strategy) {
            if ($strategy->support($fieldDefinition)) {
                return $strategy->extractPropertyAndAddRelationsToQueue($fieldDefinition, $value, $queue);
            }
        }
        return null;
    }
}
