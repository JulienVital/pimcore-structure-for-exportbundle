<?php
namespace Activepublishing\ExportBundle\Service\Import;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ImportTree{

    public function process(){
        $json = file_get_contents(__DIR__."/temp.json");
        $decode = json_decode($json);
        $decode2 = json_decode($json,true);
        $encoder = [new JsonEncoder()];

        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
$normalizer = [new ArrayDenormalizer(), new ObjectNormalizer(null, null, null, $extractor)];
$serializer = new Serializer($normalizer, $encoder);
$persons = $serializer->deserialize($json, 'Activepublishing\ExportBundle\Classes\TransferObject[]', 'json');
        // $serializer = new Serializer(
        //     [new GetSetMethodNormalizer(), new ArrayDenormalizer()],
        //     [new JsonEncoder()]
        // );


    }
}