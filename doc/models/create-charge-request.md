
# Create Charge Request

Request for creating a new charge

## Structure

`CreateChargeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | Code | getCode(): string | setCode(string code): void |
| `amount` | `int` | Required | The amount of the charge, in cents | getAmount(): int | setAmount(int amount): void |
| `customerId` | `string` | Required | The customer's id | getCustomerId(): string | setCustomerId(string customerId): void |
| `customer` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Required | Customer data | getCustomer(): CreateCustomerRequest | setCustomer(CreateCustomerRequest customer): void |
| `payment` | [`CreatePaymentRequest`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayment(): CreatePaymentRequest | setPayment(CreatePaymentRequest payment): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `dueAt` | `?\DateTime` | Optional | The charge due date | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `antifraud` | [`CreateAntifraudRequest`](../../doc/models/create-antifraud-request.md) | Required | - | getAntifraud(): CreateAntifraudRequest | setAntifraud(CreateAntifraudRequest antifraud): void |
| `orderId` | `string` | Required | Order Id | getOrderId(): string | setOrderId(string orderId): void |

## Example (as JSON)

```json
{
  "code": null,
  "amount": null,
  "customer_id": null,
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
  "payment": null,
  "metadata": null,
  "antifraud": null,
  "order_id": null
}
```

