<?php
namespace Activepublishing\ExportBundle\Service\Serializer;


interface SerializerInterface{

    /**
     * 
     * @param Serializable 
     * @return string 
     */
    public function serialize($data):string;

}