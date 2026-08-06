
# Get Split Options Response

## Structure

`GetSplitOptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `liable` | `?bool` | Optional | - | getLiable(): ?bool | setLiable(?bool liable): void |
| `chargeProcessingFee` | `?bool` | Optional | - | getChargeProcessingFee(): ?bool | setChargeProcessingFee(?bool chargeProcessingFee): void |
| `chargeRemainderFee` | `?string` | Optional | - | getChargeRemainderFee(): ?string | setChargeRemainderFee(?string chargeRemainderFee): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetSplitOptionsResponseBuilder;

$getSplitOptionsResponse = GetSplitOptionsResponseBuilder::init()
    ->liable(false)
    ->chargeProcessingFee(false)
    ->chargeRemainderFee('charge_remainder_fee6')
    ->build();
```

