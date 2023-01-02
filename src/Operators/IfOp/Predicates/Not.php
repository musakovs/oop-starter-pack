<?php

namespace Musakov\OopStarterPack\Operators\IfOp\Predicates;

use Musakov\OopStarterPack\Interfaces\PredicateInterface;

class Not implements PredicateInterface
{
    /**
     * @var PredicateInterface
     */
    private $predicate;

    public function __construct(PredicateInterface $predicate)
    {
        $this->predicate = $predicate;
    }

    public function result(): bool
    {
        return !$this->predicate->result();
    }
}
