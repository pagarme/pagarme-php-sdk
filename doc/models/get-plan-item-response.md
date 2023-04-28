
# Get Plan Item Response

Response object for getting a plan item

## Structure

`GetPlanItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `pricingScheme` | [`?GetPricingSchemeResponse`](../../doc/models/get-pricing-scheme-response.md) | Optional | - | getPricingScheme(): ?GetPricingSchemeResponse | setPricingScheme(?GetPricingSchemeResponse pricingScheme): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `plan` | [`?GetPlanResponse`](../../doc/models/get-plan-response.md) | Optional | - | getPlan(): ?GetPlanResponse | setPlan(?GetPlanResponse plan): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `cycles` | `?int` | Optional | - | getCycles(): ?int | setCycles(?int cycles): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "name": "name0",
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "pricing_scheme": {
    "price": 166,
    "scheme_type": "scheme_type8",
    "price_brackets": [
      {
        "start_quantity": 119,
        "price": 57,
        "end_quantity": 127,
        "overage_price": 141
      },
      {
        "start_quantity": 120,
        "price": 58,
        "end_quantity": 128,
        "overage_price": 142
      },
      {
        "start_quantity": 121,
        "price": 59,
        "end_quantity": 129,
        "overage_price": 143
      }
    ],
    "minimum_price": 6,
    "percentage": 251.76
  },
  "description": "description0",
  "plan": {
    "id": "id4",
    "name": "name4",
    "description": "description4",
    "url": "url8",
    "statement_descriptor": "statement_descriptor4",
    "interval": "interval2",
    "interval_count": 148,
    "billing_type": "billing_type2",
    "payment_methods": [
      "payment_methods9",
      "payment_methods8"
    ],
    "installments": [
      185,
      186,
      187
    ],
    "status": "status6",
    "currency": "currency4",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "items": [
      {
        "id": "id1",
        "name": "name1",
        "status": "status3",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 73,
          "scheme_type": "scheme_type3",
          "price_brackets": [
            {
              "start_quantity": 136,
              "price": 182,
              "end_quantity": 144,
              "overage_price": 158
            },
            {
              "start_quantity": 137,
              "price": 181,
              "end_quantity": 145,
              "overage_price": 159
            },
            {
              "start_quantity": 138,
              "price": 180,
              "end_quantity": 146,
              "overage_price": 160
            }
          ],
          "minimum_price": 233,
          "percentage": 42.01
        },
        "description": "description1",
        "plan": {},
        "quantity": 193,
        "cycles": 213,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      },
      {
        "id": "id2",
        "name": "name2",
        "status": "status4",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 72,
          "scheme_type": "scheme_type4",
          "price_brackets": [
            {
              "start_quantity": 137,
              "price": 181,
              "end_quantity": 145,
              "overage_price": 159
            }
          ],
          "minimum_price": 232,
          "percentage": 42.02
        },
        "description": "description2",
        "plan": {},
        "quantity": 194,
        "cycles": 214,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      }
    ],
    "billing_days": [
      149,
      150
    ],
    "shippable": false,
    "metadata": {
      "key0": "metadata9",
      "key1": "metadata0",
      "key2": "metadata1"
    },
    "trial_period_days": 120,
    "minimum_price": 110,
    "deleted_at": "2016-03-13T12:52:32.123Z"
  },
  "quantity": 68,
  "cycles": 168,
  "deleted_at": "2016-03-13T12:52:32.123Z"
}
```

