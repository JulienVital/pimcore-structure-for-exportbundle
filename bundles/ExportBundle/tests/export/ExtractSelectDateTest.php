<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Carbon\Carbon;
use Pimcore\Test\KernelTestCase;
use Pimcore\Model\DataObject\ObjectDate;

class ExtractSelectDateTest extends KernelTestCase
{


    public function testExportInputDateTime()
    {
        $objectDate = new ObjectDate();
        $objectDate->setKey("key Date Object");
        $objectDate->setPath("/dateObject/customPath/");
        $objectDate->setInputDateTime(Carbon::parse('2023-03-28 12:34:56'));

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectDate);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectDate",
            "key"=> "key Date Object",
            "path"=> "/dateObject/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputDateTime" =>[
                        "name" => "InputDateTime",
                        "type"=> "datetime",
                        "value"=> "2023-03-28T12:34:56+00:00"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    
    }
    public function testExportInputDate()
    {
        $objectDate = new ObjectDate();
        $objectDate->setKey("key Date Object");
        $objectDate->setPath("/dateObject/customPath/");
        $objectDate->setInputDate(Carbon::parse('2023-03-28 12:34:56'));

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectDate);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectDate",
            "key"=> "key Date Object",
            "path"=> "/dateObject/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputDate" =>[
                        "name" => "InputDate",
                        "type"=> "date",
                        "value"=> "2023-03-28T12:34:56+00:00"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    
    }

    public function testExportInputTime()
    {

        $objectDate = new ObjectDate();
        $objectDate->setKey("key Date Object");
        $objectDate->setPath("/dateObject/customPath/");
        $objectDate->setInputTime("10:17");
        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectDate);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectDate",
            "key"=> "key Date Object",
            "path"=> "/dateObject/customPath/",
            "properties"=>[
                "simple"=>[
                    "InputTime" =>[
                        "name" => "InputTime",
                        "type"=> "time",
                        "value"=> "10:17"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    
    }
}
