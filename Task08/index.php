<?php 

include('Point.php');
include('PointFunctions.php');

$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;
 
$midpoint = getMidpoint($point1, $point2);
print($midpoint->x);
print "<br>";
print($midpoint->y); 
print "<br><br>";


$point3 = new Point();
$point3->x = -2;
$point3->y = 4;
$point4 = new Point();
$point4->x = 5;
$point4->y = -10;
 
$midpoint1 = getMidpoint($point3, $point4);
print($midpoint1->x);
print "<br>";
print($midpoint1->y); 
print "<br><br>";


$point5 = new Point();
$point5->x = -15;
$point5->y = -4;
$point6 = new Point();
$point6->x = 4;
$point6->y = 17;
 
$midpoint2 = getMidpoint($point5, $point6);
print($midpoint2->x);
print "<br>";
print($midpoint2->y); 
print "<br><br>";