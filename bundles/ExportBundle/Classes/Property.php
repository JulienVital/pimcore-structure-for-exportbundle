<?php
namespace Activepublishing\ExportBundle\Classes;
use JMS\Serializer\Annotation\Type;

class Property {
    /**
     * @Type("string")
     */
    private string $type;

    /**
     * @Type("string")
     */
    private string $name;

    /**
     * @Type("array")
     */
    private $value;

    public function __construct($type='', $name='', $value=''){

        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * Get the value of value
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }
}