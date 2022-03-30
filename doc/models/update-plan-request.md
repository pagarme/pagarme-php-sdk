
# Update Plan Request

Request for updating a plan

## Structure

`UpdatePlanRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Plan's name | getName(): string | setName(string name): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `installments` | `int[]` | Required | Number os installments | getInstallments(): array | setInstallments(array installments): void |
| `statementDescriptor` | `string` | Required | Text that will be shown on the credit card's statement | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `currency` | `string` | Required | Currency | getCurrency(): string | setCurrency(string currency): void |
| `interval` | `string` | Required | Interval | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | Interval count | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `paymentMethods` | `string[]` | Required | Payment methods accepted by the plan | getPaymentMethods(): array | setPaymentMethods(array paymentMethods): void |
| `billingType` | `string` | Required | Billing type | getBillingType(): string | setBillingType(string billingType): void |
| `status` | `string` | Required | Plan status | getStatus(): string | setStatus(string status): void |
| `shippable` | `bool` | Required | Indicates if the plan is shippable | getShippable(): bool | setShippable(bool shippable): void |
| `billingDays` | `int[]` | Required | Billing days accepted by the plan | getBillingDays(): array | setBillingDays(array billingDays): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `minimumPrice` | `?int` | Optional | Minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `trialPeriodDays` | `?int` | Optional | Number of trial period in days, where the customer will not be charged | getTrialPeriodDays(): ?int | setTrialPeriodDays(?int trialPeriodDays): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "description": "description0",
  "installments": [
    119,
    120,
    121
  ],
  "statement_descriptor": "statement_descriptor0",
  "currency": "currency0",
  "interval": "interval2",
  "interval_count": 82,
  "payment_methods": [
    "payment_methods5",
    "payment_methods6"
  ],
  "billing_type": "billing_type6",
  "status": "status8",
  "shippable": false,
  "billing_days": [
    143,
    144,
    145
  ],
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "minimum_price": null,
  "trial_period_days": null
}
```

