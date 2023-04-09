<?php
namespace Activepublishing\ExportBundle\Classes;

use JsonSerializable;

class Property implements JsonSerializable{
    private string $type;
    private string $name;
    private mixed $value;

    public function __construct($type='', $name='', $value=''){

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
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}