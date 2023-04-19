
# Get Price Bracket Response

Response object for getting a price bracket

## Structure

`GetPriceBracketResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startQuantity` | `?int` | Optional | - | getStartQuantity(): ?int | setStartQuantity(?int startQuantity): void |
| `price` | `?int` | Optional | - | getPrice(): ?int | setPrice(?int price): void |
| `endQuantity` | `?int` | Optional | - | getEndQuantity(): ?int | setEndQuantity(?int endQuantity): void |
| `overagePrice` | `?int` | Optional | - | getOveragePrice(): ?int | setOveragePrice(?int overagePrice): void |

## Example (as JSON)

```json
{
  "start_quantity": 46,
  "price": 16,
  "end_quantity": 54,
  "overage_price": 68
}
```

