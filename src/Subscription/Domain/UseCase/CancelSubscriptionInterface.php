<?php

declare(strict_types=1);

namespace Subscription\Domain\UseCase;

interface CancelSubscriptionInterface
{
    public function cancelSubscription(int $subscriptionId): void;
}
