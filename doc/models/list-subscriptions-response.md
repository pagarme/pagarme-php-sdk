
# List Subscriptions Response

Response object for listing subscriptions

## Structure

`ListSubscriptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetSubscriptionResponse[])`](../../doc/models/get-subscription-response.md) | Optional | The subscription objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval3",
      "interval_count": 249,
      "billing_type": "billing_type9",
      "current_cycle": {
        "start_at": "2016-03-13T12:52:32.123Z",
        "end_at": "2016-03-13T12:52:32.123Z",
        "id": "id3",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "subscription": {},
        "status": "status5",
        "duration": 233,
        "created_at": "created_at1",
        "updated_at": "updated_at9",
        "cycle": 173
      },
      "payment_method": "payment_method5",
      "currency": "currency5",
      "installments": 161,
      "status": "status7",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": {
        "id": "id5",
        "name": "name5",
        "email": "email9",
        "delinquent": true,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document9",
        "type": "type5",
        "fb_access_token": "fb_access_token9",
        "address": {
          "id": "id1",
          "street": "street1",
          "number": "number9",
          "complement": "complement7",
          "zip_code": "zip_code5",
          "neighborhood": "neighborhood7",
          "city": "city1",
          "state": "state7",
          "country": "country5",
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {},
          "metadata": {
            "key0": "metadata2",
            "key1": "metadata3",
            "key2": "metadata4"
          },
          "line_1": "line_15",
          "line_2": "line_29",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata4",
          "key1": "metadata3",
          "key2": "metadata2"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code7",
            "number": "number5",
            "area_code": "area_code7"
          },
          "mobile_phone": {
            "country_code": "country_code7",
            "number": "number5",
            "area_code": "area_code7"
          }
        },
        "fb_id": 153,
        "code": "code3",
        "document_type": "document_type3"
      },
      "card": {
        "id": "id9",
        "last_four_digits": "last_four_digits5",
        "brand": "brand3",
        "holder_name": "holder_name5",
        "exp_month": 55,
        "exp_year": 95,
        "status": "status1",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street1",
          "number": "number9",
          "zip_code": "zip_code5",
          "neighborhood": "neighborhood7",
          "city": "city1",
          "state": "state7",
          "country": "country5",
          "complement": "complement7",
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
          "document": "document3",
          "type": "type9",
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
              "key0": "metadata6"
            },
            "line_1": "line_19",
            "line_2": "line_23",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata6"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code1",
              "number": "number9",
              "area_code": "area_code1"
            },
            "mobile_phone": {
              "country_code": "country_code1",
              "number": "number1",
              "area_code": "area_code1"
            }
          },
          "fb_id": 83,
          "code": "code7",
          "document_type": "document_type7"
        },
        "metadata": {
          "key0": "metadata0",
          "key1": "metadata9",
          "key2": "metadata8"
        },
        "type": "type9",
        "holder_document": "holder_document3",
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "first_six_digits": "first_six_digits9",
        "label": "label9"
      },
      "items": [
        {
          "id": "id2",
          "description": "description2",
          "status": "status4",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 28,
            "scheme_type": "scheme_type4",
            "price_brackets": [
              {
                "start_quantity": 237,
                "price": 175,
                "end_quantity": 245,
                "overage_price": 3
              },
              {
                "start_quantity": 238,
                "price": 176,
                "end_quantity": 246,
                "overage_price": 4
              },
              {
                "start_quantity": 239,
                "price": 177,
                "end_quantity": 247,
                "overage_price": 5
              }
            ],
            "minimum_price": 124,
            "percentage": 132.62
          },
          "discounts": [
            {
              "id": "id3",
              "value": 130.25,
              "discount_type": "discount_type1",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 249,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id4",
              "value": 130.26,
              "discount_type": "discount_type2",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 250,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id5",
              "value": 130.27,
              "discount_type": "discount_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 251,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description5",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id1",
              "value": 241.53,
              "increment_type": "increment_type3",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 113,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description1",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name2",
          "quantity": 38,
          "cycles": 58,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        {
          "id": "id3",
          "description": "description3",
          "status": "status5",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 29,
            "scheme_type": "scheme_type5",
            "price_brackets": [
              {
                "start_quantity": 238,
                "price": 176,
                "end_quantity": 246,
                "overage_price": 4
              }
            ],
            "minimum_price": 125,
            "percentage": 132.63
          },
          "discounts": [
            {
              "id": "id4",
              "value": 130.26,
              "discount_type": "discount_type2",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 250,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id2",
              "value": 241.54,
              "increment_type": "increment_type4",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 114,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description2",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id3",
              "value": 241.55,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 115,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name3",
          "quantity": 39,
          "cycles": 59,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      ],
      "statement_descriptor": "statement_descriptor5",
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "setup": {
        "id": "id9",
        "description": "description9",
        "amount": 185,
        "status": "status1"
      },
      "gateway_affiliation_id": "gateway_affiliation_id1",
      "next_billing_at": "2016-03-13T12:52:32.123Z",
      "billing_day": 133,
      "minimum_price": 247,
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "discounts": [
        {
          "id": "id6",
          "value": 160.38,
          "discount_type": "discount_type4",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 190,
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
              "price": 148,
              "scheme_type": "scheme_type4",
              "price_brackets": [
                {
                  "start_quantity": 101,
                  "price": 39,
                  "end_quantity": 109,
                  "overage_price": 123
                },
                {
                  "start_quantity": 102,
                  "price": 40,
                  "end_quantity": 110,
                  "overage_price": 124
                }
              ],
              "minimum_price": 244,
              "percentage": 197.82
            },
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id1",
                "value": 50.73,
                "increment_type": "increment_type3",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 233,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id2",
                "value": 50.74,
                "increment_type": "increment_type4",
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
                "value": 50.75,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 235,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name2",
            "quantity": 158,
            "cycles": 178,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id7",
          "value": 160.39,
          "discount_type": "discount_type5",
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 191,
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
              "price": 149,
              "scheme_type": "scheme_type5",
              "price_brackets": [
                {
                  "start_quantity": 102,
                  "price": 40,
                  "end_quantity": 110,
                  "overage_price": 124
                },
                {
                  "start_quantity": 103,
                  "price": 41,
                  "end_quantity": 111,
                  "overage_price": 125
                },
                {
                  "start_quantity": 104,
                  "price": 42,
                  "end_quantity": 112,
                  "overage_price": 126
                }
              ],
              "minimum_price": 245,
              "percentage": 197.83
            },
            "discounts": [
              {},
              {},
              {}
            ],
            "increments": [
              {
                "id": "id2",
                "value": 50.74,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 234,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name3",
            "quantity": 159,
            "cycles": 179,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id8",
          "value": 160.4,
          "discount_type": "discount_type6",
          "status": "status0",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 192,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description8",
          "subscription": {},
          "subscription_item": {
            "id": "id4",
            "description": "description4",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 150,
              "scheme_type": "scheme_type6",
              "price_brackets": [
                {
                  "start_quantity": 103,
                  "price": 41,
                  "end_quantity": 111,
                  "overage_price": 125
                }
              ],
              "minimum_price": 246,
              "percentage": 197.84
            },
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id3",
                "value": 50.75,
                "increment_type": "increment_type5",
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
                "value": 50.76,
                "increment_type": "increment_type6",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 236,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name4",
            "quantity": 160,
            "cycles": 180,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "increments": [
        {
          "id": "id4",
          "value": 15.66,
          "increment_type": "increment_type6",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 202,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description4",
          "subscription": {},
          "subscription_item": {
            "id": "id0",
            "description": "description0",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 244,
              "scheme_type": "scheme_type2",
              "price_brackets": [
                {
                  "start_quantity": 221,
                  "price": 97,
                  "end_quantity": 229,
                  "overage_price": 243
                },
                {
                  "start_quantity": 222,
                  "price": 96,
                  "end_quantity": 230,
                  "overage_price": 244
                }
              ],
              "minimum_price": 148,
              "percentage": 53.1
            },
            "discounts": [
              {
                "id": "id1",
                "value": 50.73,
                "discount_type": "discount_type9",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 233,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id2",
                "value": 50.74,
                "discount_type": "discount_type0",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 234,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {},
              {},
              {}
            ],
            "subscription": {},
            "name": "name0",
            "quantity": 22,
            "cycles": 42,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "boleto_due_days": 105,
      "split": {
        "enabled": true,
        "rules": [
          {
            "type": "type5",
            "amount": 65,
            "recipient": {
              "id": "id7",
              "name": "name7",
              "email": "email1",
              "document": "document1",
              "description": "description7",
              "type": "type7",
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
                  "key0": "metadata6",
                  "key1": "metadata7",
                  "key2": "metadata8"
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
                "key0": "metadata2",
                "key1": "metadata1",
                "key2": "metadata0"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type1",
                "volume_percentage": 183,
                "delay": 217,
                "days": [
                  193,
                  194
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval3",
                "transfer_day": 53
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
          },
          {
            "type": "type6",
            "amount": 66,
            "recipient": {
              "id": "id8",
              "name": "name8",
              "email": "email2",
              "document": "document2",
              "description": "description8",
              "type": "type8",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "default_bank_account": {
                "id": "id6",
                "holder_name": "holder_name2",
                "holder_type": "holder_type8",
                "bank": "bank4",
                "branch_number": "branch_number2",
                "branch_check_digit": "branch_check_digit2",
                "account_number": "account_number6",
                "account_check_digit": "account_check_digit2",
                "type": "type6",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "recipient": {},
                "metadata": {
                  "key0": "metadata7"
                },
                "pix_key": "pix_key0"
              },
              "gateway_recipients": [
                {
                  "gateway": "gateway2",
                  "status": "status4",
                  "pgid": "pgid8",
                  "created_at": "created_at0",
                  "updated_at": "updated_at8"
                }
              ],
              "metadata": {
                "key0": "metadata1"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type2",
                "volume_percentage": 184,
                "delay": 218,
                "days": [
                  194,
                  195,
                  196
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval4",
                "transfer_day": 54
              },
              "code": "code6",
              "payment_mode": "payment_mode2"
            },
            "gateway_id": "gateway_id6",
            "options": {
              "liable": false,
              "charge_processing_fee": false,
              "charge_remainder_fee": "charge_remainder_fee2"
            },
            "id": "id6"
          }
        ]
      },
      "boleto": {
        "interest": {
          "days": 31,
          "type": "type5",
          "amount": 105
        },
        "fine": {
          "days": 49,
          "type": "type7",
          "amount": 123
        },
        "max_days_to_pay_past_due": 37
      },
      "manual_billing": true
    },
    {
      "id": "id6",
      "code": "code4",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval4",
      "interval_count": 250,
      "billing_type": "billing_type0",
      "current_cycle": {
        "start_at": "2016-03-13T12:52:32.123Z",
        "end_at": "2016-03-13T12:52:32.123Z",
        "id": "id4",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "subscription": {},
        "status": "status6",
        "duration": 234,
        "created_at": "created_at2",
        "updated_at": "updated_at0",
        "cycle": 174
      },
      "payment_method": "payment_method6",
      "currency": "currency6",
      "installments": 162,
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": {
        "id": "id6",
        "name": "name6",
        "email": "email0",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document0",
        "type": "type6",
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
            "key0": "metadata3"
          },
          "line_1": "line_16",
          "line_2": "line_20",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata3"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code8",
            "number": "number6",
            "area_code": "area_code8"
          },
          "mobile_phone": {
            "country_code": "country_code8",
            "number": "number6",
            "area_code": "area_code8"
          }
        },
        "fb_id": 154,
        "code": "code4",
        "document_type": "document_type4"
      },
      "card": {
        "id": "id0",
        "last_four_digits": "last_four_digits6",
        "brand": "brand4",
        "holder_name": "holder_name6",
        "exp_month": 56,
        "exp_year": 96,
        "status": "status2",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street2",
          "number": "number0",
          "zip_code": "zip_code6",
          "neighborhood": "neighborhood8",
          "city": "city2",
          "state": "state8",
          "country": "country6",
          "complement": "complement8",
          "line_1": "line_16",
          "line_2": "line_20"
        },
        "customer": {
          "id": "id0",
          "name": "name0",
          "email": "email6",
          "delinquent": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document4",
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
              "key0": "metadata7",
              "key1": "metadata8"
            },
            "line_1": "line_10",
            "line_2": "line_24",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata6",
            "key2": "metadata5"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code2",
              "number": "number0",
              "area_code": "area_code2"
            },
            "mobile_phone": {
              "country_code": "country_code2",
              "number": "number0",
              "area_code": "area_code2"
            }
          },
          "fb_id": 84,
          "code": "code8",
          "document_type": "document_type8"
        },
        "metadata": {
          "key0": "metadata9"
        },
        "type": "type0",
        "holder_document": "holder_document4",
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "first_six_digits": "first_six_digits0",
        "label": "label0"
      },
      "items": [
        {
          "id": "id3",
          "description": "description3",
          "status": "status5",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 29,
            "scheme_type": "scheme_type5",
            "price_brackets": [
              {
                "start_quantity": 238,
                "price": 176,
                "end_quantity": 246,
                "overage_price": 4
              }
            ],
            "minimum_price": 125,
            "percentage": 132.63
          },
          "discounts": [
            {
              "id": "id4",
              "value": 130.26,
              "discount_type": "discount_type2",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 250,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id2",
              "value": 241.54,
              "increment_type": "increment_type4",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 114,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description2",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id3",
              "value": 241.55,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 115,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name3",
          "quantity": 39,
          "cycles": 59,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        {
          "id": "id4",
          "description": "description4",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 30,
            "scheme_type": "scheme_type6",
            "price_brackets": [
              {
                "start_quantity": 239,
                "price": 177,
                "end_quantity": 247,
                "overage_price": 5
              },
              {
                "start_quantity": 240,
                "price": 178,
                "end_quantity": 248,
                "overage_price": 6
              }
            ],
            "minimum_price": 126,
            "percentage": 132.64
          },
          "discounts": [
            {
              "id": "id5",
              "value": 130.27,
              "discount_type": "discount_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 251,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description5",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id6",
              "value": 130.28,
              "discount_type": "discount_type4",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 252,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description6",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id3",
              "value": 241.55,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 115,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id4",
              "value": 241.56,
              "increment_type": "increment_type6",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 116,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id5",
              "value": 241.57,
              "increment_type": "increment_type7",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 117,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description5",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name4",
          "quantity": 40,
          "cycles": 60,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        {
          "id": "id5",
          "description": "description5",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 31,
            "scheme_type": "scheme_type7",
            "price_brackets": [
              {
                "start_quantity": 240,
                "price": 178,
                "end_quantity": 248,
                "overage_price": 6
              },
              {
                "start_quantity": 241,
                "price": 179,
                "end_quantity": 249,
                "overage_price": 7
              },
              {
                "start_quantity": 242,
                "price": 180,
                "end_quantity": 250,
                "overage_price": 8
              }
            ],
            "minimum_price": 127,
            "percentage": 132.65
          },
          "discounts": [
            {
              "id": "id6",
              "value": 130.28,
              "discount_type": "discount_type4",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 252,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description6",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id7",
              "value": 130.29,
              "discount_type": "discount_type5",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 253,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description7",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id8",
              "value": 130.3,
              "discount_type": "discount_type6",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 254,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id4",
              "value": 241.56,
              "increment_type": "increment_type6",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 116,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name5",
          "quantity": 41,
          "cycles": 61,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      ],
      "statement_descriptor": "statement_descriptor6",
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "setup": {
        "id": "id0",
        "description": "description0",
        "amount": 186,
        "status": "status2"
      },
      "gateway_affiliation_id": "gateway_affiliation_id2",
      "next_billing_at": "2016-03-13T12:52:32.123Z",
      "billing_day": 134,
      "minimum_price": 248,
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "discounts": [
        {
          "id": "id7",
          "value": 160.39,
          "discount_type": "discount_type5",
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 191,
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
              "price": 149,
              "scheme_type": "scheme_type5",
              "price_brackets": [
                {
                  "start_quantity": 102,
                  "price": 40,
                  "end_quantity": 110,
                  "overage_price": 124
                },
                {
                  "start_quantity": 103,
                  "price": 41,
                  "end_quantity": 111,
                  "overage_price": 125
                },
                {
                  "start_quantity": 104,
                  "price": 42,
                  "end_quantity": 112,
                  "overage_price": 126
                }
              ],
              "minimum_price": 245,
              "percentage": 197.83
            },
            "discounts": [
              {},
              {},
              {}
            ],
            "increments": [
              {
                "id": "id2",
                "value": 50.74,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 234,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name3",
            "quantity": 159,
            "cycles": 179,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "increments": [
        {
          "id": "id5",
          "value": 15.67,
          "increment_type": "increment_type7",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 201,
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
              "percentage": 53.11
            },
            "discounts": [
              {
                "id": "id2",
                "value": 50.74,
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
                "value": 50.75,
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
                "value": 50.76,
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
              {}
            ],
            "subscription": {},
            "name": "name1",
            "quantity": 23,
            "cycles": 43,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id6",
          "value": 15.68,
          "increment_type": "increment_type8",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 200,
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
              "percentage": 53.12
            },
            "discounts": [
              {
                "id": "id3",
                "value": 50.75,
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
              {},
              {}
            ],
            "subscription": {},
            "name": "name2",
            "quantity": 24,
            "cycles": 44,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "boleto_due_days": 106,
      "split": {
        "enabled": false,
        "rules": [
          {
            "type": "type6",
            "amount": 66,
            "recipient": {
              "id": "id8",
              "name": "name8",
              "email": "email2",
              "document": "document2",
              "description": "description8",
              "type": "type8",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "default_bank_account": {
                "id": "id6",
                "holder_name": "holder_name2",
                "holder_type": "holder_type8",
                "bank": "bank4",
                "branch_number": "branch_number2",
                "branch_check_digit": "branch_check_digit2",
                "account_number": "account_number6",
                "account_check_digit": "account_check_digit2",
                "type": "type6",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "recipient": {},
                "metadata": {
                  "key0": "metadata7"
                },
                "pix_key": "pix_key0"
              },
              "gateway_recipients": [
                {
                  "gateway": "gateway2",
                  "status": "status4",
                  "pgid": "pgid8",
                  "created_at": "created_at0",
                  "updated_at": "updated_at8"
                }
              ],
              "metadata": {
                "key0": "metadata1"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type2",
                "volume_percentage": 184,
                "delay": 218,
                "days": [
                  194,
                  195,
                  196
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval4",
                "transfer_day": 54
              },
              "code": "code6",
              "payment_mode": "payment_mode2"
            },
            "gateway_id": "gateway_id6",
            "options": {
              "liable": false,
              "charge_processing_fee": false,
              "charge_remainder_fee": "charge_remainder_fee2"
            },
            "id": "id6"
          },
          {
            "type": "type7",
            "amount": 67,
            "recipient": {
              "id": "id9",
              "name": "name9",
              "email": "email3",
              "document": "document3",
              "description": "description9",
              "type": "type9",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "default_bank_account": {
                "id": "id7",
                "holder_name": "holder_name3",
                "holder_type": "holder_type9",
                "bank": "bank5",
                "branch_number": "branch_number3",
                "branch_check_digit": "branch_check_digit3",
                "account_number": "account_number7",
                "account_check_digit": "account_check_digit3",
                "type": "type7",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "recipient": {},
                "metadata": {
                  "key0": "metadata8",
                  "key1": "metadata9"
                },
                "pix_key": "pix_key1"
              },
              "gateway_recipients": [
                {
                  "gateway": "gateway3",
                  "status": "status5",
                  "pgid": "pgid9",
                  "created_at": "created_at1",
                  "updated_at": "updated_at9"
                },
                {
                  "gateway": "gateway4",
                  "status": "status6",
                  "pgid": "pgid0",
                  "created_at": "created_at2",
                  "updated_at": "updated_at0"
                }
              ],
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata9"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type3",
                "volume_percentage": 185,
                "delay": 219,
                "days": [
                  195
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval5",
                "transfer_day": 55
              },
              "code": "code7",
              "payment_mode": "payment_mode3"
            },
            "gateway_id": "gateway_id7",
            "options": {
              "liable": true,
              "charge_processing_fee": true,
              "charge_remainder_fee": "charge_remainder_fee3"
            },
            "id": "id7"
          },
          {
            "type": "type8",
            "amount": 68,
            "recipient": {
              "id": "id0",
              "name": "name0",
              "email": "email4",
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
                  "key0": "metadata9",
                  "key1": "metadata0",
                  "key2": "metadata1"
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
                },
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
                "key0": "metadata9",
                "key1": "metadata8",
                "key2": "metadata7"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type4",
                "volume_percentage": 186,
                "delay": 220,
                "days": [
                  196,
                  197
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval6",
                "transfer_day": 56
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
          }
        ]
      },
      "boleto": {
        "interest": {
          "days": 32,
          "type": "type4",
          "amount": 106
        },
        "fine": {
          "days": 50,
          "type": "type8",
          "amount": 124
        },
        "max_days_to_pay_past_due": 38
      },
      "manual_billing": false
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

