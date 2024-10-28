
# Get Subscription Response

## Structure

`GetSubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `startAt` | `?DateTime` | Optional | - | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `interval` | `?string` | Optional | - | getInterval(): ?string | setInterval(?string interval): void |
| `intervalCount` | `?int` | Optional | - | getIntervalCount(): ?int | setIntervalCount(?int intervalCount): void |
| `billingType` | `?string` | Optional | - | getBillingType(): ?string | setBillingType(?string billingType): void |
| `currentCycle` | [`?GetPeriodResponse`](../../doc/models/get-period-response.md) | Optional | - | getCurrentCycle(): ?GetPeriodResponse | setCurrentCycle(?GetPeriodResponse currentCycle): void |
| `paymentMethod` | `?string` | Optional | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `installments` | `?int` | Optional | - | getInstallments(): ?int | setInstallments(?int installments): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `card` | [`?GetCardResponse`](../../doc/models/get-card-response.md) | Optional | - | getCard(): ?GetCardResponse | setCard(?GetCardResponse card): void |
| `items` | [`?(GetSubscriptionItemResponse[])`](../../doc/models/get-subscription-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `statementDescriptor` | `?string` | Optional | - | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `setup` | [`?GetSetupResponse`](../../doc/models/get-setup-response.md) | Optional | - | getSetup(): ?GetSetupResponse | setSetup(?GetSetupResponse setup): void |
| `gatewayAffiliationId` | `?string` | Optional | Affiliation Code | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |
| `nextBillingAt` | `?DateTime` | Optional | - | getNextBillingAt(): ?\DateTime | setNextBillingAt(?\DateTime nextBillingAt): void |
| `billingDay` | `?int` | Optional | - | getBillingDay(): ?int | setBillingDay(?int billingDay): void |
| `minimumPrice` | `?int` | Optional | - | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `canceledAt` | `?DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `discounts` | [`?(GetDiscountResponse[])`](../../doc/models/get-discount-response.md) | Optional | Subscription discounts | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `increments` | [`?(GetIncrementResponse[])`](../../doc/models/get-increment-response.md) | Optional | Subscription increments | getIncrements(): ?array | setIncrements(?array increments): void |
| `boletoDueDays` | `?int` | Optional | Days until boleto expires | getBoletoDueDays(): ?int | setBoletoDueDays(?int boletoDueDays): void |
| `split` | [`?GetSubscriptionSplitResponse`](../../doc/models/get-subscription-split-response.md) | Optional | Subscription's split response | getSplit(): ?GetSubscriptionSplitResponse | setSplit(?GetSubscriptionSplitResponse split): void |
| `boleto` | [`?GetSubscriptionBoletoResponse`](../../doc/models/get-subscription-boleto-response.md) | Optional | - | getBoleto(): ?GetSubscriptionBoletoResponse | setBoleto(?GetSubscriptionBoletoResponse boleto): void |
| `manualBilling` | `?bool` | Optional | - | getManualBilling(): ?bool | setManualBilling(?bool manualBilling): void |
| `indirectAcceptor` | `?string` | Optional | Business model identifier | getIndirectAcceptor(): ?string | setIndirectAcceptor(?string indirectAcceptor): void |

## Example (as JSON)

```json
{
  "boleto": {
    "interest": {
      "days": 2,
      "type": "percentage",
      "amount": 20
    },
    "fine": {
      "days": 2,
      "type": "flat",
      "amount": 10
    },
    "max_days_to_pay_past_due": 2
  },
  "id": "id4",
  "code": "code2",
  "start_at": "2016-03-13T12:52:32.123Z",
  "interval": "interval2",
  "interval_count": 224
}
```

