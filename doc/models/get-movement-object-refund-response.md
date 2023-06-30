
# Get Movement Object Refund Response

Generic response object for getting a MovementObjectRefund.

## Structure

`GetMovementObjectRefundResponse`

## Inherits From

[`GetMovementObjectBaseResponse`](../../doc/models/get-movement-object-base-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fraudCoverageFee` | `?string` | Optional | - | getFraudCoverageFee(): ?string | setFraudCoverageFee(?string fraudCoverageFee): void |
| `chargeFeeRecipientId` | `?string` | Optional | - | getChargeFeeRecipientId(): ?string | setChargeFeeRecipientId(?string chargeFeeRecipientId): void |
| `bankAccountId` | `?string` | Optional | - | getBankAccountId(): ?string | setBankAccountId(?string bankAccountId): void |
| `localTransactionId` | `?string` | Optional | - | getLocalTransactionId(): ?string | setLocalTransactionId(?string localTransactionId): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |

## Example (as JSON)

```json
{
  "object": "refund",
  "id": "id2",
  "status": "status4",
  "amount": "amount4",
  "created_at": "created_at0",
  "fraud_coverage_fee": "fraud_coverage_fee2",
  "charge_fee_recipient_id": "charge_fee_recipient_id4",
  "bank_account_id": "bank_account_id0",
  "local_transaction_id": "local_transaction_id6",
  "updated_at": "updated_at4"
}
```

