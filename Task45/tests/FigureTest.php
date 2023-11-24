<?php

namespace App\Tests;

use App\Task45\Figure;
use App\Task45\Circle;
use App\Task45\Square;
use PHPUnit\Framework\TestCase;

class FigureTest extends TestCase
{
    public function setUp(): void
    {
        Circle\init();
        Square\init();
    }

    public function testGetArea()
    {
        $circle = Circle\make(5);
        $square = Square\make(5);
        $circleArea = Figure\getArea($circle);
        $this->assertEquals(79, round($circleArea));
        $squareArea = Figure\getArea($square);
        $this->assertEquals(25, $squareArea);
    }
}
