
# List Recipient Response

Response for the listing recipient method

## Structure

`ListRecipientResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetRecipientResponse[])`](../../doc/models/get-recipient-response.md) | Optional | Recipients | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListRecipientResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetRecipientResponseBuilder;

$listRecipientResponse = ListRecipientResponseBuilder::init()
    ->data(
        [
            null,
            GetRecipientResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

