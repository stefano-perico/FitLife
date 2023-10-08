<?php

declare(strict_types=1);

namespace App\Subscription\Domain\UseCase;

interface CancelSubscriptionInterface
{
    public function cancelSubscription(int $subscriptionId): void;
}
