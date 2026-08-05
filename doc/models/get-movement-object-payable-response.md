
# Get Movement Object Payable Response

## Structure

`GetMovementObjectPayableResponse`

## Inherits From

[`GetMovementObjectBaseResponse`](../../doc/models/get-movement-object-base-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fee` | `?string` | Optional | - | getFee(): ?string | setFee(?string fee): void |
| `anticipationFee` | `string` | Required | - | getAnticipationFee(): string | setAnticipationFee(string anticipationFee): void |
| `fraudCoverageFee` | `string` | Required | - | getFraudCoverageFee(): string | setFraudCoverageFee(string fraudCoverageFee): void |
| `installment` | `string` | Required | - | getInstallment(): string | setInstallment(string installment): void |
| `splitId` | `string` | Required | - | getSplitId(): string | setSplitId(string splitId): void |
| `bulkAnticipationId` | `string` | Required | - | getBulkAnticipationId(): string | setBulkAnticipationId(string bulkAnticipationId): void |
| `anticipationId` | `string` | Required | - | getAnticipationId(): string | setAnticipationId(string anticipationId): void |
| `recipientId` | `string` | Required | - | getRecipientId(): string | setRecipientId(string recipientId): void |
| `originatorModel` | `string` | Required | - | getOriginatorModel(): string | setOriginatorModel(string originatorModel): void |
| `originatorModelId` | `string` | Required | - | getOriginatorModelId(): string | setOriginatorModelId(string originatorModelId): void |
| `paymentDate` | `string` | Required | - | getPaymentDate(): string | setPaymentDate(string paymentDate): void |
| `originalPaymentDate` | `string` | Required | - | getOriginalPaymentDate(): string | setOriginalPaymentDate(string originalPaymentDate): void |
| `paymentMethod` | `string` | Required | - | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `accrualAt` | `string` | Required | - | getAccrualAt(): string | setAccrualAt(string accrualAt): void |
| `liquidationArrangementId` | `string` | Required | - | getLiquidationArrangementId(): string | setLiquidationArrangementId(string liquidationArrangementId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetMovementObjectPayableResponseBuilder;

$getMovementObjectPayableResponse = GetMovementObjectPayableResponseBuilder::init(
    'anticipation_fee4',
    'fraud_coverage_fee2',
    'installment2',
    'split_id6',
    'bulk_anticipation_id0',
    'anticipation_id6',
    'recipient_id6',
    'originator_model0',
    'originator_model_id0',
    'payment_date6',
    'original_payment_date6',
    'payment_method4',
    'accrual_at6',
    'liquidation_arrangement_id8'
)
    ->id('id2')
    ->status('status4')
    ->amount('amount4')
    ->createdAt('created_at0')
    ->fee('fee6')
    ->build();
```

