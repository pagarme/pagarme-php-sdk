
# Create Order Item Request

Request for creating an order item

## Structure

`CreateOrderItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Amount | getAmount(): int | setAmount(int amount): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `quantity` | `int` | Required | Quantity | getQuantity(): int | setQuantity(int quantity): void |
| `category` | `string` | Required | Category | getCategory(): string | setCategory(string category): void |
| `code` | `?string` | Optional | The item code passed by the client | getCode(): ?string | setCode(?string code): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "description": "description0",
  "quantity": 68,
  "category": "category2",
  "code": null
}
```

