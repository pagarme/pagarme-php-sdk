
# Create Cancel Charge Split Rules Request

Creates a refund with split rules

## Structure

`CreateCancelChargeSplitRulesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The split rule gateway id | getId(): string | setId(string id): void |
| `amount` | `int` | Required | The split rule amount | getAmount(): int | setAmount(int amount): void |
| `type` | `string` | Required | The amount type (flat ou percentage) | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "Amount": 156,
  "type": "type0"
}
```

