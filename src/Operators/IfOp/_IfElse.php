<?php

namespace Musakov\OopStarterPack\Operators\IfOp;

use Musakov\OopStarterPack\Interfaces\PredicateInterface;
use Musakov\OopStarterPack\Interfaces\RunInterface;

class _IfElse implements RunInterface
{
    /**
     * @var PredicateInterface
     */
    private $predicate;
    /**
     * @var RunInterface 
     */
    private $trueBlock;
    /**
     * @var RunInterface 
     */
    private $falseBlock;

    public function __construct(PredicateInterface $predicate, RunInterface $trueBlock, RunInterface $falseBlock)
    {
        $this->predicate = $predicate;
        $this->trueBlock = $trueBlock;
        $this->falseBlock = $falseBlock;
    }

    public function run()
    {
        return $this->predicate->result()
            ? $this->trueBlock->run()
            : $this->falseBlock->run();
    }
}
