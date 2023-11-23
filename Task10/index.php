<?php 

namespace Task10;
require __DIR__ . '/vendor/autoload.php';
use Task10\Point;

$point1 = new Point();
$point2 = dup($point1);
 
print($point1 == $point2 ? 'true' : 'false');
print '<br>'; 
print($point1 === $point2 ? 'true' : 'false'); 