<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\Strategy\FieldCollectionStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultArrayStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultStrategy;
use Activepublishing\ExportBundle\Service\Export\StrategyIterable;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Activepublishing\ExportBundle\Service\Serializer\JmsSerializer;
use Pimcore\Model\DataObject\Data\ExternalImage;
use Pimcore\Model\DataObject\Fieldcollection;
use Pimcore\Model\DataObject\Fieldcollection\Data\FieldCollectionOne;
use Pimcore\Model\DataObject\Folder;
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

    public function testExportFieldCollection()
    {
        $fieldCollection = new Fieldcollection();
        $itemOne = new FieldCollectionOne();
        $itemOne->setText("textOne")
            ->setUrl(new ExternalImage("http://www.monImage.com"));

        $itemTwo = new FieldCollectionOne();
        $itemTwo->setText("textTwo")
            ->setUrl(new ExternalImage("http://www.monImage2.com"));

        $fieldCollection->add($itemOne);
        $fieldCollection->add($itemTwo);

        $objectStructured = new ObjectStructured();
        $objectStructured->setKey("custom key structured Object")
            ->setPath("/root/customPath/")
            ->setFieldCollectionProperty($fieldCollection);

        $exportQueue = new ExportQueue();
        $container = $this->getContainer();
        $someService = $container->get(StrategyIterable::class);
        $list = $someService->getStrategies();
        $extractObject = new ExploreObject([new DefaultStrategy(), new FieldCollectionStrategy($list)], $exportQueue, new JmsSerializer());

        $value = $extractObject->export($objectStructured);
        $value = $extractObject->getJson();

        $expect = json_encode([[
            "className" => ObjectStructured::class,
            "key" => "custom key structured Object",
            "path" => "/root/customPath/",
            "properties" => [
                [
                    "name" => "FieldCollectionProperty",
                    "type" => "fieldcollections",
                    "value" => [
                        [
                            [
                                "name" => "text",
                                "type" => "input",
                                "value" => ["textOne"]
                            ],
                            [
                                "name" => "url",
                                "type" => "externalImage",
                                "value" => ["http://www.monImage.com"]
                            ],
                        ],
                        [
                            [
                                "name" => "text",
                                "type" => "input",
                                "value" => ["textTwo"]
                            ],
                            [
                                "name" => "url",
                                "type" => "externalImage",
                                "value" => ["http://www.monImage2.com"]
                            ],
                        ]
                    ]
                ]
            ]
        ]]);
        $this->assertJsonStringEqualsJsonString($expect, $value);
    }
}
