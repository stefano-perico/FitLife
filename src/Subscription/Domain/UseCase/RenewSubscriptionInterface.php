<?php

declare(strict_types=1);

namespace Subscription\Domain\UseCase;

use Subscription\Domain\Model\Subscription;

interface RenewSubscriptionInterface
{
    public function renewSubscription(int $subscriptionId): Subscription;
}