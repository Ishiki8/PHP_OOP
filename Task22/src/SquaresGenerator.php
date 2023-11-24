<?php

namespace task22;

class SquaresGenerator {
    public static function generate(int $side, int $count = 5): array {
        return array_map(
            function() use($side) {
                return new Square($side);
            },
            array_pad([], $count, 0)
        );
    }
}