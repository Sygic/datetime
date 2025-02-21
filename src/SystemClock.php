<?php

declare(strict_types=1);

namespace Pauci\DateTime;

class SystemClock implements ClockInterface
{
    #[\Override]
    public function now(): DateTime
    {
        return new DateTime();
    }
}
