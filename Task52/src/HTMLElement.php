<?php

namespace App\Task52;

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute(string $attribute): string {
        return $this->attributes[$attribute];
    }

    private function toArray(string $attributes): array {
        return explode(' ', $attributes);
    }

    private function toString(array $attributes): string {
        return implode(' ', $attributes);
    }

    public function addClass(string $className): void {
        $classes = $this->toArray($this->getAttribute('class'));

        if (!in_array($className, $classes)) {
            $classes[] = $className;
        }
        
        $this->attributes['class'] = $this->toString($classes);
    }

    public function removeClass(string $className): void {
        $classes = $this->toArray($this->getAttribute('class'));

        if (in_array($className, $classes)) {
            $classes = array_values(array_diff($classes, [$className]));
        }
        
        $this->attributes['class'] = $this->toString($classes);
    }

    public function toggleClass(string $className): void {
        $classes = $this->toArray($this->getAttribute('class'));
        in_array($className, $classes) ? $this->removeClass($className) : $this->addClass($className);
    }
}
