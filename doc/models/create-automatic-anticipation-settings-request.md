
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateAutomaticAnticipationSettingsRequestBuilder;

$createAutomaticAnticipationSettingsRequest = CreateAutomaticAnticipationSettingsRequestBuilder::init(
    false,
    'type4',
    24,
    10,
    [
        242,
        243
    ]
)->build();
```

