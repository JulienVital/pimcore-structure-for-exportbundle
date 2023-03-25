<?php

use Activepublishing\ExportBundle\Service\Export\ExportObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Test\KernelTestCase;

class ExtractFolderObjectTest extends KernelTestCase
{

    public function testExportDirectory(){
        $folder = new Folder();
        $folder->setKey('folder Key')
            ->setPath('/root/');
        $exportQueue = new ExportQueue();
        $extractObject = new ExportObject($exportQueue);

        $value = $extractObject->export($folder);

        $expect = json_encode([
            "className"=>"Pimcore\Model\DataObject\Folder",
            "key"=> "folder Key",
            "path"=>"/root/",
            "properties"=>[]
        ]);

        $this->assertEquals($expect,json_encode($value) );
    }

}