<?php

namespace Task10;
function dup(Point $point1): Point {
    $point = new Point();
    $point -> x = $point1 -> x;
    $point -> y = $point1 -> y;

    return $point;
}