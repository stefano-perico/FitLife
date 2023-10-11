<?php

namespace App\Shared\Domain\ValueObject;

use Webmozart\Assert\Assert;

final class Address
{
    public string $number;

    public string $name;

    public string $zipcode;

    public string $city;

    public function __construct(string $number, string $name, string $zipcode, string $city)
    {
        Assert::length($zipcode, 5);

        $this->number = $number;
        $this->name = $name;
        $this->zipcode = $zipcode;
        $this->city = $city;
    }
}
