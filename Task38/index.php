<?php

namespace task38;

require __DIR__ . '/vendor/autoload.php';

use function task38\HTML\stringify;

$tag = ['name' => 'hr', 'class' => 'px-3', 'id' => 'myid', 'tagType' => 'single'];
$html = stringify($tag);

echo "<pre>";
print($html);
echo "</pre>";

$tag = ['name' => 'div', 'tagType' => 'pair', 'id' => 'wow', 'body' => 'text2'];
$html = stringify($tag);

echo "<pre>";
print($html);
echo "</pre>";