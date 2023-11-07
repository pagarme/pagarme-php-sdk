
# Get Plan Item Response

Response object for getting a plan item

## Structure

`GetPlanItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `pricingScheme` | [`?GetPricingSchemeResponse`](../../doc/models/get-pricing-scheme-response.md) | Optional | - | getPricingScheme(): ?GetPricingSchemeResponse | setPricingScheme(?GetPricingSchemeResponse pricingScheme): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `plan` | [`?GetPlanResponse`](../../doc/models/get-plan-response.md) | Optional | - | getPlan(): ?GetPlanResponse | setPlan(?GetPlanResponse plan): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `cycles` | `?int` | Optional | - | getCycles(): ?int | setCycles(?int cycles): void |
| `deletedAt` | `?DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |

## Example (as JSON)

```json
{
  "id": "id8",
  "name": "name8",
  "status": "status0",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z"
}
```

