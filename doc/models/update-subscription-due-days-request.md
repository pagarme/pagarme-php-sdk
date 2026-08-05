
# Update Subscription Due Days Request

## Structure

`UpdateSubscriptionDueDaysRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `boletoDueDays` | `int` | Required | - | getBoletoDueDays(): int | setBoletoDueDays(int boletoDueDays): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionDueDaysRequestBuilder;

$updateSubscriptionDueDaysRequest = UpdateSubscriptionDueDaysRequestBuilder::init(
    78
)->build();
```

