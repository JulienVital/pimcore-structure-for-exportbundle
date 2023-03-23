<?php

use Activepublishing\ExportBundle\Service\Export\ExtractObject;
use Pimcore\Model\DataObject\ObjectText;
use Pimcore\Test\KernelTestCase;

class ExtractTextObjectTest extends KernelTestCase
{

    public function testExportClassText(){
        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");
        $objectText->setSimpleInput("fixture simple Input");
        $objectText->setWysiwyg("<p>lk!</p>");
        $objectText->setTextarea("Textarea value \n example");

        $extractObject = new ExtractObject();

        $value = $extractObject->export($objectText);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            "properties"=>[
                "simple"=>[
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
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportClassTextOnlyOneField(){
        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");
        $objectText->setTextarea("Textarea value \n example");

        $extractObject = new ExtractObject();

        $value = $extractObject->export($objectText);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            "properties"=>[
                "simple"=>[                
                    "textarea" =>[
                    "name" => "textarea",
                    "type"=> "textarea",
                    "value"=> "Textarea value \n example"
                ]]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportClassTextWithoutProperties(){
        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");

        $extractObject = new ExtractObject();

        $value = $extractObject->export($objectText);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            "properties"=>[]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }
}