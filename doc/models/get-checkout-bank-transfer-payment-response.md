
# Get Checkout Bank Transfer Payment Response

Bank transfer checkout response

## Structure

`GetCheckoutBankTransferPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bank` | `?(string[])` | Optional | bank list response | getBank(): ?array | setBank(?array bank): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCheckoutBankTransferPaymentResponseBuilder;

$getCheckoutBankTransferPaymentResponse = GetCheckoutBankTransferPaymentResponseBuilder::init()
    ->bank(
        [
            'bank3',
            'bank4'
        ]
    )
    ->build();
```

