
# Get Split Options Response

## Structure

`GetSplitOptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `liable` | `bool` | Required | - | getLiable(): bool | setLiable(bool liable): void |
| `chargeProcessingFee` | `bool` | Required | - | getChargeProcessingFee(): bool | setChargeProcessingFee(bool chargeProcessingFee): void |
| `chargeRemainderFee` | `string` | Required | - | getChargeRemainderFee(): string | setChargeRemainderFee(string chargeRemainderFee): void |

## Example (as JSON)

```json
{
  "liable": false,
  "charge_processing_fee": false,
  "charge_remainder_fee": "charge_remainder_fee8"
}
```

