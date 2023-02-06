
# Get Subscription Item Response

## Structure

`GetSubscriptionItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `pricingScheme` | [`?GetPricingSchemeResponse`](../../doc/models/get-pricing-scheme-response.md) | Optional | - | getPricingScheme(): ?GetPricingSchemeResponse | setPricingScheme(?GetPricingSchemeResponse pricingScheme): void |
| `discounts` | [`?(GetDiscountResponse[])`](../../doc/models/get-discount-response.md) | Optional | - | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `increments` | [`?(GetIncrementResponse[])`](../../doc/models/get-increment-response.md) | Optional | - | getIncrements(): ?array | setIncrements(?array increments): void |
| `subscription` | [`?GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Optional | - | getSubscription(): ?GetSubscriptionResponse | setSubscription(?GetSubscriptionResponse subscription): void |
| `name` | `?string` | Optional | Item name | getName(): ?string | setName(?string name): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `cycles` | `?int` | Optional | - | getCycles(): ?int | setCycles(?int cycles): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |

## Example (as JSON)

```json
{
  "id": null,
  "description": null,
  "status": null,
  "created_at": null,
  "updated_at": null,
  "pricing_scheme": null,
  "discounts": null,
  "increments": null,
  "subscription": null,
  "name": null,
  "quantity": null,
  "cycles": null,
  "deleted_at": null
}
```

