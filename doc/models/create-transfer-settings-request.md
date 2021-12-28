
# Create Transfer Settings Request

Informações de transferência do recebedor

## Structure

`CreateTransferSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transferEnabled` | `bool` | Required | - | getTransferEnabled(): bool | setTransferEnabled(bool transferEnabled): void |
| `transferInterval` | `string` | Required | - | getTransferInterval(): string | setTransferInterval(string transferInterval): void |
| `transferDay` | `int` | Required | - | getTransferDay(): int | setTransferDay(int transferDay): void |

## Example (as JSON)

```json
{
  "transfer_enabled": false,
  "transfer_interval": "transfer_interval0",
  "transfer_day": 18
}
```

