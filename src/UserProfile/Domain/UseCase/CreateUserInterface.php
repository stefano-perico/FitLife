<?php

declare(strict_types=1);

namespace UserProfile\Domain\UseCase;

use UserProfile\Domain\Model\User;

interface CreateUserInterface
{
    public function createUser(User $user): User;
}