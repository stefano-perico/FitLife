<?php

declare(strict_types=1);

namespace App\Accounting\Domain\Model;

class Invoice
{
    private $id;
    private $customer;
    private array $items;
    private float $total;

    public function __construct($id, $customer, $items, $total)
    {
        $this->id = $id;
        $this->customer = $customer;
        $this->items = $items;
        $this->total = $total;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
