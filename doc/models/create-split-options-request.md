
# Create Split Options Request

The Split Options Request

## Structure

`CreateSplitOptionsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `liable` | `?bool` | Optional | Liable options | getLiable(): ?bool | setLiable(?bool liable): void |
| `chargeProcessingFee` | `?bool` | Optional | Charge processing fee | getChargeProcessingFee(): ?bool | setChargeProcessingFee(?bool chargeProcessingFee): void |
| `chargeRemainderFee` | `?bool` | Optional | - | getChargeRemainderFee(): ?bool | setChargeRemainderFee(?bool chargeRemainderFee): void |

## Example (as JSON)

```json
{
  "liable": false,
  "charge_processing_fee": false,
  "charge_remainder_fee": false
}
```

