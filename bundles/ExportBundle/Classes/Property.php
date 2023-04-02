<?php
namespace Activepublishing\ExportBundle\Classes;

use JsonSerializable;

class Property implements JsonSerializable{
    private string $type;
    private string $name;
    private mixed $value;

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

    /**
     * Get the value of value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }
}