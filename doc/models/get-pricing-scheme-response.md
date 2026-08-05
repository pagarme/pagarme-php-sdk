
# Get Pricing Scheme Response

Response object for getting a pricing scheme

## Structure

`GetPricingSchemeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `price` | `?int` | Optional | - | getPrice(): ?int | setPrice(?int price): void |
| `schemeType` | `?string` | Optional | - | getSchemeType(): ?string | setSchemeType(?string schemeType): void |
| `priceBrackets` | [`?(GetPriceBracketResponse[])`](../../doc/models/get-price-bracket-response.md) | Optional | - | getPriceBrackets(): ?array | setPriceBrackets(?array priceBrackets): void |
| `minimumPrice` | `?int` | Optional | - | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `percentage` | `?float` | Optional | percentual value used in pricing_scheme Percent | getPercentage(): ?float | setPercentage(?float percentage): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPricingSchemeResponseBuilder;

$getPricingSchemeResponse = GetPricingSchemeResponseBuilder::init()
    ->price(34)
    ->schemeType('scheme_type2')
    ->priceBrackets(
        [
            null
        ]
    )
    ->minimumPrice(130)
    ->percentage(35.4)
    ->build();
```

