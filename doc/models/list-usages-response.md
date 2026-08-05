
# List Usages Response

Response model for listing the usages from a subscription item

## Structure

`ListUsagesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetUsageResponse[])`](../../doc/models/get-usage-response.md) | Optional | The usage objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListUsagesResponseBuilder;

$listUsagesResponse = ListUsagesResponseBuilder::init()
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

