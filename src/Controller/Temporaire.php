<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
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

        /**
         * @Class2
         */
        $object = DataObject::getById(3);
        $fields = $object->getClass()->getFieldDefinitions();
        dump($fields);
        dd($object->__getRawRelationData());

    }
}
