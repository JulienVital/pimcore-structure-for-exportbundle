<?php
namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\ObjectDto;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject\Concrete;

Class ExportObject{

    private $queue;

    public function __construct(ExportQueue $queue){
        $this->queue = $queue;
    }

    public function export(Concrete $object){

        $objectDto = new ObjectDto();
        $objectDto->setClassName($object::class)
            ->setKey($object->getKey())
            ->setPath($object->getPath())
            ->setProperties($this->getProperties($object) );

        return $objectDto;
    }

    private function getProperties(Concrete $object){
        $fields = $object->getClass()->getFieldDefinitions();
        $properties = [];
        foreach ($fields as $fieldDefinition) {

            if(!$value = $object->getValueForFieldName($fieldDefinition->name)){
                continue;
            }
            $property = $this->getProperty($fieldDefinition, $value);
            $properties[$property["type"]][$fieldDefinition->name]= $property["value"];
        }

        return $properties;
    }

    private function getProperty($fieldDefinition, $value){
        switch ($fieldDefinition->fieldtype) {
            case "externalImage":
                return  [
                    "type"=>"simple",
                    "value"=>[
                        "name" =>$fieldDefinition->name,
                        "type" =>$fieldDefinition->fieldtype,
                        "value"=>$value->getUrl()
                    ]                    
                    ];
            case "image":
                $this->queue->enqueue($value);
                return  [
                    "type"=>"relation",
                    "value"=>[
                        "name" =>$fieldDefinition->name,
                        "type" =>$fieldDefinition->fieldtype,
                        "value"=>$value->getFullPath()
                    ]                    
                    ];
            default:
                return  [
                    "type"=>"simple",
                    "value"=>[
                    "name" =>$fieldDefinition->name,
                    "type" =>$fieldDefinition->fieldtype,
                    "value"=>$value
                ]];
        }
    }
}