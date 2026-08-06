
# Get Phones Response

## Structure

`GetPhonesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `homePhone` | [`?GetPhoneResponse`](../../doc/models/get-phone-response.md) | Optional | - | getHomePhone(): ?GetPhoneResponse | setHomePhone(?GetPhoneResponse homePhone): void |
| `mobilePhone` | [`?GetPhoneResponse`](../../doc/models/get-phone-response.md) | Optional | - | getMobilePhone(): ?GetPhoneResponse | setMobilePhone(?GetPhoneResponse mobilePhone): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPhonesResponseBuilder;

$getPhonesResponse = GetPhonesResponseBuilder::init()
    ->homePhone(
        null
    )
    ->mobilePhone(
        null
    )
    ->build();
```

