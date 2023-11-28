<?php

namespace Activepublishing\ExportBundle\Service\Export;

use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;

class StrategyIterable
{
    private $strategyList;
    public function __construct(
        #[TaggedIterator('field_strategy')] iterable $strategyList)
    {
        $this->strategyList = $strategyList;
    }

    public function getStrategies(){
        return $this->strategyList;
    }
}
