
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

## Example (as JSON)

```json
{
  "object": "payable",
  "id": "id0",
  "status": "status2",
  "amount": "amount2",
  "created_at": "created_at8",
  "fee": "fee2",
  "anticipation_fee": "anticipation_fee8",
  "fraud_coverage_fee": "fraud_coverage_fee2",
  "installment": "installment8",
  "split_id": "split_id2",
  "bulk_anticipation_id": "bulk_anticipation_id4",
  "anticipation_id": "anticipation_id0",
  "recipient_id": "recipient_id0",
  "originator_model": "originator_model4",
  "originator_model_id": "originator_model_id4",
  "payment_date": "payment_date8",
  "original_payment_date": "original_payment_date8",
  "payment_method": "payment_method0",
  "accrual_at": "accrual_at8",
  "liquidation_arrangement_id": "liquidation_arrangement_id6"
}
```

