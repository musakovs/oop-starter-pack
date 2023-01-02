<?php

namespace Musakov\OopStarterPack\Operators\IfOp\Predicates;

use Musakov\OopStarterPack\Interfaces\PredicateInterface;

class Equal extends TwoValueObject implements PredicateInterface
{
    public function result(): bool
    {
        return $this->value1 === $this->value2;
    }
}
