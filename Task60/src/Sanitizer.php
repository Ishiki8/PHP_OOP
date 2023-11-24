<?php

namespace App\Task60;

class Sanitizer implements SanitizerInterface {
    public function sanitize(string $text): string {
        return trim($text);
    }
}
