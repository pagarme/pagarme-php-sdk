
# Get Charges Summary Response

## Structure

`GetChargesSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `total` | `?int` | Optional | - | getTotal(): ?int | setTotal(?int total): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetChargesSummaryResponseBuilder;

$getChargesSummaryResponse = GetChargesSummaryResponseBuilder::init()
    ->total(134)
    ->build();
```

