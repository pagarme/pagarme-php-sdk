
# Update Plan Item Request

Request for updating a plan item

## Structure

`UpdatePlanItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Item name | getName(): string | setName(string name): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `status` | `string` | Required | Item status | getStatus(): string | setStatus(string status): void |
| `pricingScheme` | [`UpdatePricingSchemeRequest`](../../doc/models/update-pricing-scheme-request.md) | Required | Pricing scheme | getPricingScheme(): UpdatePricingSchemeRequest | setPricingScheme(UpdatePricingSchemeRequest pricingScheme): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `cycles` | `?int` | Optional | Number of cycles that the item will be charged | getCycles(): ?int | setCycles(?int cycles): void |

## Example (as JSON)

```json
{
  "name": "name6",
  "description": "description6",
  "status": "status8",
  "pricing_scheme": {
    "scheme_type": "scheme_type8",
    "price_brackets": [
      {
        "start_quantity": 144,
        "price": 174,
        "end_quantity": 152,
        "overage_price": 166
      }
    ],
    "price": 166,
    "minimum_price": 6,
    "percentage": 251.76
  },
  "quantity": 200,
  "cycles": 36
}
```

