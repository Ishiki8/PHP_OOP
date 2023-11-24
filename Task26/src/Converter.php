<?php

namespace Task26\Converter;
use stdClass;


function toStd(array $array): stdClass {
    $std = new stdClass();

    foreach ($array as $key => $value) {
        $std->$key = $value;
    }
    
    return $std;
}