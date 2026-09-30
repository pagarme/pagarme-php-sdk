
# Get Payment Link Credit Card Settings Response

Credit card settings of a payment link

## Structure

`GetPaymentLinkCreditCardSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `operationType` | `?string` | Optional | - | getOperationType(): ?string | setOperationType(?string operationType): void |
| `acceptedBrands` | `?(string[])` | Optional | - | getAcceptedBrands(): ?array | setAcceptedBrands(?array acceptedBrands): void |
| `maxInstallments` | `?int` | Optional | - | getMaxInstallments(): ?int | setMaxInstallments(?int maxInstallments): void |
| `useBrandInterestRate` | `?bool` | Optional | - | getUseBrandInterestRate(): ?bool | setUseBrandInterestRate(?bool useBrandInterestRate): void |
| `customerFee` | `?bool` | Optional | - | getCustomerFee(): ?bool | setCustomerFee(?bool customerFee): void |
| `installments` | [`?(GetPaymentLinkInstallmentResponse[])`](../../doc/models/get-payment-link-installment-response.md) | Optional | - | getInstallments(): ?array | setInstallments(?array installments): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkCreditCardSettingsResponseBuilder;

$getPaymentLinkCreditCardSettingsResponse = GetPaymentLinkCreditCardSettingsResponseBuilder::init()
    ->operationType('auth_and_capture')
    ->maxInstallments(12)
    ->useBrandInterestRate(false)
    ->customerFee(false)
    ->build();
```

