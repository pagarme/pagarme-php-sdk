
# Create Automatic Anticipation Settings Request

## Structure

`CreateAutomaticAnticipationSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `bool` | Required | - | getEnabled(): bool | setEnabled(bool enabled): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `volumePercentage` | `int` | Required | - | getVolumePercentage(): int | setVolumePercentage(int volumePercentage): void |
| `delay` | `int` | Required | - | getDelay(): int | setDelay(int delay): void |
| `days` | `int[]` | Required | - | getDays(): array | setDays(array days): void |

## Example (as JSON)

```json
{
  "enabled": false,
  "type": "type8",
  "volume_percentage": 208,
  "delay": 82,
  "days": [
    58,
    59
  ]
}
```

