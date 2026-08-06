
# Create Plan Item Request

Request for creating a plan item

## Structure

`CreatePlanItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Item name | getName(): string | setName(string name): void |
| `pricingScheme` | [`CreatePricingSchemeRequest`](../../doc/models/create-pricing-scheme-request.md) | Required | Item's pricing scheme | getPricingScheme(): CreatePricingSchemeRequest | setPricingScheme(CreatePricingSchemeRequest pricingScheme): void |
| `id` | `string` | Required | Item's id | getId(): string | setId(string id): void |
| `description` | `string` | Required | Item's description | getDescription(): string | setDescription(string description): void |
| `cycles` | `?int` | Optional | Number of cycles where the item will be charged | getCycles(): ?int | setCycles(?int cycles): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePlanItemRequestBuilder;

$createPlanItemRequest = CreatePlanItemRequestBuilder::init(
    'name8',
    null,
    'id8',
    'description8'
)
    ->cycles(78)
    ->quantity(158)
    ->build();
```

