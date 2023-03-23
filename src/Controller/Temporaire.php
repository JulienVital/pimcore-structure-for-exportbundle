<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\ObjectText;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Temporaire extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    #[Route('/blog', name: 'blog_list')]
    public function defaultAction(Request $request): Response
    {

        $objectText = new ObjectText();
        $objectText->setKey("KeyName example");
        $objectText->setSimpleInput("fixture simple Input");
        $objectText->setWysiwyg("<p>lk!</p>");
        $objectText->setTextarea("Textarea value \n example");
        /**
         * @Class2
         */
        $object = DataObject::getById(3);
        
        $fields = $object->getClass()->getFieldDefinitions();
        dump($object->getClass());
        $newArray = [];
        foreach ($fields as $field => $value) {
            $newArray[$field]=  $object->getValueForFieldName($field);
            # code...
        }
        dd($newArray);

        dd($object->__getRawRelationData());

    }
}
