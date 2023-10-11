<?php

declare(strict_types=1);

namespace UserProfile\Domain\Model;

use App\Shared\Domain\ValueObject\Address;
use App\Shared\Domain\ValueObject\Email;

final class User {
    private string $username;

    private Email $email;

    private Address $address;

    public function __construct(string $username, Email $email, Address $address)
    {
        $this->username = $username;
        $this->email = $email;
        $this->address = $address;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
