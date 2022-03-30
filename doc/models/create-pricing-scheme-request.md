
# Create Pricing Scheme Request

Request for creating a pricing scheme

## Structure

`CreatePricingSchemeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeType` | `string` | Required | Scheme type | getSchemeType(): string | setSchemeType(string schemeType): void |
| `priceBrackets` | [`CreatePriceBracketRequest[]`](../../doc/models/create-price-bracket-request.md) | Required | Price brackets | getPriceBrackets(): array | setPriceBrackets(array priceBrackets): void |
| `price` | `?int` | Optional | Price | getPrice(): ?int | setPrice(?int price): void |
| `minimumPrice` | `?int` | Optional | Minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `percentage` | `?float` | Optional | percentual value used in pricing_scheme Percent | getPercentage(): ?float | setPercentage(?float percentage): void |

## Example (as JSON)

```json
{
  "scheme_type": "scheme_type0",
  "price_brackets": [
    {
      "start_quantity": 193,
      "price": 125,
      "end_quantity": null,
      "overage_price": null
    },
    {
      "start_quantity": 194,
      "price": 124,
      "end_quantity": null,
      "overage_price": null
    },
    {
      "start_quantity": 195,
      "price": 123,
      "end_quantity": null,
      "overage_price": null
    }
  ],
  "price": null,
  "minimum_price": null,
  "percentage": null
}
```

