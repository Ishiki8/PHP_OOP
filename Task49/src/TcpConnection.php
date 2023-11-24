<?php

namespace App\Task49;

use App\Task49\states\Disconnected;

class TcpConnection implements TcpConnectionInterface
{
    private $ip;
    private $port;
    private $state;

    public function __construct($ip, $port) {
        $this->ip = $ip;
        $this->port = $port;
        $this->state = new Disconnected();
    }

    public function getCurrentState() {
        return $this->state;
    }

    public function connect() {
        $this->state = $this->state->connect();
    }

    public function disconnect() {
        $this->state = $this->state->disconnect();
    }

    public function write($data) {
        $this->state->write($data);
    }
}
