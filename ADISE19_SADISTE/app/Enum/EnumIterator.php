<?php

namespace App\Enum;

use ArrayIterator;
use ArrayObject;
use Iterator;

class EnumIterator implements Iterator {
    private $iterator;

    public function __construct(array $elements) {
        $this->iterator = new ArrayObject($elements);
        $this->iterator = $this->iterator->getIterator();
    }

    public function rewind(): void {
        $this->iterator->rewind();
    }

    public function current() {
        return $this->iterator->current();
    }

    public function key() {
        return $this->iterator->key();
    }

    public function next(): void {
        $this->iterator->next();
    }

    public function valid(): bool {
        return $this->iterator->valid();
    }
}
