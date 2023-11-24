<?php

namespace App\Task61;

trait Enumerable
{
    abstract public function getIterator(): iterable;

    public function maxBy(callable $function) {
        $array = $this->getIterator();
        usort($array, $function);
        $length = count($array);

        return $length > 0 ? $array[$length - 1]: null;
    }
}
