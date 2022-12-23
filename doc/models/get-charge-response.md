
# Get Charge Response

Response object for getting a charge

## Structure

`GetChargeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Required | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Required | - | getCode(): ?string | setCode(?string code): void |
| `gatewayId` | `?string` | Required | - | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `amount` | `?int` | Required | - | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Required | - | getStatus(): ?string | setStatus(?string status): void |
| `currency` | `?string` | Required | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `paymentMethod` | `?string` | Required | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `dueAt` | `?\DateTime` | Required | - | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `createdAt` | `?\DateTime` | Required | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Required | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `lastTransaction` | [`?GetTransactionResponse`](../../doc/models/get-transaction-response.md) | Optional | - | getLastTransaction(): ?GetTransactionResponse | setLastTransaction(?GetTransactionResponse lastTransaction): void |
| `invoice` | [`?GetInvoiceResponse`](../../doc/models/get-invoice-response.md) | Optional | - | getInvoice(): ?GetInvoiceResponse | setInvoice(?GetInvoiceResponse invoice): void |
| `order` | [`?GetOrderResponse`](../../doc/models/get-order-response.md) | Optional | - | getOrder(): ?GetOrderResponse | setOrder(?GetOrderResponse order): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `?array<string,string>` | Required | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `paidAt` | `?\DateTime` | Optional | - | getPaidAt(): ?\DateTime | setPaidAt(?\DateTime paidAt): void |
| `canceledAt` | `?\DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `canceledAmount` | `?int` | Required | Canceled Amount | getCanceledAmount(): ?int | setCanceledAmount(?int canceledAmount): void |
| `paidAmount` | `?int` | Required | Paid amount | getPaidAmount(): ?int | setPaidAmount(?int paidAmount): void |
| `interestAndFinePaid` | `?int` | Optional | interest and fine paid | getInterestAndFinePaid(): ?int | setInterestAndFinePaid(?int interestAndFinePaid): void |
| `recurrencyCycle` | `?string` | Optional | Defines whether the card has been used one or more times. | getRecurrencyCycle(): ?string | setRecurrencyCycle(?string recurrencyCycle): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": "code8",
  "gateway_id": "gateway_id0",
  "amount": 46,
  "status": "status8",
  "currency": "currency0",
  "payment_method": "payment_method0",
  "due_at": "2016-03-13T12:52:32.123Z",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "last_transaction": null,
  "invoice": null,
  "order": null,
  "customer": null,
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "paid_at": null,
  "canceled_at": null,
  "canceled_amount": 64,
  "paid_amount": 210,
  "interest_and_fine_paid": null,
  "recurrency_cycle": null
}
```

