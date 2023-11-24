<?php

namespace App\Task60;

class SanitizerStripTagsDecorator implements SanitizerInterface {
    private $sanitizer;

    public function __construct($sanitizer)
    {
        $this->sanitizer = $sanitizer;
    }

    public function sanitize(string $text): string {
        return $this->sanitizer->sanitize(strip_tags($text));
    }
}
