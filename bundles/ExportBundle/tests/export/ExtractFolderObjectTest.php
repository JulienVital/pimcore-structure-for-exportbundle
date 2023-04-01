<?php

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Test\KernelTestCase;

class ExtractFolderObjectTest extends KernelTestCase
{

    public function testExportDirectory()
    {
        $folder = new Folder();
        $folder->setKey('folder Key')
            ->setPath('/root/');
        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject($exportQueue);

        $value = $extractObject->export($folder);

        $expect = json_encode([
            "className" => "Pimcore\Model\DataObject\Folder",
            "key" => "folder Key",
            "path" => "/root/",
            "properties" => []
        ]);

        $this->assertEquals($expect, json_encode($value));
    }

    public function testExportTreeWithOneDirectory()
    {
        $folder = new Folder();
        $folder->setKey('folder Key')
            ->setPath('/');
        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject($exportQueue);

        $value = $extractObject->exportTree($folder);

        $expect = json_encode([
            "/folder Key" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "folder Key",
                "path" => "/",
                "properties" => []
            ]
        ]);

        $this->assertEquals($expect, json_encode($value));
    }

    public function testExportTreeWithSubDirectory()
    {
        $subSubFolder = new Folder();
        $subSubFolder->setKey('sub sub Folder')
            ->setPath('/root Folder/sub Folder/');
        $subSubFolder2 = new Folder();
        $subSubFolder2->setKey('sub sub Folder2')
            ->setPath('/root Folder/sub Folder/');

        $subFolder = new Folder();
        $subFolder->setKey('sub Folder')
            ->setPath('/root Folder/')
            ->setChildren([$subSubFolder, $subSubFolder2]);

        $rootFolder = new Folder();
        $rootFolder->setKey('root Folder')
            ->setPath('/');
        $rootFolder->setChildren([$subFolder]);
        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject($exportQueue);

        $value = $extractObject->exportTree($rootFolder);

        $expect = json_encode([
            "/root Folder" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "root Folder",
                "path" => "/",
                "properties" => []
            ],
            "/root Folder/sub Folder" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "sub Folder",
                "path" => "/root Folder/",
                "properties" => []
            ],
            "/root Folder/sub Folder/sub sub Folder" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "sub sub Folder",
                "path" => "/root Folder/sub Folder/",
                "properties" => []
            ],
            "/root Folder/sub Folder/sub sub Folder2" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "sub sub Folder2",
                "path" => "/root Folder/sub Folder/",
                "properties" => []
            ],
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));
    }

    public function testExportTreeWithSubDirectoryFromChild()
    {
        $subSubFolder = new Folder();
        $subSubFolder->setKey('sub sub Folder')
            ->setPath('/root Folder/sub Folder/');

        $subSubFolder2 = new Folder();
        $subSubFolder2->setKey('sub sub Folder2')
            ->setPath('/root Folder/sub Folder/');

        $subFolderignore = new Folder();
        $subFolderignore->setKey('sub Folder subFolderignore')
            ->setPath('/root Folder/');

        $rootFolder = new Folder();
        $rootFolder->setKey('root Folder')
            ->setPath('/')
            ->setChildren([$subFolderignore]);

        $subFolderStartExplore = new Folder();
        $subFolderStartExplore->setKey('sub Folder')
            ->setPath('/root Folder/')
            ->setChildren([$subSubFolder, $subSubFolder2])
            ->setParent($rootFolder);

        $exportQueue = new ExportQueue();
        $extractObject = new ExploreObject($exportQueue);
        $value = $extractObject->exportTree($subFolderStartExplore);

        $expect = json_encode([
            "/root Folder" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "root Folder",
                "path" => "/",
                "properties" => []
            ],
            "/root Folder/sub Folder" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "sub Folder",
                "path" => "/root Folder/",
                "properties" => []
            ],
            "/root Folder/sub Folder/sub sub Folder" =>  [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "sub sub Folder",
                "path" => "/root Folder/sub Folder/",
                "properties" => []
            ],
            "/root Folder/sub Folder/sub sub Folder2" => [
                "className" => "Pimcore\Model\DataObject\Folder",
                "key" => "sub sub Folder2",
                "path" => "/root Folder/sub Folder/",
                "properties" => []
            ],
        ]);

        $this->assertJsonStringEqualsJsonString($expect, json_encode($value));
    }
}
