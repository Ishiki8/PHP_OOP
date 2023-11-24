<?php

namespace App\Task59;

class HTMLElement
{
    private $body;

    public function setTextContent($body)
    {
        $this->body = $body;
    }

    public function __toString() {
        $tag = static::$params;
        $body = $this->body ?? null;

        if ($tag['pair']) {
            return '<' . $tag['name'] . '>' . $body . '</' . $tag['name'] . '>';
        }

        return '<' . $tag['name'] . '>';
    }
}
