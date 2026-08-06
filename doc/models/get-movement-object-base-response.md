
# Get Movement Object Base Response

Generic response object for getting a MovementObjectBase.

## Structure

`GetMovementObjectBaseResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `object` | `?string` | Optional | - | getObject(): ?string | setObject(?string object): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `amount` | `?string` | Optional | - | getAmount(): ?string | setAmount(?string amount): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `chargeId` | `?string` | Optional | - | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `gatewayId` | `?string` | Optional | - | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetMovementObjectSettlementResponseBuilder;

$getMovementObjectBaseResponse = GetMovementObjectSettlementResponseBuilder::init()
    ->id('id2')
    ->status('status4')
    ->amount('amount4')
    ->createdAt('created_at0')
    ->product('product2')
    ->brand('brand6')
    ->paymentDate('payment_date4')
    ->recipientId('recipient_id2')
    ->documentType('document_type0')
    ->build();
```

