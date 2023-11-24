<?php

namespace App;

class SmartSplFileInfo extends \SplFileInfo {
    public function getSize(string $unit = 'B'): int {
        switch ($unit) {
            case 'B':
                return parent::getSize();
            case 'b':
                return parent::getSize() * 8;
            default:
                throw new \Exception;
        }
    }
}