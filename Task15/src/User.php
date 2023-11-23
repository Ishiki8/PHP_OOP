<?php

namespace Task15;

class User {
    private string $name = '';
    private array $addresses = [];

    public function __construct(string $name) {
        $this->name = $name;
    }
    
    public function addAddress(User\Address $address){
        $this->addresses[] = $address;
    }

    public function getAddresses(): array {
        return $this->addresses;
    }

    public function getName(): string {
        return $this->name;
    }
}