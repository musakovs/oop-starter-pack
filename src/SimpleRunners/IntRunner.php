<?php

namespace Musakov\OopStarterPack\SimpleRunners;

use Musakov\OopStarterPack\Interfaces\RunInterface;

class IntRunner implements RunInterface
{
    /**
     * @var int
     */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
    
    public function run(): int
    {
        return $this->value;
    }
}
