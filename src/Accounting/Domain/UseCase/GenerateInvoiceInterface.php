<?php

declare(strict_types=1);

namespace Accounting\Domain\UseCase;

use Accounting\Domain\Model\Invoice;

interface GenerateInvoiceInterface
{
    public function generateInvoice(): Invoice;
}
