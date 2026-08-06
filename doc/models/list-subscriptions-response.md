
# List Subscriptions Response

Response object for listing subscriptions

## Structure

`ListSubscriptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetSubscriptionResponse[])`](../../doc/models/get-subscription-response.md) | Optional | The subscription objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListSubscriptionsResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetSubscriptionResponseBuilder;

$listSubscriptionsResponse = ListSubscriptionsResponseBuilder::init()
    ->data(
        [
            null,
            GetSubscriptionResponseBuilder::init()->build(),
            GetSubscriptionResponseBuilder::init()->build()
        ]
    )
    ->paging(
        null
    )
    ->build();
```

