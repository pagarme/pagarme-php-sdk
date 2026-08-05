
# Update Plan Item Request

Request for updating a plan item

## Structure

`UpdatePlanItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Item name | getName(): string | setName(string name): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `status` | `string` | Required | Item status | getStatus(): string | setStatus(string status): void |
| `pricingScheme` | [`UpdatePricingSchemeRequest`](../../doc/models/update-pricing-scheme-request.md) | Required | Pricing scheme | getPricingScheme(): UpdatePricingSchemeRequest | setPricingScheme(UpdatePricingSchemeRequest pricingScheme): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `cycles` | `?int` | Optional | Number of cycles that the item will be charged | getCycles(): ?int | setCycles(?int cycles): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdatePlanItemRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\UpdatePricingSchemeRequestBuilder;

$updatePlanItemRequest = UpdatePlanItemRequestBuilder::init(
    '',
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
        ->build()
)
    ->quantity(174)
    ->cycles(194)
    ->build();
```

