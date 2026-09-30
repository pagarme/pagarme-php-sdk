
# Create Payment Link Installment Request

Installment option for a payment link

## Structure

`CreatePaymentLinkInstallmentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `int` | Required | Number of installments | getNumber(): int | setNumber(int number): void |
| `total` | `int` | Required | Total amount for this number of installments, in cents | getTotal(): int | setTotal(int total): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkInstallmentRequestBuilder;

$createPaymentLinkInstallmentRequest = CreatePaymentLinkInstallmentRequestBuilder::init(
    1,
    10000
)
    ->build();
```

