<?php
namespace Activepublishing\ExportBundle\Classes;

use JsonSerializable;

class Properties implements JsonSerializable{

    private $list = [];

    public function jsonSerialize(): mixed
    {

        return $this->list;
    }

    public function push($array){

        if(!$array){
            return ;
        }

        $this->list[] = $array;

    }


}