<?php

namespace Task24;

class PasswordValidator {
    const OPTIONS = [
        "minLength" => 8,
        "containNumbers" => false
    ];

    private array $options = self::OPTIONS;

    public function __construct(?array $options = null) { 
        if (isset($options)) { 
            $this->options = array_merge(self::OPTIONS, $options);
        }
    }

    public function validate(string $password): array {
        $errors = [];
        
        if (strlen($password) < $this->options["minLength"]) {
            $errors["minLength"] = "too small";
        }

        if ($this->options["containNumbers"] && !strpbrk($password, '0123456789')) {
            $errors["containNumbers"] = "should contain at least one number";
        }

        return $errors;
    }
}