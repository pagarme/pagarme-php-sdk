
# Get Increment Response

Response object for getting a increment

## Structure

`GetIncrementResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `value` | `?float` | Optional | - | getValue(): ?float | setValue(?float value): void |
| `incrementType` | `?string` | Optional | - | getIncrementType(): ?string | setIncrementType(?string incrementType): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `cycles` | `?int` | Optional | - | getCycles(): ?int | setCycles(?int cycles): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `subscription` | [`?GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Optional | - | getSubscription(): ?GetSubscriptionResponse | setSubscription(?GetSubscriptionResponse subscription): void |
| `subscriptionItem` | [`?GetSubscriptionItemResponse`](../../doc/models/get-subscription-item-response.md) | Optional | The Subscription Item | getSubscriptionItem(): ?GetSubscriptionItemResponse | setSubscriptionItem(?GetSubscriptionItemResponse subscriptionItem): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "value": 251.52,
  "increment_type": "increment_type8",
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "cycles": 168,
  "deleted_at": "2016-03-13T12:52:32.123Z",
  "description": "description0",
  "subscription": {
    "id": "id4",
    "code": "code2",
    "start_at": "2016-03-13T12:52:32.123Z",
    "interval": "interval2",
    "interval_count": 234,
    "billing_type": "billing_type8",
    "current_cycle": {
      "start_at": "2016-03-13T12:52:32.123Z",
      "end_at": "2016-03-13T12:52:32.123Z",
      "id": "id2",
      "billing_at": "2016-03-13T12:52:32.123Z",
      "subscription": {},
      "status": "status4",
      "duration": 218,
      "created_at": "created_at0",
      "updated_at": "updated_at8",
      "cycle": 158
    },
    "payment_method": "payment_method4",
    "currency": "currency4",
    "installments": 146,
    "status": "status6",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "customer": {
      "id": "id4",
      "name": "name4",
      "email": "email2",
      "delinquent": false,
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "document": "document8",
      "type": "type6",
      "fb_access_token": "fb_access_token8",
      "address": {
        "id": "id0",
        "street": "street0",
        "number": "number8",
        "complement": "complement6",
        "zip_code": "zip_code4",
        "neighborhood": "neighborhood6",
        "city": "city0",
        "state": "state6",
        "country": "country4",
        "status": "status2",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {},
        "metadata": {
          "key0": "metadata9",
          "key1": "metadata8",
          "key2": "metadata7"
        },
        "line_1": "line_14",
        "line_2": "line_28",
        "deleted_at": "2016-03-13T12:52:32.123Z"
      },
      "metadata": {
        "key0": "metadata1",
        "key1": "metadata0"
      },
      "phones": {
        "home_phone": {
          "country_code": "country_code6",
          "number": "number4",
          "area_code": "area_code6"
        },
        "mobile_phone": {
          "country_code": "country_code6",
          "number": "number6",
          "area_code": "area_code6"
        }
      },
      "fb_id": 138,
      "code": "code2",
      "document_type": "document_type2"
    },
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
      "customer": {
        "id": "id8",
        "name": "name8",
        "email": "email8",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document8",
        "type": "type2",
        "fb_access_token": "fb_access_token2",
        "address": {
          "id": "id4",
          "street": "street4",
          "number": "number2",
          "complement": "complement0",
          "zip_code": "zip_code8",
          "neighborhood": "neighborhood0",
          "city": "city4",
          "state": "state0",
          "country": "country8",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {},
          "metadata": {
            "key0": "metadata5"
          },
          "line_1": "line_18",
          "line_2": "line_22",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata5"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code0",
            "number": "number2",
            "area_code": "area_code0"
          },
          "mobile_phone": {
            "country_code": "country_code0",
            "number": "number2",
            "area_code": "area_code0"
          }
        },
        "fb_id": 68,
        "code": "code6",
        "document_type": "document_type6"
      },
      "metadata": {
        "key0": "metadata5",
        "key1": "metadata4"
      },
      "type": "type2",
      "holder_document": "holder_document2",
      "deleted_at": "2016-03-13T12:52:32.123Z",
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
              "end_quantity": 230,
              "overage_price": 244
            },
            {
              "start_quantity": 223,
              "price": 95,
              "end_quantity": 231,
              "overage_price": 245
            },
            {
              "start_quantity": 224,
              "price": 94,
              "end_quantity": 232,
              "overage_price": 246
            }
          ],
          "minimum_price": 147,
          "percentage": 65.91
        },
        "discounts": [
          {
            "id": "id2",
            "value": 63.54,
            "discount_type": "discount_type0",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 234,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id3",
            "value": 63.55,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 235,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id4",
            "value": 63.56,
            "discount_type": "discount_type2",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 236,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description4",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "increments": [
          {
            "id": "id0",
            "value": 174.82,
            "increment_type": "increment_type2",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 158,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description0",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "subscription": {},
        "name": "name1",
        "quantity": 23,
        "cycles": 43,
        "deleted_at": "2016-03-13T12:52:32.123Z"
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
              "end_quantity": 231,
              "overage_price": 245
            }
          ],
          "minimum_price": 146,
          "percentage": 65.92
        },
        "discounts": [
          {
            "id": "id3",
            "value": 63.55,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 235,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "increments": [
          {
            "id": "id1",
            "value": 174.83,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 157,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description1",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id2",
            "value": 174.84,
            "increment_type": "increment_type4",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 156,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "subscription": {},
        "name": "name2",
        "quantity": 24,
        "cycles": 44,
        "deleted_at": "2016-03-13T12:52:32.123Z"
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
    "next_billing_at": "2016-03-13T12:52:32.123Z",
    "billing_day": 118,
    "minimum_price": 232,
    "canceled_at": "2016-03-13T12:52:32.123Z",
    "discounts": [
      {
        "id": "id5",
        "value": 93.67,
        "discount_type": "discount_type3",
        "status": "status7",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 175,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description5",
        "subscription": {},
        "subscription_item": {
          "id": "id1",
          "description": "description1",
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 133,
            "scheme_type": "scheme_type3",
            "price_brackets": [
              {
                "start_quantity": 86,
                "price": 24,
                "end_quantity": 94,
                "overage_price": 108
              },
              {
                "start_quantity": 87,
                "price": 25,
                "end_quantity": 95,
                "overage_price": 109
              }
            ],
            "minimum_price": 229,
            "percentage": 131.11
          },
          "discounts": [
            {},
            {}
          ],
          "increments": [
            {
              "id": "id0",
              "value": 240.02,
              "increment_type": "increment_type2",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 218,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description0",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id1",
              "value": 240.03,
              "increment_type": "increment_type3",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 219,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description1",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id2",
              "value": 240.04,
              "increment_type": "increment_type4",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 220,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description2",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name1",
          "quantity": 143,
          "cycles": 163,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      },
      {
        "id": "id6",
        "value": 93.68,
        "discount_type": "discount_type4",
        "status": "status8",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 176,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description6",
        "subscription": {},
        "subscription_item": {
          "id": "id2",
          "description": "description2",
          "status": "status4",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 134,
            "scheme_type": "scheme_type4",
            "price_brackets": [
              {
                "start_quantity": 87,
                "price": 25,
                "end_quantity": 95,
                "overage_price": 109
              },
              {
                "start_quantity": 88,
                "price": 26,
                "end_quantity": 96,
                "overage_price": 110
              },
              {
                "start_quantity": 89,
                "price": 27,
                "end_quantity": 97,
                "overage_price": 111
              }
            ],
            "minimum_price": 230,
            "percentage": 131.12
          },
          "discounts": [
            {},
            {},
            {}
          ],
          "increments": [
            {
              "id": "id1",
              "value": 240.03,
              "increment_type": "increment_type3",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 219,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description1",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name2",
          "quantity": 144,
          "cycles": 164,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      },
      {
        "id": "id7",
        "value": 93.69,
        "discount_type": "discount_type5",
        "status": "status9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 177,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description7",
        "subscription": {},
        "subscription_item": {
          "id": "id3",
          "description": "description3",
          "status": "status5",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 135,
            "scheme_type": "scheme_type5",
            "price_brackets": [
              {
                "start_quantity": 88,
                "price": 26,
                "end_quantity": 96,
                "overage_price": 110
              }
            ],
            "minimum_price": 231,
            "percentage": 131.13
          },
          "discounts": [
            {}
          ],
          "increments": [
            {
              "id": "id2",
              "value": 240.04,
              "increment_type": "increment_type4",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 220,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description2",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id3",
              "value": 240.05,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 221,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name3",
          "quantity": 145,
          "cycles": 165,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      }
    ],
    "increments": [
      {
        "id": "id3",
        "value": 204.95,
        "increment_type": "increment_type5",
        "status": "status5",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 217,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description3",
        "subscription": {},
        "subscription_item": {
          "id": "id9",
          "description": "description9",
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 29,
            "scheme_type": "scheme_type9",
            "price_brackets": [
              {
                "start_quantity": 180,
                "price": 138,
                "end_quantity": 188,
                "overage_price": 202
              }
            ],
            "minimum_price": 189,
            "percentage": 21.97
          },
          "discounts": [
            {
              "id": "id0",
              "value": 240.02,
              "discount_type": "discount_type8",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 218,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description0",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id1",
              "value": 240.03,
              "discount_type": "discount_type9",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 219,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description1",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {},
            {}
          ],
          "subscription": {},
          "name": "name9",
          "quantity": 7,
          "cycles": 229,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      }
    ],
    "boleto_due_days": 90,
    "split": {
      "enabled": false,
      "rules": [
        {
          "type": "type4",
          "amount": 50,
          "recipient": {
            "id": "id6",
            "name": "name6",
            "email": "email0",
            "document": "document0",
            "description": "description6",
            "type": "type4",
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id4",
              "holder_name": "holder_name0",
              "holder_type": "holder_type6",
              "bank": "bank2",
              "branch_number": "branch_number0",
              "branch_check_digit": "branch_check_digit0",
              "account_number": "account_number4",
              "account_check_digit": "account_check_digit0",
              "type": "type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata4",
                "key2": "metadata3"
              },
              "pix_key": "pix_key8"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway0",
                "status": "status2",
                "pgid": "pgid6",
                "created_at": "created_at8",
                "updated_at": "updated_at6"
              },
              {
                "gateway": "gateway1",
                "status": "status3",
                "pgid": "pgid7",
                "created_at": "created_at9",
                "updated_at": "updated_at7"
              },
              {
                "gateway": "gateway2",
                "status": "status4",
                "pgid": "pgid8",
                "created_at": "created_at0",
                "updated_at": "updated_at8"
              }
            ],
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata2"
            },
            "automatic_anticipation_settings": {
              "enabled": false,
              "type": "type0",
              "volume_percentage": 88,
              "delay": 202,
              "days": [
                178,
                179
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval8",
              "transfer_day": 254
            },
            "code": "code4",
            "payment_mode": "payment_mode0"
          },
          "gateway_id": "gateway_id4",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": "charge_remainder_fee0"
          },
          "id": "id4"
        },
        {
          "type": "type5",
          "amount": 51,
          "recipient": {
            "id": "id7",
            "name": "name7",
            "email": "email9",
            "document": "document1",
            "description": "description7",
            "type": "type3",
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "default_bank_account": {
              "id": "id5",
              "holder_name": "holder_name1",
              "holder_type": "holder_type7",
              "bank": "bank3",
              "branch_number": "branch_number1",
              "branch_check_digit": "branch_check_digit1",
              "account_number": "account_number5",
              "account_check_digit": "account_check_digit1",
              "type": "type5",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "recipient": {},
              "metadata": {
                "key0": "metadata4"
              },
              "pix_key": "pix_key9"
            },
            "gateway_recipients": [
              {
                "gateway": "gateway1",
                "status": "status3",
                "pgid": "pgid7",
                "created_at": "created_at9",
                "updated_at": "updated_at7"
              }
            ],
            "metadata": {
              "key0": "metadata4"
            },
            "automatic_anticipation_settings": {
              "enabled": true,
              "type": "type9",
              "volume_percentage": 87,
              "delay": 203,
              "days": [
                179,
                180,
                181
              ]
            },
            "transfer_settings": {
              "transfer_enabled": true,
              "transfer_interval": "transfer_interval7",
              "transfer_day": 253
            },
            "code": "code5",
            "payment_mode": "payment_mode1"
          },
          "gateway_id": "gateway_id5",
          "options": {
            "liable": true,
            "charge_processing_fee": true,
            "charge_remainder_fee": "charge_remainder_fee1"
          },
          "id": "id5"
        }
      ]
    },
    "boleto": {
      "interest": {
        "days": 0,
        "type": "type4",
        "amount": 74
      },
      "fine": {
        "days": 34,
        "type": "type4",
        "amount": 108
      },
      "max_days_to_pay_past_due": 22
    },
    "manual_billing": false
  },
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
          "end_quantity": 139,
          "overage_price": 153
        }
      ],
      "minimum_price": 18,
      "percentage": 231.4
    },
    "discounts": [
      {
        "id": "id7",
        "value": 30.59,
        "discount_type": "discount_type5",
        "status": "status9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 11,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description7",
        "subscription": {
          "id": "id7",
          "code": "code5",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval5",
          "interval_count": 55,
          "billing_type": "billing_type9",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id5",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status3",
            "duration": 39,
            "created_at": "created_at3",
            "updated_at": "updated_at1",
            "cycle": 235
          },
          "payment_method": "payment_method3",
          "currency": "currency3",
          "installments": 223,
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id3",
            "name": "name3",
            "email": "email3",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document3",
            "type": "type7",
            "fb_access_token": "fb_access_token7",
            "address": {
              "id": "id9",
              "street": "street9",
              "number": "number7",
              "complement": "complement5",
              "zip_code": "zip_code3",
              "neighborhood": "neighborhood5",
              "city": "city9",
              "state": "state5",
              "country": "country3",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata5"
              },
              "line_1": "line_17",
              "line_2": "line_27",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata0",
              "key1": "metadata1"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code5",
                "number": "number7",
                "area_code": "area_code5"
              },
              "mobile_phone": {
                "country_code": "country_code5",
                "number": "number7",
                "area_code": "area_code5"
              }
            },
            "fb_id": 201,
            "code": "code1",
            "document_type": "document_type1"
          },
          "card": {
            "id": "id9",
            "last_four_digits": "last_four_digits5",
            "brand": "brand3",
            "holder_name": "holder_name5",
            "exp_month": 201,
            "exp_year": 95,
            "status": "status9",
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
            "customer": {
              "id": "id9",
              "name": "name9",
              "email": "email7",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document7",
              "type": "type1",
              "fb_access_token": "fb_access_token3",
              "address": {
                "id": "id5",
                "street": "street5",
                "number": "number3",
                "complement": "complement1",
                "zip_code": "zip_code9",
                "neighborhood": "neighborhood1",
                "city": "city5",
                "state": "state1",
                "country": "country9",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata2"
                },
                "line_1": "line_19",
                "line_2": "line_23",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata4"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code1",
                  "number": "number1",
                  "area_code": "area_code1"
                },
                "mobile_phone": {
                  "country_code": "country_code9",
                  "number": "number3",
                  "area_code": "area_code9"
                }
              },
              "fb_id": 83,
              "code": "code7",
              "document_type": "document_type7"
            },
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata5"
            },
            "type": "type1",
            "holder_document": "holder_document7",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits9",
            "label": "label9"
          },
          "items": [
            {},
            {},
            {}
          ],
          "statement_descriptor": "statement_descriptor7",
          "metadata": {
            "key0": "metadata6",
            "key1": "metadata7"
          },
          "setup": {
            "id": "id1",
            "description": "description9",
            "amount": 9,
            "status": "status7"
          },
          "gateway_affiliation_id": "gateway_affiliation_id3",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 61,
          "minimum_price": 203,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {}
          ],
          "increments": [
            {
              "id": "id0",
              "value": 75.82,
              "increment_type": "increment_type2",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 74,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description0",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id1",
              "value": 75.83,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 73,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id2",
              "value": 75.84,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 72,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "boleto_due_days": 167,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type7",
                "amount": 219,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "document": "document1",
                  "description": "description5",
                  "type": "type5",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id3",
                    "holder_name": "holder_name9",
                    "holder_type": "holder_type5",
                    "bank": "bank1",
                    "branch_number": "branch_number9",
                    "branch_check_digit": "branch_check_digit9",
                    "account_number": "account_number3",
                    "account_check_digit": "account_check_digit9",
                    "type": "type7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata0"
                    },
                    "pix_key": "pix_key3"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 99,
                    "delay": 191,
                    "days": [
                      167,
                      168,
                      169
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 9
                  },
                  "code": "code3",
                  "payment_mode": "payment_mode1"
                },
                "gateway_id": "gateway_id7",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee7"
                },
                "id": "id3"
              },
              {
                "type": "type8",
                "amount": 220,
                "recipient": {
                  "id": "id6",
                  "name": "name6",
                  "email": "email0",
                  "document": "document0",
                  "description": "description4",
                  "type": "type4",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id4",
                    "holder_name": "holder_name0",
                    "holder_type": "holder_type6",
                    "bank": "bank2",
                    "branch_number": "branch_number0",
                    "branch_check_digit": "branch_check_digit0",
                    "account_number": "account_number4",
                    "account_check_digit": "account_check_digit0",
                    "type": "type6",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata1",
                      "key1": "metadata0",
                      "key2": "metadata9"
                    },
                    "pix_key": "pix_key2"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    },
                    {
                      "gateway": "gateway1",
                      "status": "status3",
                      "pgid": "pgid7",
                      "created_at": "created_at9",
                      "updated_at": "updated_at7"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8",
                    "key2": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type0",
                    "volume_percentage": 98,
                    "delay": 192,
                    "days": [
                      168
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval8",
                    "transfer_day": 8
                  },
                  "code": "code4",
                  "payment_mode": "payment_mode0"
                },
                "gateway_id": "gateway_id8",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee8"
                },
                "id": "id2"
              },
              {
                "type": "type9",
                "amount": 221,
                "recipient": {
                  "id": "id7",
                  "name": "name7",
                  "email": "email9",
                  "document": "document9",
                  "description": "description3",
                  "type": "type3",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id5",
                    "holder_name": "holder_name1",
                    "holder_type": "holder_type7",
                    "bank": "bank3",
                    "branch_number": "branch_number1",
                    "branch_check_digit": "branch_check_digit1",
                    "account_number": "account_number5",
                    "account_check_digit": "account_check_digit1",
                    "type": "type5",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata2",
                      "key1": "metadata1"
                    },
                    "pix_key": "pix_key1"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway1",
                      "status": "status3",
                      "pgid": "pgid7",
                      "created_at": "created_at9",
                      "updated_at": "updated_at7"
                    },
                    {
                      "gateway": "gateway2",
                      "status": "status4",
                      "pgid": "pgid8",
                      "created_at": "created_at0",
                      "updated_at": "updated_at8"
                    },
                    {
                      "gateway": "gateway3",
                      "status": "status5",
                      "pgid": "pgid9",
                      "created_at": "created_at1",
                      "updated_at": "updated_at9"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata6",
                    "key1": "metadata7"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type9",
                    "volume_percentage": 97,
                    "delay": 193,
                    "days": [
                      169,
                      170
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval7",
                    "transfer_day": 7
                  },
                  "code": "code5",
                  "payment_mode": "payment_mode9"
                },
                "gateway_id": "gateway_id9",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee9"
                },
                "id": "id1"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 133,
              "type": "type7",
              "amount": 207
            },
            "fine": {
              "days": 115,
              "type": "type5",
              "amount": 67
            },
            "max_days_to_pay_past_due": 145
          },
          "manual_billing": true
        },
        "subscription_item": {}
      },
      {
        "id": "id8",
        "value": 30.6,
        "discount_type": "discount_type6",
        "status": "status0",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 12,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description8",
        "subscription": {
          "id": "id6",
          "code": "code4",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval6",
          "interval_count": 54,
          "billing_type": "billing_type0",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id4",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status4",
            "duration": 38,
            "created_at": "created_at2",
            "updated_at": "updated_at0",
            "cycle": 234
          },
          "payment_method": "payment_method4",
          "currency": "currency4",
          "installments": 222,
          "status": "status2",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id4",
            "name": "name4",
            "email": "email2",
            "delinquent": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document2",
            "type": "type6",
            "fb_access_token": "fb_access_token8",
            "address": {
              "id": "id0",
              "street": "street0",
              "number": "number8",
              "complement": "complement6",
              "zip_code": "zip_code4",
              "neighborhood": "neighborhood6",
              "city": "city0",
              "state": "state6",
              "country": "country4",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata7"
              },
              "line_1": "line_16",
              "line_2": "line_28",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata9"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code6",
                "number": "number6",
                "area_code": "area_code6"
              },
              "mobile_phone": {
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 202,
            "code": "code2",
            "document_type": "document_type2"
          },
          "card": {
            "id": "id0",
            "last_four_digits": "last_four_digits6",
            "brand": "brand4",
            "holder_name": "holder_name6",
            "exp_month": 200,
            "exp_year": 96,
            "status": "status8",
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
            "customer": {
              "id": "id0",
              "name": "name0",
              "email": "email6",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document6",
              "type": "type0",
              "fb_access_token": "fb_access_token4",
              "address": {
                "id": "id6",
                "street": "street6",
                "number": "number4",
                "complement": "complement2",
                "zip_code": "zip_code0",
                "neighborhood": "neighborhood2",
                "city": "city6",
                "state": "state2",
                "country": "country0",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata2",
                  "key2": "metadata1"
                },
                "line_1": "line_10",
                "line_2": "line_24",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata4",
                "key2": "metadata5"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code2",
                  "number": "number0",
                  "area_code": "area_code2"
                },
                "mobile_phone": {
                  "country_code": "country_code8",
                  "number": "number4",
                  "area_code": "area_code8"
                }
              },
              "fb_id": 84,
              "code": "code8",
              "document_type": "document_type8"
            },
            "metadata": {
              "key0": "metadata3"
            },
            "type": "type0",
            "holder_document": "holder_document6",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits0",
            "label": "label0"
          },
          "items": [
            {},
            {}
          ],
          "statement_descriptor": "statement_descriptor6",
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata8",
            "key2": "metadata9"
          },
          "setup": {
            "id": "id0",
            "description": "description0",
            "amount": 10,
            "status": "status8"
          },
          "gateway_affiliation_id": "gateway_affiliation_id2",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 62,
          "minimum_price": 204,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {},
            {},
            {}
          ],
          "increments": [
            {
              "id": "id1",
              "value": 75.83,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 73,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "boleto_due_days": 166,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type6",
                "amount": 218,
                "recipient": {
                  "id": "id4",
                  "name": "name4",
                  "email": "email2",
                  "document": "document2",
                  "description": "description6",
                  "type": "type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id2",
                    "holder_name": "holder_name8",
                    "holder_type": "holder_type4",
                    "bank": "bank0",
                    "branch_number": "branch_number8",
                    "branch_check_digit": "branch_check_digit8",
                    "account_number": "account_number2",
                    "account_check_digit": "account_check_digit8",
                    "type": "type8",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata9",
                      "key1": "metadata8"
                    },
                    "pix_key": "pix_key4"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway8",
                      "status": "status0",
                      "pgid": "pgid4",
                      "created_at": "created_at6",
                      "updated_at": "updated_at4"
                    },
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    },
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type2",
                    "volume_percentage": 100,
                    "delay": 190,
                    "days": [
                      166,
                      167
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 10
                  },
                  "code": "code2",
                  "payment_mode": "payment_mode2"
                },
                "gateway_id": "gateway_id6",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee6"
                },
                "id": "id4"
              },
              {
                "type": "type7",
                "amount": 219,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "document": "document1",
                  "description": "description5",
                  "type": "type5",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id3",
                    "holder_name": "holder_name9",
                    "holder_type": "holder_type5",
                    "bank": "bank1",
                    "branch_number": "branch_number9",
                    "branch_check_digit": "branch_check_digit9",
                    "account_number": "account_number3",
                    "account_check_digit": "account_check_digit9",
                    "type": "type7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata0"
                    },
                    "pix_key": "pix_key3"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 99,
                    "delay": 191,
                    "days": [
                      167,
                      168,
                      169
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 9
                  },
                  "code": "code3",
                  "payment_mode": "payment_mode1"
                },
                "gateway_id": "gateway_id7",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee7"
                },
                "id": "id3"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 132,
              "type": "type6",
              "amount": 206
            },
            "fine": {
              "days": 114,
              "type": "type6",
              "amount": 68
            },
            "max_days_to_pay_past_due": 146
          },
          "manual_billing": false
        },
        "subscription_item": {}
      }
    ],
    "increments": [
      {
        "id": "id1",
        "value": 103.83,
        "increment_type": "increment_type3",
        "status": "status7",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 89,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description9",
        "subscription": {
          "id": "id3",
          "code": "code1",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval1",
          "interval_count": 155,
          "billing_type": "billing_type7",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id1",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status3",
            "duration": 139,
            "created_at": "created_at9",
            "updated_at": "updated_at7",
            "cycle": 79
          },
          "payment_method": "payment_method3",
          "currency": "currency3",
          "installments": 67,
          "status": "status5",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id3",
            "name": "name3",
            "email": "email3",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document7",
            "type": "type7",
            "fb_access_token": "fb_access_token7",
            "address": {
              "id": "id9",
              "street": "street9",
              "number": "number7",
              "complement": "complement5",
              "zip_code": "zip_code3",
              "neighborhood": "neighborhood5",
              "city": "city9",
              "state": "state5",
              "country": "country3",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata9"
              },
              "line_1": "line_13",
              "line_2": "line_27",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata0",
              "key1": "metadata9",
              "key2": "metadata8"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code5",
                "number": "number3",
                "area_code": "area_code5"
              },
              "mobile_phone": {
                "country_code": "country_code5",
                "number": "number7",
                "area_code": "area_code5"
              }
            },
            "fb_id": 59,
            "code": "code1",
            "document_type": "document_type1"
          },
          "card": {
            "id": "id7",
            "last_four_digits": "last_four_digits3",
            "brand": "brand1",
            "holder_name": "holder_name3",
            "exp_month": 39,
            "exp_year": 1,
            "status": "status1",
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
            "customer": {
              "id": "id7",
              "name": "name7",
              "email": "email9",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document9",
              "type": "type3",
              "fb_access_token": "fb_access_token1",
              "address": {
                "id": "id3",
                "street": "street3",
                "number": "number1",
                "complement": "complement9",
                "zip_code": "zip_code7",
                "neighborhood": "neighborhood9",
                "city": "city3",
                "state": "state9",
                "country": "country7",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9"
                },
                "line_1": "line_17",
                "line_2": "line_21",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata7"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code9",
                  "number": "number3",
                  "area_code": "area_code9"
                },
                "mobile_phone": {
                  "country_code": "country_code1",
                  "number": "number1",
                  "area_code": "area_code1"
                }
              },
              "fb_id": 245,
              "code": "code5",
              "document_type": "document_type5"
            },
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata7",
              "key2": "metadata8"
            },
            "type": "type3",
            "holder_document": "holder_document9",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits7",
            "label": "label7"
          },
          "items": [
            {}
          ],
          "statement_descriptor": "statement_descriptor3",
          "metadata": {
            "key0": "metadata0"
          },
          "setup": {
            "id": "id7",
            "description": "description7",
            "amount": 91,
            "status": "status9"
          },
          "gateway_affiliation_id": "gateway_affiliation_id9",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 39,
          "minimum_price": 153,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id4",
              "value": 241.36,
              "discount_type": "discount_type2",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 96,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id5",
              "value": 241.37,
              "discount_type": "discount_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 97,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description5",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {},
            {},
            {}
          ],
          "boleto_due_days": 11,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type7",
                "amount": 227,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "document": "document1",
                  "description": "description5",
                  "type": "type5",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id3",
                    "holder_name": "holder_name9",
                    "holder_type": "holder_type5",
                    "bank": "bank1",
                    "branch_number": "branch_number9",
                    "branch_check_digit": "branch_check_digit9",
                    "account_number": "account_number3",
                    "account_check_digit": "account_check_digit9",
                    "type": "type3",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata0",
                      "key1": "metadata9",
                      "key2": "metadata8"
                    },
                    "pix_key": "pix_key7"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    },
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata9",
                    "key2": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 167,
                    "delay": 123,
                    "days": [
                      99
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 77
                  },
                  "code": "code3",
                  "payment_mode": "payment_mode9"
                },
                "gateway_id": "gateway_id7",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee9"
                },
                "id": "id3"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 79,
              "type": "type3",
              "amount": 153
            },
            "fine": {
              "days": 211,
              "type": "type5",
              "amount": 29
            },
            "max_days_to_pay_past_due": 199
          },
          "manual_billing": true
        },
        "subscription_item": {}
      },
      {
        "id": "id2",
        "value": 103.84,
        "increment_type": "increment_type4",
        "status": "status6",
        "created_at": "2016-03-13T12:52:32.123Z",
        "cycles": 88,
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "description": "description8",
        "subscription": {
          "id": "id2",
          "code": "code0",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval0",
          "interval_count": 154,
          "billing_type": "billing_type6",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id0",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status2",
            "duration": 138,
            "created_at": "created_at8",
            "updated_at": "updated_at6",
            "cycle": 78
          },
          "payment_method": "payment_method2",
          "currency": "currency2",
          "installments": 66,
          "status": "status4",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id2",
            "name": "name2",
            "email": "email4",
            "delinquent": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document6",
            "type": "type8",
            "fb_access_token": "fb_access_token6",
            "address": {
              "id": "id8",
              "street": "street8",
              "number": "number6",
              "complement": "complement4",
              "zip_code": "zip_code2",
              "neighborhood": "neighborhood4",
              "city": "city8",
              "state": "state4",
              "country": "country2",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata1"
              },
              "line_1": "line_12",
              "line_2": "line_26",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata9"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code4",
                "number": "number2",
                "area_code": "area_code4"
              },
              "mobile_phone": {
                "country_code": "country_code6",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 58,
            "code": "code0",
            "document_type": "document_type0"
          },
          "card": {
            "id": "id6",
            "last_four_digits": "last_four_digits2",
            "brand": "brand0",
            "holder_name": "holder_name2",
            "exp_month": 40,
            "exp_year": 0,
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street8",
              "number": "number4",
              "zip_code": "zip_code2",
              "neighborhood": "neighborhood4",
              "city": "city2",
              "state": "state6",
              "country": "country2",
              "complement": "complement6",
              "line_1": "line_18",
              "line_2": "line_26"
            },
            "customer": {
              "id": "id6",
              "name": "name6",
              "email": "email0",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document0",
              "type": "type4",
              "fb_access_token": "fb_access_token0",
              "address": {
                "id": "id2",
                "street": "street2",
                "number": "number0",
                "complement": "complement8",
                "zip_code": "zip_code6",
                "neighborhood": "neighborhood8",
                "city": "city2",
                "state": "state8",
                "country": "country6",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata8",
                  "key2": "metadata7"
                },
                "line_1": "line_16",
                "line_2": "line_20",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata8",
                "key2": "metadata9"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code8",
                  "number": "number4",
                  "area_code": "area_code8"
                },
                "mobile_phone": {
                  "country_code": "country_code2",
                  "number": "number0",
                  "area_code": "area_code2"
                }
              },
              "fb_id": 244,
              "code": "code4",
              "document_type": "document_type4"
            },
            "metadata": {
              "key0": "metadata7"
            },
            "type": "type4",
            "holder_document": "holder_document0",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits6",
            "label": "label6"
          },
          "items": [
            {},
            {},
            {}
          ],
          "statement_descriptor": "statement_descriptor2",
          "metadata": {
            "key0": "metadata9",
            "key1": "metadata8"
          },
          "setup": {
            "id": "id6",
            "description": "description6",
            "amount": 90,
            "status": "status8"
          },
          "gateway_affiliation_id": "gateway_affiliation_id8",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 38,
          "minimum_price": 152,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id3",
              "value": 241.35,
              "discount_type": "discount_type1",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 95,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {},
            {}
          ],
          "boleto_due_days": 10,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type8",
                "amount": 226,
                "recipient": {
                  "id": "id4",
                  "name": "name4",
                  "email": "email2",
                  "document": "document2",
                  "description": "description4",
                  "type": "type6",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id2",
                    "holder_name": "holder_name8",
                    "holder_type": "holder_type4",
                    "bank": "bank0",
                    "branch_number": "branch_number8",
                    "branch_check_digit": "branch_check_digit8",
                    "account_number": "account_number2",
                    "account_check_digit": "account_check_digit8",
                    "type": "type2",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata9"
                    },
                    "pix_key": "pix_key6"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway8",
                      "status": "status0",
                      "pgid": "pgid4",
                      "created_at": "created_at6",
                      "updated_at": "updated_at4"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type2",
                    "volume_percentage": 168,
                    "delay": 122,
                    "days": [
                      98,
                      99,
                      100
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 78
                  },
                  "code": "code2",
                  "payment_mode": "payment_mode8"
                },
                "gateway_id": "gateway_id8",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee8"
                },
                "id": "id2"
              },
              {
                "type": "type7",
                "amount": 227,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "document": "document1",
                  "description": "description5",
                  "type": "type5",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id3",
                    "holder_name": "holder_name9",
                    "holder_type": "holder_type5",
                    "bank": "bank1",
                    "branch_number": "branch_number9",
                    "branch_check_digit": "branch_check_digit9",
                    "account_number": "account_number3",
                    "account_check_digit": "account_check_digit9",
                    "type": "type3",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata0",
                      "key1": "metadata9",
                      "key2": "metadata8"
                    },
                    "pix_key": "pix_key7"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    },
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata9",
                    "key2": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 167,
                    "delay": 123,
                    "days": [
                      99
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 77
                  },
                  "code": "code3",
                  "payment_mode": "payment_mode9"
                },
                "gateway_id": "gateway_id7",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee9"
                },
                "id": "id3"
              },
              {
                "type": "type6",
                "amount": 228,
                "recipient": {
                  "id": "id6",
                  "name": "name6",
                  "email": "email0",
                  "document": "document0",
                  "description": "description6",
                  "type": "type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id4",
                    "holder_name": "holder_name0",
                    "holder_type": "holder_type6",
                    "bank": "bank2",
                    "branch_number": "branch_number0",
                    "branch_check_digit": "branch_check_digit0",
                    "account_number": "account_number4",
                    "account_check_digit": "account_check_digit0",
                    "type": "type4",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata1",
                      "key1": "metadata0"
                    },
                    "pix_key": "pix_key8"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    },
                    {
                      "gateway": "gateway1",
                      "status": "status3",
                      "pgid": "pgid7",
                      "created_at": "created_at9",
                      "updated_at": "updated_at7"
                    },
                    {
                      "gateway": "gateway2",
                      "status": "status4",
                      "pgid": "pgid8",
                      "created_at": "created_at0",
                      "updated_at": "updated_at8"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type0",
                    "volume_percentage": 166,
                    "delay": 124,
                    "days": [
                      100,
                      101
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval8",
                    "transfer_day": 76
                  },
                  "code": "code4",
                  "payment_mode": "payment_mode0"
                },
                "gateway_id": "gateway_id6",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee0"
                },
                "id": "id4"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 80,
              "type": "type2",
              "amount": 154
            },
            "fine": {
              "days": 210,
              "type": "type6",
              "amount": 28
            },
            "max_days_to_pay_past_due": 198
          },
          "manual_billing": false
        },
        "subscription_item": {}
      }
    ],
    "subscription": {
      "id": "id8",
      "code": "code6",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval6",
      "interval_count": 246,
      "billing_type": "billing_type2",
      "current_cycle": {
        "start_at": "2016-03-13T12:52:32.123Z",
        "end_at": "2016-03-13T12:52:32.123Z",
        "id": "id6",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "subscription": {},
        "status": "status8",
        "duration": 230,
        "created_at": "created_at4",
        "updated_at": "updated_at2",
        "cycle": 170
      },
      "payment_method": "payment_method8",
      "currency": "currency8",
      "installments": 158,
      "status": "status0",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": {
        "id": "id8",
        "name": "name8",
        "email": "email8",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document2",
        "type": "type2",
        "fb_access_token": "fb_access_token2",
        "address": {
          "id": "id4",
          "street": "street4",
          "number": "number2",
          "complement": "complement0",
          "zip_code": "zip_code8",
          "neighborhood": "neighborhood0",
          "city": "city4",
          "state": "state0",
          "country": "country8",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {},
          "metadata": {
            "key0": "metadata5"
          },
          "line_1": "line_18",
          "line_2": "line_22",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata5"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code0",
            "number": "number8",
            "area_code": "area_code0"
          },
          "mobile_phone": {
            "country_code": "country_code0",
            "number": "number2",
            "area_code": "area_code0"
          }
        },
        "fb_id": 150,
        "code": "code6",
        "document_type": "document_type6"
      },
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
        "customer": {
          "id": "id2",
          "name": "name2",
          "email": "email4",
          "delinquent": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document4",
          "type": "type8",
          "fb_access_token": "fb_access_token6",
          "address": {
            "id": "id8",
            "street": "street8",
            "number": "number6",
            "complement": "complement4",
            "zip_code": "zip_code2",
            "neighborhood": "neighborhood4",
            "city": "city8",
            "state": "state4",
            "country": "country2",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {},
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata4",
              "key2": "metadata3"
            },
            "line_1": "line_12",
            "line_2": "line_26",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata1",
            "key1": "metadata2",
            "key2": "metadata3"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code4",
              "number": "number8",
              "area_code": "area_code4"
            },
            "mobile_phone": {
              "country_code": "country_code4",
              "number": "number6",
              "area_code": "area_code6"
            }
          },
          "fb_id": 80,
          "code": "code0",
          "document_type": "document_type0"
        },
        "metadata": {
          "key0": "metadata9"
        },
        "type": "type8",
        "holder_document": "holder_document4",
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "first_six_digits": "first_six_digits2",
        "label": "label2"
      },
      "items": [
        {},
        {},
        {}
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
      "next_billing_at": "2016-03-13T12:52:32.123Z",
      "billing_day": 130,
      "minimum_price": 244,
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "discounts": [
        {
          "id": "id9",
          "value": 73.31,
          "discount_type": "discount_type7",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 187,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description9",
          "subscription": {},
          "subscription_item": {}
        }
      ],
      "increments": [
        {
          "id": "id7",
          "value": 184.59,
          "increment_type": "increment_type9",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 205,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description3",
          "subscription": {},
          "subscription_item": {}
        },
        {
          "id": "id8",
          "value": 184.6,
          "increment_type": "increment_type0",
          "status": "status0",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 204,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description2",
          "subscription": {},
          "subscription_item": {}
        }
      ],
      "boleto_due_days": 102,
      "split": {
        "enabled": false,
        "rules": [
          {
            "type": "type8",
            "amount": 62,
            "recipient": {
              "id": "id0",
              "name": "name0",
              "email": "email6",
              "document": "document4",
              "description": "description0",
              "type": "type0",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "default_bank_account": {
                "id": "id8",
                "holder_name": "holder_name4",
                "holder_type": "holder_type0",
                "bank": "bank6",
                "branch_number": "branch_number4",
                "branch_check_digit": "branch_check_digit4",
                "account_number": "account_number8",
                "account_check_digit": "account_check_digit4",
                "type": "type8",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "recipient": {},
                "metadata": {
                  "key0": "metadata1"
                },
                "pix_key": "pix_key2"
              },
              "gateway_recipients": [
                {
                  "gateway": "gateway4",
                  "status": "status6",
                  "pgid": "pgid0",
                  "created_at": "created_at2",
                  "updated_at": "updated_at0"
                }
              ],
              "metadata": {
                "key0": "metadata7"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type6",
                "volume_percentage": 76,
                "delay": 214,
                "days": [
                  190,
                  191,
                  192
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval4",
                "transfer_day": 242
              },
              "code": "code8",
              "payment_mode": "payment_mode4"
            },
            "gateway_id": "gateway_id8",
            "options": {
              "liable": false,
              "charge_processing_fee": false,
              "charge_remainder_fee": "charge_remainder_fee4"
            },
            "id": "id8"
          },
          {
            "type": "type9",
            "amount": 63,
            "recipient": {
              "id": "id1",
              "name": "name1",
              "email": "email5",
              "document": "document5",
              "description": "description1",
              "type": "type9",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "default_bank_account": {
                "id": "id9",
                "holder_name": "holder_name5",
                "holder_type": "holder_type1",
                "bank": "bank7",
                "branch_number": "branch_number5",
                "branch_check_digit": "branch_check_digit5",
                "account_number": "account_number9",
                "account_check_digit": "account_check_digit5",
                "type": "type9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "recipient": {},
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9"
                },
                "pix_key": "pix_key3"
              },
              "gateway_recipients": [
                {
                  "gateway": "gateway5",
                  "status": "status7",
                  "pgid": "pgid1",
                  "created_at": "created_at3",
                  "updated_at": "updated_at1"
                },
                {
                  "gateway": "gateway6",
                  "status": "status8",
                  "pgid": "pgid2",
                  "created_at": "created_at4",
                  "updated_at": "updated_at2"
                }
              ],
              "metadata": {
                "key0": "metadata8",
                "key1": "metadata7",
                "key2": "metadata6"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type5",
                "volume_percentage": 75,
                "delay": 215,
                "days": [
                  191
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval3",
                "transfer_day": 241
              },
              "code": "code9",
              "payment_mode": "payment_mode5"
            },
            "gateway_id": "gateway_id9",
            "options": {
              "liable": true,
              "charge_processing_fee": true,
              "charge_remainder_fee": "charge_remainder_fee5"
            },
            "id": "id9"
          },
          {
            "type": "type0",
            "amount": 64,
            "recipient": {
              "id": "id2",
              "name": "name2",
              "email": "email4",
              "document": "document6",
              "description": "description2",
              "type": "type8",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "default_bank_account": {
                "id": "id0",
                "holder_name": "holder_name6",
                "holder_type": "holder_type2",
                "bank": "bank8",
                "branch_number": "branch_number6",
                "branch_check_digit": "branch_check_digit6",
                "account_number": "account_number0",
                "account_check_digit": "account_check_digit6",
                "type": "type0",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "recipient": {},
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata8",
                  "key2": "metadata7"
                },
                "pix_key": "pix_key4"
              },
              "gateway_recipients": [
                {
                  "gateway": "gateway6",
                  "status": "status8",
                  "pgid": "pgid2",
                  "created_at": "created_at4",
                  "updated_at": "updated_at2"
                },
                {
                  "gateway": "gateway7",
                  "status": "status9",
                  "pgid": "pgid3",
                  "created_at": "created_at5",
                  "updated_at": "updated_at3"
                },
                {
                  "gateway": "gateway8",
                  "status": "status0",
                  "pgid": "pgid4",
                  "created_at": "created_at6",
                  "updated_at": "updated_at4"
                }
              ],
              "metadata": {
                "key0": "metadata9",
                "key1": "metadata8"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type4",
                "volume_percentage": 74,
                "delay": 216,
                "days": [
                  192,
                  193
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval2",
                "transfer_day": 240
              },
              "code": "code0",
              "payment_mode": "payment_mode6"
            },
            "gateway_id": "gateway_id0",
            "options": {
              "liable": false,
              "charge_processing_fee": false,
              "charge_remainder_fee": "charge_remainder_fee6"
            },
            "id": "id0"
          }
        ]
      },
      "boleto": {
        "interest": {
          "days": 244,
          "type": "type8",
          "amount": 62
        },
        "fine": {
          "days": 46,
          "type": "type0",
          "amount": 120
        },
        "max_days_to_pay_past_due": 34
      },
      "manual_billing": false
    },
    "name": "name6",
    "quantity": 56,
    "cycles": 180,
    "deleted_at": "2016-03-13T12:52:32.123Z"
  }
}
```

