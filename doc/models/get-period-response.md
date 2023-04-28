
# Get Period Response

Response object for getting a period

## Structure

`GetPeriodResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startAt` | `?\DateTime` | Optional | - | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `endAt` | `?\DateTime` | Optional | - | getEndAt(): ?\DateTime | setEndAt(?\DateTime endAt): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `billingAt` | `?\DateTime` | Optional | - | getBillingAt(): ?\DateTime | setBillingAt(?\DateTime billingAt): void |
| `subscription` | [`?GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Optional | - | getSubscription(): ?GetSubscriptionResponse | setSubscription(?GetSubscriptionResponse subscription): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `duration` | `?int` | Optional | - | getDuration(): ?int | setDuration(?int duration): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `cycle` | `?int` | Optional | - | getCycle(): ?int | setCycle(?int cycle): void |

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
  "status": "status8",
  "duration": 112,
  "created_at": "created_at2",
  "updated_at": "updated_at4",
  "cycle": 52
}
```

