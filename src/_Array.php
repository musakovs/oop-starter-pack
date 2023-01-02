<?php

namespace Musakov\OopStarterPack;

class _Array implements \Iterator
{
    /**
     * @var array
     */
    private $items;

    private $i = 0;

    /**
     * @var int[]|string[]
     */
    private $keys;

    public function __construct(array $items)
    {
        $this->items = array_values($items);
        $this->keys = array_keys($items);
    }

    public function current(): int
    {
        return $this->i;
    }

    public function next()
    {
        return $this->i + 1;
    }

    public function key()
    {
        return $this->keys[$this->current()];
    }

    public function valid(): bool
    {
        return array_key_exists($this->current(), $this->items);
    }

    public function rewind(): void
    {
        $this->i = 0;
    }
}
