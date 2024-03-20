<?php

declare(strict_types=1);

namespace App\Component\StopWatch;

enum Duration: string
{
    case MILLISECOND = 'ms';
    case SECOND = 's';
    case MINUTE = 'i';
}
