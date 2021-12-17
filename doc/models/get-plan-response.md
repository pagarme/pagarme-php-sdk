
# Get Plan Response

Response object for getting a plan

## Structure

`GetPlanResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `url` | `string` | Required | - | getUrl(): string | setUrl(string url): void |
| `statementDescriptor` | `string` | Required | - | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `interval` | `string` | Required | - | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | - | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `billingType` | `string` | Required | - | getBillingType(): string | setBillingType(string billingType): void |
| `paymentMethods` | `string[]` | Required | - | getPaymentMethods(): array | setPaymentMethods(array paymentMethods): void |
| `installments` | `int[]` | Required | - | getInstallments(): array | setInstallments(array installments): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `currency` | `string` | Required | - | getCurrency(): string | setCurrency(string currency): void |
| `createdAt` | `\DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | - | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `items` | [`GetPlanItemResponse[]`](/doc/models/get-plan-item-response.md) | Required | - | getItems(): array | setItems(array items): void |
| `billingDays` | `int[]` | Required | - | getBillingDays(): array | setBillingDays(array billingDays): void |
| `shippable` | `bool` | Required | - | getShippable(): bool | setShippable(bool shippable): void |
| `metadata` | `array` | Required | - | getMetadata(): array | setMetadata(array metadata): void |
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
        "minimum_price": null,
        "percentage": null
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
        "items": {
          "id": "id5",
          "name": "name5",
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 51,
            "scheme_type": "scheme_type3",
            "price_brackets": [
              {
                "start_quantity": 158,
                "price": 160,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 159,
                "price": 159,
                "end_quantity": null,
                "overage_price": null
              }
            ],
            "minimum_price": null,
            "percentage": null
          },
          "description": "description5",
          "plan": {
            "id": "id9",
            "name": "name9",
            "description": "description1",
            "url": "url3",
            "statement_descriptor": "statement_descriptor9",
            "interval": "interval3",
            "interval_count": 187,
            "billing_type": "billing_type7",
            "payment_methods": [
              "payment_methods6",
              "payment_methods7",
              "payment_methods8"
            ],
            "installments": [
              224,
              225
            ],
            "status": "status9",
            "currency": "currency1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "items": null,
            "billing_days": [
              38
            ],
            "shippable": true,
            "metadata": {
              "key0": "metadata4"
            },
            "trial_period_days": null,
            "minimum_price": null,
            "deleted_at": null
          },
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
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
        "trial_period_days": null,
        "minimum_price": null,
        "deleted_at": null
      },
      "quantity": null,
      "cycles": null,
      "deleted_at": null
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
        "minimum_price": null,
        "percentage": null
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
        "items": {
          "id": "id4",
          "name": "name4",
          "status": "status4",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 50,
            "scheme_type": "scheme_type4",
            "price_brackets": [
              {
                "start_quantity": 159,
                "price": 159,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 160,
                "price": 158,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 161,
                "price": 157,
                "end_quantity": null,
                "overage_price": null
              }
            ],
            "minimum_price": null,
            "percentage": null
          },
          "description": "description4",
          "plan": {
            "id": "id0",
            "name": "name0",
            "description": "description0",
            "url": "url4",
            "statement_descriptor": "statement_descriptor0",
            "interval": "interval2",
            "interval_count": 188,
            "billing_type": "billing_type6",
            "payment_methods": [
              "payment_methods5",
              "payment_methods6"
            ],
            "installments": [
              225,
              226,
              227
            ],
            "status": "status8",
            "currency": "currency0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "items": null,
            "billing_days": [
              37,
              38,
              39
            ],
            "shippable": false,
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata4",
              "key2": "metadata5"
            },
            "trial_period_days": null,
            "minimum_price": null,
            "deleted_at": null
          },
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
        "billing_days": [
          119
        ],
        "shippable": false,
        "metadata": {
          "key0": "metadata7"
        },
        "trial_period_days": null,
        "minimum_price": null,
        "deleted_at": null
      },
      "quantity": null,
      "cycles": null,
      "deleted_at": null
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
  "trial_period_days": null,
  "minimum_price": null,
  "deleted_at": null
}
```

