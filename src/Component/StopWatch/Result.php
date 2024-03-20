<?php

declare(strict_types=1);

namespace App\Component\StopWatch;

readonly class Result
{
    public function __construct(private float $duration, private int $memory)
    {
    }

    public function getDuration(Duration $format = Duration::SECOND, int $precision = 2): float
    {
        $duration = match ($format) {
            Duration::MILLISECOND => $this->duration,
            Duration::SECOND => $this->duration / 1000,
            Duration::MINUTE => $this->duration / 1000 / 60,
        };

        return round($duration, $precision);
    }

    public function getMemory(Memory $format = Memory::MEGA_BYTE, int $precision = 2): float
    {
        $memory = match ($format) {
            Memory::BYTE => $this->memory,
            Memory::KILO_BYTE => $this->memory / 1024,
            Memory::MEGA_BYTE => $this->memory / 1024 / 1024,
        };

        return round($memory, $precision);
    }
}
