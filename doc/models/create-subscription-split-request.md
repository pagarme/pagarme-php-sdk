
# Create Subscription Split Request

## Structure

`CreateSubscriptionSplitRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `bool` | Required | Defines if the split is enabled | getEnabled(): bool | setEnabled(bool enabled): void |
| `rules` | [`CreateSplitRequest[]`](../../doc/models/create-split-request.md) | Required | Split | getRules(): array | setRules(array rules): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateSubscriptionSplitRequestBuilder;

$createSubscriptionSplitRequest = CreateSubscriptionSplitRequestBuilder::init(
    false,
    [
        null
    ]
)->build();
```

