<?php

namespace task32;

require __DIR__ . '/vendor/autoload.php';
use task32\Booking;

$booking = new Booking();
print($booking->book('11-11-2008', '13-11-2008'));
print "<br>";
print($booking->book('12-11-2008', '12-11-2008'));
print "<br>";
print($booking->book('10-11-2008', '12-11-2008'));
print "<br>";
print($booking->book('12-11-2008', '14-11-2008'));
print "<br>";
print($booking->book('10-11-2008', '11-11-2008'));
print "<br>";
print($booking->book('13-11-2008', '14-11-2008'));
print "<br>";