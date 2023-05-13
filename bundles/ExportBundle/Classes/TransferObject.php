<?php

namespace Activepublishing\ExportBundle\Classes;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class TransferObject
{

    /**
     * @SerializedName("className")
     * @var string
     */
    public string $className;

    public string $key;

    public string $path;

    /**
     * @Type("array<Activepublishing\ExportBundle\Classes\Property>")
     * @var Activepublishing/ExportBundle/Classes/Property[];
     */
    public $properties;

    /**
     * Get the value of className
     *
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * Set the value of className
     *
     * @param string $className
     *
     * @return self
     */
    public function setClassName(string $className): self
    {
        $this->className = $className;

        return $this;
    }

    /**
     * Set the value of key
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get the value of properties
     *
     * @return Property[]
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * Set the value of properties
     *
     * @param array $properties
     *
     * @return self
     */
    public function setProperties($properties): self
    {
        if (!is_array($properties)) {
            throw new \InvalidArgumentException('Properties must be an array of Property objects');
        }
    
        foreach ($properties as $property) {
            if (!$property instanceof Property) {
                throw new \InvalidArgumentException('All items in properties must be instances of Property');
            }
        }
    
        $this->properties = $properties;
    
        return $this;
    }

    /**
     * Get the value of key
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Get the value of path
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Set the value of path
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }
}
