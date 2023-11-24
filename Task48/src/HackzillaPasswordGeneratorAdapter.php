<?php
// composer require hackzilla/password-generator
namespace App\Task48;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class HackzillaPasswordGeneratorAdapter implements PasswordGeneratorInterface
{
    const OPTIONS = [
        'upperCase' => ComputerPasswordGenerator::OPTION_UPPER_CASE,
        'numbers' => ComputerPasswordGenerator::OPTION_NUMBERS,
        'symbols' => ComputerPasswordGenerator::OPTION_SYMBOLS
    ];

    public function generatePassword($length, $options = [])
    {
        $generator = new ComputerPasswordGenerator();
        $generator->setLength($length);

        array_map(fn ($option) => $generator
                    ->setOptionValue(self::OPTIONS[$option], in_array($option, $options)),
                    array_keys(self::OPTIONS));

        return $generator->generatePassword();
    }
}
