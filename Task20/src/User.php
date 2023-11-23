<?php

namespace task20User;
use task20\ComparatableInterface;

class User implements ComparatableInterface {
    private int $id;
    private string $name;

    public function compareTo($obj) {
        return $this->id === $obj->id;
    }

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    
}