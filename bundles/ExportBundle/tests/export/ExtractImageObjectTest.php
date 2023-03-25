<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\Asset;
use Pimcore\Model\Asset\Image;
use Pimcore\Model\DataObject\Data\ExternalImage;
use Pimcore\Model\DataObject\ObjectImage;
use Pimcore\Test\KernelTestCase;

class ExtractImageObjectTest extends KernelTestCase
{


    public function testExportClassExternalImage(){
        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setExternalImage(new ExternalImage("http://www.custom-url.com"))
        ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectImage);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectImage",
            "key"=> "key fixture",
            "path"=>"/root/",
            "properties"=>[
                "simple"=>[
                    "externalImage" =>[
                        "name" => "externalImage",
                        "type"=> "externalImage",
                        "value"=> "http://www.custom-url.com"
                        ]
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

    
    public function testExportSimpleImage(){
        
        $image = New Image();
        $image->setFilename("myAsset.png")
            ->setPath("/root/CustomPath/")
            ->setData("data ...");    

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setSimpleImage( $image)
        ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($objectImage);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectImage",
            "key"=> "key fixture",
            "path"=>"/root/",
            "properties"=>[
                "relation"=>[
                    "simpleImage" =>[
                        "name" => "simpleImage",
                        "type"=> "image",
                        "value"=> "/root/CustomPath/myAsset.png"
                        ]
                ]
            ]
        ]);


        $this->assertEquals($expect,json_encode($value) );
    }

    public function testAddImageInQueue(){
        
        $image = New Image();
        $image->setFilename("myAsset.png");
        $image->setPath("/myAsset.png");

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setSimpleImage( $image)
        ->setPath("/root/");

        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $extractObject->export($objectImage);
        $value = $exportQueue->dequeue();

        // $path = $asset->getLocalFile();

        $this->assertSame($image,$value);
    }
}