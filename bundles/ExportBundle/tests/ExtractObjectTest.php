<?php

use Activepublishing\ExportBundle\Service\Export\ExtractObject;
use PHPUnit\Framework\TestCase;
use Pimcore\Model\DataObject\ObjectText;

class ExtractObjectTest extends TestCase
{
    
    public function testExportClassIsJson(){

        $objectText = new ObjectText();
        $extractObject = new ExtractObject();

        $value = $extractObject->export($objectText);

        $expect = json_encode([
            "type"=>"Pimcore\Model\DataObject\ObjectText"
        ]);

        $this->assertEquals($expect,$value );
    }

}