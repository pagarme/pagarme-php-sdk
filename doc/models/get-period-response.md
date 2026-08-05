
# Get Period Response

Response object for getting a period

## Structure

`GetPeriodResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startAt` | `?DateTime` | Optional | - | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `endAt` | `?DateTime` | Optional | - | getEndAt(): ?\DateTime | setEndAt(?\DateTime endAt): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `billingAt` | `?DateTime` | Optional | - | getBillingAt(): ?\DateTime | setBillingAt(?\DateTime billingAt): void |
| `subscription` | [`?GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Optional | - | getSubscription(): ?GetSubscriptionResponse | setSubscription(?GetSubscriptionResponse subscription): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `duration` | `?int` | Optional | - | getDuration(): ?int | setDuration(?int duration): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `cycle` | `?int` | Optional | - | getCycle(): ?int | setCycle(?int cycle): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPeriodResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getPeriodResponse = GetPeriodResponseBuilder::init()
    ->startAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->endAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->id('id4')
    ->billingAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->subscription(
        null
    )
    ->build();
```

