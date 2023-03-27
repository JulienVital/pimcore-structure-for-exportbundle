<?php

use Pimcore\Model\Asset\Image;
use Pimcore\Test\KernelTestCase;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\DataObject\ObjectImage;
use Pimcore\Model\DataObject\Data\Hotspotimage;
use Pimcore\Model\DataObject\Data\ImageGallery;
use Pimcore\Model\DataObject\Data\ExternalImage;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Activepublishing\ExportBundle\Service\Export\ExportObject;

class ExtractImageObjectTest extends KernelTestCase
{


    public function testExportExternalImage()
    {
        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setExternalImage(new ExternalImage("http://www.custom-url.com"))
            ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectImage);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectImage",
            "key" => "key fixture",
            "path" => "/root/",
            "properties" => [
                "simple" => [
                    "externalImage" => [
                        "name" => "externalImage",
                        "type" => "externalImage",
                        "value" => "http://www.custom-url.com"
                    ]
                ]
            ]
        ]);

        $this->assertEquals($expect, json_encode($value));
    }


    public function testExportSimpleImage()
    {

        $image = new Image();
        $image->setFilename("myAsset.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setSimpleImage($image)
            ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectImage);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\ObjectImage",
            "key" => "key fixture",
            "path" => "/root/",
            "properties" => [
                "asset" => [
                    "simpleImage" => [
                        "name" => "simpleImage",
                        "type" => "image",
                        "value" => "/root/CustomPath/myAsset.png"
                    ]
                ]
            ]
        ]);


        $this->assertEquals($expect, json_encode($value));
    }

    public function testAddImageInQueue()
    {

        $image = new Image();
        $image->setFilename("myAsset.png");
        $image->setPath("/myAsset.png");

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setSimpleImage($image)
            ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $extractObject->export($objectImage);
        $value = $exportQueue->dequeue();

        // $path = $asset->getLocalFile();

        $this->assertSame($image, $value);
    }

    public function testExportTreeWithSubDirectoryWithImage()
    {
        $image = new Image();
        $image->setFilename("myAsset.png");
        $image->setPath("/customAsset/");

        $objectImage = new ObjectImage();
        $objectImage->setKey("key object Image");
        $objectImage->setSimpleImage($image)
            ->setPath("/root Folder/sub Folder/");

        $rootFolder = new Folder();
        $rootFolder->setKey('root Folder')
            ->setPath('/');

        $subFolder = new Folder();
        $subFolder->setKey('sub Folder')
            ->setPath('/root Folder/')
            ->setChildren([$objectImage])
            ->setParent($rootFolder);


        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->exportTree($subFolder);

        $expect = json_encode([
            [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "root Folder",
                "path" => "/",
                "properties" => []
            ],
            [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "sub Folder",
                "path" => "/root Folder/",
                "properties" => []
            ],
            [

                "className" => "Pimcore\Model\DataObject\ObjectImage",
                "key" => "key object Image",
                "path" => "/root Folder/sub Folder/",
                "properties" => [
                    "asset" => [
                        "simpleImage" => [
                            "name" => "simpleImage",
                            "type" => "image",
                            "value" => "/customAsset/myAsset.png"
                        ]
                    ]
                ]
            ],

        ]);

        $this->assertEquals($expect, json_encode($value));
    }

    public function testExportSimpleImageAddInAssetQueue()
    {

        $image = new Image();
        $image->setFilename("myAsset.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setSimpleImage($image)
            ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $extractObject->exportTree($objectImage);
        $value = $extractObject->getAssetsList();
        $expect = [
            "/root/CustomPath/myAsset.png"
        ];


        $this->assertEquals($expect, $value);
    }

    public function testExportAdvancedImageAddInAssetQueue()
    {

        $image = new Image();
        $image->setFilename("AssetHostpot.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");


        $hotSpot = new Hotspotimage($image);

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setAdvancedImage($hotSpot)
            ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->exportTree($objectImage);
        $assetList = $extractObject->getAssetsList();
        $expectAssetList = [
            "/root/CustomPath/AssetHostpot.png"
        ];

        $expect = json_encode([[
            "className" => "Pimcore\Model\DataObject\ObjectImage",
            "key" => "key fixture",
            "path" => "/root/",
            "properties" => [
                "asset" => [
                    "advancedImage" => [
                        "name" => "advancedImage",
                        "type" => "hotspotimage",
                        "value" => "/root/CustomPath/AssetHostpot.png"
                    ]
                ]
            ]
        ]]);
        $this->assertEquals($expectAssetList, $assetList);
        $this->assertEquals(json_encode($value), $expect);
    }

    public function testExportImageGallery()
    {
        $image = new Image();
        $image->setFilename("AssetHostpot.png")
            ->setPath("/root/gallery/")
            ->setData("data ...");
        $hotSpot = new Hotspotimage($image);

        $image2 = new Image();
        $image2->setFilename("AssetHostpot2.png")
            ->setPath("/root/gallery/")
            ->setData("data ...");
        $hotSpot2 = new Hotspotimage($image2);

        $imageGallery = new ImageGallery([$hotSpot, $hotSpot2]);
        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setGalleryImage($imageGallery)
            ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->exportTree($objectImage);
        $assetList = $extractObject->getAssetsList();
        $expectAssetList = [
            "/root/gallery/AssetHostpot.png",
            "/root/gallery/AssetHostpot2.png"
        ];

        $expect = json_encode([[
            "className" => "Pimcore\Model\DataObject\ObjectImage",
            "key" => "key fixture",
            "path" => "/root/",
            "properties" => [
                "asset" => [
                    "galleryImage" => [
                        "name" => "galleryImage",
                        "type" => "imageGallery",
                        "value" => [
                            "/root/gallery/AssetHostpot.png",
                            "/root/gallery/AssetHostpot2.png"
                        ]
                    ]
                ]
            ]
        ]]);

        $this->assertEquals($expectAssetList, $assetList);
        $this->assertEquals(json_encode($value), $expect);
    }
}
