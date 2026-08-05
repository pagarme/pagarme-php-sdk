
# List Increments Response

## Structure

`ListIncrementsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetIncrementResponse[])`](../../doc/models/get-increment-response.md) | Optional | The Increments response | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListIncrementsResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetIncrementResponseBuilder;

$listIncrementsResponse = ListIncrementsResponseBuilder::init()
    ->data(
        [
            null,
            GetIncrementResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

