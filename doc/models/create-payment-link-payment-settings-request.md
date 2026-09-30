
# Create Payment Link Payment Settings Request

Payment settings for creating a payment link

## Structure

`CreatePaymentLinkPaymentSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptedPaymentMethods` | `string[]` | Required | Accepted payment methods (credit_card, boleto, pix) | getAcceptedPaymentMethods(): array | setAcceptedPaymentMethods(array acceptedPaymentMethods): void |
| `statementDescriptor` | `?string` | Optional | Text shown on the card statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `creditCardSettings` | [`?CreatePaymentLinkCreditCardSettingsRequest`](../../doc/models/create-payment-link-credit-card-settings-request.md) | Optional | Credit card settings. Required when credit_card is an accepted payment method | getCreditCardSettings(): ?CreatePaymentLinkCreditCardSettingsRequest | setCreditCardSettings(?CreatePaymentLinkCreditCardSettingsRequest creditCardSettings): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkPaymentSettingsRequestBuilder;

$createPaymentLinkPaymentSettingsRequest = CreatePaymentLinkPaymentSettingsRequestBuilder::init(
    [
        'credit_card'
    ]
)
    ->statementDescriptor('statement_descriptor2')
    ->build();
```

