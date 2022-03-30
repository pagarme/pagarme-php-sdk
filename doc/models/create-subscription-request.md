
# Create Subscription Request

Request for creating a subcription

## Structure

`CreateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Required | Customer | getCustomer(): CreateCustomerRequest | setCustomer(CreateCustomerRequest customer): void |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Card | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `code` | `string` | Required | Subscription code | getCode(): string | setCode(string code): void |
| `paymentMethod` | `string` | Required | Payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `billingType` | `string` | Required | Billing type | getBillingType(): string | setBillingType(string billingType): void |
| `statementDescriptor` | `string` | Required | Statement descriptor for credit card subscriptions | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `description` | `string` | Required | Subscription description | getDescription(): string | setDescription(string description): void |
| `currency` | `string` | Required | Currency | getCurrency(): string | setCurrency(string currency): void |
| `interval` | `string` | Required | Interval | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | Interval count | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `pricingScheme` | [`CreatePricingSchemeRequest`](../../doc/models/create-pricing-scheme-request.md) | Required | Subscription pricing scheme | getPricingScheme(): CreatePricingSchemeRequest | setPricingScheme(CreatePricingSchemeRequest pricingScheme): void |
| `items` | [`CreateSubscriptionItemRequest[]`](../../doc/models/create-subscription-item-request.md) | Required | Subscription items | getItems(): array | setItems(array items): void |
| `shipping` | [`CreateShippingRequest`](../../doc/models/create-shipping-request.md) | Required | Shipping | getShipping(): CreateShippingRequest | setShipping(CreateShippingRequest shipping): void |
| `discounts` | [`CreateDiscountRequest[]`](../../doc/models/create-discount-request.md) | Required | Discounts | getDiscounts(): array | setDiscounts(array discounts): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `setup` | [`CreateSetupRequest`](../../doc/models/create-setup-request.md) | Required | Setup data | getSetup(): CreateSetupRequest | setSetup(CreateSetupRequest setup): void |
| `planId` | `?string` | Optional | Plan id | getPlanId(): ?string | setPlanId(?string planId): void |
| `customerId` | `?string` | Optional | Customer id | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `cardId` | `?string` | Optional | Card id | getCardId(): ?string | setCardId(?string cardId): void |
| `billingDay` | `?int` | Optional | Billing day | getBillingDay(): ?int | setBillingDay(?int billingDay): void |
| `installments` | `?int` | Optional | Number of installments | getInstallments(): ?int | setInstallments(?int installments): void |
| `startAt` | `?\DateTime` | Optional | Subscription start date | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `minimumPrice` | `?int` | Optional | Subscription minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `cycles` | `?int` | Optional | Number of cycles | getCycles(): ?int | setCycles(?int cycles): void |
| `cardToken` | `?string` | Optional | Card token | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `gatewayAffiliationId` | `?string` | Optional | Gateway Affiliation code | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `boletoDueDays` | `?int` | Optional | Days until boleto expires | getBoletoDueDays(): ?int | setBoletoDueDays(?int boletoDueDays): void |
| `increments` | [`CreateIncrementRequest[]`](../../doc/models/create-increment-request.md) | Required | Increments | getIncrements(): array | setIncrements(array increments): void |
| `period` | [`?CreatePeriodRequest`](../../doc/models/create-period-request.md) | Optional | - | getPeriod(): ?CreatePeriodRequest | setPeriod(?CreatePeriodRequest period): void |
| `submerchant` | [`?CreateSubMerchantRequest`](../../doc/models/create-sub-merchant-request.md) | Optional | SubMerchant | getSubmerchant(): ?CreateSubMerchantRequest | setSubmerchant(?CreateSubMerchantRequest submerchant): void |
| `split` | [`?CreateSubscriptionSplitRequest`](../../doc/models/create-subscription-split-request.md) | Optional | Subscription's split | getSplit(): ?CreateSubscriptionSplitRequest | setSplit(?CreateSubscriptionSplitRequest split): void |

## Example (as JSON)

```json
{
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
  "card": {
    "number": null,
    "holder_name": null,
    "exp_month": null,
    "exp_year": null,
    "cvv": null,
    "billing_address": null,
    "brand": null,
    "billing_address_id": null,
    "metadata": null,
    "type": "credit",
    "options": null,
    "private_label": null,
    "label": null
  },
  "code": null,
  "payment_method": null,
  "billing_type": null,
  "statement_descriptor": null,
  "description": null,
  "currency": null,
  "interval": null,
  "interval_count": null,
  "pricing_scheme": null,
  "items": null,
  "shipping": null,
  "discounts": null,
  "metadata": null,
  "setup": null,
  "increments": null
}
```

