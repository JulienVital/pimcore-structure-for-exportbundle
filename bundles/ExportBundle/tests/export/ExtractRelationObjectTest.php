<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\Strategy\ManyTomanyStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\ManyToOneStrategy;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\ObjectRelation;
use Pimcore\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class ExtractRelationObjectTest extends KernelTestCase
{

    public function testExportManyToOne()
    {
        $concrete = new Concrete();
        $concrete->setKey("concrete element Key");
        $concrete->setPath("/root/custom path/");
        $objectRelation = new ObjectRelation();
        $objectRelation->setKey("KeyName example");
        $objectRelation->setPath("/relations/");
        $objectRelation->setFieldManyToOne($concrete);

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new ManyToOneStrategy()],$exportQueue);

        $value = $extractObject->export($objectRelation);
        $dequeueValue = $exportQueue->dequeue();
        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectRelation",
            "key" => "KeyName example",
            "path" => "/relations/",
            "properties" => [
                [
                    "name" => "fieldManyToOne",
                    "type" => "manyToOneRelation",
                    "value" => "/root/custom path/concrete element Key"
                ]
            ]
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));
        $this->assertSame($dequeueValue, $concrete);
    }

    public function testExportManyToMany()
    {
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
        $extractObject = new ExploreObject([new ManyTomanyStrategy()],$exportQueue);

        $value = $extractObject->export($objectRelation);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectRelation",
            "key" => "KeyName example",
            "path" => "/relations/",
            "properties" => [
                [
                    "name" => "fieldManyToMany",
                    "type" => "manyToManyRelation",
                    "value" => [
                        "/root/custom path/concrete element Key1",
                        "/root/custom path/concrete element Key2"
                    ]
                ]
            ]
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));

        $this->assertSame($exportQueue->getQueue(), [$concrete1, $concrete2]);
    }

    public function testExportManyToManyObject()
    {
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
        $extractObject = new ExploreObject([new ManyTomanyStrategy()],$exportQueue);

        $value = $extractObject->export($objectRelation);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectRelation",
            "key" => "KeyName example",
            "path" => "/relations/",
            "properties" => [
                [
                    "name" => "fieldManyToManyObject",
                    "type" => "manyToManyObjectRelation",
                    "value" => [
                        "/root/custom path/concrete element Key1",
                        "/root/custom path/concrete element Key2"
                    ]
                ]
            ]
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));

        $this->assertSame($exportQueue->getQueue(), [$concrete1, $concrete2]);
    }

    public function testAdvancedRelation(){
        $concrete1 = new Concrete();
        $concrete1->setKey("concrete element Key1");
        $concrete1->setPath("/root/custom path/");


        $objectRelation = new ObjectRelation();
        $objectRelation->setKey("KeyName example");
        $objectRelation->setPath("/relations/");


        $finalExpect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectRelation",
            "key" => "KeyName example",
            "path" => "/relations/",
            "properties" => [
                [
                    "name" => "fieldAdvancedManyToMany",
                    "type" => "fieldAdvancedManyToMany",
                    "value" => [
                        [
                            "type"=>"object",
                            "column"=> ["key1","key2","key3","key4"],
                            "data"=>["data 1 string","47","1","1"],
                            "relationPath"=>"/custom Path/object 1"
                        ]
                        
                    ]
                ]
            ]
        ]);
    }
}
