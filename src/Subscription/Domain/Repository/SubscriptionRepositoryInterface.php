<?php

declare(strict_types=1);

namespace App\Subscription\Domain\Repository;

use App\Subscription\Domain\Model\Subscription;

interface SubscriptionRepositoryInterface
{
    public function save(Subscription $subscription): void;

    public function findById(int $id): ?Subscription;

    public function findAll(): array;

    public function delete(Subscription $subscription): void;
}
