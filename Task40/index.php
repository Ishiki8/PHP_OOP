<?php

namespace task40;

require __DIR__ . '/vendor/autoload.php';

use function App\KeyValueFunctions\swapKeyValue;
use App\InMemoryKV;

$map = new InMemoryKV(['foo' => 'bar', 'bar' => 'zoo']);
swapKeyValue($map);
foreach ($map->toArray() as $key => $value) {
    print('KEY = '.$key.' VALUE = '.$value);
    print "<br>";
}
