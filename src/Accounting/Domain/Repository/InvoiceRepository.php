<?php

declare(strict_types=1);

namespace Accounting\Domain\Repository;

use Accounting\Domain\Model\Invoice;

interface InvoiceRepositoryInterface
{
    public function save(Invoice $invoice): void;

    public function findById(int $id): ?Invoice;

    public function findAll(): array;

    public function delete(Invoice $invoice): void;
}
