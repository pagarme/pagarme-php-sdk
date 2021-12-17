
# Create Confirm Payment Request

## Structure

`CreateConfirmPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `amount` | `?int` | Optional | Amount | getAmount(): ?int | setAmount(?int amount): void |
| `code` | `string` | Required | Code reference | getCode(): string | setCode(string code): void |

## Example (as JSON)

```json
{
  "description": "description0",
  "Amount": null,
  "Code": "Code0"
}
```

