
# Create Emv Decrypt Request

## Structure

`CreateEmvDecryptRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `iccData` | `string` | Required | - | getIccData(): string | setIccData(string iccData): void |
| `cardSequenceNumber` | `string` | Required | - | getCardSequenceNumber(): string | setCardSequenceNumber(string cardSequenceNumber): void |
| `data` | [`CreateEmvDataDecryptRequest`](../../doc/models/create-emv-data-decrypt-request.md) | Required | - | getData(): CreateEmvDataDecryptRequest | setData(CreateEmvDataDecryptRequest data): void |
| `poi` | [`?CreateCardPaymentContactlessPOIRequest`](../../doc/models/create-card-payment-contactless-poi-request.md) | Optional | - | getPoi(): ?CreateCardPaymentContactlessPOIRequest | setPoi(?CreateCardPaymentContactlessPOIRequest poi): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateEmvDecryptRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateEmvDataDecryptRequestBuilder;

$createEmvDecryptRequest = CreateEmvDecryptRequestBuilder::init(
    '',
    '',
    CreateEmvDataDecryptRequestBuilder::init(
        '',
        [
            null
        ]
    )
        ->dukpt(
            null
        )
        ->build()
)
    ->poi(
        null
    )
    ->build();
```

