<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Activepublishing\ExportBundle\Classes\TransferObject;
use Activepublishing\ExportBundle\Service\Queue\ExportQueue;
use Activepublishing\ExportBundle\Service\Serializer\JmsSerializer;
use Activepublishing\ExportBundle\Service\Serializer\SerializerInterface;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class ExploreObject
{

    private $queue;

    private PropertyExtractor $propertyExtractor;

    private $assetList = [];

    private $objectList = [];

    private SerializerInterface $serializer;

    public function __construct(
        #[TaggedIterator('field_strategy')] iterable $strategyList,
        ExportQueue $queue, SerializerInterface $serializer)
    {
        $this->queue = $queue;
        $this->propertyExtractor = new PropertyExtractor($this->queue, $strategyList);
        $this->serializer = $serializer;
    }
    public function getJson(){
        return $this->serializer->serialize($this->objectList);
    }

    public function export(DataObject $object)
    {

        $currentTransferObject = new TransferObject();
        $currentTransferObject->setClassName($object::class)
            ->setKey($object->getKey())
            ->setPath($object->getPath());
        if ($object::class !== "Pimcore\Model\DataObject\Folder") {
            $currentTransferObject->setProperties($this->propertyExtractor->getProperties($object));
        }
        $this->objectList = [$currentTransferObject];

        return $currentTransferObject;
    }

    public function exportTree(DataObject $object, $arrayOfNodes = [])
    {

        $this->queue->enqueue($object);
        while (!$this->queue->isEmpty()) {
            $currentNode = $this->queue->dequeue();
            if ($currentNode instanceof Asset) {
                $this->assetList[] = $currentNode->getFullPath();
                continue;
            }

            $arrayOfNodes  =  $this->exploreParent($currentNode, $arrayOfNodes);
            $arrayOfNodes  =  $this->exploreChildren($currentNode, $arrayOfNodes);
        }

        $this->objectList = $arrayOfNodes;

        return $arrayOfNodes;
    }

    private function exploreChildren($object, $arrayOfNodes)
    {
        $arrayOfNodes[$object->getFullPath()] = $this->export($object);
        if (!$children = $object->getChildren()) {
            return $arrayOfNodes;
        }
        foreach ($children as $actualChildren) {
            $arrayOfNodes  =  $this->exploreChildren($actualChildren, $arrayOfNodes);
        }
        return $arrayOfNodes;
    }

    private function exploreParent($object, $arrayOfNodes)
    {

        if ($parent = $object->getParent()) {
            $arrayOfNodes[$parent->getFullPath()] = $this->export($parent);
            $arrayOfNodes  =  $this->exploreParent($parent, $arrayOfNodes);
        }
        return $arrayOfNodes;
    }

    public function getAssetsList()
    {
        return $this->assetList;
    }
}
