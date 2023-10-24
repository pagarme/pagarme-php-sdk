
# Get Pricing Scheme Response

Response object for getting a pricing scheme

## Structure

`GetPricingSchemeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `price` | `?int` | Optional | - | getPrice(): ?int | setPrice(?int price): void |
| `schemeType` | `?string` | Optional | - | getSchemeType(): ?string | setSchemeType(?string schemeType): void |
| `priceBrackets` | [`?(GetPriceBracketResponse[])`](../../doc/models/get-price-bracket-response.md) | Optional | - | getPriceBrackets(): ?array | setPriceBrackets(?array priceBrackets): void |
| `minimumPrice` | `?int` | Optional | - | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `percentage` | `?float` | Optional | percentual value used in pricing_scheme Percent | getPercentage(): ?float | setPercentage(?float percentage): void |

## Example (as JSON)

```json
{
  "price": 182,
  "scheme_type": "scheme_type8",
  "price_brackets": [
    {
      "start_quantity": 144,
      "price": 174,
      "end_quantity": 152,
      "overage_price": 166
    }
  ],
  "minimum_price": 170,
  "percentage": 166.36
}
```

