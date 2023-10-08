<?php

declare(strict_types=1);

namespace Subscription\Domain\Repository;

use Subscription\Domain\Model\Subscription;

interface SubscriptionRepositoryInterface
{
    public function save(Subscription $subscription): void;

    public function findById(int $id): ?Subscription;

    public function findAll(): array;

    public function delete(Subscription $subscription): void;
}
