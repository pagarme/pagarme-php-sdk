
# Get Checkout Pix Payment Response

Checkout pix payment response

## Structure

`GetCheckoutPixPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?DateTime` | Optional | Expires at | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `additionalInformation` | [`?(PixAdditionalInformation[])`](../../doc/models/pix-additional-information.md) | Optional | Additional information | getAdditionalInformation(): ?array | setAdditionalInformation(?array additionalInformation): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCheckoutPixPaymentResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getCheckoutPixPaymentResponse = GetCheckoutPixPaymentResponseBuilder::init()
    ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->additionalInformation(
        [
            null
        ]
    )
    ->build();
```

