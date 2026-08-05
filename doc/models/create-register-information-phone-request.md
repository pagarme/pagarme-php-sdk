
# Create Register Information Phone Request

Register Information Phone

## Structure

`CreateRegisterInformationPhoneRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ddd` | `string` | Required | - | getDdd(): string | setDdd(string ddd): void |
| `number` | `string` | Required | - | getNumber(): string | setNumber(string number): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateRegisterInformationPhoneRequestBuilder;

$createRegisterInformationPhoneRequest = CreateRegisterInformationPhoneRequestBuilder::init(
    'ddd2',
    'number0',
    'type8'
)->build();
```

