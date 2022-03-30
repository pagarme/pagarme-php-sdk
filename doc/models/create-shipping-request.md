
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
| `maxDeliveryDate` | `?\DateTime` | Optional | Data máxima de entrega | getMaxDeliveryDate(): ?\DateTime | setMaxDeliveryDate(?\DateTime maxDeliveryDate): void |
| `estimatedDeliveryDate` | `?\DateTime` | Optional | Prazo estimado de entrega | getEstimatedDeliveryDate(): ?\DateTime | setEstimatedDeliveryDate(?\DateTime estimatedDeliveryDate): void |
| `type` | `string` | Required | Shipping type | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "description": "description0",
  "recipient_name": "recipient_name8",
  "recipient_phone": "recipient_phone2",
  "address_id": "address_id0",
  "address": {
    "street": "street6",
    "number": "number4",
    "zip_code": "zip_code0",
    "neighborhood": "neighborhood2",
    "city": "city6",
    "state": "state2",
    "country": "country0",
    "complement": "complement2",
    "metadata": {
      "key0": "metadata3",
      "key1": "metadata2",
      "key2": "metadata1"
    },
    "line_1": "line_10",
    "line_2": "line_24"
  },
  "max_delivery_date": null,
  "estimated_delivery_date": null,
  "type": "type0"
}
```

