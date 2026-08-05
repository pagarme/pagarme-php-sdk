
# Create Phone Request

## Structure

`CreatePhoneRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `countryCode` | `?string` | Optional | - | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `areaCode` | `?string` | Optional | - | getAreaCode(): ?string | setAreaCode(?string areaCode): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePhoneRequestBuilder;

$createPhoneRequest = CreatePhoneRequestBuilder::init()
    ->countryCode('country_code2')
    ->number('number4')
    ->areaCode('area_code8')
    ->type('Type8')
    ->build();
```

