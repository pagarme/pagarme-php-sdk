
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetMovementObjectSettlementResponseBuilder;

$getMovementObjectSettlementResponse = GetMovementObjectSettlementResponseBuilder::init()
    ->id('id2')
    ->status('status4')
    ->amount('amount4')
    ->createdAt('created_at0')
    ->product('product2')
    ->brand('brand6')
    ->paymentDate('payment_date4')
    ->recipientId('recipient_id8')
    ->documentType('document_type0')
    ->build();
```

