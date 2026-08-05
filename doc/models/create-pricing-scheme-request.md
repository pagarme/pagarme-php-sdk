
# Create Pricing Scheme Request

Request for creating a pricing scheme

## Structure

`CreatePricingSchemeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeType` | `string` | Required | Scheme type | getSchemeType(): string | setSchemeType(string schemeType): void |
| `priceBrackets` | [`?(CreatePriceBracketRequest[])`](../../doc/models/create-price-bracket-request.md) | Optional | Price brackets | getPriceBrackets(): ?array | setPriceBrackets(?array priceBrackets): void |
| `price` | `?int` | Optional | Price | getPrice(): ?int | setPrice(?int price): void |
| `minimumPrice` | `?int` | Optional | Minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `percentage` | `?float` | Optional | percentual value used in pricing_scheme Percent | getPercentage(): ?float | setPercentage(?float percentage): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePricingSchemeRequestBuilder;
use PagarmeApiSDKLib\Models\Builders\CreatePriceBracketRequestBuilder;

$createPricingSchemeRequest = CreatePricingSchemeRequestBuilder::init(
    'scheme_type8'
)
    ->priceBrackets(
        [
            null,
            CreatePriceBracketRequestBuilder::init(
                0,
                0
            )->build()
        ]
    )
    ->price(124)
    ->minimumPrice(28)
    ->percentage(5.66)
    ->build();
```

