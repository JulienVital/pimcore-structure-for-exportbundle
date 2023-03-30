<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\ObjectRelation;
use Pimcore\Test\KernelTestCase;

class ExtractRelationObjectTest extends KernelTestCase
{


    public function testExportManyToOne(){
        $concrete = new Concrete();
        $concrete->setKey("concrete element Key");
        $concrete->setPath("/root/custom path/");
        $objectRelation = new ObjectRelation();
        $objectRelation->setKey("KeyName example");
        $objectRelation->setPath("/relations/");
        $objectRelation->setFieldManyToOne($concrete);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectRelation);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectRelation",
            "key" => "KeyName example",
            "path" => "/relations/",
            "properties" => [
                "relation" => [
                    "fieldManyToOne" => [
                        "name" => "fieldManyToOne",
                        "type" => "manyToOneRelation",
                        "value" => "/root/custom path/concrete element Key"
                    ]
                ]
            ]
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));
    }


}