<?php

declare(strict_types=1);

namespace UserProfile\Domain\UseCase;

interface DeleteUserInterface
{
    public function deleteUser(int $useId): void;
}