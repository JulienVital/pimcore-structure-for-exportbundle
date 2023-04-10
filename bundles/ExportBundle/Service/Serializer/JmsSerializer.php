<?php
namespace Activepublishing\ExportBundle\Service\Serializer;

use Activepublishing\ExportBundle\Classes\TransferObject;
use JMS\Serializer\SerializerBuilder;

Class JmsSerializer implements SerializerInterface {

    /**
     * @var \JMS\Serializer\Serializer
     */
    private $serializer;

    public function __construct(){
        $this->serializer = SerializerBuilder::create()->build();

    }

    public function serialize($data):string{
        return $this->serializer->serialize($data, 'json');

    }

    public function deSerialize($data){
        $transferObjects = $this->serializer->deserialize($data, 'array<string, Activepublishing\ExportBundle\Classes\TransferObject>', 'json');

        return $transferObjects;
    }

}