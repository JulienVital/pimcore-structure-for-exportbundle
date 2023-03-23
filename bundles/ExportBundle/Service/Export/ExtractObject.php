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
        foreach ($fields as $fieldName => $fieldDefinition) {

            if(!$value = $object->getValueForFieldName($fieldName)){
                continue;
            }
            switch ($fieldDefinition->fieldtype) {
                case "externalImage":
                    $properties[$fieldName]=  [
                        "name" =>$fieldName,
                        "type" =>$fieldDefinition->fieldtype,
                        "value"=>$value->getUrl()
                    ];                    
                    break;
                
                default:
                    $properties[$fieldName]=  [
                        "name" =>$fieldName,
                        "type" =>$fieldDefinition->fieldtype,
                        "value"=>$value
                    ];
                    break;
            }
        }

        return $properties;
    }
}