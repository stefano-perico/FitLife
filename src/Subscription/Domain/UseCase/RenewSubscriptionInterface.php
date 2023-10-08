<?php

declare(strict_types=1);

namespace App\Subscription\Domain\UseCase;

use App\Subscription\Domain\Model\Subscription;

interface RenewSubscriptionInterface
{
    public function renewSubscription(int $subscriptionId): Subscription;
}