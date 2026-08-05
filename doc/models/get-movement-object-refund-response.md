
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetMovementObjectRefundResponseBuilder;

$getMovementObjectRefundResponse = GetMovementObjectRefundResponseBuilder::init()
    ->id('id2')
    ->status('status4')
    ->amount('amount4')
    ->createdAt('created_at0')
    ->fraudCoverageFee('fraud_coverage_fee2')
    ->chargeFeeRecipientId('charge_fee_recipient_id0')
    ->bankAccountId('bank_account_id4')
    ->localTransactionId('local_transaction_id0')
    ->updatedAt('updated_at0')
    ->build();
```

