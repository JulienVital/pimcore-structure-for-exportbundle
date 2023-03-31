<?php
namespace Activepublishing\ExportBundle\Service\Export\Properties;

use Exception;
use Pimcore\Model\DataObject\Concrete;


class HotSpotImageAdapter {

    const TYPE = "hotspotimage";

    public function support( $fieldDefinition): bool
    {
        return $fieldDefinition->fieldtype === self::TYPE ;
    }

    public function getValue(Concrete $object, $fieldDefinition): array | Exception
    {
        if(!$this->support($fieldDefinition)) throw new Exception("not supported");

        return [
            "name" => $fieldDefinition->name,
            "type" => $fieldDefinition->fieldtype,
            "value" => $object->getValueForFieldName($fieldDefinition->name)->getImage()->getFullPath()
        ];
    }
}