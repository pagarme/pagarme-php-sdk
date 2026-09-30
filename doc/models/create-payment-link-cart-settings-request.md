
# Create Payment Link Cart Settings Request

Cart settings for creating a payment link

## Structure

`CreatePaymentLinkCartSettingsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(CreatePaymentLinkCartItemRequest[])`](../../doc/models/create-payment-link-cart-item-request.md) | Optional | Cart items | getItems(): ?array | setItems(?array items): void |
| `shippingCost` | `?int` | Optional | Shipping cost, in cents | getShippingCost(): ?int | setShippingCost(?int shippingCost): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkCartSettingsRequestBuilder;

$createPaymentLinkCartSettingsRequest = CreatePaymentLinkCartSettingsRequestBuilder::init()
    ->shippingCost(0)
    ->build();
```

