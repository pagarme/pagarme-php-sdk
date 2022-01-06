
# Get Order Item Response

Response object for getting an order item

## Structure

`GetOrderItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Id | getId(): string | setId(string id): void |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `quantity` | `int` | Required | - | getQuantity(): int | setQuantity(int quantity): void |
| `category` | `string` | Required | Category | getCategory(): string | setCategory(string category): void |
| `code` | `string` | Required | Code | getCode(): string | setCode(string code): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "amount": 46,
  "description": "description0",
  "quantity": 68,
  "category": "category2",
  "code": "code8"
}
```

