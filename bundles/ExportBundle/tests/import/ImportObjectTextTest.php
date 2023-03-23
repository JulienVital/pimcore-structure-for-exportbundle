<?php

use Activepublishing\ExportBundle\Classes\ObjectDto;
use Activepublishing\ExportBundle\Service\Export\ExtractObject;
use Pimcore\Model\DataObject\ObjectText;
use Pimcore\Test\KernelTestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ImportObjectTextTest extends KernelTestCase
{

    public function testConvertJsonToObjectDto(){
        $returnValue = new ObjectDto();
        $returnValue->setClassName("Pimcore\Model\DataObject\ObjectText");
        $returnValue->setKey("KeyName example");

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $data = json_encode([
            "className"=>"Pimcore\Model\DataObject\ObjectText",
            "key"=> "KeyName example",
            ]);
        $object = $serializer->deserialize($data, ObjectDto::class, 'json');
            $this->assertEquals($object, $returnValue);
    }

}