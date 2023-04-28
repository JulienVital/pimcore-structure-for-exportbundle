<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\Strategy\BlockStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DateStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultArrayStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultStrategy;
use Activepublishing\ExportBundle\Service\Export\StrategyIterable;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Activepublishing\ExportBundle\Service\Serializer\JmsSerializer;
use Pimcore\Model\DataObject\ObjectStructured;
use Pimcore\Test\KernelTestCase;

class ExtractStructuredTest extends KernelTestCase
{

    public function testExportTable()
    {
        $table =
            [
                [
                    "lorem",
                    "ipsum",
                    "dolor"
                ],
                [
                    "sit",
                    "amet",
                    "consectetur"
                ]
            ];
        $objectStructured = new ObjectStructured();
        $objectStructured->setKey("key structured Object")
            ->setPath("/root/customPath/")
            ->setTableProperty($table);
        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject([new DefaultArrayStrategy()], $exportQueue, new JmsSerializer());

        $value = $extractObject->export($objectStructured);
        $value = $extractObject->getJson();

        $expect = json_encode([[
            "className" => ObjectStructured::class,
            "key" => "key structured Object",
            "path" => "/root/customPath/",
            "properties" => [
                [
                    "name" => "TableProperty",
                    "type" => "table",
                    "value" => $table
                ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect, $value);
    }

    public function testTemp()
    {
        $table =
            [
                [
                    "lorem",
                    "ipsum",
                    "dolor"
                ],
                [
                    "sit",
                    "amet",
                    "consectetur"
                ]
            ];

        $objectStructured = ObjectStructured::getById(2);
        $exportQueue = new ExportQueue();
        $container = $this->getContainer();
        $someService = $container->get(StrategyIterable::class);
        $list = $someService->getStrategies();
        $extractObject = new ExploreObject([new DefaultStrategy(), new BlockStrategy($list)], $exportQueue, new JmsSerializer());

        $value = $extractObject->export($objectStructured);
        $value = $extractObject->getJson();

        $expect = json_encode([[
            "className" => ObjectStructured::class,
            "key" => "key structured Object",
            "path" => "/",
            "properties" => [
                [
                    "name" => "BlockProperty",
                    "type" => "block",
                    "value" => []
                ]
            ]
        ]]);
        $this->assertJsonStringEqualsJsonString($expect, $value);

    }
}
