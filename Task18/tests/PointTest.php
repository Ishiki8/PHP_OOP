<?php
// установка
// composer require --dev phpunit/phpunit ^10
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace Task18\Tests;

use Task18\Point;
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{
    public function testTableValue()
    {
        $this->assertEquals('points', Point::$table);
    }
}
