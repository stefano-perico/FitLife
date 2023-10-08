<?php

declare(strict_types=1);

namespace App\Subscription\Domain\UseCase;

use App\Subscription\Domain\Model\Subscription;

interface SubscribeInterface
{
    public function subscribe(): Subscription;
}
