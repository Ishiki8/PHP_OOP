<?php
namespace task30;
require __DIR__ . '/vendor/autoload.php';
use task30\Url;

$url = new Url('//yandex.ru:80?key=value&key2=value2');
print($url->getScheme());
print("<br>");// 'http'
print($url->getHostName());
print("<br>");// 'yandex.ru'
print_r($url->getQueryParams());
print("<br>");
// [
//     'key' => 'value',
//     'key2' => 'value2',
// ];
print($url->getQueryParam('key')); // 'value'
print("<br>");
// второй параметр - значение по умолчанию
print($url->getQueryParam('key2', 'lala')); // 'value2'
print("<br>");
print($url->getQueryParam('new', 'ehu')); // 'ehu'
print("<br>");
print($url->getQueryParam('new')); // null
print("<br>");
print($url->equals(new Url('http://yandex.ru:80?key=value&key2=value2'))); // true
print("<br>");
print($url->equals(new Url('http://yandex.ru:80?key=value'))); // false
print("<br>");