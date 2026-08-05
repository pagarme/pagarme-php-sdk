
# Create Pix Payment Request

Contains information to create a pix payment

## Structure

`CreatePixPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?DateTime` | Optional | Datetime when pix payment will expire | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `expiresIn` | `?int` | Optional | Seconds until pix payment expires | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | Pix additional information | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePixPaymentRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;
use PagarmeApiSDKLib\Models\Builders\PixAdditionalInformationBuilder;

$createPixPaymentRequest = CreatePixPaymentRequestBuilder::init()
    ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->expiresIn(54)
    ->additionalInformation(
        [
            null,
            PixAdditionalInformationBuilder::init()->build(),
            PixAdditionalInformationBuilder::init()->build()
        ]
    )->build();
```

