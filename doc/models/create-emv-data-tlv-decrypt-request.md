
# Create Emv Data Tlv Decrypt Request

## Structure

`CreateEmvDataTlvDecryptRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tag` | `string` | Required | Emv tag | getTag(): string | setTag(string tag): void |
| `lenght` | `string` | Required | Emv lenght | getLenght(): string | setLenght(string lenght): void |
| `value` | `string` | Required | Emv value | getValue(): string | setValue(string value): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateEmvDataTlvDecryptRequestBuilder;

$createEmvDataTlvDecryptRequest = CreateEmvDataTlvDecryptRequestBuilder::init(
    'tag8',
    'lenght4',
    'value6'
)->build();
```

