
# Get Movement Object Transfer Response

## Structure

`GetMovementObjectTransferResponse`

## Inherits From

[`GetMovementObjectBaseResponse`](../../doc/models/get-movement-object-base-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceType` | `?string` | Optional | - | getSourceType(): ?string | setSourceType(?string sourceType): void |
| `sourceId` | `?string` | Optional | - | getSourceId(): ?string | setSourceId(?string sourceId): void |
| `targetType` | `?string` | Optional | - | getTargetType(): ?string | setTargetType(?string targetType): void |
| `targetId` | `?string` | Optional | - | getTargetId(): ?string | setTargetId(?string targetId): void |
| `fee` | `?string` | Optional | - | getFee(): ?string | setFee(?string fee): void |
| `fundingDate` | `?string` | Optional | - | getFundingDate(): ?string | setFundingDate(?string fundingDate): void |
| `fundingEstimatedDate` | `?string` | Optional | - | getFundingEstimatedDate(): ?string | setFundingEstimatedDate(?string fundingEstimatedDate): void |
| `bankAccount` | `?string` | Optional | - | getBankAccount(): ?string | setBankAccount(?string bankAccount): void |

## Example (as JSON)

```json
{
  "object": "transfer",
  "id": "id6",
  "status": "status2",
  "amount": "amount8",
  "created_at": "created_at4",
  "source_type": "source_type0",
  "source_id": "source_id6",
  "target_type": "target_type2",
  "target_id": "target_id0",
  "fee": "fee2"
}
```

