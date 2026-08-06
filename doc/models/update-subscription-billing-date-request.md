
# Update Subscription Billing Date Request

Request for updating the due date from a subscription

## Structure

`UpdateSubscriptionBillingDateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nextBillingAt` | `DateTime` | Required | The date when the next subscription billing must occur | getNextBillingAt(): \DateTime | setNextBillingAt(\DateTime nextBillingAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionBillingDateRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$updateSubscriptionBillingDateRequest = UpdateSubscriptionBillingDateRequestBuilder::init(
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

