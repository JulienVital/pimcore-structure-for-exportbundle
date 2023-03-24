<?php
namespace Activepublishing\ExportBundle\Service\Queue;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\AbstractObject;

Class ExportQueue{

    private $items = [];

    public function enqueue(AbstractObject $newObject){
        $this->items[]=$newObject;
    }

    public function dequeue(){
        
        return array_shift($this->items);
    }
}