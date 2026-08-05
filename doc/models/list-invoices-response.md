
# List Invoices Response

Response object for listing invoices

## Structure

`ListInvoicesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetInvoiceResponse[])`](../../doc/models/get-invoice-response.md) | Optional | The Invoice objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListInvoicesResponseBuilder;

$listInvoicesResponse = ListInvoicesResponseBuilder::init()
    ->data(
        [
            null
        ]
    )
    ->paging(
        null
    )
    ->build();
```

