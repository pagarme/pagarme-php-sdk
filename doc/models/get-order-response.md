
# Get Order Response

Response object for getting an Order

## Structure

`GetOrderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Required | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `items` | [`?(GetOrderItemResponse[])`](../../doc/models/get-order-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `charges` | [`?(GetChargeResponse[])`](../../doc/models/get-charge-response.md) | Optional | - | getCharges(): ?array | setCharges(?array charges): void |
| `invoiceUrl` | `?string` | Optional | - | getInvoiceUrl(): ?string | setInvoiceUrl(?string invoiceUrl): void |
| `shipping` | [`?GetShippingResponse`](../../doc/models/get-shipping-response.md) | Optional | - | getShipping(): ?GetShippingResponse | setShipping(?GetShippingResponse shipping): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `checkouts` | [`?(GetCheckoutPaymentResponse[])`](../../doc/models/get-checkout-payment-response.md) | Optional | Checkout Payment Settings Response | getCheckouts(): ?array | setCheckouts(?array checkouts): void |
| `ip` | `?string` | Optional | Ip address | getIp(): ?string | setIp(?string ip): void |
| `sessionId` | `?string` | Optional | Session id | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `location` | [`?GetLocationResponse`](../../doc/models/get-location-response.md) | Optional | Location | getLocation(): ?GetLocationResponse | setLocation(?GetLocationResponse location): void |
| `device` | [`?GetDeviceResponse`](../../doc/models/get-device-response.md) | Optional | Device's informations | getDevice(): ?GetDeviceResponse | setDevice(?GetDeviceResponse device): void |
| `closed` | `?bool` | Optional | Indicates whether the order is closed | getClosed(): ?bool | setClosed(?bool closed): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": null,
  "currency": null,
  "items": null,
  "customer": null,
  "status": null,
  "created_at": null,
  "updated_at": null,
  "charges": null,
  "invoice_url": null,
  "shipping": null,
  "metadata": null,
  "checkouts": null,
  "ip": null,
  "session_id": null,
  "location": null,
  "device": null,
  "closed": null
}
```

