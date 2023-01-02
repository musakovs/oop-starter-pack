<?php

namespace Musakov\OopStarterPack\Operators\ForOp;

use Musakov\OopStarterPack\Interfaces\PredicateInterface;
use Musakov\OopStarterPack\Interfaces\RunInterface;

class _While implements RunInterface
{
    /**
     * @var RunInterface
     */
    private $run;
    
    /**
     * @var PredicateInterface
     */
    private $predicate;

    public function __construct(PredicateInterface $predicate, RunInterface $run)
    {
        $this->predicate = $predicate;
        $this->run = $run;
    }

    public function run()
    {
        while ($this->predicate->result()) {
            $this->run->run();
        }
    }
}
