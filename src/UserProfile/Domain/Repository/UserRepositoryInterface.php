<?php

declare(strict_types=1);

namespace UserProfile\Domain\Repository;

use UserProfile\Domain\Model\User;

interface UserRepositoryInterface
{
    public function save(User $user): void;
    public function findById(int $id): ?User;
    public function findAll(): array;
    public function delete(User $user): void;
}