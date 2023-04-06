<?php

use Activepublishing\ExportBundle\Service\Import\ImportTree;
use Pimcore\Test\KernelTestCase;

class importTreeTest extends KernelTestCase
{

    public function testInitImportTree(){
        $importTree = new ImportTree();
        // $importTree->process();
    }

}
