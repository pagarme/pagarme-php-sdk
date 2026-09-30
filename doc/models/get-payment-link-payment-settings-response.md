
# Get Payment Link Payment Settings Response

Payment settings of a payment link

## Structure

`GetPaymentLinkPaymentSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptedPaymentMethods` | `?(string[])` | Optional | - | getAcceptedPaymentMethods(): ?array | setAcceptedPaymentMethods(?array acceptedPaymentMethods): void |
| `statementDescriptor` | `?string` | Optional | - | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `creditCardSettings` | [`?GetPaymentLinkCreditCardSettingsResponse`](../../doc/models/get-payment-link-credit-card-settings-response.md) | Optional | - | getCreditCardSettings(): ?GetPaymentLinkCreditCardSettingsResponse | setCreditCardSettings(?GetPaymentLinkCreditCardSettingsResponse creditCardSettings): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkPaymentSettingsResponseBuilder;

$getPaymentLinkPaymentSettingsResponse = GetPaymentLinkPaymentSettingsResponseBuilder::init()
    ->acceptedPaymentMethods([
        'credit_card'
    ])
    ->statementDescriptor('statement_descriptor2')
    ->build();
```

