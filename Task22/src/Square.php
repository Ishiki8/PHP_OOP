<?php

namespace task22;

class Square {
    private int $side;

    public function __construct(int $side) {
        $this->side = $side;
    }

    public function getSide(): int {
        return $this->side;
    }
}