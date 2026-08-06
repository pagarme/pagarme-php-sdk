
# Update Pricing Scheme Request

Request for updating a pricing scheme

## Structure

`UpdatePricingSchemeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeType` | `string` | Required | Scheme type | getSchemeType(): string | setSchemeType(string schemeType): void |
| `priceBrackets` | [`UpdatePriceBracketRequest[]`](../../doc/models/update-price-bracket-request.md) | Required | Price brackets | getPriceBrackets(): array | setPriceBrackets(array priceBrackets): void |
| `price` | `?int` | Optional | Price | getPrice(): ?int | setPrice(?int price): void |
| `minimumPrice` | `?int` | Optional | Minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `percentage` | `?float` | Optional | percentual value used in pricing_scheme Percent | getPercentage(): ?float | setPercentage(?float percentage): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdatePricingSchemeRequestBuilder;

$updatePricingSchemeRequest = UpdatePricingSchemeRequestBuilder::init(
    '',
    [
        null
    ]
)
    ->price(180)
    ->minimumPrice(84)
    ->percentage(238.06)
    ->build();
```

