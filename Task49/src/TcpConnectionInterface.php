<?php

namespace App\Task49;

interface TcpConnectionInterface
{
    public function __construct($ip, $port);
    public function getCurrentState();
    public function connect();
    public function disconnect();
    public function write($data);
}
