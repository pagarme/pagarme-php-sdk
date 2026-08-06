
# Update Automatic Anticipation Settings Request

## Structure

`UpdateAutomaticAnticipationSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | - | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `volumePercentage` | `?int` | Optional | - | getVolumePercentage(): ?int | setVolumePercentage(?int volumePercentage): void |
| `delay` | `?int` | Optional | - | getDelay(): ?int | setDelay(?int delay): void |
| `days` | `?int` | Optional | - | getDays(): ?int | setDays(?int days): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateAutomaticAnticipationSettingsRequestBuilder;

$updateAutomaticAnticipationSettingsRequest = UpdateAutomaticAnticipationSettingsRequestBuilder::init()
    ->enabled(false)
    ->type('type4')
    ->volumePercentage(178)
    ->delay(112)
    ->days(20)
    ->build();
```

