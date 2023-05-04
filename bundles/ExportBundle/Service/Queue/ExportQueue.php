<?php
namespace Activepublishing\ExportBundle\Service\Queue;

use Pimcore\Model\Asset;
use Pimcore\Model\DataObject;

Class ExportQueue implements ExportQueueInterface{

    private $items = [];

    private $history = [];

    public function enqueue(DataObject|Asset $newObject){
        $name = $newObject->getFullPath();
        if(array_key_exists($name, $this->history)){
            return;
        }
        $this->items[]=$newObject;
        $this->history[$name]=true;
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
