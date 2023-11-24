<?php

namespace App\strategies;

class Easy
{
    public function calculateMove(array $field): array {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if (!$field[$i][$j]) {
                    return [
                        'row' => $i,
                        'column' => $j
                    ];
                }
            }
        }

        return [];
    }
}
