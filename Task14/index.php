<?php
namespace Task14;
require __DIR__ . '/vendor/autoload.php';

use Task14\Segment;

$segment = new Segment(3, 9);

print($segment->getBeginPoint());