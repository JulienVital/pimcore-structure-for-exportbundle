<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\Strategy\FieldCollectionStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultArrayStrategy;
use Activepublishing\ExportBundle\Service\Export\Strategy\DefaultStrategy;
use Activepublishing\ExportBundle\Service\Export\StrategyIterable;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Activepublishing\ExportBundle\Service\Serializer\JmsSerializer;
use Pimcore\Model\Asset;
use Pimcore\Model\Asset\Image;
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
        self::bootKernel();
        $container = static::getContainer();
        $someService = $container->get("Activepublishing\ExportBundle\Service\Export\StrategyIterable");
        $list = $someService->getStrategies();
        $extractObject = new ExploreObject($list, $exportQueue, new JmsSerializer());

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

    public function testExportLocalizedField()
    {
        self::bootKernel();
        $image1 = new Image();
        $image1->setFilename("myAsset1.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");
        $image2 = new Image();
        $image2->setFilename("myAsset2.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");
        $objectStructured = new ObjectStructured();
        $objectStructured->setKey("custom key structured Object")
            ->setPath("/root/customPath/")
            ->setInputLocalizedProperty("input ien", "en")
            ->setInputLocalizedProperty("input fr", "fr")
            ->setLocalizedImage($image1, "en")
            ->setLocalizedImage($image2, "fr")
            ->setExternalLocalizedProperty(new ExternalImage("https://picsum.photos/300/300"), "en")
            ->setExternalLocalizedProperty(new ExternalImage("https://picsum.photos/200/300"), "fr");

        $exportQueue = new ExportQueue();
        $container = static::getContainer();
        $someService = $container->get("Activepublishing\ExportBundle\Service\Export\StrategyIterable");
        $list = $someService->getStrategies();
        $extractObject = new ExploreObject($list, $exportQueue, new JmsSerializer());

        $value = $extractObject->export($objectStructured);
        $value = $extractObject->getJson();

        $expect = json_encode([[
            "className" => ObjectStructured::class,
            "key" => "custom key structured Object",
            "path" => "/root/customPath/",
            "properties" => [
                [
                    "name" => "localizedfields",
                    "type" => "localizedfields",
                    "value" => [
                        "en" => [
                            "ExternalLocalizedProperty" => [
                                "name" => "ExternalLocalizedProperty",
                                "type" => "externalImage",
                                "value" => [
                                    "https://picsum.photos/300/300"
                                ]
                            ],
                            "inputLocalizedProperty" => [
                                "name" => "inputLocalizedProperty",
                                "type" => "input",
                                "value" => [
                                    "input ien"
                                ]
                            ],
                            "localizedImage" => [
                                "name" => "localizedImage",
                                "type" => "image",
                                "value" => [
                                    "/root/CustomPath/myAsset1.png"
                                ]
                            ]
                        ],
                        "fr" => [
                            "ExternalLocalizedProperty" => [
                                "name" => "ExternalLocalizedProperty",
                                "type" => "externalImage",
                                "value" => [
                                    "https://picsum.photos/200/300"
                                ]
                            ],
                            "inputLocalizedProperty" => [
                                "name" => "inputLocalizedProperty",
                                "type" => "input",
                                "value" => [
                                    "input fr"
                                ]
                            ],
                            "localizedImage" => [
                                "name" => "localizedImage",
                                "type" => "image",
                                "value" => [
                                    "/root/CustomPath/myAsset2.png"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]]);

        // $tempObject = ObjectStructured::getById(2);
        $fields = $objectStructured->getClass()->getFieldDefinitions();
        $localizeField = $objectStructured->getLocalizedfields();
        // $items = $tempObject->getLocalizedfields()->getItems();
        // $internal = $tempObject->getLocalizedfields()->getInternalData();

        $fieldDef = $localizeField->getFieldDefinition("localizedImage");
        // new Pimcore\Model\DataObject\Localizedfield();
        $this->assertJsonStringEqualsJsonString($expect, $value);
    }

    public function testExportLocalizedFieldwithoutSymmetry    ()
    {
        self::bootKernel();
        $image1 = new Image();
        $image1->setFilename("myAsset1.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");
        $image2 = new Image();
        $image2->setFilename("myAsset2.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");
        $objectStructured = new ObjectStructured();
        $objectStructured->setKey("custom key structured Object")
            ->setPath("/root/customPath/")
            ->setLocalizedImage($image2, "fr")
            ->setExternalLocalizedProperty(new ExternalImage("https://picsum.photos/300/300"), "en");

        $exportQueue = new ExportQueue();
        $container = static::getContainer();
        $someService = $container->get("Activepublishing\ExportBundle\Service\Export\StrategyIterable");
        $list = $someService->getStrategies();
        $extractObject = new ExploreObject($list, $exportQueue, new JmsSerializer());

        $value = $extractObject->export($objectStructured);
        $value = $extractObject->getJson();

        $expect = json_encode([[
            "className" => ObjectStructured::class,
            "key" => "custom key structured Object",
            "path" => "/root/customPath/",
            "properties" => [
                [
                    "name" => "localizedfields",
                    "type" => "localizedfields",
                    "value" => [
                        "en" => [
                            "ExternalLocalizedProperty" => [
                                "name" => "ExternalLocalizedProperty",
                                "type" => "externalImage",
                                "value" => [
                                    "https://picsum.photos/300/300"
                                ]
                            ],
                        ],
                        "fr" => [
                            "localizedImage" => [
                                "name" => "localizedImage",
                                "type" => "image",
                                "value" => [
                                    "/root/CustomPath/myAsset2.png"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]]);

        $this->assertJsonStringEqualsJsonString($expect, $value);
    }
}
