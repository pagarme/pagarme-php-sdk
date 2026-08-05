
# Create Shipping Request

Shipping data

## Structure

`CreateShippingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Shipping amount | getAmount(): int | setAmount(int amount): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `recipientName` | `string` | Required | Recipient name | getRecipientName(): string | setRecipientName(string recipientName): void |
| `recipientPhone` | `string` | Required | Recipient phone number | getRecipientPhone(): string | setRecipientPhone(string recipientPhone): void |
| `addressId` | `string` | Required | The id of the address that will be used for shipping | getAddressId(): string | setAddressId(string addressId): void |
| `address` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Address data | getAddress(): CreateAddressRequest | setAddress(CreateAddressRequest address): void |
| `maxDeliveryDate` | `?DateTime` | Optional | Data máxima de entrega | getMaxDeliveryDate(): ?\DateTime | setMaxDeliveryDate(?\DateTime maxDeliveryDate): void |
| `estimatedDeliveryDate` | `?DateTime` | Optional | Prazo estimado de entrega | getEstimatedDeliveryDate(): ?\DateTime | setEstimatedDeliveryDate(?\DateTime estimatedDeliveryDate): void |
| `type` | `string` | Required | Shipping type | getType(): string | setType(string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateShippingRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$createShippingRequest = CreateShippingRequestBuilder::init(
    44,
    'description0',
    'recipient_name8',
    'recipient_phone2',
    'address_id0',
    null,
    'type0'
)
    ->maxDeliveryDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->estimatedDeliveryDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

