<?php

namespace App\Task45\Circle;

use App\Task45\Dispatcher;

function init()
{
    Dispatcher\defmethod(__NAMESPACE__, 'getArea', function ($self) {
        return pi() * $self['data']['radius'] ** 2;
    });
}

function make($radius)
{
    return ['name' => __NAMESPACE__, 'data' => ['radius' => $radius]];
}

function getRadius($self)
{
    return $self['data']['radius'];
}
