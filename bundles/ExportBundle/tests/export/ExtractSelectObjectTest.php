<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Test\KernelTestCase;
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

    public function testExportInputSelect()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");
        $selectObject->setInputSelect("custom select test");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputSelect" =>[
                        "name" => "InputSelect",
                        "type"=> "select",
                        "value"=> "custom select test"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportInputUser()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        //pimcore save the user id in this field
        $selectObject->setInputUser("36");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputUser" =>[
                        "name" => "InputUser",
                        "type"=> "user",
                        "value"=> "36"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );

    }

    public function testExportInputCountry()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputCountry("FR");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputCountry" =>[
                        "name" => "InputCountry",
                        "type"=> "country",
                        "value"=> "FR"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testExportInputLanguage()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputLanguage("fr_FR");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputLanguage" =>[
                        "name" => "InputLanguage",
                        "type"=> "language",
                        "value"=> "fr_FR"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );

    }

    public function testExportInputMultiSelect()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputMultiSelect(["multiselect 1","multiselect 2","multiselect 3"]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputMultiSelect" =>[
                        "name" => "InputMultiSelect",
                        "type"=> "multiselect",
                        "value"=> ["multiselect 1","multiselect 2","multiselect 3"]
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );

    }

    public function testExportInputMultiCountry()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputMultiCountry(["country 1","country 2","country 3"]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputMultiCountry" =>[
                        "name" => "InputMultiCountry",
                        "type"=> "countrymultiselect",
                        "value"=> ["country 1","country 2","country 3"]
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );

    }

    public function testExportInputMultiLanguage()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputMultiLanguage(["Lang 1","Lang 2","Lang 3"]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($selectObject);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputMultiLanguage" =>[
                        "name" => "InputMultiLanguage",
                        "type"=> "languagemultiselect",
                        "value"=> ["Lang 1","Lang 2","Lang 3"]
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );

    }
}
