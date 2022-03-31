
# Create Order Request

Request for creating an order

## Structure

`CreateOrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`CreateOrderItemRequest[]`](../../doc/models/create-order-item-request.md) | Required | Items | getItems(): array | setItems(array items): void |
| `customer` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Required | Customer | getCustomer(): CreateCustomerRequest | setCustomer(CreateCustomerRequest customer): void |
| `payments` | [`CreatePaymentRequest[]`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayments(): array | setPayments(array payments): void |
| `code` | `string` | Required | The order code | getCode(): string | setCode(string code): void |
| `customerId` | `string` | Required | The customer id | getCustomerId(): string | setCustomerId(string customerId): void |
| `shipping` | [`?CreateShippingRequest`](../../doc/models/create-shipping-request.md) | Optional | Shipping data | getShipping(): ?CreateShippingRequest | setShipping(?CreateShippingRequest shipping): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `antifraudEnabled` | `?bool` | Optional | Defines whether the order will go through anti-fraud | getAntifraudEnabled(): ?bool | setAntifraudEnabled(?bool antifraudEnabled): void |
| `ip` | `?string` | Optional | Ip address | getIp(): ?string | setIp(?string ip): void |
| `sessionId` | `?string` | Optional | Session id | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `location` | [`?CreateLocationRequest`](../../doc/models/create-location-request.md) | Optional | Request's location | getLocation(): ?CreateLocationRequest | setLocation(?CreateLocationRequest location): void |
| `device` | [`?CreateDeviceRequest`](../../doc/models/create-device-request.md) | Optional | Device's informations | getDevice(): ?CreateDeviceRequest | setDevice(?CreateDeviceRequest device): void |
| `closed` | `bool` | Required | **Default**: `true` | getClosed(): bool | setClosed(bool closed): void |
| `currency` | `?string` | Optional | Currency | getCurrency(): ?string | setCurrency(?string currency): void |
| `antifraud` | [`?CreateAntifraudRequest`](../../doc/models/create-antifraud-request.md) | Optional | - | getAntifraud(): ?CreateAntifraudRequest | setAntifraud(?CreateAntifraudRequest antifraud): void |
| `submerchant` | [`?CreateSubMerchantRequest`](../../doc/models/create-sub-merchant-request.md) | Optional | SubMerchant | getSubmerchant(): ?CreateSubMerchantRequest | setSubmerchant(?CreateSubMerchantRequest submerchant): void |

## Example (as JSON)

```json
{
  "items": null,
  "customer": {
    "name": "{\n    \"name\": \"Tony Stark\"\n}",
    "email": null,
    "document": null,
    "type": null,
    "address": null,
    "metadata": null,
    "phones": null,
    "code": null
  },
  "payments": null,
  "code": null,
  "customer_id": null,
  "metadata": null,
  "closed": true
}
```

