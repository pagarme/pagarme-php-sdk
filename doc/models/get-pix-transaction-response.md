
# Get Pix Transaction Response

Response object when getting a pix transaction

## Structure

`GetPixTransactionResponse`

## Inherits From

[`GetTransactionResponse`](../../doc/models/get-transaction-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `qrCode` | `?string` | Optional | - | getQrCode(): ?string | setQrCode(?string qrCode): void |
| `qrCodeUrl` | `?string` | Optional | - | getQrCodeUrl(): ?string | setQrCodeUrl(?string qrCodeUrl): void |
| `expiresAt` | `?DateTime` | Optional | - | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | - | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |
| `endToEndId` | `?string` | Optional | - | getEndToEndId(): ?string | setEndToEndId(?string endToEndId): void |
| `payer` | [`?GetPixPayerResponse`](../../doc/models/get-pix-payer-response.md) | Optional | - | getPayer(): ?GetPixPayerResponse | setPayer(?GetPixPayerResponse payer): void |
| `pixProviderTid` | `?string` | Optional | Pix provider TID | getPixProviderTid(): ?string | setPixProviderTid(?string pixProviderTid): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPixTransactionResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;
use PagarmeApiSDKLib\Models\Builders\PixAdditionalInformationBuilder;

$getPixTransactionResponse = GetPixTransactionResponseBuilder::init()
    ->gatewayId('gateway_id8')
    ->amount(40)
    ->status('status6')
    ->success(false)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->qrCode('qr_code6')
    ->qrCodeUrl('qr_code_url2')
    ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->additionalInformation(
        [
            null,
            PixAdditionalInformationBuilder::init()->build()
        ]
    )
    ->endToEndId('end_to_end_id0')
    ->build();
```

