namespace App\Accounting\Domain\UseCase;

use App\Accounting\Domain\Model\Invoice;

interface GenerateInvoiceInterface
{
    public function generateInvoice(): Invoice;
}
