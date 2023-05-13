<?php

namespace Activepublishing\ExportBundle\Controller;

use Activepublishing\ExportBundle\Service\Export\ExploreObject;
use Activepublishing\ExportBundle\Service\Export\StrategyIterable;
use Activepublishing\ExportBundle\Service\Import\ImportTree;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Concrete;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    private $extractObject;

    public function __construct(ExploreObject $exploreObject, StrategyIterable $strategy)
    {
        $this->extractObject = $exploreObject;
    }
    /**
     * @param Request $request
     * @return Response
     */
    #[Route('/admin/exportJsonTree/{object}', name: 'export_path')]
    public function defaultAction($object):void
    {

        $object =Concrete::getById($object);
        $response = json_encode($this->extractObject->exportTree($object));

        $str =  $response;
        $file_name = $object->getKey().".json";
        $mimeType = 'json/plain';
        $fileSize = strlen ( $str );
        header("Content-Type: $mimeType");
        header("Content-Length: $fileSize");
        header("Content-Disposition: attachment; filename=$file_name");
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        echo $str;

    }

    #[Route('/admin/test', name: 'import_path')]
    public function defaultImport():void
    {

        $importTree = new ImportTree();
        $importTree->process();
    }
}
