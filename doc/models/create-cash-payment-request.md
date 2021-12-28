
# Create Cash Payment Request

## Structure

`CreateCashPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `confirm` | `bool` | Required | Indicates whether cash collection will be confirmed in the act of creation | getConfirm(): bool | setConfirm(bool confirm): void |

## Example (as JSON)

```json
{
  "description": "description0",
  "confirm": false
}
```

