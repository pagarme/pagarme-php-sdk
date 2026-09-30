
# Create Payment Link Credit Card Settings Request

Credit card settings for creating a payment link

## Structure

`CreatePaymentLinkCreditCardSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `operationType` | `string` | Required | Operation type (auth_and_capture or auth_only) | getOperationType(): string | setOperationType(string operationType): void |
| `installments` | [`?(CreatePaymentLinkInstallmentRequest[])`](../../doc/models/create-payment-link-installment-request.md) | Optional | Installment options. At least one of installments or installments_setup must be sent, even for a single payment | getInstallments(): ?array | setInstallments(?array installments): void |
| `installmentsSetup` | [`?CreatePaymentLinkInstallmentsSetupRequest`](../../doc/models/create-payment-link-installments-setup-request.md) | Optional | Dynamic installments setup. Cannot be sent with installments | getInstallmentsSetup(): ?CreatePaymentLinkInstallmentsSetupRequest | setInstallmentsSetup(?CreatePaymentLinkInstallmentsSetupRequest installmentsSetup): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkCreditCardSettingsRequestBuilder;

$createPaymentLinkCreditCardSettingsRequest = CreatePaymentLinkCreditCardSettingsRequestBuilder::init(
    'auth_and_capture'
)
    ->build();
```

