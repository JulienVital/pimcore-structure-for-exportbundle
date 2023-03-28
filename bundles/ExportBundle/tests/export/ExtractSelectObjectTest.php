<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject;
use Pimcore\Test\KernelTestCase;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\DataObject\ObjectSelect;

class ExtractSelectObjectTest extends KernelTestCase
{


    public function testExportBooleanSelectTrue()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");
        $selectObject->setInputBooleanSelect(true);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputBooleanSelect" =>[
                        "name" => "InputBooleanSelect",
                        "type"=> "booleanSelect",
                        "value"=> true
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportBooleanSelectFalse()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");
        $selectObject->setInputBooleanSelect(false);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputBooleanSelect" =>[
                        "name" => "InputBooleanSelect",
                        "type"=> "booleanSelect",
                        "value"=> false
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportBooleanSelectNull()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");
        $selectObject->setInputBooleanSelect(Null);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }
}
