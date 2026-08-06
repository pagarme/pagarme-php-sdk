
# List Cards Response

Response object for listing cards

## Structure

`ListCardsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetCardResponse[])`](../../doc/models/get-card-response.md) | Optional | The card objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListCardsResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetCardResponseBuilder;

$listCardsResponse = ListCardsResponseBuilder::init()
    ->data(
        [
            null,
            GetCardResponseBuilder::init()->build(),
            GetCardResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

