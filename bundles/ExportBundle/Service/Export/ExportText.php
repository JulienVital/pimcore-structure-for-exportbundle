<?php
namespace Activepublishing\ExportBundle\Service\Export;

use Pimcore\Model\DataObject\Concrete;

Class ExportText{

    public function getvalue(Concrete $object, string $propertyName){
        return $object->getValueForFieldName($propertyName);
    }
}