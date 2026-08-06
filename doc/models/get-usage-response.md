
# Get Usage Response

Response object for getting a usage

## Structure

`GetUsageResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id | getId(): ?string | setId(?string id): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `description` | `?string` | Optional | Description | getDescription(): ?string | setDescription(?string description): void |
| `usedAt` | `?DateTime` | Optional | Used at | getUsedAt(): ?\DateTime | setUsedAt(?\DateTime usedAt): void |
| `createdAt` | `?DateTime` | Optional | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `status` | `?string` | Optional | Status | getStatus(): ?string | setStatus(?string status): void |
| `deletedAt` | `?DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `subscriptionItem` | [`?GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md) | Optional | Subscription item | getSubscriptionItem(): ?GetSubscriptionItemResponse | setSubscriptionItem(?GetSubscriptionItemResponse subscriptionItem): void |
| `code` | `?string` | Optional | Identification code in the client system | getCode(): ?string | setCode(?string code): void |
| `group` | `?string` | Optional | Identification group in the client system | getGroup(): ?string | setGroup(?string group): void |
| `amount` | `?int` | Optional | Field used in item scheme type 'Percent' | getAmount(): ?int | setAmount(?int amount): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetUsageResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getUsageResponse = GetUsageResponseBuilder::init()
    ->id('id6')
    ->quantity(226)
    ->description('description6')
    ->usedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

