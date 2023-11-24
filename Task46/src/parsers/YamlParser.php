<?php

namespace App\Task46\parsers;

use Symfony\Component\Yaml\Yaml;

class YamlParser {
    public static function parse(string $data): array {
        return Yaml::parse($data);
    }
}
