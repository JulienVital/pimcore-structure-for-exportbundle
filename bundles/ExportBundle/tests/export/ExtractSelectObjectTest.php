<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultArrayStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultStrategy;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Activepublishing\ExportBundle\Service\Serializer\JmsSerializer;
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
        $extractObject = new ExploreObject([new DefaultStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputBooleanSelect",
                        "type"=> "booleanSelect",
                        "value"=> [true]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );
    }

    public function testExportBooleanSelectFalse()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");
        $selectObject->setInputBooleanSelect(false);

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputBooleanSelect",
                        "type"=> "booleanSelect",
                        "value"=> [false]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );
    }

    public function testExportBooleanSelectNull()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");
        $selectObject->setInputBooleanSelect(Null);

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );
    }

    public function testExportInputSelect()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");
        $selectObject->setInputSelect("custom select test");

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputSelect",
                        "type"=> "select",
                        "value"=> ["custom select test"]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );
    }

    public function testExportInputUser()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        //pimcore save the user id in this field
        $selectObject->setInputUser("36");

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputUser",
                        "type"=> "user",
                        "value"=> ["36"]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );

    }

    public function testExportInputCountry()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputCountry("FR");

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputCountry",
                        "type"=> "country",
                        "value"=> ["FR"]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );
    }

    public function testExportInputLanguage()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputLanguage("fr_FR");

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputLanguage",
                        "type"=> "language",
                        "value"=> ["fr_FR"]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );

    }

    public function testExportInputMultiSelect()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputMultiSelect(["multiselect 1","multiselect 2","multiselect 3"]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy(), new DefaultArrayStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputMultiSelect",
                        "type"=> "multiselect",
                        "value"=> ["multiselect 1","multiselect 2","multiselect 3"]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );

    }

    public function testExportInputMultiCountry()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputMultiCountry(["country 1","country 2","country 3"]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy(), new DefaultArrayStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputMultiCountry",
                        "type"=> "countrymultiselect",
                        "value"=> ["country 1","country 2","country 3"]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );

    }

    public function testExportInputMultiLanguage()
    {
        $selectObject = new ObjectSelect();
        $selectObject->setKey("key select Object");
        $selectObject->setPath("/root/customPath/");

        $selectObject->setInputMultiLanguage(["Lang 1","Lang 2","Lang 3"]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultStrategy(), new DefaultArrayStrategy()],$exportQueue, new JmsSerializer());

        $value = $extractObject->export($selectObject);
        $value = $extractObject->getJson(); 

        $expect = json_encode([[
            "className"=>"Pimcore\Model\DataObject\ObjectSelect",
            "key"=> "key select Object",
            "path"=> "/root/customPath/",
            "properties"=>[
                    [
                        "name" => "InputMultiLanguage",
                        "type"=> "languagemultiselect",
                        "value"=> ["Lang 1","Lang 2","Lang 3"]
                    ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect,$value );

    }
}
