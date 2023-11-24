<?php

namespace App\Task61;

class Course
{
    use Enumerable;

    private $lessons;

    public function __construct($lessons)
    {
        $this->lessons = $lessons;
    }

    public function getIterator(): iterable
    {
        // Для простоты возвращает массив, вместо итератора
        return $this->lessons;
    }
}
