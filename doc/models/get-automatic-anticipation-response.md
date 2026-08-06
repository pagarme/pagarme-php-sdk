
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetAutomaticAnticipationResponseBuilder;

$getAutomaticAnticipationResponse = GetAutomaticAnticipationResponseBuilder::init()
    ->enabled(false)
    ->type('type4')
    ->volumePercentage(86)
    ->delay(204)
    ->days(
        [
            180,
            181,
            182
        ]
    )
    ->build();
```

