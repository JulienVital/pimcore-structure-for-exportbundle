<?php
namespace Activepublishing\ExportBundle\Service\Queue;

use Pimcore\Model\Asset\Image;
use Pimcore\Model\DataObject;

interface ExportQueueInterface{


    public function enqueue(DataObject|Image $newObject);

    public function getQueue();

    public function dequeue();
    public function isEmpty():bool;
}