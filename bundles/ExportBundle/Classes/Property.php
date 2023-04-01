<?php
namespace Activepublishing\ExportBundle\Classes;

use JsonSerializable;

class Property implements JsonSerializable{
    private $type;
    private $name;
    private $value;

    public function __construct($type, $name, $value){

        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    public function jsonSerialize(): mixed
    {
        return [
            "name" => $this->name,
            "type" => $this->type,
            "value" => $this->value
        ];
    }
}