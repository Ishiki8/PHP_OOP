<?php

namespace task33\Normalizer;

use function Symfony\Component\String\s;

function getQuestions(string $text): string {
    $text = s($text);

    $lines = $text->split("\n");
    $lines = array_map(fn($line) => $line->trimEnd(), $lines);
    $lines = array_filter($lines, fn($line) => $line->endsWith('?'));

    return s("\n")->join($lines)->toString();
}