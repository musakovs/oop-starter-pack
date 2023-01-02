<?php

namespace Musakov\OopStarterPack\Operators\IfOp\Predicates;

abstract class TwoValueObject
{
    protected $value1;
    protected $value2;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }
}
