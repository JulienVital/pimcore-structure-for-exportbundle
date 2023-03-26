<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\Asset\Image;
use Pimcore\Model\DataObject\Data\ExternalImage;
use Pimcore\Model\DataObject\ObjectImage;
use Pimcore\Test\KernelTestCase;

class ExtractImageObjectTest extends KernelTestCase
{


    public function testExportClassExternalImage()
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

}