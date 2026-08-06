
# List Customers Response

Response for listing the customers

## Structure

`ListCustomersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetCustomerResponse[])`](../../doc/models/get-customer-response.md) | Optional | The customer object | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListCustomersResponseBuilder;

$listCustomersResponse = ListCustomersResponseBuilder::init()
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

