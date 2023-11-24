<?php

namespace App\Task45\Figure;

use App\Task45\Dispatcher;

function getArea($self, ...$args)
{
    return Dispatcher\call($self, __FUNCTION__, $args);
}
