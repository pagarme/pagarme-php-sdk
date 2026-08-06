
# Create Checkout Card Installment Option Request

Options for card installment

## Structure

`CreateCheckoutCardInstallmentOptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `int` | Required | Installment quantity | getNumber(): int | setNumber(int number): void |
| `total` | `int` | Required | Total amount | getTotal(): int | setTotal(int total): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCheckoutCardInstallmentOptionRequestBuilder;

$createCheckoutCardInstallmentOptionRequest = CreateCheckoutCardInstallmentOptionRequestBuilder::init(
    68,
    176
)->build();
```

