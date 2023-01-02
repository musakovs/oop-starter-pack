<?php

namespace Musakov\OopStarterPack\SimpleHandlers;

use Musakov\OopStarterPack\Interfaces\Handler;

class EchoHandler implements Handler
{
    public function handle($item)
    {
        print_r($item);
        echo PHP_EOL;
    }
}
