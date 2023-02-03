
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
  "amount": null,
  "description": null,
  "pricing_scheme": null,
  "price_bracket": null,
  "quantity": null,
  "name": null,
  "subscription_item_id": null
}
```

