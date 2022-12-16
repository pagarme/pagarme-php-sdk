
# Get Usage Response

Response object for getting a usage

## Structure

`GetUsageResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Id | getId(): string | setId(string id): void |
| `quantity` | `int` | Required | Quantity | getQuantity(): int | setQuantity(int quantity): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `usedAt` | `\DateTime` | Required | Used at | getUsedAt(): \DateTime | setUsedAt(\DateTime usedAt): void |
| `createdAt` | `\DateTime` | Required | Creation date | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `subscriptionItem` | [`GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md) | Required | Subscription item | getSubscriptionItem(): GetSubscriptionItemResponse | setSubscriptionItem(GetSubscriptionItemResponse subscriptionItem): void |
| `code` | `?string` | Optional | Identification code in the client system | getCode(): ?string | setCode(?string code): void |
| `group` | `?string` | Optional | Identification group in the client system | getGroup(): ?string | setGroup(?string group): void |
| `amount` | `?int` | Optional | Field used in item scheme type 'Percent' | getAmount(): ?int | setAmount(?int amount): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "quantity": 68,
  "description": "description0",
  "used_at": "2016-03-13T12:52:32.123Z",
  "created_at": "2016-03-13T12:52:32.123Z",
  "status": "status8",
  "deleted_at": null,
  "subscription_item": {
    "id": "id6",
    "description": "description4",
    "status": "status2",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "pricing_scheme": {
      "price": 178,
      "scheme_type": "scheme_type2",
      "price_brackets": [
        {
          "start_quantity": 131,
          "price": 69,
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
        "value": 30.59,
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
        "value": 30.6,
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
        "id": "id1",
        "value": 103.83,
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
        "id": "id2",
        "value": 103.84,
        "increment_type": "increment_type4",
        "status": "status6",
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
      "interval_count": 246,
      "billing_type": "billing_type2",
      "current_cycle": null,
      "payment_method": "payment_method8",
      "currency": "currency8",
      "installments": 158,
      "status": "status0",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": null,
      "card": {
        "id": "id2",
        "last_four_digits": "last_four_digits8",
        "brand": "brand6",
        "holder_name": "holder_name8",
        "exp_month": 204,
        "exp_year": 92,
        "status": "status4",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street4",
          "number": "number8",
          "zip_code": "zip_code8",
          "neighborhood": "neighborhood0",
          "city": "city6",
          "state": "state0",
          "country": "country8",
          "complement": "complement0",
          "line_1": "line_12",
          "line_2": "line_22"
        },
        "customer": null,
        "metadata": {
          "key0": "metadata9"
        },
        "type": "type8",
        "holder_document": "holder_document4",
        "deleted_at": null,
        "first_six_digits": "first_six_digits2",
        "label": "label2"
      },
      "items": [
        {
          "id": "id5",
          "description": "description5",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 231,
            "scheme_type": "scheme_type7",
            "price_brackets": [
              {
                "start_quantity": 234,
                "price": 84,
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
              "value": 43.18,
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
              "value": 154.46,
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
              "id": "id5",
              "value": 154.47,
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
          "subscription": {
            "id": "id1",
            "code": "code9",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval9",
            "interval_count": 153,
            "billing_type": "billing_type5",
            "current_cycle": null,
            "payment_method": "payment_method9",
            "currency": "currency1",
            "installments": 65,
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id5",
              "last_four_digits": "last_four_digits1",
              "brand": "brand9",
              "holder_name": "holder_name1",
              "exp_month": 43,
              "exp_year": 253,
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street3",
                "number": "number9",
                "zip_code": "zip_code7",
                "neighborhood": "neighborhood9",
                "city": "city7",
                "state": "state1",
                "country": "country7",
                "complement": "complement1",
                "line_1": "line_13",
                "line_2": "line_21"
              },
              "customer": null,
              "metadata": {
                "key0": "metadata8",
                "key1": "metadata9"
              },
              "type": "type5",
              "holder_document": "holder_document1",
              "deleted_at": null,
              "first_six_digits": "first_six_digits5",
              "label": "label5"
            },
            "items": [
              {
                "id": "id8",
                "description": "description8",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 220,
                  "scheme_type": "scheme_type0",
                  "price_brackets": [
                    {
                      "start_quantity": 245,
                      "price": 73,
                      "end_quantity": null,
                      "overage_price": null
                    },
                    {
                      "start_quantity": 246,
                      "price": 72,
                      "end_quantity": null,
                      "overage_price": null
                    }
                  ],
                  "minimum_price": null,
                  "percentage": null
                },
                "discounts": [
                  {
                    "id": "id9",
                    "value": 185.61,
                    "discount_type": "discount_type7",
                    "status": "status1",
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
                    "id": "id7",
                    "value": 40.89,
                    "increment_type": "increment_type9",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id8",
                    "value": 40.9,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "subscription": null,
                "name": "name8",
                "quantity": null,
                "cycles": null,
                "deleted_at": null
              },
              {
                "id": "id9",
                "description": "description9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 221,
                  "scheme_type": "scheme_type9",
                  "price_brackets": [
                    {
                      "start_quantity": 244,
                      "price": 74,
                      "end_quantity": null,
                      "overage_price": null
                    }
                  ],
                  "minimum_price": null,
                  "percentage": null
                },
                "discounts": [
                  {
                    "id": "id0",
                    "value": 185.62,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id1",
                    "value": 185.63,
                    "discount_type": "discount_type9",
                    "status": "status3",
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
                    "id": "id8",
                    "value": 40.9,
                    "increment_type": "increment_type0",
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
                    "value": 40.91,
                    "increment_type": "increment_type1",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id0",
                    "value": 40.92,
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
                "subscription": null,
                "name": "name9",
                "quantity": null,
                "cycles": null,
                "deleted_at": null
              },
              {
                "id": "id0",
                "description": "description0",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 222,
                  "scheme_type": "scheme_type8",
                  "price_brackets": [
                    {
                      "start_quantity": 243,
                      "price": 75,
                      "end_quantity": null,
                      "overage_price": null
                    },
                    {
                      "start_quantity": 244,
                      "price": 74,
                      "end_quantity": null,
                      "overage_price": null
                    },
                    {
                      "start_quantity": 245,
                      "price": 73,
                      "end_quantity": null,
                      "overage_price": null
                    }
                  ],
                  "minimum_price": null,
                  "percentage": null
                },
                "discounts": [
                  {
                    "id": "id1",
                    "value": 185.63,
                    "discount_type": "discount_type9",
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
                    "value": 185.64,
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
                    "value": 185.65,
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
                    "id": "id9",
                    "value": 40.91,
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
                "subscription": null,
                "name": "name0",
                "quantity": null,
                "cycles": null,
                "deleted_at": null
              }
            ],
            "statement_descriptor": "statement_descriptor1",
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata3"
            },
            "setup": {
              "id": "id5",
              "description": "description5",
              "amount": 89,
              "status": "status3"
            },
            "gateway_affiliation_id": "gateway_affiliation_id7",
            "next_billing_at": null,
            "billing_day": null,
            "minimum_price": null,
            "canceled_at": null,
            "discounts": null,
            "increments": [
              {
                "id": "id4",
                "value": 72.36,
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
                "id": "id3",
                "value": 72.35,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              },
              {
                "id": "id2",
                "value": 72.34,
                "increment_type": "increment_type4",
                "status": "status6",
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
                  "type": "type9",
                  "amount": 225,
                  "recipient": null,
                  "gateway_id": "gateway_id9",
                  "options": null,
                  "id": "id1"
                },
                {
                  "type": "type8",
                  "amount": 226,
                  "recipient": null,
                  "gateway_id": "gateway_id8",
                  "options": null,
                  "id": "id2"
                },
                {
                  "type": "type7",
                  "amount": 227,
                  "recipient": null,
                  "gateway_id": "gateway_id7",
                  "options": null,
                  "id": "id3"
                }
              ]
            },
            "boleto": null
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
            "price": 230,
            "scheme_type": "scheme_type8",
            "price_brackets": [
              {
                "start_quantity": 235,
                "price": 83,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 236,
                "price": 82,
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
              "value": 43.19,
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
              "value": 43.2,
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
              "value": 154.47,
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
              "id": "id6",
              "value": 154.48,
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
              "id": "id7",
              "value": 154.49,
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
          "subscription": {
            "id": "id2",
            "code": "code0",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval0",
            "interval_count": 154,
            "billing_type": "billing_type4",
            "current_cycle": null,
            "payment_method": "payment_method8",
            "currency": "currency2",
            "installments": 66,
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id4",
              "last_four_digits": "last_four_digits0",
              "brand": "brand8",
              "holder_name": "holder_name0",
              "exp_month": 44,
              "exp_year": 252,
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street4",
                "number": "number8",
                "zip_code": "zip_code8",
                "neighborhood": "neighborhood0",
                "city": "city6",
                "state": "state0",
                "country": "country8",
                "complement": "complement0",
                "line_1": "line_12",
                "line_2": "line_22"
              },
              "customer": null,
              "metadata": {
                "key0": "metadata9",
                "key1": "metadata0",
                "key2": "metadata1"
              },
              "type": "type6",
              "holder_document": "holder_document2",
              "deleted_at": null,
              "first_six_digits": "first_six_digits4",
              "label": "label4"
            },
            "items": [
              {
                "id": "id9",
                "description": "description9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 221,
                  "scheme_type": "scheme_type9",
                  "price_brackets": [
                    {
                      "start_quantity": 244,
                      "price": 74,
                      "end_quantity": null,
                      "overage_price": null
                    }
                  ],
                  "minimum_price": null,
                  "percentage": null
                },
                "discounts": [
                  {
                    "id": "id0",
                    "value": 185.62,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id1",
                    "value": 185.63,
                    "discount_type": "discount_type9",
                    "status": "status3",
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
                    "id": "id8",
                    "value": 40.9,
                    "increment_type": "increment_type0",
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
                    "value": 40.91,
                    "increment_type": "increment_type1",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id0",
                    "value": 40.92,
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
                "subscription": null,
                "name": "name9",
                "quantity": null,
                "cycles": null,
                "deleted_at": null
              }
            ],
            "statement_descriptor": "statement_descriptor2",
            "metadata": {
              "key0": "metadata1"
            },
            "setup": {
              "id": "id6",
              "description": "description4",
              "amount": 90,
              "status": "status2"
            },
            "gateway_affiliation_id": "gateway_affiliation_id8",
            "next_billing_at": null,
            "billing_day": null,
            "minimum_price": null,
            "canceled_at": null,
            "discounts": null,
            "increments": [
              {
                "id": "id5",
                "value": 72.37,
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
                "id": "id4",
                "value": 72.36,
                "increment_type": "increment_type6",
                "status": "status4",
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
                  "type": "type8",
                  "amount": 226,
                  "recipient": null,
                  "gateway_id": "gateway_id8",
                  "options": null,
                  "id": "id2"
                }
              ]
            },
            "boleto": null
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
            "price": 229,
            "scheme_type": "scheme_type9",
            "price_brackets": [
              {
                "start_quantity": 236,
                "price": 82,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 237,
                "price": 81,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 238,
                "price": 80,
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
              "value": 43.2,
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
              "value": 43.21,
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
              "value": 43.22,
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
              "value": 154.48,
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
          "subscription": {
            "id": "id3",
            "code": "code1",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval1",
            "interval_count": 155,
            "billing_type": "billing_type3",
            "current_cycle": null,
            "payment_method": "payment_method7",
            "currency": "currency3",
            "installments": 67,
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id3",
              "last_four_digits": "last_four_digits9",
              "brand": "brand7",
              "holder_name": "holder_name9",
              "exp_month": 45,
              "exp_year": 251,
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street5",
                "number": "number7",
                "zip_code": "zip_code9",
                "neighborhood": "neighborhood1",
                "city": "city5",
                "state": "state9",
                "country": "country9",
                "complement": "complement9",
                "line_1": "line_11",
                "line_2": "line_23"
              },
              "customer": null,
              "metadata": {
                "key0": "metadata0"
              },
              "type": "type7",
              "holder_document": "holder_document3",
              "deleted_at": null,
              "first_six_digits": "first_six_digits3",
              "label": "label3"
            },
            "items": [
              {
                "id": "id0",
                "description": "description0",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 222,
                  "scheme_type": "scheme_type8",
                  "price_brackets": [
                    {
                      "start_quantity": 243,
                      "price": 75,
                      "end_quantity": null,
                      "overage_price": null
                    },
                    {
                      "start_quantity": 244,
                      "price": 74,
                      "end_quantity": null,
                      "overage_price": null
                    },
                    {
                      "start_quantity": 245,
                      "price": 73,
                      "end_quantity": null,
                      "overage_price": null
                    }
                  ],
                  "minimum_price": null,
                  "percentage": null
                },
                "discounts": [
                  {
                    "id": "id1",
                    "value": 185.63,
                    "discount_type": "discount_type9",
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
                    "value": 185.64,
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
                    "value": 185.65,
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
                    "id": "id9",
                    "value": 40.91,
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
                "subscription": null,
                "name": "name0",
                "quantity": null,
                "cycles": null,
                "deleted_at": null
              },
              {
                "id": "id1",
                "description": "description1",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 223,
                  "scheme_type": "scheme_type7",
                  "price_brackets": [
                    {
                      "start_quantity": 242,
                      "price": 76,
                      "end_quantity": null,
                      "overage_price": null
                    },
                    {
                      "start_quantity": 243,
                      "price": 75,
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
                    "value": 185.64,
                    "discount_type": "discount_type0",
                    "status": "status4",
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
                    "value": 40.92,
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
                    "id": "id1",
                    "value": 40.93,
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
                "subscription": null,
                "name": "name1",
                "quantity": null,
                "cycles": null,
                "deleted_at": null
              }
            ],
            "statement_descriptor": "statement_descriptor3",
            "metadata": {
              "key0": "metadata0",
              "key1": "metadata1",
              "key2": "metadata2"
            },
            "setup": {
              "id": "id7",
              "description": "description3",
              "amount": 91,
              "status": "status1"
            },
            "gateway_affiliation_id": "gateway_affiliation_id9",
            "next_billing_at": null,
            "billing_day": null,
            "minimum_price": null,
            "canceled_at": null,
            "discounts": null,
            "increments": [
              {
                "id": "id6",
                "value": 72.38,
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
            "boleto_due_days": null,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type7",
                  "amount": 227,
                  "recipient": null,
                  "gateway_id": "gateway_id7",
                  "options": null,
                  "id": "id3"
                },
                {
                  "type": "type6",
                  "amount": 228,
                  "recipient": null,
                  "gateway_id": "gateway_id6",
                  "options": null,
                  "id": "id4"
                }
              ]
            },
            "boleto": null
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
        "key1": "metadata4"
      },
      "setup": {
        "id": "id2",
        "description": "description2",
        "amount": 182,
        "status": "status4"
      },
      "gateway_affiliation_id": "gateway_affiliation_id4",
      "next_billing_at": null,
      "billing_day": null,
      "minimum_price": null,
      "canceled_at": null,
      "discounts": null,
      "increments": [
        {
          "id": "id7",
          "value": 184.59,
          "increment_type": "increment_type9",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": null,
          "deleted_at": null,
          "description": null,
          "subscription": null,
          "subscription_item": null
        },
        {
          "id": "id8",
          "value": 184.6,
          "increment_type": "increment_type0",
          "status": "status0",
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
            "type": "type8",
            "amount": 62,
            "recipient": null,
            "gateway_id": "gateway_id8",
            "options": null,
            "id": "id8"
          },
          {
            "type": "type9",
            "amount": 63,
            "recipient": null,
            "gateway_id": "gateway_id9",
            "options": null,
            "id": "id9"
          },
          {
            "type": "type0",
            "amount": 64,
            "recipient": null,
            "gateway_id": "gateway_id0",
            "options": null,
            "id": "id0"
          }
        ]
      },
      "boleto": null
    },
    "name": "name6",
    "quantity": null,
    "cycles": null,
    "deleted_at": null
  },
  "code": null,
  "group": null,
  "amount": null
}
```

