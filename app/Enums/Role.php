<?php

namespace App\Enums;

enum Role: string
{
    case ADMIN = 'admin';
    case USER = 'user';
    case EDITOR = 'editor';

    public static function getValues(): array
    {
        return [
            self::ADMIN->value,
            self::USER->value,
            self::EDITOR->value,
        ];
    }
}
