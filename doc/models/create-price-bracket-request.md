
# Create Price Bracket Request

Request for creating a price bracket

## Structure

`CreatePriceBracketRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startQuantity` | `int` | Required | Start quantity | getStartQuantity(): int | setStartQuantity(int startQuantity): void |
| `price` | `int` | Required | Price | getPrice(): int | setPrice(int price): void |
| `endQuantity` | `?int` | Optional | End quantity | getEndQuantity(): ?int | setEndQuantity(?int endQuantity): void |
| `overagePrice` | `?int` | Optional | Overage price | getOveragePrice(): ?int | setOveragePrice(?int overagePrice): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePriceBracketRequestBuilder;

$createPriceBracketRequest = CreatePriceBracketRequestBuilder::init(
    230,
    88
)
    ->endQuantity(238)
    ->overagePrice(252)
    ->build();
```

