<?php

declare(strict_types=1);

namespace App\Component\StopWatch;

use Symfony\Component\Stopwatch\Stopwatch as SymfonyStopwatch;

class Stopwatch
{
    public function __construct(private SymfonyStopwatch $stopwatch)
    {
    }

    public function start(string $name): void
    {
        $this->stopwatch->start($name);
    }

    public function stop(string $name): Result
    {
        $event = $this->stopwatch->stop($name);

        return new Result($event->getDuration(), $event->getMemory());
    }
}
