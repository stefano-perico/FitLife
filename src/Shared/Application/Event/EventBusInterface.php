<?php

declare(strict_types=1);

namespace App\Shared\Application\Event;

use \Shared\Application\Command\CommandInterface;

interface EventBusInterface
{
    public function event(CommandInterface $command): mixed;
}
