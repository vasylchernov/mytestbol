<?php

namespace App\Enums;

enum MyEnumType : string
{
    case ex = 'EX';
    case in = 'IN';

    public function typeToString(): string
    {
        return match ($this) {
            self::ex =>'MyTestType::ex',
            self::in =>'MyTestType::in',
            default => 'err'
        };
    }
}
