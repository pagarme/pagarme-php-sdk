
# Get Charge Response

Response object for getting a charge

## Structure

`GetChargeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `gatewayId` | `?string` | Optional | - | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `paymentMethod` | `?string` | Optional | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `dueAt` | `?DateTime` | Optional | - | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `lastTransaction` | [`?GetTransactionResponse`](../../doc/models/get-transaction-response.md) | Optional | - | getLastTransaction(): ?GetTransactionResponse | setLastTransaction(?GetTransactionResponse lastTransaction): void |
| `invoice` | [`?GetInvoiceResponse`](../../doc/models/get-invoice-response.md) | Optional | - | getInvoice(): ?GetInvoiceResponse | setInvoice(?GetInvoiceResponse invoice): void |
| `order` | [`?GetOrderResponse`](../../doc/models/get-order-response.md) | Optional | - | getOrder(): ?GetOrderResponse | setOrder(?GetOrderResponse order): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `paidAt` | `?DateTime` | Optional | - | getPaidAt(): ?\DateTime | setPaidAt(?\DateTime paidAt): void |
| `canceledAt` | `?DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `canceledAmount` | `?int` | Optional | Canceled Amount | getCanceledAmount(): ?int | setCanceledAmount(?int canceledAmount): void |
| `paidAmount` | `?int` | Optional | Paid amount | getPaidAmount(): ?int | setPaidAmount(?int paidAmount): void |
| `interestAndFinePaid` | `?int` | Optional | interest and fine paid | getInterestAndFinePaid(): ?int | setInterestAndFinePaid(?int interestAndFinePaid): void |
| `recurrencyCycle` | `?string` | Optional | Defines whether the card has been used one or more times. | getRecurrencyCycle(): ?string | setRecurrencyCycle(?string recurrencyCycle): void |
| `paymentOrigin` | [`?GetPaymentOriginResponse`](../../doc/models/get-payment-origin-response.md) | Optional | - | getPaymentOrigin(): ?GetPaymentOriginResponse | setPaymentOrigin(?GetPaymentOriginResponse paymentOrigin): void |

## Example (as JSON)

```json
{
  "recurrency_cycle": "\"first\" or \"subsequent\"",
  "id": "id0",
  "code": "code8",
  "gateway_id": "gateway_id0",
  "amount": 164,
  "status": "status2"
}
```

