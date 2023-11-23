<?php

namespace Task16;

class Segment {
    public Point $beginPoint;
    public Point $endPoint;

    public function __construct(Point $beginPoint, Point $endPoint) {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function __toString(): string {
        return "[{$this->beginPoint}, {$this->endPoint}]";
    }

}