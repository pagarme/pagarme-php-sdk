
# Create Clear Sale Request

## Structure

`CreateClearSaleRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customSla` | `int` | Required | - | getCustomSla(): int | setCustomSla(int customSla): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateClearSaleRequestBuilder;

$createClearSaleRequest = CreateClearSaleRequestBuilder::init(
    156
)->build();
```

