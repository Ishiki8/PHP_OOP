<?php

namespace App\Task49\states;

class Disconnected
{
    public function disconnect() {
        throw new \Exception();
    }

    public function __toString() {
        return 'disconnected';
    }

    public function connect() {
        return new Connected();
    }

    public function write($data) {
        throw new \Exception();
    }
}
