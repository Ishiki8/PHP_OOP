<?php

namespace task20;
require __DIR__ . '/vendor/autoload.php';
use task20User\User;
use task20\ComparatableInterface;

$user1 = new User(4, 'tolya');
$user2 = new User(1, 'petya');
 
print($user1->compareTo($user2) ? "true" : "false"); // false
