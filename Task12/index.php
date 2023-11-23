<?php
namespace Task12;

require __DIR__ . '/vendor/autoload.php';

use Task12\Point;
use Task12\Segment;

$segment = new Segment(new Point(1, 10), new Point(11, -3));
$reversedSegment = reverse($segment);

print_r($reversedSegment->beginPoint); // (11, -3)
print_r($reversedSegment->endPoint); // (1, 10


$segment = new Segment(new Point(5, 777), new Point(666, 4));
$reversedSegment = reverse($segment);

print_r($reversedSegment->beginPoint);
print_r($reversedSegment->endPoint);