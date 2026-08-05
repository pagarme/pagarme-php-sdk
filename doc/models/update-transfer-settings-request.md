
# Update Transfer Settings Request

## Structure

`UpdateTransferSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transferEnabled` | `string` | Required | - | getTransferEnabled(): string | setTransferEnabled(string transferEnabled): void |
| `transferInterval` | `string` | Required | - | getTransferInterval(): string | setTransferInterval(string transferInterval): void |
| `transferDay` | `string` | Required | - | getTransferDay(): string | setTransferDay(string transferDay): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateTransferSettingsRequestBuilder;

$updateTransferSettingsRequest = UpdateTransferSettingsRequestBuilder::init(
    'transfer_enabled8',
    'transfer_interval2',
    'transfer_day2'
)->build();
```

