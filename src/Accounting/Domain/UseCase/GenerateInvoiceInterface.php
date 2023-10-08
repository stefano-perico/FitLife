<?php

declare(strict_types=1);

namespace App\Accounting\Domain\UseCase;

use App\Accounting\Domain\Model\Invoice;

interface GenerateInvoiceInterface
{
    public function generateInvoice(): Invoice;
}
