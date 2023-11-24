<?php

namespace Task25;

class Truncater {
    const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    private array $options = self::OPTIONS;

    public function __construct(?array $options = null) { 
        if (isset($options)) { 
            $this->options = array_merge(self::OPTIONS, $options);
        }
    }

    public function truncate(string $text, ?array $options = null): string {
        $additionalOptions = $this->options;

        if (isset($options)) {
            $additionalOptions = array_merge($additionalOptions, $options);
        }

        if (strlen($text) > $additionalOptions['length']) {
            return substr($text, 0, $additionalOptions['length']).$additionalOptions['separator'];
        }

        return $text;
    }
}