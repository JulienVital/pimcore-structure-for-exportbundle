<?php
namespace Activepublishing\ExportBundle\Service\Import;

use Activepublishing\ExportBundle\Classes\ObjectDto;
use Pimcore\Model\DataObject;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
Class ConvertImport{

    public function getDto(string $jsonValue, string $classname){
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        return $serializer->deserialize($jsonValue, $classname, 'json');
    }

    public function getObject(ObjectDto $objectDto){

        $parent = DataObject::getByPath($objectDto->getPath());
        $classname = $objectDto->getClassName();

        $newObject = new $classname();
        $newObject->isPublished(true);
        $newObject->setKey($objectDto->getKey());
        $newObject->setParent($parent);
        if(! $objectDto->getProperties()){
            return $newObject;
        }
        foreach ($objectDto->getProperties() as $property) {

            $fieldName = "set". ucfirst($property["name"]);
            $newObject->$fieldName($property["value"]);
        }

        return  $newObject;
    }
}