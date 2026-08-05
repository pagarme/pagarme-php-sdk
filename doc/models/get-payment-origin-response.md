
# Get Payment Origin Response

## Structure

`GetPaymentOriginResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargeId` | `?string` | Optional | - | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `brandId` | `?string` | Optional | - | getBrandId(): ?string | setBrandId(?string brandId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentOriginResponseBuilder;

$getPaymentOriginResponse = GetPaymentOriginResponseBuilder::init()
    ->chargeId('charge_id4')
    ->brandId('brand_id0')
    ->build();
```

