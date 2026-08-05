
# List Anticipation Response

Anticipations

## Structure

`ListAnticipationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetAnticipationResponse[])`](../../doc/models/get-anticipation-response.md) | Optional | Anticipations | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListAnticipationResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetAnticipationResponseBuilder;

$listAnticipationResponse = ListAnticipationResponseBuilder::init()
    ->data(
        [
            null,
            GetAnticipationResponseBuilder::init()->build(),
            GetAnticipationResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

