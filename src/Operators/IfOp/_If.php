<?php

namespace Musakov\OopStarterPack\Operators\IfOp;

use Musakov\OopStarterPack\Interfaces\PredicateInterface;
use Musakov\OopStarterPack\Interfaces\RunInterface;

class _If implements RunInterface
{
    /**
     * @var PredicateInterface
     */
    private $predicate;
    
    /**
     * @var RunInterface 
     */
    private $trueBlock;

    public function __construct(PredicateInterface $predicate, RunInterface $trueBlock)
    {

        $this->predicate = $predicate;
        $this->trueBlock = $trueBlock;
    }

    public function run()
    {
        if ($this->predicate->result()) {
            return $this->trueBlock->run();
        }
        
        return null;
    }
}
