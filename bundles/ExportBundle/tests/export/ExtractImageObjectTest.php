<?php

use Activepublishing\ExportBundle\Service\Export\ExtractObject;
use Pimcore\Model\DataObject\Data\ExternalImage;
use Pimcore\Model\DataObject\ObjectImage;
use Pimcore\Test\KernelTestCase;

class ExtractImageObjectTest extends KernelTestCase
{

    public function testExportClassImage(){
        $objectImage = new ObjectImage();
        $objectImage->setKey("key fixture");
        $objectImage->setExternalImage(new ExternalImage("http://www.custom-url.com"));
        $extractObject = new ExtractObject();

        $value = $extractObject->export($objectImage);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectImage",
            "key"=> "key fixture",
            "properties"=>[
                "externalImage" =>[
                    "name" => "externalImage",
                    "type"=> "externalImage",
                    "value"=> "http://www.custom-url.com"
                ]
            ]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

}