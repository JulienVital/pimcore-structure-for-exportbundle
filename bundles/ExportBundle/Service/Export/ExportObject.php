<?php
namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\ObjectDto;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Concrete;

Class ExportObject{

    private $queue;

    public function __construct(ExportQueue $queue){
        $this->queue = $queue;
    }

    public function export(DataObject $object){

        $objectDto = new ObjectDto();
        $objectDto->setClassName($object::class)
            ->setKey($object->getKey())
            ->setPath($object->getPath());
        if($object::class !== "Pimcore\Model\DataObject\Folder"){
            $objectDto->setProperties($this->getProperties($object) );
        }   

        return $objectDto;
    }

    private function getProperties(DataObject $object){

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

    public function exportTree(DataObject $object, $arrayOfNodes = []){

        $arrayOfNodes  =  $this->exploreParent($object, $arrayOfNodes);
        $arrayOfNodes  =  $this->exploreChildren($object, $arrayOfNodes);


        return $arrayOfNodes;
    }

    private function exploreChildren(DataObject $object, $arrayOfNodes){
        $arrayOfNodes[] = $this->export($object);
        if ($children = $object->getChildren()){
            foreach ($children as $acutalChildren) {
                # code...
                $arrayOfNodes  =  $this->exploreChildren($acutalChildren, $arrayOfNodes);
            }
        }
        return $arrayOfNodes;

    }

    private function exploreParent(DataObject $object, $arrayOfNodes){
        $parent = $object->getParent();
        if ($parent){
            $arrayOfNodes[] = $this->export($parent);
            $arrayOfNodes  =  $this->exploreParent($parent, $arrayOfNodes);
        }
        return $arrayOfNodes;

    }
}

