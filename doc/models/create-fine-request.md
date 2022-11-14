
# Create Fine Request

Fine Request

## Structure

`CreateFineRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `days` | `int` | Required | Days | getDays(): int | setDays(int days): void |
| `type` | `string` | Required | Type | getType(): string | setType(string type): void |
| `amount` | `int` | Required | Amount | getAmount(): int | setAmount(int amount): void |

## Example (as JSON)

```json
{
  "days": null,
  "type": "\"percentage\" or \"flat\"",
  "amount": null
}
```

