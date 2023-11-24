<?php

require __DIR__ . '/vendor/autoload.php';

use task35\Obj;

$items = [
    'key' => 'value',
    'key2' => [
        'key3' => 'value3'
    ]
];
$obj = new Obj($items);
echo "<pre>";
print($obj->key); // 'value'
print($obj->key2->key3); // 'value3'
print($obj['key']); // 'value'
print($obj['key2']['key3']); // 'value3'

print($obj['undefinedKey']); // null
print($obj->undefinedKey);
print_r($obj);
echo "</pre>";