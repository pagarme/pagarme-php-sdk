
# Create Increment Request

Request for creating a new increment

## Structure

`CreateIncrementRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `value` | `float` | Required | The increment value | getValue(): float | setValue(float value): void |
| `incrementType` | `string` | Required | Increment type. Can be either flat or percentage. | getIncrementType(): string | setIncrementType(string incrementType): void |
| `itemId` | `string` | Required | The item where the increment will be applied | getItemId(): string | setItemId(string itemId): void |
| `cycles` | `?int` | Optional | Number of cycles that the increment will be applied | getCycles(): ?int | setCycles(?int cycles): void |
| `description` | `?string` | Optional | Description | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "value": 251.52,
  "increment_type": "increment_type8",
  "item_id": "item_id0",
  "cycles": null,
  "description": null
}
```

