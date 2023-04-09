<?php
namespace Activepublishing\ExportBundle\Service\Serializer;

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
        return $jsonContent = $this->serializer->serialize($data, 'json');

    }

}