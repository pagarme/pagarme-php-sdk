
# Get Invoice Response

Response object for getting an invoice

## Structure

`GetInvoiceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `paymentMethod` | `?string` | Optional | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `items` | [`?(GetInvoiceItemResponse[])`](../../doc/models/get-invoice-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `charge` | [`?GetChargeResponse`](../../doc/models/get-charge-response.md) | Optional | - | getCharge(): ?GetChargeResponse | setCharge(?GetChargeResponse charge): void |
| `installments` | `?int` | Optional | - | getInstallments(): ?int | setInstallments(?int installments): void |
| `billingAddress` | [`?GetBillingAddressResponse`](../../doc/models/get-billing-address-response.md) | Optional | - | getBillingAddress(): ?GetBillingAddressResponse | setBillingAddress(?GetBillingAddressResponse billingAddress): void |
| `subscription` | [`?GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Optional | - | getSubscription(): ?GetSubscriptionResponse | setSubscription(?GetSubscriptionResponse subscription): void |
| `cycle` | [`?GetPeriodResponse`](../../doc/models/get-period-response.md) | Optional | - | getCycle(): ?GetPeriodResponse | setCycle(?GetPeriodResponse cycle): void |
| `shipping` | [`?GetShippingResponse`](../../doc/models/get-shipping-response.md) | Optional | - | getShipping(): ?GetShippingResponse | setShipping(?GetShippingResponse shipping): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `dueAt` | `?DateTime` | Optional | - | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `canceledAt` | `?DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `billingAt` | `?DateTime` | Optional | - | getBillingAt(): ?\DateTime | setBillingAt(?\DateTime billingAt): void |
| `seenAt` | `?DateTime` | Optional | - | getSeenAt(): ?\DateTime | setSeenAt(?\DateTime seenAt): void |
| `totalDiscount` | `?int` | Optional | Total discounted value | getTotalDiscount(): ?int | setTotalDiscount(?int totalDiscount): void |
| `totalIncrement` | `?int` | Optional | Total discounted value | getTotalIncrement(): ?int | setTotalIncrement(?int totalIncrement): void |
| `subscriptionId` | `?string` | Optional | Subscription Id | getSubscriptionId(): ?string | setSubscriptionId(?string subscriptionId): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": "code8",
  "url": "url4",
  "amount": 168,
  "status": "status8"
}
```

