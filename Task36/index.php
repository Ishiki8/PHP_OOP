<?php

require __DIR__.'/vendor/autoload.php';

use App\Node;
use function App\LinkedList\reverse;

$numbers = new Node(1, new Node(2, new Node(3)));
print_r(reverse($numbers)); // (3, 2, 1)