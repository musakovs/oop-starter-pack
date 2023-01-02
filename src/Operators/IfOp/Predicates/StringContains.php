<?php

namespace Musakov\OopStarterPack\Operators\IfOp\Predicates;

use Musakov\OopStarterPack\Interfaces\PredicateInterface;

class StringContains implements PredicateInterface
{
    /**
     * @var string
     */
    private $haystack;
    
    /**
     * @var string
     */
    private $needle;

    public function __construct(string $haystack, string $needle)
    {
        $this->haystack = $haystack;
        $this->needle = $needle;
    }

    public function result(): bool
    {
        return strpos($this->haystack, $this->needle) !== false;
    }
}
