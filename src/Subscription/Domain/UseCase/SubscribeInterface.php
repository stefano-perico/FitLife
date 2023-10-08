<?php

declare(strict_types=1);

namespace Subscription\Domain\UseCase;

use Subscription\Domain\Model\Subscription;

interface SubscribeInterface
{
    public function subscribe(): Subscription;
}
