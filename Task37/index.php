<?php

require __DIR__ . '/vendor/autoload.php';

use function task37\HTML\getLinks;

$tags = [
    ['name' => 'img', 'src' => 'ht.io/assets/logo.png'],
    ['name' => 'div'],
    ['name' => 'link', 'href' => 'ht.io/assets/style.css'],
    ['name' => 'h1']
];
$links = getLinks($tags);

print_r($links);