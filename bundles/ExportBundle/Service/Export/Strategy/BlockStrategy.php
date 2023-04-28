<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Model\DataObject\Data\BlockElement;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class BlockStrategy implements FieldStrategyInterface
{
  private $strategyList;

  public function __construct(
    #[TaggedIterator('field_strategy')] iterable $strategyList,
  ) {
    $this->strategyList = $strategyList;
  }
  const TYPE = ["block"];

  public function support($fieldDefinitionType): bool
  {
    return in_array($fieldDefinitionType->fieldtype, self::TYPE);
  }

  public function extractPropertyAndAddRelationsToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {
    $extracted = $this->extractSubProperties($value, $queue);
    return new Property(
      $fieldDefinition->fieldtype,
      $fieldDefinition->name,
      []
    );
  }

  public function extractSubProperties($value, $queue)
  {
    $temp = $value[0]['text'];
    foreach ($this->strategyList as $strategy) {
      if ($strategy->support($temp)) {
        return $strategy->extractPropertyAndAddRelationsToQueue($fieldDefinition, $value, $this->queue);
      }
    }
    // throw new Exception($fieldDefinition->fieldtype ." have no strategy extract", 1);
    return null;
  }
}
