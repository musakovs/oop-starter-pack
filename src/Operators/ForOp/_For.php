<?php

namespace Musakov\OopStarterPack\Operators\ForOp;

use Musakov\OopStarterPack\Interfaces\Handler;
use Musakov\OopStarterPack\Interfaces\RunInterface;

class _For implements RunInterface
{
    /**
     * @var iterable
     */
    private $iterable;
    /**
     * @var Handler 
     */
    private $handler;

    public function __construct(iterable $iterable, Handler $handler)
    {
        $this->iterable = $iterable;
        $this->handler  = $handler;
    }
    
    public function run()
    {
        foreach ($this->iterable as $item) {
            $this->handler->handle($item);
        }
    }
}
