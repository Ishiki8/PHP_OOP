<?php
namespace Task13;
require __DIR__ . '/vendor/autoload.php';

use Task13\Rational;

$rat1 = new Rational(3, 9);
print($rat1->getNumer()); // 3
print "<br>";
print($rat1->getDenom()); // 9
print "<br>";

$rat2 = new Rational(10, 3);

$rat3 = $rat1->add($rat2); // Абстракция для рационального числа 99/27
print($rat3->getNumer()); // 99
print "<br>";
print($rat3->getDenom()); // 27
print "<br>";

$rat4 = $rat1->sub($rat2); // Абстракция для рационального числа -81/27
print($rat4->getNumer()); // -81
print "<br>";
print($rat4->getDenom()); // 27
print "<br>";