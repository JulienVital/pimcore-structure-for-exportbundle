<?php

use Activepublishing\ExportBundle\Service\Export\ExtractObject;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\ObjectText;
use Pimcore\Test\KernelTestCase;

class ExtractObjectTest extends KernelTestCase
{

    public function testExportClassIsJson(){
        $object = DataObject::getById(3);
        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");
        $objectText->setSimpleInput("fixture simple Input");
        $objectText->setWysiwyg("<p>lk!</p>");
        $objectText->setTextarea("Textarea value \n example");

        $extractObject = new ExtractObject();

        $value = $extractObject->export($objectText);

        $expect = [
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            "properties"=>[
                [
                    "name" => "textarea",
                    "type"=> "textarea",
                    "value"=> "Textarea value \n example"
                ],
                [
                    "name" => "simpleInput",
                    "type"=> "input",
                    "value"=> "fixture simple Input"
                ],
                [
                    "name" => "wysiwyg",
                    "type"=> "wysiwyg",
                    "value"=> "<p>lk!</p>"
                ],
            ]
        ];

        $this->assertEquals($expect,json_decode(json_encode($value)) );
    }

}