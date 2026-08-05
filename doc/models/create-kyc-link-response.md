
# Create KYC Link Response

KYC Link

## Structure

`CreateKYCLinkResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `base64` | `?string` | Optional | Base64 | getBase64(): ?string | setBase64(?string base64): void |
| `url` | `?string` | Optional | URL | getUrl(): ?string | setUrl(?string url): void |
| `expirationDate` | `?string` | Optional | Expiration Date | getExpirationDate(): ?string | setExpirationDate(?string expirationDate): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateKYCLinkResponseBuilder;

$createKYCLinkResponse = CreateKYCLinkResponseBuilder::init()
    ->base64('base648')
    ->url('url4')
    ->expirationDate('expiration_date4')
    ->build();
```

