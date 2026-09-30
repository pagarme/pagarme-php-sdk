
# Get Payment Link Cart Settings Response

Cart settings of a payment link

## Structure

`GetPaymentLinkCartSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `shippingCost` | `?int` | Optional | - | getShippingCost(): ?int | setShippingCost(?int shippingCost): void |
| `shippingTotalCost` | `?int` | Optional | - | getShippingTotalCost(): ?int | setShippingTotalCost(?int shippingTotalCost): void |
| `itemsTotalCost` | `?int` | Optional | - | getItemsTotalCost(): ?int | setItemsTotalCost(?int itemsTotalCost): void |
| `totalCost` | `?int` | Optional | - | getTotalCost(): ?int | setTotalCost(?int totalCost): void |
| `items` | [`?(GetPaymentLinkCartItemResponse[])`](../../doc/models/get-payment-link-cart-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkCartSettingsResponseBuilder;

$getPaymentLinkCartSettingsResponse = GetPaymentLinkCartSettingsResponseBuilder::init()
    ->shippingCost(0)
    ->shippingTotalCost(0)
    ->itemsTotalCost(10000)
    ->totalCost(10000)
    ->build();
```

