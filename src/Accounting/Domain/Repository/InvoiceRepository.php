namespace App\Accounting\Domain\Repository;

use App\Accounting\Domain\Entity\Invoice;

interface InvoiceRepositoryInterface
{
    public function save(Invoice $invoice): void;

    public function findById(int $id): ?Invoice;

    public function findAll(): array;

    public function delete(Invoice $invoice): void;
}
