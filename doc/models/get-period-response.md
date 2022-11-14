
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
| `subscription` | [`GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Required | - | getSubscription(): GetSubscriptionResponse | setSubscription(GetSubscriptionResponse subscription): void |
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
          "items": [
            {
              "id": "id4",
              "description": "description4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 208,
                "scheme_type": "scheme_type4",
                "price_brackets": [
                  {
                    "start_quantity": 1,
                    "price": 61,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 2,
                    "price": 60,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 3,
                    "price": 59,
                    "end_quantity": null,
                    "overage_price": null
                  }
                ],
                "minimum_price": null,
                "percentage": null
              },
              "discounts": [
                {
                  "id": "id5",
                  "value": 205.97,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id6",
                  "value": 205.98,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id7",
                  "value": 205.99,
                  "discount_type": "discount_type5",
                  "status": "status9",
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
                  "id": "id3",
                  "value": 61.25,
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
                "id": "id0",
                "code": "code8",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval2",
                "interval_count": 116,
                "billing_type": "billing_type6",
                "current_cycle": null,
                "payment_method": "payment_method0",
                "currency": "currency0",
                "installments": 28,
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id6",
                  "last_four_digits": "last_four_digits2",
                  "brand": "brand0",
                  "holder_name": "holder_name2",
                  "exp_month": 6,
                  "exp_year": 34,
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "billing_address": {
                    "street": "street2",
                    "number": "number0",
                    "zip_code": "zip_code6",
                    "neighborhood": "neighborhood8",
                    "city": "city8",
                    "state": "state2",
                    "country": "country6",
                    "complement": "complement2",
                    "line_1": "line_14",
                    "line_2": "line_20"
                  },
                  "customer": null,
                  "metadata": {
                    "key0": "metadata7"
                  },
                  "type": "type4",
                  "holder_document": "holder_document0",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits6",
                  "label": "label6"
                },
                "items": [],
                "statement_descriptor": "statement_descriptor0",
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata4",
                  "key2": "metadata5"
                },
                "setup": {
                  "id": "id4",
                  "description": "description6",
                  "amount": 52,
                  "status": "status4"
                },
                "gateway_affiliation_id": "gateway_affiliation_id6",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id3",
                    "value": 10.55,
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
                "boleto_due_days": null,
                "split": {
                  "enabled": false,
                  "rules": [
                    {
                      "type": "type0",
                      "amount": 188,
                      "recipient": null,
                      "gateway_id": "gateway_id0",
                      "options": null,
                      "id": "id0"
                    },
                    {
                      "type": "type9",
                      "amount": 189,
                      "recipient": null,
                      "gateway_id": "gateway_id9",
                      "options": null,
                      "id": "id1"
                    }
                  ]
                }
              },
              "name": "name4",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            {
              "id": "id5",
              "description": "description5",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 209,
                "scheme_type": "scheme_type3",
                "price_brackets": [
                  {
                    "start_quantity": 0,
                    "price": 62,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 1,
                    "price": 61,
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
                  "value": 205.98,
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
                  "id": "id4",
                  "value": 61.26,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id5",
                  "value": 61.27,
                  "increment_type": "increment_type7",
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
                "interval": "interval3",
                "interval_count": 115,
                "billing_type": "billing_type7",
                "current_cycle": null,
                "payment_method": "payment_method1",
                "currency": "currency9",
                "installments": 27,
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id7",
                  "last_four_digits": "last_four_digits3",
                  "brand": "brand1",
                  "holder_name": "holder_name3",
                  "exp_month": 5,
                  "exp_year": 35,
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
                "items": [],
                "statement_descriptor": "statement_descriptor9",
                "metadata": {
                  "key0": "metadata4"
                },
                "setup": {
                  "id": "id3",
                  "description": "description7",
                  "amount": 51,
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
                    "value": 10.54,
                    "increment_type": "increment_type6",
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
                    "value": 10.53,
                    "increment_type": "increment_type7",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null,
                "split": {
                  "enabled": true,
                  "rules": [
                    {
                      "type": "type1",
                      "amount": 187,
                      "recipient": null,
                      "gateway_id": "gateway_id1",
                      "options": null,
                      "id": "id9"
                    }
                  ]
                }
              },
              "name": "name5",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            }
          ],
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
          "boleto_due_days": null,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type3",
                "amount": 213,
                "recipient": null,
                "gateway_id": "gateway_id3",
                "options": null,
                "id": "id7"
              },
              {
                "type": "type2",
                "amount": 214,
                "recipient": null,
                "gateway_id": "gateway_id2",
                "options": null,
                "id": "id8"
              }
            ]
          }
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
          "items": [
            {
              "id": "id5",
              "description": "description5",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 209,
                "scheme_type": "scheme_type3",
                "price_brackets": [
                  {
                    "start_quantity": 0,
                    "price": 62,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 1,
                    "price": 61,
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
                  "value": 205.98,
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
                  "id": "id4",
                  "value": 61.26,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id5",
                  "value": 61.27,
                  "increment_type": "increment_type7",
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
                "interval": "interval3",
                "interval_count": 115,
                "billing_type": "billing_type7",
                "current_cycle": null,
                "payment_method": "payment_method1",
                "currency": "currency9",
                "installments": 27,
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id7",
                  "last_four_digits": "last_four_digits3",
                  "brand": "brand1",
                  "holder_name": "holder_name3",
                  "exp_month": 5,
                  "exp_year": 35,
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
                "items": [],
                "statement_descriptor": "statement_descriptor9",
                "metadata": {
                  "key0": "metadata4"
                },
                "setup": {
                  "id": "id3",
                  "description": "description7",
                  "amount": 51,
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
                    "value": 10.54,
                    "increment_type": "increment_type6",
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
                    "value": 10.53,
                    "increment_type": "increment_type7",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null,
                "split": {
                  "enabled": true,
                  "rules": [
                    {
                      "type": "type1",
                      "amount": 187,
                      "recipient": null,
                      "gateway_id": "gateway_id1",
                      "options": null,
                      "id": "id9"
                    }
                  ]
                }
              },
              "name": "name5",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            {
              "id": "id6",
              "description": "description6",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 210,
                "scheme_type": "scheme_type2",
                "price_brackets": [
                  {
                    "start_quantity": 255,
                    "price": 63,
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
                  "value": 205.99,
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
                  "value": 206.0,
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
                  "value": 61.27,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id6",
                  "value": 61.28,
                  "increment_type": "increment_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id7",
                  "value": 61.29,
                  "increment_type": "increment_type9",
                  "status": "status1",
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
                "interval": "interval4",
                "interval_count": 114,
                "billing_type": "billing_type8",
                "current_cycle": null,
                "payment_method": "payment_method2",
                "currency": "currency8",
                "installments": 26,
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id8",
                  "last_four_digits": "last_four_digits4",
                  "brand": "brand2",
                  "holder_name": "holder_name4",
                  "exp_month": 4,
                  "exp_year": 36,
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
                "items": [],
                "statement_descriptor": "statement_descriptor8",
                "metadata": {
                  "key0": "metadata5",
                  "key1": "metadata6"
                },
                "setup": {
                  "id": "id2",
                  "description": "description8",
                  "amount": 50,
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
                    "value": 10.53,
                    "increment_type": "increment_type7",
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
                    "value": 10.52,
                    "increment_type": "increment_type8",
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
                    "value": 10.51,
                    "increment_type": "increment_type9",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null,
                "split": {
                  "enabled": false,
                  "rules": [
                    {
                      "type": "type2",
                      "amount": 186,
                      "recipient": null,
                      "gateway_id": "gateway_id2",
                      "options": null,
                      "id": "id8"
                    },
                    {
                      "type": "type1",
                      "amount": 187,
                      "recipient": null,
                      "gateway_id": "gateway_id1",
                      "options": null,
                      "id": "id9"
                    },
                    {
                      "type": "type0",
                      "amount": 188,
                      "recipient": null,
                      "gateway_id": "gateway_id0",
                      "options": null,
                      "id": "id0"
                    }
                  ]
                }
              },
              "name": "name6",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            {
              "id": "id7",
              "description": "description7",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 211,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 254,
                    "price": 64,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 255,
                    "price": 63,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 0,
                    "price": 62,
                    "end_quantity": null,
                    "overage_price": null
                  }
                ],
                "minimum_price": null,
                "percentage": null
              },
              "discounts": [
                {
                  "id": "id8",
                  "value": 206.0,
                  "discount_type": "discount_type6",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id9",
                  "value": 206.01,
                  "discount_type": "discount_type7",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id0",
                  "value": 206.02,
                  "discount_type": "discount_type8",
                  "status": "status2",
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
                  "value": 61.28,
                  "increment_type": "increment_type8",
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
                "interval_count": 113,
                "billing_type": "billing_type9",
                "current_cycle": null,
                "payment_method": "payment_method3",
                "currency": "currency7",
                "installments": 25,
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id9",
                  "last_four_digits": "last_four_digits5",
                  "brand": "brand3",
                  "holder_name": "holder_name5",
                  "exp_month": 3,
                  "exp_year": 37,
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
                "items": [],
                "statement_descriptor": "statement_descriptor7",
                "metadata": {
                  "key0": "metadata6",
                  "key1": "metadata7",
                  "key2": "metadata8"
                },
                "setup": {
                  "id": "id1",
                  "description": "description9",
                  "amount": 49,
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
                    "value": 10.52,
                    "increment_type": "increment_type8",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null,
                "split": {
                  "enabled": true,
                  "rules": [
                    {
                      "type": "type3",
                      "amount": 185,
                      "recipient": null,
                      "gateway_id": "gateway_id3",
                      "options": null,
                      "id": "id7"
                    },
                    {
                      "type": "type2",
                      "amount": 186,
                      "recipient": null,
                      "gateway_id": "gateway_id2",
                      "options": null,
                      "id": "id8"
                    }
                  ]
                }
              },
              "name": "name7",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            }
          ],
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
          "boleto_due_days": null,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type2",
                "amount": 214,
                "recipient": null,
                "gateway_id": "gateway_id2",
                "options": null,
                "id": "id8"
              },
              {
                "type": "type1",
                "amount": 215,
                "recipient": null,
                "gateway_id": "gateway_id1",
                "options": null,
                "id": "id9"
              },
              {
                "type": "type0",
                "amount": 216,
                "recipient": null,
                "gateway_id": "gateway_id0",
                "options": null,
                "id": "id0"
              }
            ]
          }
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
    "boleto_due_days": null,
    "split": {
      "enabled": false,
      "rules": [
        {
          "type": "type4",
          "amount": 50,
          "recipient": null,
          "gateway_id": "gateway_id4",
          "options": null,
          "id": "id4"
        },
        {
          "type": "type5",
          "amount": 51,
          "recipient": null,
          "gateway_id": "gateway_id5",
          "options": null,
          "id": "id5"
        }
      ]
    }
  },
  "status": "status8",
  "duration": 112,
  "created_at": "created_at2",
  "updated_at": "updated_at4",
  "cycle": 52
}
```

