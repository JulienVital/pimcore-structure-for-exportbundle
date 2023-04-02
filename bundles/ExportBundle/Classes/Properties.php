<?php
namespace Activepublishing\ExportBundle\Classes;

use JsonSerializable;

class Properties implements JsonSerializable{

    private $list = [];

    public function jsonSerialize(): mixed
    {

        return $this->list;
    }

    public function push(Property $property){

        if(!$property){
            return ;
        }

        $this->list[] = $property;

    }


}