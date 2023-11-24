<?php

namespace App\Task46;

use App\Task46\parsers\YamlParser;
use App\Task46\parsers\JsonParser;

class ConfigFactory {
    public static function build(string $configFilePath): Config {
        $file = file_get_contents($configFilePath);
        $fileExtension = pathinfo($configFilePath, PATHINFO_EXTENSION);
        $parsedFile = null;

        switch ($fileExtension) {
            case 'yaml':
            case 'yml':
                $parsedFile = YamlParser::parse($file);
                break;
            case 'json':
                $parsedFile = JsonParser::parse($file);
                break;
        }

        return new Config($parsedFile);
    }
}
