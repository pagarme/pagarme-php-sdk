
# Get Payment Link Installment Response

Installment option of a payment link

## Structure

`GetPaymentLinkInstallmentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `?int` | Optional | - | getNumber(): ?int | setNumber(?int number): void |
| `total` | `?int` | Optional | - | getTotal(): ?int | setTotal(?int total): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkInstallmentResponseBuilder;

$getPaymentLinkInstallmentResponse = GetPaymentLinkInstallmentResponseBuilder::init()
    ->number(1)
    ->total(10000)
    ->build();
```

