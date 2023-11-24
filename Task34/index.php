<?php

namespace task34;

require __DIR__ . '/vendor/autoload.php';
use function task34\Dates\buildRange;

$data = [
    [ 'value' => 14, 'date' => '02.08.2018' ],
    [ 'value' => 43, 'date' => '03.08.2018' ],
    [ 'value' => 38, 'date' => '05.08.2018' ],
];

$begin = '2018-08-01';
$end = '2018-08-06';

$result = buildRange($data, $begin, $end);

echo '<pre>';
print_r($result);
echo '</pre>';