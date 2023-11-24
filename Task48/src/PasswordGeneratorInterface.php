<?php

namespace App\Task48;

interface PasswordGeneratorInterface
{
    public function generatePassword($length, $options);
}
