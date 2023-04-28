
# Get Plan Response

Response object for getting a plan

## Structure

`GetPlanResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `statementDescriptor` | `?string` | Optional | - | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `interval` | `?string` | Optional | - | getInterval(): ?string | setInterval(?string interval): void |
| `intervalCount` | `?int` | Optional | - | getIntervalCount(): ?int | setIntervalCount(?int intervalCount): void |
| `billingType` | `?string` | Optional | - | getBillingType(): ?string | setBillingType(?string billingType): void |
| `paymentMethods` | `?(string[])` | Optional | - | getPaymentMethods(): ?array | setPaymentMethods(?array paymentMethods): void |
| `installments` | `?(int[])` | Optional | - | getInstallments(): ?array | setInstallments(?array installments): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `items` | [`?(GetPlanItemResponse[])`](../../doc/models/get-plan-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `billingDays` | `?(int[])` | Optional | - | getBillingDays(): ?array | setBillingDays(?array billingDays): void |
| `shippable` | `?bool` | Optional | - | getShippable(): ?bool | setShippable(?bool shippable): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `trialPeriodDays` | `?int` | Optional | - | getTrialPeriodDays(): ?int | setTrialPeriodDays(?int trialPeriodDays): void |
| `minimumPrice` | `?int` | Optional | - | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "name": "name0",
  "description": "description0",
  "url": "url4",
  "statement_descriptor": "statement_descriptor0",
  "interval": "interval2",
  "interval_count": 82,
  "billing_type": "billing_type6",
  "payment_methods": [
    "payment_methods5",
    "payment_methods6"
  ],
  "installments": [
    119,
    120,
    121
  ],
  "status": "status8",
  "currency": "currency0",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "items": [
    {
      "id": "id7",
      "name": "name7",
      "status": "status1",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "pricing_scheme": {
        "price": 149,
        "scheme_type": "scheme_type1",
        "price_brackets": [
          {
            "start_quantity": 60,
            "price": 2,
            "end_quantity": 68,
            "overage_price": 82
          },
          {
            "start_quantity": 61,
            "price": 1,
            "end_quantity": 69,
            "overage_price": 83
          },
          {
            "start_quantity": 62,
            "price": 0,
            "end_quantity": 70,
            "overage_price": 84
          }
        ],
        "minimum_price": 53,
        "percentage": 25.89
      },
      "description": "description7",
      "plan": {
        "id": "id7",
        "name": "name7",
        "description": "description3",
        "url": "url1",
        "statement_descriptor": "statement_descriptor7",
        "interval": "interval5",
        "interval_count": 89,
        "billing_type": "billing_type9",
        "payment_methods": [
          "payment_methods8",
          "payment_methods9"
        ],
        "installments": [
          126,
          127,
          128
        ],
        "status": "status1",
        "currency": "currency7",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "items": [
          {},
          {}
        ],
        "billing_days": [
          120,
          119,
          118
        ],
        "shippable": true,
        "metadata": {
          "key0": "metadata6",
          "key1": "metadata7",
          "key2": "metadata8"
        },
        "trial_period_days": 61,
        "minimum_price": 169,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      },
      "quantity": 127,
      "cycles": 109,
      "deleted_at": "2016-03-13T12:52:32.123Z"
    },
    {
      "id": "id8",
      "name": "name8",
      "status": "status0",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "pricing_scheme": {
        "price": 150,
        "scheme_type": "scheme_type0",
        "price_brackets": [
          {
            "start_quantity": 59,
            "price": 3,
            "end_quantity": 67,
            "overage_price": 81
          },
          {
            "start_quantity": 60,
            "price": 2,
            "end_quantity": 68,
            "overage_price": 82
          }
        ],
        "minimum_price": 54,
        "percentage": 25.88
      },
      "description": "description8",
      "plan": {
        "id": "id6",
        "name": "name6",
        "description": "description4",
        "url": "url0",
        "statement_descriptor": "statement_descriptor6",
        "interval": "interval6",
        "interval_count": 88,
        "billing_type": "billing_type0",
        "payment_methods": [
          "payment_methods9",
          "payment_methods0",
          "payment_methods1"
        ],
        "installments": [
          125,
          126
        ],
        "status": "status2",
        "currency": "currency6",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "items": [
          {}
        ],
        "billing_days": [
          119
        ],
        "shippable": false,
        "metadata": {
          "key0": "metadata7"
        },
        "trial_period_days": 60,
        "minimum_price": 170,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      },
      "quantity": 128,
      "cycles": 108,
      "deleted_at": "2016-03-13T12:52:32.123Z"
    }
  ],
  "billing_days": [
    143,
    144,
    145
  ],
  "shippable": false,
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "trial_period_days": 54,
  "minimum_price": 176,
  "deleted_at": "2016-03-13T12:52:32.123Z"
}
```

