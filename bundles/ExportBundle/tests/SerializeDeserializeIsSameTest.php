<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\Strategy\DateStrategy;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Activepublishing\ExportBundle\Service\Serializer\JmsSerializer;
use Carbon\Carbon;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\DataObject\ObjectDate;
use Pimcore\Test\KernelTestCase;


class SerializeDeserializeIsSameTest extends KernelTestCase
{

    public function testDeserializeSerialize()
    {
        $serializer = new JmsSerializer();

        $data = $this->createFixtureJson();
        $deserialized = $serializer->deSerialize($data);
        $serialized = $serializer->serialize($deserialized);

        $this->assertJsonStringEqualsJsonString($data, $serialized);
    }

    public function testSerializeDeserialize()
    {
        $objectDate = $this->createfixtureDate();


        $serializer = new JmsSerializer();
        $serializedData = $serializer->serialize($objectDate);
        $deserialized = $serializer->deSerialize($serializedData);
        $this->assertEquals($objectDate, $deserialized);
        
    }

    private function createfixtureDate()
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
        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DateStrategy()], $exportQueue,new JmsSerializer());

        $data = $extractObject->exportTree($objectDate);

        return $data;

    }

    private function createFixtureJson(){
        $data = file_get_contents(__DIR__ ."/fixture.json");
        return $data;
    }
}


