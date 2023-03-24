<?php

use Activepublishing\ExportBundle\Service\Export\ExportText;
use Pimcore\Model\DataObject\ObjectText;
use Pimcore\Test\KernelTestCase;

class ExtractTextValueTest extends KernelTestCase
{
    private $exportText;

    public function __construct()
    {
        parent::__construct();
        $this->exportText = new ExportText();
    }

    public function testExtractTextArea(){

        $valueTested = "Text area value\n test";

        $objectText = new ObjectText();
        $objectText->setTextarea($valueTested);

        $this->assertEquals($valueTested, $this->exportText->getvalue($objectText, "textarea"));
    }

    public function testExtractInput(){

        $valueTested = "input area value";

        $objectText = new ObjectText();
        $objectText->setSimpleInput($valueTested);

        $this->assertEquals($valueTested, $this->exportText->getvalue($objectText, "simpleInput"));
    }

    public function testExtractWysiwyg(){

        $valueTested = "<p>Wysiwyg  value<p>";

        $objectText = new ObjectText();
        $objectText->setWysiwyg($valueTested);

        $this->assertEquals($valueTested, $this->exportText->getvalue($objectText, "wysiwyg"));
    }
}
