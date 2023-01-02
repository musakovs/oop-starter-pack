<?php

use Musakov\OopStarterPack\Operators\ForOp\_For;
use Musakov\OopStarterPack\Operators\IfOp\_IfElse;
use Musakov\OopStarterPack\Operators\IfOp\Predicates\Not;
use Musakov\OopStarterPack\Operators\IfOp\Predicates\StringContains;
use Musakov\OopStarterPack\SimpleHandlers\EchoHandler;

require_once 'vendor/autoload.php';

$if = new _IfElse(
    new Not(new StringContains('Some text', 'text')),
    new _For([1, 2, 3], new EchoHandler()),
    new _For([4, 5, 6], new EchoHandler())
);

$if->run();
