<?php

namespace App\Task45\Square;

use App\Task45\Dispatcher;

function init()
{
    Dispatcher\defmethod(__NAMESPACE__, 'getArea', function ($self) {
        return $self['data']['radius'] ** 2;
    });
}

function make($side)
{
    return ['name' => __NAMESPACE__, 'data' => ['radius' => $side]];
}

function getSide($self)
{
    return $self['data']['side'];
}
