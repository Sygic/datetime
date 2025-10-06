<?php

declare(strict_types=1);

namespace Pauci\DateTime;

class FrozenClock implements ClockInterface
{
    public function __construct(private DateTime $now = new DateTime())
    {
    }

    public function set(DateTime $now): void
    {
        $this->now = $now;
    }

    public function modify(string $modifier): void
    {
        $now = $this->now->modify($modifier);

        $this->now = $now;
    }

    #[\Override]
    public function now(): DateTime
    {
        return $this->now;
    }
}
