
# Create Checkout Credit Card Payment Request

Checkout card payment request

## Structure

`CreateCheckoutCreditCardPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Card invoice text descriptor | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `installments` | [`?(CreateCheckoutCardInstallmentOptionRequest[])`](../../doc/models/create-checkout-card-installment-option-request.md) | Optional | Payment installment options | getInstallments(): ?array | setInstallments(?array installments): void |
| `authentication` | [`?CreatePaymentAuthenticationRequest`](../../doc/models/create-payment-authentication-request.md) | Optional | Creates payment authentication | getAuthentication(): ?CreatePaymentAuthenticationRequest | setAuthentication(?CreatePaymentAuthenticationRequest authentication): void |
| `capture` | `?bool` | Optional | Authorize and capture? | getCapture(): ?bool | setCapture(?bool capture): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutCreditCardPaymentRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutCardInstallmentOptionRequestBuilder;

$createCheckoutCreditCardPaymentRequest = CreateCheckoutCreditCardPaymentRequestBuilder::init()
    ->statementDescriptor('statement_descriptor8')
    ->installments(
        [
            null,
            CreateCheckoutCardInstallmentOptionRequestBuilder::init(
                0,
                0
            )->build()
        ]
    )
    ->authentication(
        null
    )
    ->capture(false)
    ->build();
```

