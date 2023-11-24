<?php

namespace Safe;

function json_decode(string $json, bool $assoc = false, int $depth = 512, int $flags = 0) {
    $data = \json_decode($json, $assoc, $depth, $flags);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception(json_last_error_msg());
    }
    return $data;
}