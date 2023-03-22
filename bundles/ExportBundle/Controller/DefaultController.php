<?php

namespace Activepublishing\ExportBundle\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    #[Route('/blog', name: 'blog_list')]
    public function defaultAction(Request $request): Response
    {

        /**
         * @Class2
         */
        $object = DataObject::getById(5);
        
        $fields = $object->getClass()->getFieldDefinitions();
        // dump($fields);
        $newArray = [];
        foreach ($fields as $field => $value) {
            $newArray[$field]=  $object->getValueForFieldName($field);
            # code...
        }
        dd($newArray);

        dd($object->__getRawRelationData());

    }
}
