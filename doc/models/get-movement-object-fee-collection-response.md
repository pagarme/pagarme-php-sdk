
# Get Movement Object Fee Collection Response

Generic response object for getting a MovementObjectFeeCollection.

## Structure

`GetMovementObjectFeeCollectionResponse`

## Inherits From

[`GetMovementObjectBaseResponse`](../../doc/models/get-movement-object-base-response.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `paymentDate` | `?string` | Optional | - | getPaymentDate(): ?string | setPaymentDate(?string paymentDate): void |
| `recipientId` | `?string` | Optional | - | getRecipientId(): ?string | setRecipientId(?string recipientId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetMovementObjectFeeCollectionResponseBuilder;

$getMovementObjectFeeCollectionResponse = GetMovementObjectFeeCollectionResponseBuilder::init()
    ->id('id2')
    ->status('status4')
    ->amount('amount4')
    ->createdAt('created_at0')
    ->description('description0')
    ->paymentDate('payment_date8')
    ->recipientId('recipient_id0')
    ->build();
```

