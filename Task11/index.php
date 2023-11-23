<?php

namespace Task11;
require __DIR__ . '/vendor/autoload.php';

use Task11\Cat;
use Task11\User;

$user1 = new User();
$user1->id = 1;
 
$user2 = new User();
$user2->id = 1;
 
// 1 === 1
print(areUsersEqual($user1, $user2) ? "true" : "false"); // true
print "<br>";
// У пользователя другой id
$user3 = new User();
$user3->id = 3;
 
// 1 === 3
print(areUsersEqual($user1, $user3) ? "true" : "false"); // false
print "<br>";
// 1 === 3
print(areUsersEqual($user2, $user3) ? "true" : "false"); // false
print "<br>";
 
// Другой тип
$cat = new Cat();
$cat->id = 1;
 
// Сравниваются разные типы, поэтому проверка завершается с ошибкой
print(areUsersEqual($user1, $cat) ? "true" : "false"); // Boom! (error)