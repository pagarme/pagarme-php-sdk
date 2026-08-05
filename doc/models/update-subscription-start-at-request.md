
# Update Subscription Start at Request

Request for updating the start date from a subscription

## Structure

`UpdateSubscriptionStartAtRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startAt` | `DateTime` | Required | The date when the subscription periods will start | getStartAt(): \DateTime | setStartAt(\DateTime startAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionStartAtRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$updateSubscriptionStartAtRequest = UpdateSubscriptionStartAtRequestBuilder::init(
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

