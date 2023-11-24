<?php

namespace App;

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    protected function stringifyAttributes()
    {
        $attributesPairs = array_map(function ($key, $value) {
            return " {$key}=\"{$value}\"";
        }, array_keys($this->attributes), $this->attributes);

        return implode($attributesPairs);
    }
}
