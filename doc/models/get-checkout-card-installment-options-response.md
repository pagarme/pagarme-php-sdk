
# Get Checkout Card Installment Options Response

## Structure

`GetCheckoutCardInstallmentOptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `?int` | Required | Número de parcelas | getNumber(): ?int | setNumber(?int number): void |
| `total` | `?int` | Required | Valor total da compra | getTotal(): ?int | setTotal(?int total): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCheckoutCardInstallmentOptionsResponseBuilder;

$getCheckoutCardInstallmentOptionsResponse = GetCheckoutCardInstallmentOptionsResponseBuilder::init()
    ->number(40)
    ->total(188)
    ->build();
```

