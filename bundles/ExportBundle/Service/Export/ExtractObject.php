<?php
namespace Activepublishing\ExportBundle\Service\Export;

use Pimcore\Model\DataObject\Concrete;
use stdClass;

Class ExtractObject{

    public function export(Concrete $object){
        $returnValue = new stdClass();
        $returnValue->className = $object::class;
        $returnValue->key = $object->getKey();
        $returnValue->properties = $this->getProperties($object);

        return $returnValue;
    }

    private function getProperties(Concrete $object){
        $fields = $object->getClass()->getFieldDefinitions();
        $properties = [];
        foreach ($fields as $fieldName => $fieldDefinition) {
        $properties[]=  
            [
                "name" =>$fieldName,
                "type" =>$fieldDefinition->fieldtype,
                "value"=>$object->getValueForFieldName($fieldName)
            ];
        }
        return $properties;
    }
}