
# Create Checkout Pix Payment Request

Checkout pix payment request

## Structure

`CreateCheckoutPixPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?DateTime` | Optional | Expires at | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `expiresIn` | `?int` | Optional | Expires in | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | Additional information | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutPixPaymentRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;
use PagarmeApiSDKLib\Models\Builders\PixAdditionalInformationBuilder;

$createCheckoutPixPaymentRequest = CreateCheckoutPixPaymentRequestBuilder::init()
    ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->expiresIn(68)
    ->additionalInformation(
        [
            null,
            PixAdditionalInformationBuilder::init()->build()
        ]
    )->build();
```

