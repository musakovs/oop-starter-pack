<?php

namespace Musakov\OopStarterPack\SimpleRunners;

use Musakov\OopStarterPack\Interfaces\RunInterface;

class StringRunner implements RunInterface
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function run(): string
    {
        return $this->value;
    }
}
