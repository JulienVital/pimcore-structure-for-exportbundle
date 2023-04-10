<?php
namespace Activepublishing\ExportBundle\Service\Queue;

use Pimcore\Model\Asset;
use Pimcore\Model\DataObject;

Class ExportQueue implements ExportQueueInterface{

    private $items = [];

    public function enqueue(DataObject|Asset $newObject){
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