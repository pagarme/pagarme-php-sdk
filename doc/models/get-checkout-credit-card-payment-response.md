
# Get Checkout Credit Card Payment Response

## Structure

`GetCheckoutCreditCardPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Descrição na fatura | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `installments` | [`?(GetCheckoutCardInstallmentOptionsResponse[])`](../../doc/models/get-checkout-card-installment-options-response.md) | Optional | Parcelas | getInstallments(): ?array | setInstallments(?array installments): void |
| `authentication` | [`?GetPaymentAuthenticationResponse`](../../doc/models/get-payment-authentication-response.md) | Optional | Payment Authentication response | getAuthentication(): ?GetPaymentAuthenticationResponse | setAuthentication(?GetPaymentAuthenticationResponse authentication): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCheckoutCreditCardPaymentResponseBuilder;
use PagarmeApiSDKLib\Models\Builders\GetCheckoutCardInstallmentOptionsResponseBuilder;

$getCheckoutCreditCardPaymentResponse = GetCheckoutCreditCardPaymentResponseBuilder::init()
    ->statementDescriptor('statementDescriptor2')
    ->installments(
        [
            null,
            GetCheckoutCardInstallmentOptionsResponseBuilder::init()
                ->number(null)
                ->total(null)
                ->build(),
            GetCheckoutCardInstallmentOptionsResponseBuilder::init()
                ->number(null)
                ->total(null)
                ->build()
        ]
    )
    ->authentication(
        null
    )
    ->build();
```

