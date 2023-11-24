<?php

namespace App;

class Base
{
    public function isInstanceOf($className): bool {
        // $parentClasses = class_parents($this);
        // return in_array($className, $parentClasses) || get_class($this) === $className;   
        
        return $this instanceof $className;
    }
}
