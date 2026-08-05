
# Create Emv Data Dukpt Decrypt Request

## Structure

`CreateEmvDataDukptDecryptRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ksn` | `string` | Required | Key serial number | getKsn(): string | setKsn(string ksn): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateEmvDataDukptDecryptRequestBuilder;

$createEmvDataDukptDecryptRequest = CreateEmvDataDukptDecryptRequestBuilder::init(
    'ksn2'
)->build();
```

