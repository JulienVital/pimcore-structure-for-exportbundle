<?php
namespace Activepublishing\ExportBundle\Classes;

use JsonSerializable;

class Properties implements JsonSerializable{

    /**
     * 
     * @var Property[]
     */
    private array $list = [];

    public function jsonSerialize(): mixed
    {

        return $this->list;
    }

    public function push(Property $property):self{

        $this->list[] = $property;
        return $this;

    }


}