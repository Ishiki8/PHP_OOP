<?php

namespace App;

use App\strategies;

class TicTacToe
{
    private $strategy;
    private array $field = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0]
    ];

    private array $winLines = [
        [[0, 0], [0, 1], [0, 2]],
        [[1, 0], [1, 1], [1, 2]],
        [[2, 0], [2, 1], [2, 2]],
        [[0, 0], [1, 0], [2, 0]],
        [[0, 1], [1, 1], [2, 1]],
        [[0, 2], [1, 2], [2, 2]],
        [[0, 0], [1, 1], [2, 2]],
        [[0, 2], [1, 1], [2, 0]],
    ];

    public function __construct(string $strategy = 'easy') {
        switch ($strategy) {
            case 'easy':
            default:
                $this->strategy = new strategies\Easy();
                break;
            case 'normal':
                $this->strategy = new strategies\Normal();
                break;
        }
    }

    public function go($row = null, $column = null): bool {
        if (is_null($row) && is_null($column)) {
            $move = $this->strategy->calculateMove($this->field);

            if (!$this->field[$move['row']][$move['column']]) {
                $this->field[$move['row']][$move['column']] = -1;
            }
        } else {
            if (!$this->field[$row - 1][$column - 1]) {
                $this->field[$row - 1][$column - 1] = 1;
            }
        }

        return $this->isGameEnd();
    }

    public function isGameEnd(): bool {
        foreach ($this->winLines as $line) {
            if ($this->field[$line[0][0]][$line[0][1]] !== 0
                    && $this->field[$line[0][0]][$line[0][1]] === $this->field[$line[1][0]][$line[1][1]]
                    && $this->field[$line[1][0]][$line[1][1]] === $this->field[$line[2][0]][$line[2][1]]
            ) {
                return true;
            }
        }

        return false;
    }
}
