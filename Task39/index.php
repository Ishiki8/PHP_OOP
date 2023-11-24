<?php

namespace task39;

require __DIR__ . '/vendor/autoload.php';

use task39\DatabaseConfigLoader;

$loader = new DatabaseConfigLoader(__DIR__ . '/tests/fixtures');

echo "<pre>";
print_r($loader->load('production'));
print_r($loader->load('development'));
print_r($loader->load('custom'));
echo "</pre>";