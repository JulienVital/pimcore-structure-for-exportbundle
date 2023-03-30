<?php
namespace Activepublishing\ExportBundle\Service\Queue;

use Pimcore\Model\Asset\Image;
use Pimcore\Model\DataObject;

Class ExportQueue{

    private $items = [];

    public function enqueue(DataObject|Image $newObject){
        $this->items[]=$newObject;
    }

    public function getQueue(){
        return $this->items;
    }

    public function dequeue(){
        
        return array_shift($this->items);
    }
    public function isEmpty():bool{
        return count($this->items) === 0;
    }
}