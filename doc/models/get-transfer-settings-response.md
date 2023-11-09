
# Get Transfer Settings Response

## Structure

`GetTransferSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transferEnabled` | `?bool` | Optional | - | getTransferEnabled(): ?bool | setTransferEnabled(?bool transferEnabled): void |
| `transferInterval` | `?string` | Optional | - | getTransferInterval(): ?string | setTransferInterval(?string transferInterval): void |
| `transferDay` | `?int` | Optional | - | getTransferDay(): ?int | setTransferDay(?int transferDay): void |

## Example (as JSON)

```json
{
  "transfer_enabled": false,
  "transfer_interval": "transfer_interval0",
  "transfer_day": 52
}
```

