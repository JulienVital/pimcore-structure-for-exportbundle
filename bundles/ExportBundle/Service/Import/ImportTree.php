<?php
namespace Activepublishing\ExportBundle\Service\Import;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;


class ImportTree{

    public function process(){
        $json = file_get_contents(__DIR__."/temp.json");
        $decode = json_decode($json);
        $decode2 = json_decode($json,true);
        $serializer = new Serializer(
            [new GetSetMethodNormalizer(), new ArrayDenormalizer()],
            [new JsonEncoder()]
        );
        $persons = $serializer->deserialize($json, 'Activepublishing\ExportBundle\Classes\TransferObject[]', 'json');

    }
}