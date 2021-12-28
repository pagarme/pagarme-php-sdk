
# Get Period Response

Response object for getting a period

## Structure

`GetPeriodResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startAt` | `\DateTime` | Required | - | getStartAt(): \DateTime | setStartAt(\DateTime startAt): void |
| `endAt` | `\DateTime` | Required | - | getEndAt(): \DateTime | setEndAt(\DateTime endAt): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `billingAt` | `\DateTime` | Required | - | getBillingAt(): \DateTime | setBillingAt(\DateTime billingAt): void |
| `subscription` | [`GetSubscriptionResponse`](/doc/models/get-subscription-response.md) | Required | - | getSubscription(): GetSubscriptionResponse | setSubscription(GetSubscriptionResponse subscription): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `duration` | `int` | Required | - | getDuration(): int | setDuration(int duration): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `cycle` | `int` | Required | - | getCycle(): int | setCycle(int cycle): void |

## Example (as JSON)

```json
{
  "start_at": "2016-03-13T12:52:32.123Z",
  "end_at": "2016-03-13T12:52:32.123Z",
  "id": "id0",
  "billing_at": "2016-03-13T12:52:32.123Z",
  "subscription": {
    "id": "id4",
    "code": "code2",
    "start_at": "2016-03-13T12:52:32.123Z",
    "interval": "interval2",
    "interval_count": 234,
    "billing_type": "billing_type8",
    "current_cycle": null,
    "payment_method": "payment_method4",
    "currency": "currency4",
    "installments": 146,
    "status": "status6",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "customer": null,
    "card": {
      "id": "id8",
      "last_four_digits": "last_four_digits4",
      "brand": "brand2",
      "holder_name": "holder_name4",
      "exp_month": 216,
      "exp_year": 80,
      "status": "status0",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "billing_address": {
        "street": "street0",
        "number": "number2",
        "zip_code": "zip_code4",
        "neighborhood": "neighborhood6",
        "city": "city0",
        "state": "state4",
        "country": "country4",
        "complement": "complement4",
        "line_1": "line_16",
        "line_2": "line_28"
      },
      "customer": null,
      "metadata": {
        "key0": "metadata5",
        "key1": "metadata4"
      },
      "type": "type2",
      "holder_document": "holder_document2",
      "deleted_at": null,
      "first_six_digits": "first_six_digits8",
      "label": "label8"
    },
    "items": [
      {
        "id": "id1",
        "description": "description1",
        "status": "status3",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 243,
          "scheme_type": "scheme_type3",
          "price_brackets": [
            {
              "start_quantity": 222,
              "price": 96,
              "end_quantity": null,
              "overage_price": null
            },
            {
              "start_quantity": 223,
              "price": 95,
              "end_quantity": null,
              "overage_price": null
            },
            {
              "start_quantity": 224,
              "price": 94,
              "end_quantity": null,
              "overage_price": null
            }
          ],
          "minimum_price": null,
          "percentage": null
        },
        "discounts": [
          {
            "id": "id2",
            "value": 63.54,
            "discount_type": "discount_type0",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id3",
            "value": 63.55,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id4",
            "value": 63.56,
            "discount_type": "discount_type2",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "increments": [
          {
            "id": "id0",
            "value": 174.82,
            "increment_type": "increment_type2",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "subscription": {
          "id": "id7",
          "code": "code5",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval5",
          "interval_count": 141,
          "billing_type": "billing_type9",
          "current_cycle": null,
          "payment_method": "payment_method3",
          "currency": "currency7",
          "installments": 53,
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": null,
          "card": {
            "id": "id9",
            "last_four_digits": "last_four_digits5",
            "brand": "brand3",
            "holder_name": "holder_name5",
            "exp_month": 31,
            "exp_year": 9,
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street9",
              "number": "number3",
              "zip_code": "zip_code3",
              "neighborhood": "neighborhood5",
              "city": "city1",
              "state": "state5",
              "country": "country3",
              "complement": "complement5",
              "line_1": "line_17",
              "line_2": "line_27"
            },
            "customer": null,
            "metadata": {
              "key0": "metadata4"
            },
            "type": "type1",
            "holder_document": "holder_document7",
            "deleted_at": null,
            "first_six_digits": "first_six_digits9",
            "label": "label9"
          },
          "items": {
            "id": "id5",
            "description": "description5",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 103,
              "scheme_type": "scheme_type3",
              "price_brackets": [
                {
                  "start_quantity": 106,
                  "price": 212,
                  "end_quantity": null,
                  "overage_price": null
                },
                {
                  "start_quantity": 107,
                  "price": 211,
                  "end_quantity": null,
                  "overage_price": null
                }
              ],
              "minimum_price": null,
              "percentage": null
            },
            "discounts": [
              {
                "id": "id6",
                "value": 130.68,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              }
            ],
            "increments": [
              {
                "id": "id6",
                "value": 5.08,
                "increment_type": "increment_type2",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              },
              {
                "id": "id5",
                "value": 5.07,
                "increment_type": "increment_type3",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              }
            ],
            "subscription": {
              "id": "id9",
              "code": "code7",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval7",
              "interval_count": 221,
              "billing_type": "billing_type7",
              "current_cycle": null,
              "payment_method": "payment_method1",
              "currency": "currency9",
              "installments": 133,
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": null,
              "card": {
                "id": "id7",
                "last_four_digits": "last_four_digits3",
                "brand": "brand1",
                "holder_name": "holder_name7",
                "exp_month": 111,
                "exp_year": 185,
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street1",
                  "number": "number1",
                  "zip_code": "zip_code5",
                  "neighborhood": "neighborhood7",
                  "city": "city9",
                  "state": "state3",
                  "country": "country5",
                  "complement": "complement3",
                  "line_1": "line_15",
                  "line_2": "line_29"
                },
                "customer": null,
                "metadata": {
                  "key0": "metadata6",
                  "key1": "metadata7",
                  "key2": "metadata8"
                },
                "type": "type3",
                "holder_document": "holder_document9",
                "deleted_at": null,
                "first_six_digits": "first_six_digits7",
                "label": "label7"
              },
              "items": null,
              "statement_descriptor": "statement_descriptor9",
              "metadata": {
                "key0": "metadata4"
              },
              "setup": {
                "id": "id3",
                "description": "description7",
                "amount": 157,
                "status": "status5"
              },
              "gateway_affiliation_id": "gateway_affiliation_id5",
              "next_billing_at": null,
              "billing_day": null,
              "minimum_price": null,
              "canceled_at": null,
              "discounts": null,
              "increments": [
                {
                  "id": "id2",
                  "value": 85.84,
                  "increment_type": "increment_type4",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id1",
                  "value": 85.83,
                  "increment_type": "increment_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "boleto_due_days": null
            },
            "name": "name5",
            "quantity": null,
            "cycles": null,
            "deleted_at": null
          },
          "statement_descriptor": "statement_descriptor7",
          "metadata": {
            "key0": "metadata6",
            "key1": "metadata7",
            "key2": "metadata8"
          },
          "setup": {
            "id": "id1",
            "description": "description9",
            "amount": 77,
            "status": "status7"
          },
          "gateway_affiliation_id": "gateway_affiliation_id3",
          "next_billing_at": null,
          "billing_day": null,
          "minimum_price": null,
          "canceled_at": null,
          "discounts": null,
          "increments": [
            {
              "id": "id0",
              "value": 92.72,
              "increment_type": "increment_type2",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            }
          ],
          "boleto_due_days": null
        },
        "name": "name1",
        "quantity": null,
        "cycles": null,
        "deleted_at": null
      },
      {
        "id": "id2",
        "description": "description2",
        "status": "status4",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 242,
          "scheme_type": "scheme_type4",
          "price_brackets": [
            {
              "start_quantity": 223,
              "price": 95,
              "end_quantity": null,
              "overage_price": null
            }
          ],
          "minimum_price": null,
          "percentage": null
        },
        "discounts": [
          {
            "id": "id3",
            "value": 63.55,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "increments": [
          {
            "id": "id1",
            "value": 174.83,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id2",
            "value": 174.84,
            "increment_type": "increment_type4",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "subscription": {
          "id": "id8",
          "code": "code6",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval6",
          "interval_count": 142,
          "billing_type": "billing_type8",
          "current_cycle": null,
          "payment_method": "payment_method2",
          "currency": "currency8",
          "installments": 54,
          "status": "status0",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": null,
          "card": {
            "id": "id8",
            "last_four_digits": "last_four_digits4",
            "brand": "brand2",
            "holder_name": "holder_name6",
            "exp_month": 32,
            "exp_year": 8,
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street0",
              "number": "number2",
              "zip_code": "zip_code4",
              "neighborhood": "neighborhood6",
              "city": "city0",
              "state": "state4",
              "country": "country4",
              "complement": "complement4",
              "line_1": "line_16",
              "line_2": "line_28"
            },
            "customer": null,
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata6"
            },
            "type": "type2",
            "holder_document": "holder_document8",
            "deleted_at": null,
            "first_six_digits": "first_six_digits8",
            "label": "label8"
          },
          "items": {
            "id": "id6",
            "description": "description6",
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 104,
              "scheme_type": "scheme_type2",
              "price_brackets": [
                {
                  "start_quantity": 105,
                  "price": 213,
                  "end_quantity": null,
                  "overage_price": null
                }
              ],
              "minimum_price": null,
              "percentage": null
            },
            "discounts": [
              {
                "id": "id7",
                "value": 130.69,
                "discount_type": "discount_type5",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              },
              {
                "id": "id8",
                "value": 130.7,
                "discount_type": "discount_type6",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              }
            ],
            "increments": [
              {
                "id": "id5",
                "value": 5.07,
                "increment_type": "increment_type3",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              },
              {
                "id": "id4",
                "value": 5.06,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              },
              {
                "id": "id3",
                "value": 5.05,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              }
            ],
            "subscription": {
              "id": "id8",
              "code": "code6",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval6",
              "interval_count": 220,
              "billing_type": "billing_type8",
              "current_cycle": null,
              "payment_method": "payment_method2",
              "currency": "currency8",
              "installments": 132,
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": null,
              "card": {
                "id": "id8",
                "last_four_digits": "last_four_digits4",
                "brand": "brand2",
                "holder_name": "holder_name6",
                "exp_month": 110,
                "exp_year": 186,
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street0",
                  "number": "number2",
                  "zip_code": "zip_code4",
                  "neighborhood": "neighborhood6",
                  "city": "city0",
                  "state": "state4",
                  "country": "country4",
                  "complement": "complement4",
                  "line_1": "line_16",
                  "line_2": "line_28"
                },
                "customer": null,
                "metadata": {
                  "key0": "metadata5",
                  "key1": "metadata6"
                },
                "type": "type2",
                "holder_document": "holder_document8",
                "deleted_at": null,
                "first_six_digits": "first_six_digits8",
                "label": "label8"
              },
              "items": null,
              "statement_descriptor": "statement_descriptor8",
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6"
              },
              "setup": {
                "id": "id2",
                "description": "description8",
                "amount": 156,
                "status": "status6"
              },
              "gateway_affiliation_id": "gateway_affiliation_id4",
              "next_billing_at": null,
              "billing_day": null,
              "minimum_price": null,
              "canceled_at": null,
              "discounts": null,
              "increments": [
                {
                  "id": "id1",
                  "value": 85.83,
                  "increment_type": "increment_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id0",
                  "value": 85.82,
                  "increment_type": "increment_type2",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id9",
                  "value": 85.81,
                  "increment_type": "increment_type1",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "boleto_due_days": null
            },
            "name": "name6",
            "quantity": null,
            "cycles": null,
            "deleted_at": null
          },
          "statement_descriptor": "statement_descriptor8",
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata6"
          },
          "setup": {
            "id": "id2",
            "description": "description8",
            "amount": 78,
            "status": "status6"
          },
          "gateway_affiliation_id": "gateway_affiliation_id4",
          "next_billing_at": null,
          "billing_day": null,
          "minimum_price": null,
          "canceled_at": null,
          "discounts": null,
          "increments": [
            {
              "id": "id1",
              "value": 92.73,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            },
            {
              "id": "id0",
              "value": 92.72,
              "increment_type": "increment_type2",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            },
            {
              "id": "id9",
              "value": 92.71,
              "increment_type": "increment_type1",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            }
          ],
          "boleto_due_days": null
        },
        "name": "name2",
        "quantity": null,
        "cycles": null,
        "deleted_at": null
      }
    ],
    "statement_descriptor": "statement_descriptor4",
    "metadata": {
      "key0": "metadata1",
      "key1": "metadata0",
      "key2": "metadata9"
    },
    "setup": {
      "id": "id8",
      "description": "description8",
      "amount": 170,
      "status": "status0"
    },
    "gateway_affiliation_id": "gateway_affiliation_id0",
    "next_billing_at": null,
    "billing_day": null,
    "minimum_price": null,
    "canceled_at": null,
    "discounts": null,
    "increments": [
      {
        "id": "id3",
        "value": 204.95,
        "increment_type": "increment_type5",
        "status": "status5",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": null,
        "deleted_at": null,
        "description": null,
        "subscription": null,
        "subscription_item": null
      }
    ],
    "boleto_due_days": null
  },
  "status": "status8",
  "duration": 112,
  "created_at": "created_at2",
  "updated_at": "updated_at4",
  "cycle": 52
}
```

