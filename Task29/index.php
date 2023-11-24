<?php

namespace task29;
require __DIR__ . '/vendor/autoload.php';

use task29\DeckOfCards;

$cards = new DeckOfCards([2, 3, 4, 5, 6, 7, 8, 9]);
$shufle = $cards->getShuffled();

print_r($shufle);