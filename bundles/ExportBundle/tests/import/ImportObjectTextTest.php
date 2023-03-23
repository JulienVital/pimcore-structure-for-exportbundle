<?php

use Activepublishing\ExportBundle\Classes\ObjectDto;
use Activepublishing\ExportBundle\Service\Import\ConvertImport;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\ObjectText;
use Pimcore\Test\KernelTestCase;


class ImportObjectTextTest extends KernelTestCase
{

    public function testConvertJsonToObjectDto(){

        $objectDto = new ObjectDto();
        $objectDto->setClassName("Pimcore\Model\DataObject\ObjectText");
        $objectDto->setKey("KeyName example");

        $data = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            ]);
        $converter = new ConvertImport();
        $object = $converter->getDto($data, ObjectDto::class );
        $this->assertEquals($object, $objectDto);
    }

    public function testObjectDtoConvertToConcrete(){

        $objectDto = new ObjectDto();
        $objectDto->setClassName("Pimcore\Model\DataObject\ObjectText");
        $objectDto->setKey("KeyName example");
        $objectDto->setPath("/");

        $converter = new ConvertImport();
        $object = $converter->getObject($objectDto );
        $this->assertEquals($object::class,"Pimcore\Model\DataObject\ObjectText" );
        $this->assertEquals($object->getKey(),"KeyName example" );
    }
    public function testPropertiesConcreteObject(){

        $objectDto = new ObjectDto();
        $objectDto->setClassName("Pimcore\Model\DataObject\ObjectText");
        $objectDto->setKey("KeyName example");
        $objectDto->setPath("/");
        $objectDto->setProperties([
            "textarea" =>[
                "name" => "textarea",
                "type"=> "textarea",
                "value"=> "Textarea value \n example"
            ],
            "simpleInput" => [
                "name" => "simpleInput",
                "type"=> "input",
                "value"=> "fixture simple Input"
            ],
            "wysiwyg"  => [
                "name" => "wysiwyg",
                "type"=> "wysiwyg",
                "value"=> "<p>lk!</p>"
            ],
        ]);
        $converter = new ConvertImport();
        $object = $converter->getObject($objectDto );
        $this->assertEquals($object->getValueForFieldName("textarea"),"Textarea value \n example" );

    }
    public function testSaveConcrete(){
        $objectDto = new ObjectDto();
        $objectDto->setClassName("Pimcore\Model\DataObject\ObjectText");
        $objectDto->setKey("KeyName example");
        $objectDto->setPath("/");

        $converter = new ConvertImport();
        $object = $converter->getObject($objectDto );
        $object->save();
        $this->assertEquals($object, DataObject::getByPath("/KeyName example") );
        $object->delete();
    }
    
}