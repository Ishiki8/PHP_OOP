<?php

namespace task23;

class Random {
    const RAND_MAX = 32767;
    const A = 1103515245;
    const C = 12345;
    const D = 65536;

    private int $seed;
    private int $next;

    public function __construct(int $seed) {
        $this->seed = $seed;
        $this->next = $seed;
    }

    public function getNext(): int {
        $this->next = intval($this->next * self::A + self::C);

        return intval($this->next / self::D) % (self::RAND_MAX + 1);
    }

    public function reset(): void {
        $this->next = $this->seed;;
    }
}