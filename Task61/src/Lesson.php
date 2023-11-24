<?php

namespace App\Task61;

class Lesson
{
    private $name;
    private $duration;

    public function __construct($name, $duration)
    {
        $this->name = $name;
        $this->duration = $duration;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}
