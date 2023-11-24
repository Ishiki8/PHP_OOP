<?php

namespace task33;

require __DIR__ . '/vendor/autoload.php';
use function task33\Normalizer\getQuestions;

$text1 = <<<HEREDOC
lala\r\nr
ehu?\t
vie?eii
\n \t
i see you
/r \n
one two?\r\n\n
turum-purum
HEREDOC;

print(getQuestions($text1));