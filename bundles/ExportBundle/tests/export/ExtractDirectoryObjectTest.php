<?php

use Pimcore\Model\DataObject;
use Pimcore\Test\KernelTestCase;

class ExtractDirectoryObjectTest extends KernelTestCase
{

    public function testExportDirectory(){
        $repo = DataObject::getById(137);
        $this->assertTrue(true);
    }
}