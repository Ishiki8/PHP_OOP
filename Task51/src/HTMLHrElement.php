<?php

namespace App\Task51;

class HTMLHrElement extends HTMLElement {
    public function __toString() {
        $attrLine = $this->stringifyAttributes();
        return "<hr{$attrLine}>";
    }
}
