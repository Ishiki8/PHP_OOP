<?php

namespace App\Task49\states;

class Connected
{
    public function connect() {
        throw new \Exception();
    }

    public function __toString() {
        return 'connected';
    }

    public function disconnect() {
        return new Disconnected();
    }

    public function write($data) {

    }
}
