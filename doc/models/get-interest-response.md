
# Get Interest Response

Interest Response

## Structure

`GetInterestResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `days` | `?int` | Optional | Days | getDays(): ?int | setDays(?int days): void |
| `type` | `?string` | Optional | Type | getType(): ?string | setType(?string type): void |
| `amount` | `?int` | Optional | Amount | getAmount(): ?int | setAmount(?int amount): void |

## Example (as JSON)

```json
{
  "type": "\"percentage\" or \"flat\"",
  "days": 114,
  "amount": 188
}
```

