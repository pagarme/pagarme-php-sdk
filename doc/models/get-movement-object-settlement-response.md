
# Get Movement Object Settlement Response

Generic response object for getting a MovementObjectSettlement.

## Structure

`GetMovementObjectSettlementResponse`

## Inherits From

[`GetMovementObjectBaseResponse`](../../doc/models/get-movement-object-base-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `product` | `?string` | Optional | - | getProduct(): ?string | setProduct(?string product): void |
| `brand` | `?string` | Optional | - | getBrand(): ?string | setBrand(?string brand): void |
| `paymentDate` | `?string` | Optional | - | getPaymentDate(): ?string | setPaymentDate(?string paymentDate): void |
| `recipientId` | `?string` | Optional | - | getRecipientId(): ?string | setRecipientId(?string recipientId): void |
| `documentType` | `?string` | Optional | - | getDocumentType(): ?string | setDocumentType(?string documentType): void |
| `document` | `?string` | Optional | - | getDocument(): ?string | setDocument(?string document): void |
| `contractObligationId` | `?string` | Optional | - | getContractObligationId(): ?string | setContractObligationId(?string contractObligationId): void |
| `liquidationArrangementId` | `?string` | Optional | - | getLiquidationArrangementId(): ?string | setLiquidationArrangementId(?string liquidationArrangementId): void |
| `externalEnginePaymentId` | `?string` | Optional | - | getExternalEnginePaymentId(): ?string | setExternalEnginePaymentId(?string externalEnginePaymentId): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "status": "status4",
  "amount": "amount4",
  "created_at": "created_at0",
  "product": "product2",
  "brand": "brand6",
  "payment_date": "payment_date4",
  "recipient_id": "recipient_id2",
  "document_type": "document_type0"
}
```

