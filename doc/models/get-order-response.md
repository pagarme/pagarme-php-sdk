
# Get Order Response

Response object for getting an Order

## Structure

`GetOrderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Required | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Required | - | getCode(): ?string | setCode(?string code): void |
| `currency` | `?string` | Required | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `items` | [`?(GetOrderItemResponse[])`](../../doc/models/get-order-item-response.md) | Required | - | getItems(): ?array | setItems(?array items): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `status` | `?string` | Required | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Required | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Required | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `charges` | [`?(GetChargeResponse[])`](../../doc/models/get-charge-response.md) | Required | - | getCharges(): ?array | setCharges(?array charges): void |
| `invoiceUrl` | `?string` | Required | - | getInvoiceUrl(): ?string | setInvoiceUrl(?string invoiceUrl): void |
| `shipping` | [`?GetShippingResponse`](../../doc/models/get-shipping-response.md) | Required | - | getShipping(): ?GetShippingResponse | setShipping(?GetShippingResponse shipping): void |
| `metadata` | `?array<string,string>` | Required | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `checkouts` | [`?(GetCheckoutPaymentResponse[])`](../../doc/models/get-checkout-payment-response.md) | Optional | Checkout Payment Settings Response | getCheckouts(): ?array | setCheckouts(?array checkouts): void |
| `ip` | `?string` | Optional | Ip address | getIp(): ?string | setIp(?string ip): void |
| `sessionId` | `?string` | Optional | Session id | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `location` | [`?GetLocationResponse`](../../doc/models/get-location-response.md) | Optional | Location | getLocation(): ?GetLocationResponse | setLocation(?GetLocationResponse location): void |
| `device` | [`?GetDeviceResponse`](../../doc/models/get-device-response.md) | Optional | Device's informations | getDevice(): ?GetDeviceResponse | setDevice(?GetDeviceResponse device): void |
| `closed` | `?bool` | Required | Indicates whether the order is closed | getClosed(): ?bool | setClosed(?bool closed): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": "code8",
  "currency": "currency0",
  "items": [
    {
      "id": "id7",
      "amount": 13,
      "description": "description7",
      "quantity": 127,
      "category": "category5",
      "code": "code5"
    },
    {
      "id": "id8",
      "amount": 14,
      "description": "description8",
      "quantity": 128,
      "category": "category6",
      "code": "code6"
    }
  ],
  "customer": null,
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "charges": [
    {
      "id": "id8",
      "code": "code6",
      "gateway_id": "gateway_id2",
      "amount": 42,
      "status": "status0",
      "currency": "currency2",
      "payment_method": "payment_method2",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": null,
      "invoice": null,
      "order": null,
      "customer": null,
      "metadata": {
        "key0": "metadata5"
      },
      "paid_at": null,
      "canceled_at": null,
      "canceled_amount": 152,
      "paid_amount": 122,
      "interest_and_fine_paid": null,
      "recurrency_cycle": null
    },
    {
      "id": "id9",
      "code": "code7",
      "gateway_id": "gateway_id1",
      "amount": 43,
      "status": "status9",
      "currency": "currency1",
      "payment_method": "payment_method1",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": null,
      "invoice": null,
      "order": null,
      "customer": null,
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata5",
        "key2": "metadata6"
      },
      "paid_at": null,
      "canceled_at": null,
      "canceled_amount": 153,
      "paid_amount": 121,
      "interest_and_fine_paid": null,
      "recurrency_cycle": null
    }
  ],
  "invoice_url": "invoice_url2",
  "shipping": {
    "amount": 52,
    "description": "description6",
    "recipient_name": "recipient_name2",
    "recipient_phone": "recipient_phone6",
    "address": {
      "id": "id0",
      "street": "street0",
      "number": "number8",
      "complement": "complement6",
      "zip_code": "zip_code4",
      "neighborhood": "neighborhood6",
      "city": "city0",
      "state": "state6",
      "country": "country4",
      "status": "status2",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": null,
      "metadata": {
        "key0": "metadata7"
      },
      "line_1": "line_14",
      "line_2": "line_28",
      "deleted_at": null
    },
    "max_delivery_date": null,
    "estimated_delivery_date": null,
    "type": "type6"
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "checkouts": null,
  "ip": null,
  "session_id": null,
  "location": null,
  "device": null,
  "closed": false
}
```

