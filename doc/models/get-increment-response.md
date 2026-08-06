
# Get Increment Response

Response object for getting a increment

## Structure

`GetIncrementResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `value` | `?float` | Optional | - | getValue(): ?float | setValue(?float value): void |
| `incrementType` | `?string` | Optional | - | getIncrementType(): ?string | setIncrementType(?string incrementType): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `cycles` | `?int` | Optional | - | getCycles(): ?int | setCycles(?int cycles): void |
| `deletedAt` | `?DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `subscription` | [`?GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Optional | - | getSubscription(): ?GetSubscriptionResponse | setSubscription(?GetSubscriptionResponse subscription): void |
| `subscriptionItem` | [`?GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md) | Optional | The Subscription Item | getSubscriptionItem(): ?GetSubscriptionItemResponse | setSubscriptionItem(?GetSubscriptionItemResponse subscriptionItem): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetIncrementResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getIncrementResponse = GetIncrementResponseBuilder::init()
    ->id('id4')
    ->value(191.36)
    ->incrementType('increment_type6')
    ->status('status6')
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

