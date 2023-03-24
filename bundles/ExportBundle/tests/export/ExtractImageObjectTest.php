<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
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
        $objectImage->setExternalImage(new ExternalImage("http://www.custom-url.com"));
        $extractObject = new ExportObject();

        $value = $extractObject->export($objectImage);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectImage",
            "key"=> "key fixture",
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
        $image->setFilename("myAsset.png");
        $image->setPath("/root/CustomPath/");
        $image->setData("data ...");    

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setSimpleImage( $image);
        $extractObject = new ExportObject();

        $value = $extractObject->export($objectImage);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectImage",
            "key"=> "key fixture",
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

        // $path = $asset->getLocalFile();

        $this->assertEquals($expect,json_encode($value) );
    }

    public function testAddImageInQueue(){
        
        $image = New Image();
        $image->setFilename("myAsset.png");
        $image->setPath("/root/CustomPath/");

        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setSimpleImage( $image);
        $extractObject = new ExportObject();

        $value = $extractObject->export($objectImage);
        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectImage",
            "key"=> "key fixture",
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

        // $path = $asset->getLocalFile();

        $this->assertEquals($expect,json_encode($value) );
    }
}