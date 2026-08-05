
# Create Register Information Base Request

Request object for RegisterInformation.

## Structure

`CreateRegisterInformationBaseRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `document` | `string` | Required | - | getDocument(): string | setDocument(string document): void |
| `type` | `string` | Required | "individual" ou "corporation" | getType(): string | setType(string type): void |
| `siteUrl` | `?string` | Optional | - | getSiteUrl(): ?string | setSiteUrl(?string siteUrl): void |
| `phoneNumbers` | [`CreateRegisterInformationPhoneRequest[]`](../../doc/models/create-register-information-phone-request.md) | Required | - | getPhoneNumbers(): array | setPhoneNumbers(array phoneNumbers): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateRegisterInformationBaseRequestBuilder;

$createRegisterInformationBaseRequest = CreateRegisterInformationBaseRequestBuilder::init(
    '',
    '',
    '',
    [
        null
    ]
)
    ->siteUrl('site_url6')
    ->build();
```

