
# Update Subscription Item Request

Request for updating a subscription item

## Structure

`UpdateSubscriptionItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |
| `pricingScheme` | [`UpdatePricingSchemeRequest`](../../doc/models/update-pricing-scheme-request.md) | Required | Pricing scheme | getPricingScheme(): UpdatePricingSchemeRequest | setPricingScheme(UpdatePricingSchemeRequest pricingScheme): void |
| `name` | `string` | Required | Item name | getName(): string | setName(string name): void |
| `cycles` | `?int` | Optional | Number of cycles that the item will be charged | getCycles(): ?int | setCycles(?int cycles): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `minimumPrice` | `?int` | Optional | Minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateSubscriptionItemRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\UpdatePricingSchemeRequestBuilder;

$updateSubscriptionItemRequest = UpdateSubscriptionItemRequestBuilder::init(
    '',
    '',
    UpdatePricingSchemeRequestBuilder::init(
        '',
        [
            null
        ]
    )
        ->price(166)
        ->minimumPrice(6)
        ->percentage(251.76)
        ->build(),
    ''
)
    ->cycles(64)
    ->quantity(44)
    ->minimumPrice(56)
    ->build();
```

