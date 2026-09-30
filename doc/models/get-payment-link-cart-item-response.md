
# Get Payment Link Cart Item Response

Cart item of a payment link

## Structure

`GetPaymentLinkCartItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `defaultQuantity` | `?int` | Optional | - | getDefaultQuantity(): ?int | setDefaultQuantity(?int defaultQuantity): void |
| `shippingCost` | `?int` | Optional | - | getShippingCost(): ?int | setShippingCost(?int shippingCost): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkCartItemResponseBuilder;

$getPaymentLinkCartItemResponse = GetPaymentLinkCartItemResponseBuilder::init()
    ->name('name0')
    ->description('description6')
    ->amount(10000)
    ->defaultQuantity(1)
    ->shippingCost(0)
    ->build();
```

