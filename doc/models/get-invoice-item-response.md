
# Get Invoice Item Response

Response object for getting an invoice item

## Structure

`GetInvoiceItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `pricingScheme` | [`?GetPricingSchemeResponse`](../../doc/models/get-pricing-scheme-response.md) | Optional | - | getPricingScheme(): ?GetPricingSchemeResponse | setPricingScheme(?GetPricingSchemeResponse pricingScheme): void |
| `priceBracket` | [`?GetPriceBracketResponse`](../../doc/models/get-price-bracket-response.md) | Optional | - | getPriceBracket(): ?GetPriceBracketResponse | setPriceBracket(?GetPriceBracketResponse priceBracket): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `subscriptionItemId` | `?string` | Optional | Subscription Item Id | getSubscriptionItemId(): ?string | setSubscriptionItemId(?string subscriptionItemId): void |

## Example (as JSON)

```json
{
  "amount": 212,
  "description": "description6",
  "pricing_scheme": {
    "price": 166,
    "scheme_type": "scheme_type8",
    "price_brackets": [
      {
        "start_quantity": 144,
        "price": 174,
        "end_quantity": 152,
        "overage_price": 166
      },
      {
        "start_quantity": 144,
        "price": 174,
        "end_quantity": 152,
        "overage_price": 166
      },
      {
        "start_quantity": 144,
        "price": 174,
        "end_quantity": 152,
        "overage_price": 166
      }
    ],
    "minimum_price": 6,
    "percentage": 251.76
  },
  "price_bracket": {
    "start_quantity": 164,
    "price": 154,
    "end_quantity": 172,
    "overage_price": 186
  },
  "quantity": 70
}
```

