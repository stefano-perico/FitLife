<?php

namespace App\Shared\Domain\ValueObject;

use Webmozart\Assert\Assert;

final class Email
{
    public string $email;

    public function __construct(string $email)
    {
        Assert::email($email);

        $this->email = $email;
    }
}
