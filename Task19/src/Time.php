<?php

namespace Task19;

class Time
{
    private int $h;
    private int $m;

    // BEGIN (write your solution here)
    public static function fromString(string $time): self {
        list($h, $m) = explode(":", $time);
        return new self($h, $m);
    }
    // END

    public function __construct(int $h, int $m) {
        $this->h = $h;
        $this->m = $m;
    }

    public function __toString(): string {
        return "{$this->h}:{$this->m}";
    }
}