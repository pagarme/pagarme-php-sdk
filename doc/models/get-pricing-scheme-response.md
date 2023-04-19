
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
  "price": 16,
  "scheme_type": "scheme_type0",
  "price_brackets": [
    {
      "start_quantity": 193,
      "price": 125,
      "end_quantity": 201,
      "overage_price": 215
    },
    {
      "start_quantity": 194,
      "price": 124,
      "end_quantity": 202,
      "overage_price": 216
    },
    {
      "start_quantity": 195,
      "price": 123,
      "end_quantity": 203,
      "overage_price": 217
    }
  ],
  "minimum_price": 176,
  "percentage": 4.18
}
```

