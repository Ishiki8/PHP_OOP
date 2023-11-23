<?php

namespace Task14;

class Segment
{
    private int | float $beginPoint = 0;
    private int | float $endPoint = 0;

    public function __construct(int | float $beginPoint, int | float $endPoint) {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function getBeginPoint(): int | float {
        return $this->beginPoint;
    }

    public function getEndPoint(): int | float {
        return $this->endPoint;
    }
}