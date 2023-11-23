<?php

namespace Task16;

class Point {
    public int $x = 0;
    public int $y = 0;

    public function __construct(int $x, int $y) {
        $this->x = $x;;
        $this->y = $y;
    }

    public function __toString(): string {
        return "({$this->x}, {$this->y})";
    }
}