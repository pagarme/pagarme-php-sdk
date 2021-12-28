
# Create Discount Request

Request for creating a new discount

## Structure

`CreateDiscountRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `value` | `float` | Required | The discount value | getValue(): float | setValue(float value): void |
| `discountType` | `string` | Required | Discount type. Can be either flat or percentage. | getDiscountType(): string | setDiscountType(string discountType): void |
| `itemId` | `string` | Required | The item where the discount will be applied | getItemId(): string | setItemId(string itemId): void |
| `cycles` | `?int` | Optional | Number of cycles that the discount will be applied | getCycles(): ?int | setCycles(?int cycles): void |
| `description` | `?string` | Optional | Description | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "value": 251.52,
  "discount_type": "discount_type8",
  "item_id": "item_id0",
  "cycles": null,
  "description": null
}
```

