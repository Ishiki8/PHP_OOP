<?php
// установка
// composer require --dev phpunit/phpunit ^10
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace Task19\Tests;

use Task19\Time;
use PHPUnit\Framework\TestCase;

class TimeTest extends TestCase
{
    public function testTime()
    {
        $time = Time::fromString('10:23');
        $this->assertEquals('10:23', $time);
        $this->assertInstanceOf(Time::class, $time);

        $time2 = Time::fromString('3:8');
        $this->assertEquals('3:8', $time2);
    }
}
