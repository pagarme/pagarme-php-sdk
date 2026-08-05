
# Create Checkout Debit Card Payment Request

Checkout credit card payment request

## Structure

`CreateCheckoutDebitCardPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Card invoice text descriptor | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `authentication` | [`CreatePaymentAuthenticationRequest`](../../doc/models/create-payment-authentication-request.md) | Required | Creates payment authentication | getAuthentication(): CreatePaymentAuthenticationRequest | setAuthentication(CreatePaymentAuthenticationRequest authentication): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutDebitCardPaymentRequestBuilder;

$createCheckoutDebitCardPaymentRequest = CreateCheckoutDebitCardPaymentRequestBuilder::init(
    null
)
    ->statementDescriptor('statement_descriptor8')
    ->build();
```

