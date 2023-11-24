<?php

namespace task35;

use ArrayAccess;
use App\ObjInterface;

class Obj implements ObjInterface, ArrayAccess {
    private array $items = [];

    public function __construct(array $items) {
        foreach ($items as $key => $value) {
            if (is_array($value)) {
                $this->items[$key] = new Obj($value);
            } else {
                $this->items[$key] = $value;
            }      
        }
    }

    public function __get($key)
    {
        return $this->items[$key] ?? null;
    }

    public function __set($key, $value)
    {
        if (is_array($value)) {
            $this->items[$key] = new Obj($value);
        } else {
            $this->items[$key] = $value;
        }
    }

    public function offsetSet($offset, $value): void {
        $this->items[$offset] = $value;
    }

    public function offsetExists($offset): bool {
        return isset($this->items[$offset]);
    }

    public function offsetUnset($offset): void {
        unset($this->items[$offset]);
    }

    public function offsetGet($offset): mixed {
        return $this->items[$offset] ?? null;
    }
}