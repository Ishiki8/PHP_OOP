<?php

namespace task28\Comparator;
use Ds\Stack;

function getResult(string $text): string {
    $stack = new Stack();

    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] !== '#') {
            $stack->push($text[$i]);
        } elseif (!$stack->isEmpty()) {
            $stack->pop();
        }
    }
    
    return implode('', $stack->toArray());
};

function compare(string $seq1, string $seq2): bool {
    return getResult($seq1) === getResult($seq2);
}
