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
        $dequeueValue = $exportQueue->dequeue();
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
        $this->assertSame($dequeueValue, $concrete);
    }

    public function testExportManyToMany(){
        $concrete1 = new Concrete();
        $concrete1->setKey("concrete element Key1");
        $concrete1->setPath("/root/custom path/");

        $concrete2 = new Concrete();
        $concrete2->setKey("concrete element Key2");
        $concrete2->setPath("/root/custom path/");


        $objectRelation = new ObjectRelation();
        $objectRelation->setKey("KeyName example");
        $objectRelation->setPath("/relations/");
        $objectRelation->setFieldManyToMany([$concrete1, $concrete2]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectRelation);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectRelation",
            "key" => "KeyName example",
            "path" => "/relations/",
            "properties" => [
                "relation" => [
                    "fieldManyToMany" => [
                        "name" => "fieldManyToMany",
                        "type" => "manyToManyRelation",
                        "value" => [
                            "/root/custom path/concrete element Key1",
                            "/root/custom path/concrete element Key2"
                        ]
                    ]
                ]
            ]
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));

        $this->assertSame($exportQueue->getQueue(), [$concrete1, $concrete2]);

    }

    public function testExportManyToManyObject(){
        $concrete1 = new Concrete();
        $concrete1->setKey("concrete element Key1");
        $concrete1->setPath("/root/custom path/");

        $concrete2 = new Concrete();
        $concrete2->setKey("concrete element Key2");
        $concrete2->setPath("/root/custom path/");


        $objectRelation = new ObjectRelation();
        $objectRelation->setKey("KeyName example");
        $objectRelation->setPath("/relations/");
        $objectRelation->setFieldManyToManyObject([$concrete1, $concrete2]);

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectRelation);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectRelation",
            "key" => "KeyName example",
            "path" => "/relations/",
            "properties" => [
                "relation" => [
                    "fieldManyToManyObject" => [
                        "name" => "fieldManyToManyObject",
                        "type" => "manyToManyObjectRelation",
                        "value" => [
                            "/root/custom path/concrete element Key1",
                            "/root/custom path/concrete element Key2"
                        ]
                    ]
                ]
            ]
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));

        $this->assertSame($exportQueue->getQueue(), [$concrete1, $concrete2]);

    }
}