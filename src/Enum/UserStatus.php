<?php

declare(strict_types=1);

namespace App\Enum;

enum UserStatus: int
{
    case PENDING = 1;
    case ACTIVATED = 2;
    case BLOCKED = 3;

    public function description(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::ACTIVATED => 'Activated',
            self::BLOCKED => 'Blocked',
        };
    }
}
