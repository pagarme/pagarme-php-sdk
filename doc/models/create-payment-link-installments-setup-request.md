
# Create Payment Link Installments Setup Request

Dynamic installments setup for a payment link

## Structure

`CreatePaymentLinkInstallmentsSetupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `maxInstallments` | `?int` | Optional | Maximum number of installments | getMaxInstallments(): ?int | setMaxInstallments(?int maxInstallments): void |
| `amount` | `?int` | Optional | Total amount, in cents | getAmount(): ?int | setAmount(?int amount): void |
| `interestType` | `?string` | Optional | Interest type | getInterestType(): ?string | setInterestType(?string interestType): void |
| `interestRate` | `?int` | Optional | Interest rate (percentage) | getInterestRate(): ?int | setInterestRate(?int interestRate): void |
| `customerFee` | `?bool` | Optional | Defines whether fees are charged from the customer | getCustomerFee(): ?bool | setCustomerFee(?bool customerFee): void |
| `freeInstallments` | `?int` | Optional | Number of installments without interest | getFreeInstallments(): ?int | setFreeInstallments(?int freeInstallments): void |
| `brand` | `?string` | Optional | Card brand used to look up fees | getBrand(): ?string | setBrand(?string brand): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkInstallmentsSetupRequestBuilder;

$createPaymentLinkInstallmentsSetupRequest = CreatePaymentLinkInstallmentsSetupRequestBuilder::init()
    ->maxInstallments(12)
    ->amount(10000)
    ->interestType('simple')
    ->interestRate(2)
    ->customerFee(false)
    ->build();
```

