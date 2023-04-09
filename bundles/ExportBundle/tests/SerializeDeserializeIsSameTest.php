<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\Strategy\DateStrategy;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Carbon\Carbon;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\DataObject\ObjectDate;
use Pimcore\Test\KernelTestCase;


class SerializeDeserializeIsSameTest extends KernelTestCase
{

    public function createfixture()
    {
        $parentFolder = new Folder();
        $parentFolder->setKey("Folder root")
            ->setPath("/");
        $objectDate = new ObjectDate();
        $objectDate->setKey("key date")
            ->setPath("/Folder root/")
            ->setParent($parentFolder)
            ->setInputDate(Carbon::parse("2023-03-08T23:00:00+00:00"))
            ->setInputDateTime(Carbon::parse("2023-03-09T16:30:00+00:00"))
            ->setInputTime("17:00");

            return $objectDate;

    }
    // public function testInitImportTree()
    // {
    //     $objectDate = $this->createfixture();

    //     $exportQueue = new ExportQueue();
    //     $extractObject = new ExploreObject([new DateStrategy()], $exportQueue);

    //     $valueExtract = $extractObject->exportTree($objectDate);

 


    //     // $this->assertEquals($deserialize , $valueExtract);
    // }

}


