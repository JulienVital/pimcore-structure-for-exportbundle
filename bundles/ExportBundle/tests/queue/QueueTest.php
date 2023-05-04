<?php

use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject;
use Pimcore\Test\KernelTestCase;

class QueueTest extends KernelTestCase
{

    public function testPushElement(){
        $exportQueue = new ExportQueue();
        $object = new DataObject();
        $object->setPath("/root");
        $object->setKey("cutom key");
        $exportQueue->enqueue($object);
        $this->assertSame($object, $exportQueue->dequeue());
    }

    public function testPushTwoElement(){
        $exportQueue = new ExportQueue();
        $object1 = new DataObject();
        $object1->setPath("/root");
        $object1->setKey("cutom key");
        $exportQueue->enqueue($object1);
        $object2 = new DataObject();
        $object2->setPath("/root");
        $object2->setKey("cutom key2");
        $exportQueue->enqueue($object2);
        $this->assertSame($object1, $exportQueue->dequeue());
        $this->assertSame($object2, $exportQueue->dequeue());
    }

    public function testDequeueMoreElement(){
        $exportQueue = new ExportQueue();
        $object = new DataObject();
        $exportQueue->enqueue($object);
        $this->assertSame($object, $exportQueue->dequeue());
        $this->assertSame(null, $exportQueue->dequeue());
    }

    public function testPushSameElement(){
        $exportQueue = new ExportQueue();
        $object = new DataObject();
        $object->setPath("/root");
        $object->setKey("cutom key");
        $exportQueue->enqueue($object);
        $exportQueue->enqueue($object);
        $this->assertSame( $exportQueue->getQueue() , [$object]);
    }

    public function testPushSameElementAfterDequeue(){
        $exportQueue = new ExportQueue();
        $object = new DataObject();
        $object->setPath("/root");
        $object->setKey("cutom key");
        $exportQueue->enqueue($object);
        $exportQueue->dequeue();
        $exportQueue->enqueue($object);
        $this->assertSame( $exportQueue->getQueue() , []);
    }
}
