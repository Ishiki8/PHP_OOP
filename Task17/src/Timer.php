<?php

namespace Task17;

class Timer
{
    public const SEC_PER_MIN = 60;
    public const SEC_PER_HOURS = 3600;
    public int $secondsCount = 0;
    // BEGIN (write your solution here)
    public function __construct(int $seconds, int $minutes=null, int $hours=null) {
        $this->secondsCount = $seconds + $minutes * self::SEC_PER_MIN + $hours * self::SEC_PER_HOURS;
    }
    // END

    public function getLeftSeconds(): int {
        return $this->secondsCount;
    }

    public function tick() {
        $this->secondsCount--;
    }
}