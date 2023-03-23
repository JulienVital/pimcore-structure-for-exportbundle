<?php
namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\ObjectDto;
use Pimcore\Model\DataObject\Concrete;

Class ExtractObject{

    public function export(Concrete $object){

        $returnValue = new ObjectDto();
        $returnValue->setClassName($object::class);
        $returnValue->setKey($object->getKey());
        $properties = $this->getProperties($object);
        $returnValue->setProperties($properties );

        return $returnValue;
    }

    private function getProperties(Concrete $object){
        $fields = $object->getClass()->getFieldDefinitions();
        $properties = [];
        foreach ($fields as $fieldDefinition) {

            if(!$value = $object->getValueForFieldName($fieldDefinition->name)){
                continue;
            }
            $properties[$fieldDefinition->name]= $this->getProperty($fieldDefinition, $value);
        }

        return $properties;
    }

    private function getProperty($fieldDefinition, $value){
        switch ($fieldDefinition->fieldtype) {
            case "externalImage":
                return  [
                    "name" =>$fieldDefinition->name,
                    "type" =>$fieldDefinition->fieldtype,
                    "value"=>$value->getUrl()
                ];                    
            default:
                return  [
                    "name" =>$fieldDefinition->name,
                    "type" =>$fieldDefinition->fieldtype,
                    "value"=>$value
                ];
        }
    }
}