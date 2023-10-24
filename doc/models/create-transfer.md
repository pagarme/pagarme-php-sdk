
# Create Transfer

## Structure

`CreateTransfer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `sourceId` | `string` | Required | - | getSourceId(): string | setSourceId(string sourceId): void |
| `targetId` | `string` | Required | - | getTargetId(): string | setTargetId(string targetId): void |
| `metadata` | `?(string[])` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "amount": 252,
  "source_id": "source_id6",
  "target_id": "target_id8",
  "metadata": [
    "metadata1",
    "metadata2"
  ]
}
```

