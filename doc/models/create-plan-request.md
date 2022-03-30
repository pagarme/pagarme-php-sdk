
# Create Plan Request

Request for creating a plan

## Structure

`CreatePlanRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Plan's name | getName(): string | setName(string name): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `statementDescriptor` | `string` | Required | Text that will be printed on the credit card's statement | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `items` | [`CreatePlanItemRequest[]`](../../doc/models/create-plan-item-request.md) | Required | Plan items | getItems(): array | setItems(array items): void |
| `shippable` | `bool` | Required | Indicates if the plan is shippable | getShippable(): bool | setShippable(bool shippable): void |
| `paymentMethods` | `string[]` | Required | Allowed payment methods for the plan | getPaymentMethods(): array | setPaymentMethods(array paymentMethods): void |
| `installments` | `int[]` | Required | Number of installments | getInstallments(): array | setInstallments(array installments): void |
| `currency` | `string` | Required | Currency | getCurrency(): string | setCurrency(string currency): void |
| `interval` | `string` | Required | Interval | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | Interval counts between two charges. For instance, if the interval is 'month' and count is 2, the customer will be charged once every two months. | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `billingDays` | `int[]` | Required | Allowed billings days for the subscription, in case the plan type is 'exact_day' | getBillingDays(): array | setBillingDays(array billingDays): void |
| `billingType` | `string` | Required | Billing type | getBillingType(): string | setBillingType(string billingType): void |
| `pricingScheme` | [`CreatePricingSchemeRequest`](../../doc/models/create-pricing-scheme-request.md) | Required | Plan's pricing scheme | getPricingScheme(): CreatePricingSchemeRequest | setPricingScheme(CreatePricingSchemeRequest pricingScheme): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `minimumPrice` | `?int` | Optional | Minimum price that will be charged | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `cycles` | `?int` | Optional | Number of cycles | getCycles(): ?int | setCycles(?int cycles): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `trialPeriodDays` | `?int` | Optional | Trial period, where the customer will not be charged. | getTrialPeriodDays(): ?int | setTrialPeriodDays(?int trialPeriodDays): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "description": "description0",
  "statement_descriptor": "statement_descriptor0",
  "items": [
    {
      "name": "name7",
      "pricing_scheme": {
        "scheme_type": "scheme_type1",
        "price_brackets": [
          {
            "start_quantity": 60,
            "price": 2,
            "end_quantity": null,
            "overage_price": null
          },
          {
            "start_quantity": 61,
            "price": 1,
            "end_quantity": null,
            "overage_price": null
          },
          {
            "start_quantity": 62,
            "price": 0,
            "end_quantity": null,
            "overage_price": null
          }
        ],
        "price": null,
        "minimum_price": null,
        "percentage": null
      },
      "id": "id7",
      "description": "description7",
      "cycles": null,
      "quantity": null
    },
    {
      "name": "name8",
      "pricing_scheme": {
        "scheme_type": "scheme_type0",
        "price_brackets": [
          {
            "start_quantity": 59,
            "price": 3,
            "end_quantity": null,
            "overage_price": null
          },
          {
            "start_quantity": 60,
            "price": 2,
            "end_quantity": null,
            "overage_price": null
          }
        ],
        "price": null,
        "minimum_price": null,
        "percentage": null
      },
      "id": "id8",
      "description": "description8",
      "cycles": null,
      "quantity": null
    }
  ],
  "shippable": false,
  "payment_methods": [
    "payment_methods5",
    "payment_methods6"
  ],
  "installments": [
    119,
    120,
    121
  ],
  "currency": "currency0",
  "interval": "interval2",
  "interval_count": 82,
  "billing_days": [
    143,
    144,
    145
  ],
  "billing_type": "billing_type6",
  "pricing_scheme": {
    "scheme_type": "scheme_type8",
    "price_brackets": [
      {
        "start_quantity": 119,
        "price": 57,
        "end_quantity": null,
        "overage_price": null
      },
      {
        "start_quantity": 120,
        "price": 58,
        "end_quantity": null,
        "overage_price": null
      },
      {
        "start_quantity": 121,
        "price": 59,
        "end_quantity": null,
        "overage_price": null
      }
    ],
    "price": null,
    "minimum_price": null,
    "percentage": null
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "minimum_price": null,
  "cycles": null,
  "quantity": null,
  "trial_period_days": null
}
```

