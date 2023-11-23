<?php
namespace Task15;
require __DIR__ . '/vendor/autoload.php';

use Task15\User\Address;
use Task15\User;

$user = new User('Ivan');
$address = new User\Address('Russia', 'Moscow', 'Lenina');
$user->addAddress($address);
 
$user2 = new User('Mila');
$user2->addAddress($address);
print_r($user->getAddresses());
print "<br>"; 
 
// Изменение происходит сразу у обоих пользователей
// Такое поведение неожиданно и ломает систему
$address->setCountry('USA');
print_r($user2->getAddresses());
print "<br>"; 
print_r($user->getAddresses());

