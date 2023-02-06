
# Get Shipping Response

Response object for getting the shipping data

## Structure

`GetShippingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `recipientName` | `?string` | Optional | - | getRecipientName(): ?string | setRecipientName(?string recipientName): void |
| `recipientPhone` | `?string` | Optional | - | getRecipientPhone(): ?string | setRecipientPhone(?string recipientPhone): void |
| `address` | [`?GetAddressResponse`](../../doc/models/get-address-response.md) | Optional | - | getAddress(): ?GetAddressResponse | setAddress(?GetAddressResponse address): void |
| `maxDeliveryDate` | `?\DateTime` | Optional | Data máxima de entrega | getMaxDeliveryDate(): ?\DateTime | setMaxDeliveryDate(?\DateTime maxDeliveryDate): void |
| `estimatedDeliveryDate` | `?\DateTime` | Optional | Prazo estimado de entrega | getEstimatedDeliveryDate(): ?\DateTime | setEstimatedDeliveryDate(?\DateTime estimatedDeliveryDate): void |
| `type` | `?string` | Optional | Shipping Type | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "amount": null,
  "description": null,
  "recipient_name": null,
  "recipient_phone": null,
  "address": null,
  "max_delivery_date": null,
  "estimated_delivery_date": null,
  "type": null
}
```

