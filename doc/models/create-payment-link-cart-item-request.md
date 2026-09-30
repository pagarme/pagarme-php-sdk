
# Create Payment Link Cart Item Request

Cart item for creating a payment link

## Structure

`CreatePaymentLinkCartItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Item name | getName(): string | setName(string name): void |
| `amount` | `int` | Required | Unit amount, in cents | getAmount(): int | setAmount(int amount): void |
| `defaultQuantity` | `int` | Required | Item quantity | getDefaultQuantity(): int | setDefaultQuantity(int defaultQuantity): void |
| `description` | `?string` | Optional | Item description | getDescription(): ?string | setDescription(?string description): void |
| `shippingCost` | `?int` | Optional | Item shipping cost, in cents | getShippingCost(): ?int | setShippingCost(?int shippingCost): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentLinkCartItemRequestBuilder;

$createPaymentLinkCartItemRequest = CreatePaymentLinkCartItemRequestBuilder::init(
    'name0',
    10000,
    1
)
    ->description('description6')
    ->shippingCost(0)
    ->build();
```

