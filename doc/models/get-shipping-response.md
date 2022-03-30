
# Get Shipping Response

Response object for getting the shipping data

## Structure

`GetShippingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `recipientName` | `string` | Required | - | getRecipientName(): string | setRecipientName(string recipientName): void |
| `recipientPhone` | `string` | Required | - | getRecipientPhone(): string | setRecipientPhone(string recipientPhone): void |
| `address` | [`GetAddressResponse`](../../doc/models/get-address-response.md) | Required | - | getAddress(): GetAddressResponse | setAddress(GetAddressResponse address): void |
| `maxDeliveryDate` | `?\DateTime` | Optional | Data máxima de entrega | getMaxDeliveryDate(): ?\DateTime | setMaxDeliveryDate(?\DateTime maxDeliveryDate): void |
| `estimatedDeliveryDate` | `?\DateTime` | Optional | Prazo estimado de entrega | getEstimatedDeliveryDate(): ?\DateTime | setEstimatedDeliveryDate(?\DateTime estimatedDeliveryDate): void |
| `type` | `string` | Required | Shipping Type | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "description": "description0",
  "recipient_name": "recipient_name8",
  "recipient_phone": "recipient_phone2",
  "address": {
    "id": "id6",
    "street": "street6",
    "number": "number4",
    "complement": "complement2",
    "zip_code": "zip_code0",
    "neighborhood": "neighborhood2",
    "city": "city6",
    "state": "state2",
    "country": "country0",
    "status": "status8",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "customer": null,
    "metadata": {
      "key0": "metadata3",
      "key1": "metadata2",
      "key2": "metadata1"
    },
    "line_1": "line_10",
    "line_2": "line_24",
    "deleted_at": null
  },
  "max_delivery_date": null,
  "estimated_delivery_date": null,
  "type": "type0"
}
```

