<?php

namespace Task18;

class Point {
    public int $x = 0;
    public int $y = 0;
    public static string $table = 'points';

    public function getTable(): string {
        return self::$table;
    }

}