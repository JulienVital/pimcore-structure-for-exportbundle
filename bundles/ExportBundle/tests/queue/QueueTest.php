<?php

use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject;
use Pimcore\Test\KernelTestCase;

class QueueTest extends KernelTestCase
{

    public function testPushElement(){
        $exportQueue = new ExportQueue();
        $object = new DataObject();
        $exportQueue->enqueue($object);
        $this->assertSame($object, $exportQueue->dequeue());
    }

    public function testPushTwoElement(){
        $exportQueue = new ExportQueue();
        $object1 = new DataObject();
        $exportQueue->enqueue($object1);
        $object2 = new DataObject();
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
}
