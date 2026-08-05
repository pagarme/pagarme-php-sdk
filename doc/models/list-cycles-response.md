
# List Cycles Response

Response object for listing subscription cycles

## Structure

`ListCyclesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetPeriodResponse[])`](../../doc/models/get-period-response.md) | Optional | The subscription cycles objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListCyclesResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetPeriodResponseBuilder;

$listCyclesResponse = ListCyclesResponseBuilder::init()
    ->data(
        [
            null,
            GetPeriodResponseBuilder::init()->build(),
            GetPeriodResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

