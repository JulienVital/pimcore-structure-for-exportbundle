<?php
namespace Activepublishing\ExportBundle\Service\Export;

use Pimcore\Model\DataObject\Concrete;
use stdClass;

Class ExtractObject{

    public function export(Concrete $object){
        $returnValue = new stdClass();
        $returnValue->type = $object::class;
        return json_encode($returnValue);
    }
}