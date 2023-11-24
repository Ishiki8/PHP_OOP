<?php

namespace App\Task46\parsers;

class JsonParser {
    public static function parse(string $data): array {
        return json_decode($data, true);
    }
}
