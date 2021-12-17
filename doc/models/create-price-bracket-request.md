
# Create Price Bracket Request

Request for creating a price bracket

## Structure

`CreatePriceBracketRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startQuantity` | `int` | Required | Start quantity | getStartQuantity(): int | setStartQuantity(int startQuantity): void |
| `price` | `int` | Required | Price | getPrice(): int | setPrice(int price): void |
| `endQuantity` | `?int` | Optional | End quantity | getEndQuantity(): ?int | setEndQuantity(?int endQuantity): void |
| `overagePrice` | `?int` | Optional | Overage price | getOveragePrice(): ?int | setOveragePrice(?int overagePrice): void |

## Example (as JSON)

```json
{
  "start_quantity": 46,
  "price": 16,
  "end_quantity": null,
  "overage_price": null
}
```

