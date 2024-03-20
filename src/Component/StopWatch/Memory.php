<?php

declare(strict_types=1);

namespace App\Component\StopWatch;

enum Memory: string
{
    case BYTE = 'B';
    case KILO_BYTE = 'KB';
    case MEGA_BYTE = 'MB';
}
