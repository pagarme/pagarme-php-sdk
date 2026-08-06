
# Create Card Payment Contactless POI Request

## Structure

`CreateCardPaymentContactlessPOIRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `systemName` | `string` | Required | system name | getSystemName(): string | setSystemName(string systemName): void |
| `model` | `string` | Required | model | getModel(): string | setModel(string model): void |
| `provider` | `string` | Required | provider | getProvider(): string | setProvider(string provider): void |
| `serialNumber` | `string` | Required | serial number | getSerialNumber(): string | setSerialNumber(string serialNumber): void |
| `versionNumber` | `string` | Required | version number | getVersionNumber(): string | setVersionNumber(string versionNumber): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCardPaymentContactlessPOIRequestBuilder;

$createCardPaymentContactlessPOIRequest = CreateCardPaymentContactlessPOIRequestBuilder::init(
    'system_name4',
    'model2',
    'provider4',
    'serial_number8',
    'version_number4'
)->build();
```

