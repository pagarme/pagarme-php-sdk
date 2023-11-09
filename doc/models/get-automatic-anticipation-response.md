
# Get Automatic Anticipation Response

## Structure

`GetAutomaticAnticipationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | - | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `volumePercentage` | `?int` | Optional | - | getVolumePercentage(): ?int | setVolumePercentage(?int volumePercentage): void |
| `delay` | `?int` | Optional | - | getDelay(): ?int | setDelay(?int delay): void |
| `days` | `?(int[])` | Optional | - | getDays(): ?array | setDays(?array days): void |

## Example (as JSON)

```json
{
  "enabled": false,
  "type": "type8",
  "volume_percentage": 178,
  "delay": 112,
  "days": [
    88
  ]
}
```

