
# Create Phones Request

## Structure

`CreatePhonesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `homePhone` | [`?CreatePhoneRequest`](../../doc/models/create-phone-request.md) | Optional | - | getHomePhone(): ?CreatePhoneRequest | setHomePhone(?CreatePhoneRequest homePhone): void |
| `mobilePhone` | [`?CreatePhoneRequest`](../../doc/models/create-phone-request.md) | Optional | - | getMobilePhone(): ?CreatePhoneRequest | setMobilePhone(?CreatePhoneRequest mobilePhone): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePhonesRequestBuilder;

$createPhonesRequest = CreatePhonesRequestBuilder::init()
    ->homePhone(
        null
    )
    ->mobilePhone(
        null
    )
    ->build();
```

