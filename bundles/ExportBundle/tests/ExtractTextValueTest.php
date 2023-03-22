<?php

use Activepublishing\ExportBundle\Service\Export\ExportText;
use PHPUnit\Framework\TestCase;
use Pimcore\Model\DataObject\ObjectText;

class ExtractTextValueTest extends TestCase
{
    private $exportText;

    public function __construct()
    {
        parent::__construct();
        $this->exportText = new ExportText();
    }

    public function testExtractId(){

        $valueTested = "Text area value";

        $objectText = new ObjectText();
        $objectText->setTextarea($valueTested);

        $this->assertEquals($valueTested, $this->exportText->getvalue($objectText, "Textarea"));
    }

}
