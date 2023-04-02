<?php

namespace Activepublishing\ExportBundle\Service\Export\Strategy;

use Activepublishing\ExportBundle\Classes\Property;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class ImageGalleryStrategy implements FieldStrategyInterface
{

  const TYPE = "imageGallery";

  public function support($fieldDefinitionType): bool
  {
    return $fieldDefinitionType->fieldtype === self::TYPE;
  }

  public function getPropertyValueAndAddRelationToQueue(Data $fieldDefinition, mixed $value, $queue): Property
  {
    $gallery = [];
    foreach ($value as $item) {
        $queue->enqueue($item->getImage());
        $gallery[] = $item->getImage()->getFullPath();
    }
    return   new Property(
            $fieldDefinition->fieldtype,
            $fieldDefinition->name,
            $gallery
    );
  }
}
