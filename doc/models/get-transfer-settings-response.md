
# Get Transfer Settings Response

## Structure

`GetTransferSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transferEnabled` | `?bool` | Optional | - | getTransferEnabled(): ?bool | setTransferEnabled(?bool transferEnabled): void |
| `transferInterval` | `?string` | Optional | - | getTransferInterval(): ?string | setTransferInterval(?string transferInterval): void |
| `transferDay` | `?int` | Optional | - | getTransferDay(): ?int | setTransferDay(?int transferDay): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetTransferSettingsResponseBuilder;

$getTransferSettingsResponse = GetTransferSettingsResponseBuilder::init()
    ->transferEnabled(false)
    ->transferInterval('transfer_interval4')
    ->transferDay(156)
    ->build();
```

