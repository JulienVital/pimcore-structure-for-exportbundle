<?php
namespace Activepublishing\ExportBundle\Service\Serializer;


interface SerializerInterface{

    /**
     * 
     * @param Serializable 
     * @return JsonString 
     */
    public function serialize($data):string;

}