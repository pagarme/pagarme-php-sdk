
# List Order Response

Response object for listing order objects

## Structure

`ListOrderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetOrderResponse[])`](../../doc/models/get-order-response.md) | Optional | The order object | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListOrderResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetOrderResponseBuilder;

$listOrderResponse = ListOrderResponseBuilder::init()
    ->data(
        [
            null,
            GetOrderResponseBuilder::init()->build(),
            GetOrderResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

