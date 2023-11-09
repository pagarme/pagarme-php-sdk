
# Get Payable Response

Response object for getting an payable

## Structure

`GetPayableResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `fee` | `?int` | Optional | - | getFee(): ?int | setFee(?int fee): void |
| `anticipationFee` | `?int` | Optional | - | getAnticipationFee(): ?int | setAnticipationFee(?int anticipationFee): void |
| `fraudCoverageFee` | `?int` | Optional | - | getFraudCoverageFee(): ?int | setFraudCoverageFee(?int fraudCoverageFee): void |
| `installment` | `?int` | Optional | - | getInstallment(): ?int | setInstallment(?int installment): void |
| `gatewayId` | `?int` | Optional | - | getGatewayId(): ?int | setGatewayId(?int gatewayId): void |
| `chargeId` | `?string` | Optional | - | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `splitId` | `?string` | Optional | - | getSplitId(): ?string | setSplitId(?string splitId): void |
| `bulkAnticipationId` | `?string` | Optional | - | getBulkAnticipationId(): ?string | setBulkAnticipationId(?string bulkAnticipationId): void |
| `anticipationId` | `?string` | Optional | - | getAnticipationId(): ?string | setAnticipationId(?string anticipationId): void |
| `recipientId` | `?string` | Optional | - | getRecipientId(): ?string | setRecipientId(?string recipientId): void |
| `originatorModel` | `?string` | Optional | - | getOriginatorModel(): ?string | setOriginatorModel(?string originatorModel): void |
| `originatorModelId` | `?string` | Optional | - | getOriginatorModelId(): ?string | setOriginatorModelId(?string originatorModelId): void |
| `paymentDate` | `?DateTime` | Optional | - | getPaymentDate(): ?\DateTime | setPaymentDate(?\DateTime paymentDate): void |
| `originalPaymentDate` | `?DateTime` | Optional | - | getOriginalPaymentDate(): ?\DateTime | setOriginalPaymentDate(?\DateTime originalPaymentDate): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `paymentMethod` | `?string` | Optional | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `accrualAt` | `?DateTime` | Optional | - | getAccrualAt(): ?\DateTime | setAccrualAt(?\DateTime accrualAt): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `liquidationArrangementId` | `?string` | Optional | - | getLiquidationArrangementId(): ?string | setLiquidationArrangementId(?string liquidationArrangementId): void |

## Example (as JSON)

```json
{
  "id": 134,
  "status": "status8",
  "amount": 24,
  "fee": 190,
  "anticipation_fee": 118
}
```

