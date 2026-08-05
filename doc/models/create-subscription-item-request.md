
# Create Subscription Item Request

Request for creating a new subscription item

## Structure

`CreateSubscriptionItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | Item description | getDescription(): string | setDescription(string description): void |
| `pricingScheme` | [`CreatePricingSchemeRequest`](../../doc/models/create-pricing-scheme-request.md) | Required | Pricing scheme | getPricingScheme(): CreatePricingSchemeRequest | setPricingScheme(CreatePricingSchemeRequest pricingScheme): void |
| `id` | `string` | Required | Item id | getId(): string | setId(string id): void |
| `planItemId` | `string` | Required | Plan item id | getPlanItemId(): string | setPlanItemId(string planItemId): void |
| `discounts` | [`CreateDiscountRequest[]`](../../doc/models/create-discount-request.md) | Required | Discounts for the item | getDiscounts(): array | setDiscounts(array discounts): void |
| `name` | `string` | Required | Item name | getName(): string | setName(string name): void |
| `cycles` | `?int` | Optional | Number of cycles which the item will be charged | getCycles(): ?int | setCycles(?int cycles): void |
| `quantity` | `?int` | Optional | Quantity of items | getQuantity(): ?int | setQuantity(?int quantity): void |
| `minimumPrice` | `?int` | Optional | Minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateSubscriptionItemRequestBuilder;

$createSubscriptionItemRequest = CreateSubscriptionItemRequestBuilder::init(
    '',
    null,
    '',
    '',
    [
        null
    ],
    ''
)
    ->cycles(250)
    ->quantity(242)
    ->minimumPrice(2)
    ->build();
```

