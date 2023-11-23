<?php 

namespace Task19;

require __DIR__ ."/vendor/autoload.php";
use Task19\Time;

$time = new Time(13, 15);

$time2 = Time::fromString("01:03");
print_r($time2);