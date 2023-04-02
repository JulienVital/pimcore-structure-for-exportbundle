<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject\ObjectText;
use Pimcore\Test\KernelTestCase;

class ExtractTextObjectTest extends KernelTestCase
{

    public function testExportClassText(){
        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");
        $objectText->setPath("/");
        $objectText->setSimpleInput("fixture simple Input");
        $objectText->setWysiwyg("<p>lk!</p>");
        $objectText->setTextarea("Textarea value \n example");

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([],$exportQueue);

        $value = $extractObject->export($objectText);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            "path"=> "/",
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
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportClassTextOnlyOneField(){
        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");
        $objectText->setTextarea("Textarea value \n example");
        $objectText->setPath("/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([],$exportQueue);

        $value = $extractObject->export($objectText);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            "path"=> "/",
            "properties"=>[
                    [
                    "name" => "textarea",
                    "type"=> "textarea",
                    "value"=> "Textarea value \n example"
                ]]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportClassTextWithoutProperties(){
        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");
        $objectText->setPath("/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([],$exportQueue);

        $value = $extractObject->export($objectText);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            "path"=> "/",
            "properties"=>[]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }
}