
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetMovementObjectTransferResponseBuilder;

$getMovementObjectTransferResponse = GetMovementObjectTransferResponseBuilder::init()
    ->id('id2')
    ->status('status4')
    ->amount('amount4')
    ->createdAt('created_at0')
    ->sourceType('source_type6')
    ->sourceId('source_id0')
    ->targetType('target_type8')
    ->targetId('target_id4')
    ->fee('fee8')
    ->build();
```

