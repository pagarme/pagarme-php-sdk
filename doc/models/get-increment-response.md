
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

## Example (as JSON)

```json
{
  "id": "id0",
  "value": 167.72,
  "increment_type": "increment_type2",
  "status": "status2",
  "created_at": "2016-03-13T12:52:32.123Z"
}
```

