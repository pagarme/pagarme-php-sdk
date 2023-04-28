
# List Increments Response

## Structure

`ListIncrementsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetIncrementResponse[])`](../../doc/models/get-increment-response.md) | Optional | The Increments response | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "value": 145.67,
      "increment_type": "increment_type7",
      "status": "status7",
      "created_at": "2016-03-13T12:52:32.123Z",
      "cycles": 255,
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "description": "description5",
      "subscription": {
        "id": "id1",
        "code": "code9",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval9",
        "interval_count": 97,
        "billing_type": "billing_type5",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id9",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status1",
          "duration": 81,
          "created_at": "created_at7",
          "updated_at": "updated_at5",
          "cycle": 21
        },
        "payment_method": "payment_method9",
        "currency": "currency1",
        "installments": 9,
        "status": "status3",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {
          "id": "id1",
          "name": "name1",
          "email": "email5",
          "delinquent": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document5",
          "type": "type9",
          "fb_access_token": "fb_access_token5",
          "address": {
            "id": "id7",
            "street": "street7",
            "number": "number5",
            "complement": "complement3",
            "zip_code": "zip_code1",
            "neighborhood": "neighborhood3",
            "city": "city7",
            "state": "state3",
            "country": "country1",
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {},
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata3"
            },
            "line_1": "line_11",
            "line_2": "line_25",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata2",
            "key1": "metadata3"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code3",
              "number": "number9",
              "area_code": "area_code3"
            },
            "mobile_phone": {
              "country_code": "country_code3",
              "number": "number5",
              "area_code": "area_code7"
            }
          },
          "fb_id": 1,
          "code": "code9",
          "document_type": "document_type9"
        },
        "card": {
          "id": "id5",
          "last_four_digits": "last_four_digits1",
          "brand": "brand9",
          "holder_name": "holder_name1",
          "exp_month": 97,
          "exp_year": 199,
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
          "customer": {
            "id": "id5",
            "name": "name5",
            "email": "email1",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document1",
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
                "key0": "metadata8",
                "key1": "metadata7"
              },
              "line_1": "line_15",
              "line_2": "line_29",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata8",
              "key1": "metadata9"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code3",
                "number": "number5",
                "area_code": "area_code7"
              },
              "mobile_phone": {
                "country_code": "country_code3",
                "number": "number9",
                "area_code": "area_code3"
              }
            },
            "fb_id": 229,
            "code": "code3",
            "document_type": "document_type3"
          },
          "metadata": {
            "key0": "metadata8",
            "key1": "metadata9"
          },
          "type": "type5",
          "holder_document": "holder_document1",
          "deleted_at": "2016-03-13T12:52:32.123Z",
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
              "price": 124,
              "scheme_type": "scheme_type0",
              "price_brackets": [
                {
                  "start_quantity": 85,
                  "price": 233,
                  "end_quantity": 93,
                  "overage_price": 107
                },
                {
                  "start_quantity": 86,
                  "price": 232,
                  "end_quantity": 94,
                  "overage_price": 108
                },
                {
                  "start_quantity": 87,
                  "price": 231,
                  "end_quantity": 95,
                  "overage_price": 109
                }
              ],
              "minimum_price": 28,
              "percentage": 49.18
            },
            "discounts": [
              {
                "id": "id9",
                "value": 46.81,
                "discount_type": "discount_type7",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 97,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description9",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id0",
                "value": 46.82,
                "discount_type": "discount_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 98,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 46.83,
                "discount_type": "discount_type9",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 99,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {}
            ],
            "subscription": {},
            "name": "name8",
            "quantity": 142,
            "cycles": 162,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          {
            "id": "id9",
            "description": "description9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 123,
              "scheme_type": "scheme_type1",
              "price_brackets": [
                {
                  "start_quantity": 86,
                  "price": 232,
                  "end_quantity": 94,
                  "overage_price": 108
                }
              ],
              "minimum_price": 27,
              "percentage": 49.19
            },
            "discounts": [
              {
                "id": "id0",
                "value": 46.82,
                "discount_type": "discount_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 98,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
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
            "quantity": 143,
            "cycles": 163,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor1",
        "metadata": {
          "key0": "metadata2",
          "key1": "metadata3",
          "key2": "metadata4"
        },
        "setup": {
          "id": "id5",
          "description": "description5",
          "amount": 33,
          "status": "status7"
        },
        "gateway_affiliation_id": "gateway_affiliation_id7",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 237,
        "minimum_price": 161,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {
            "id": "id2",
            "value": 76.94,
            "discount_type": "discount_type0",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 38,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {},
            "subscription_item": {
              "id": "id8",
              "description": "description8",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 4,
                "scheme_type": "scheme_type0",
                "price_brackets": [
                  {
                    "start_quantity": 205,
                    "price": 143,
                    "end_quantity": 213,
                    "overage_price": 227
                  },
                  {
                    "start_quantity": 206,
                    "price": 144,
                    "end_quantity": 214,
                    "overage_price": 228
                  }
                ],
                "minimum_price": 164,
                "percentage": 114.38
              },
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "subscription": {},
              "name": "name8",
              "quantity": 6,
              "cycles": 26,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id3",
            "value": 76.95,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 39,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {},
            "subscription_item": {
              "id": "id9",
              "description": "description9",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 3,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 206,
                    "price": 144,
                    "end_quantity": 214,
                    "overage_price": 228
                  },
                  {
                    "start_quantity": 207,
                    "price": 145,
                    "end_quantity": 215,
                    "overage_price": 229
                  },
                  {
                    "start_quantity": 208,
                    "price": 146,
                    "end_quantity": 216,
                    "overage_price": 230
                  }
                ],
                "minimum_price": 163,
                "percentage": 114.39
              },
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "subscription": {},
              "name": "name9",
              "quantity": 7,
              "cycles": 27,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id4",
            "value": 76.96,
            "discount_type": "discount_type2",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 40,
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
                "price": 2,
                "scheme_type": "scheme_type2",
                "price_brackets": [
                  {
                    "start_quantity": 207,
                    "price": 145,
                    "end_quantity": 215,
                    "overage_price": 229
                  }
                ],
                "minimum_price": 162,
                "percentage": 114.4
              },
              "discounts": [
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "subscription": {},
              "name": "name0",
              "quantity": 8,
              "cycles": 28,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "increments": [
          {}
        ],
        "boleto_due_days": 209,
        "split": {
          "enabled": true,
          "rules": [
            {
              "type": "type9",
              "amount": 169,
              "recipient": {
                "id": "id3",
                "name": "name3",
                "email": "email3",
                "document": "document3",
                "description": "description7",
                "type": "type7",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id1",
                  "holder_name": "holder_name7",
                  "holder_type": "holder_type3",
                  "bank": "bank9",
                  "branch_number": "branch_number7",
                  "branch_check_digit": "branch_check_digit7",
                  "account_number": "account_number1",
                  "account_check_digit": "account_check_digit7",
                  "type": "type9",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata7"
                  },
                  "pix_key": "pix_key5"
                },
                "gateway_recipients": [
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
                  },
                  {
                    "gateway": "gateway9",
                    "status": "status1",
                    "pgid": "pgid5",
                    "created_at": "created_at7",
                    "updated_at": "updated_at5"
                  }
                ],
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata1"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type3",
                  "volume_percentage": 225,
                  "delay": 65,
                  "days": [
                    41,
                    42
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval1",
                  "transfer_day": 135
                },
                "code": "code1",
                "payment_mode": "payment_mode3"
              },
              "gateway_id": "gateway_id9",
              "options": {
                "liable": true,
                "charge_processing_fee": true,
                "charge_remainder_fee": "charge_remainder_fee7"
              },
              "id": "id1"
            },
            {
              "type": "type8",
              "amount": 170,
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
                    "key0": "metadata9"
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
                  }
                ],
                "metadata": {
                  "key0": "metadata9"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type2",
                  "volume_percentage": 224,
                  "delay": 66,
                  "days": [
                    42,
                    43,
                    44
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval0",
                  "transfer_day": 134
                },
                "code": "code2",
                "payment_mode": "payment_mode2"
              },
              "gateway_id": "gateway_id8",
              "options": {
                "liable": false,
                "charge_processing_fee": false,
                "charge_remainder_fee": "charge_remainder_fee8"
              },
              "id": "id2"
            }
          ]
        },
        "boleto": {
          "interest": {
            "days": 137,
            "type": "type1",
            "amount": 211
          },
          "fine": {
            "days": 153,
            "type": "type7",
            "amount": 227
          },
          "max_days_to_pay_past_due": 141
        },
        "manual_billing": true
      },
      "subscription_item": {
        "id": "id1",
        "description": "description1",
        "status": "status3",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 43,
          "scheme_type": "scheme_type3",
          "price_brackets": [
            {
              "start_quantity": 166,
              "price": 104,
              "end_quantity": 174,
              "overage_price": 188
            },
            {
              "start_quantity": 167,
              "price": 105,
              "end_quantity": 175,
              "overage_price": 189
            }
          ],
          "minimum_price": 53,
          "percentage": 183.11
        },
        "discounts": [
          {
            "id": "id2",
            "value": 180.74,
            "discount_type": "discount_type0",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 178,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {
              "id": "id8",
              "code": "code6",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval6",
              "interval_count": 20,
              "billing_type": "billing_type2",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id6",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status8",
                "duration": 4,
                "created_at": "created_at4",
                "updated_at": "updated_at2",
                "cycle": 200
              },
              "payment_method": "payment_method8",
              "currency": "currency8",
              "installments": 188,
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id8",
                "name": "name8",
                "email": "email2",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document2",
                "type": "type8",
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
                    "key0": "metadata5",
                    "key1": "metadata6"
                  },
                  "line_1": "line_18",
                  "line_2": "line_22",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata1",
                  "key1": "metadata0"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code0",
                    "number": "number8",
                    "area_code": "area_code0"
                  },
                  "mobile_phone": {
                    "country_code": "country_code0",
                    "number": "number8",
                    "area_code": "area_code0"
                  }
                },
                "fb_id": 180,
                "code": "code6",
                "document_type": "document_type6"
              },
              "card": {
                "id": "id2",
                "last_four_digits": "last_four_digits8",
                "brand": "brand6",
                "holder_name": "holder_name8",
                "exp_month": 82,
                "exp_year": 122,
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street4",
                  "number": "number2",
                  "zip_code": "zip_code8",
                  "neighborhood": "neighborhood0",
                  "city": "city4",
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
                  "document": "document6",
                  "type": "type2",
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
                      "key0": "metadata1",
                      "key1": "metadata0",
                      "key2": "metadata9"
                    },
                    "line_1": "line_12",
                    "line_2": "line_26",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata8"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code4",
                      "number": "number2",
                      "area_code": "area_code4"
                    },
                    "mobile_phone": {
                      "country_code": "country_code4",
                      "number": "number8",
                      "area_code": "area_code4"
                    }
                  },
                  "fb_id": 110,
                  "code": "code0",
                  "document_type": "document_type0"
                },
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata8",
                  "key2": "metadata7"
                },
                "type": "type2",
                "holder_document": "holder_document6",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits2",
                "label": "label2"
              },
              "items": [
                {}
              ],
              "statement_descriptor": "statement_descriptor8",
              "metadata": {
                "key0": "metadata1"
              },
              "setup": {
                "id": "id2",
                "description": "description2",
                "amount": 212,
                "status": "status4"
              },
              "gateway_affiliation_id": "gateway_affiliation_id4",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 160,
              "minimum_price": 18,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "boleto_due_days": 132,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type8",
                    "amount": 92,
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
                          "key1": "metadata0"
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
                        }
                      ],
                      "metadata": {
                        "key0": "metadata9",
                        "key1": "metadata8"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type4",
                        "volume_percentage": 210,
                        "delay": 244,
                        "days": [
                          220
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 80
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
                  "days": 58,
                  "type": "type2",
                  "amount": 132
                },
                "fine": {
                  "days": 76,
                  "type": "type0",
                  "amount": 150
                },
                "max_days_to_pay_past_due": 64
              },
              "manual_billing": false
            },
            "subscription_item": {}
          },
          {
            "id": "id3",
            "value": 180.75,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 179,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {
              "id": "id9",
              "code": "code7",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval7",
              "interval_count": 21,
              "billing_type": "billing_type3",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id7",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status9",
                "duration": 5,
                "created_at": "created_at5",
                "updated_at": "updated_at3",
                "cycle": 201
              },
              "payment_method": "payment_method9",
              "currency": "currency9",
              "installments": 189,
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id9",
                "name": "name9",
                "email": "email3",
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
                    "key0": "metadata6",
                    "key1": "metadata7",
                    "key2": "metadata8"
                  },
                  "line_1": "line_19",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9",
                  "key2": "metadata8"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code1",
                    "number": "number9",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code1",
                    "number": "number9",
                    "area_code": "area_code1"
                  }
                },
                "fb_id": 181,
                "code": "code7",
                "document_type": "document_type7"
              },
              "card": {
                "id": "id3",
                "last_four_digits": "last_four_digits9",
                "brand": "brand7",
                "holder_name": "holder_name9",
                "exp_month": 83,
                "exp_year": 123,
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street5",
                  "number": "number3",
                  "zip_code": "zip_code9",
                  "neighborhood": "neighborhood1",
                  "city": "city5",
                  "state": "state1",
                  "country": "country9",
                  "complement": "complement1",
                  "line_1": "line_11",
                  "line_2": "line_23"
                },
                "customer": {
                  "id": "id3",
                  "name": "name3",
                  "email": "email3",
                  "delinquent": true,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document7",
                  "type": "type3",
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
                      "key0": "metadata0"
                    },
                    "line_1": "line_13",
                    "line_2": "line_27",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata0"
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
                  "fb_id": 111,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9"
                },
                "type": "type3",
                "holder_document": "holder_document7",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits3",
                "label": "label3"
              },
              "items": [
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor9",
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata9"
              },
              "setup": {
                "id": "id3",
                "description": "description3",
                "amount": 213,
                "status": "status5"
              },
              "gateway_affiliation_id": "gateway_affiliation_id5",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 161,
              "minimum_price": 19,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "boleto_due_days": 133,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type9",
                    "amount": 93,
                    "recipient": {
                      "id": "id1",
                      "name": "name1",
                      "email": "email5",
                      "document": "document5",
                      "description": "description1",
                      "type": "type1",
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
                          "key1": "metadata1",
                          "key2": "metadata2"
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
                        },
                        {
                          "gateway": "gateway7",
                          "status": "status9",
                          "pgid": "pgid3",
                          "created_at": "created_at5",
                          "updated_at": "updated_at3"
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
                        "volume_percentage": 211,
                        "delay": 245,
                        "days": [
                          221,
                          222
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 81
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
                    "amount": 94,
                    "recipient": {
                      "id": "id2",
                      "name": "name2",
                      "email": "email6",
                      "document": "document6",
                      "description": "description2",
                      "type": "type2",
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
                          "key0": "metadata1"
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
                        }
                      ],
                      "metadata": {
                        "key0": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type6",
                        "volume_percentage": 212,
                        "delay": 246,
                        "days": [
                          222,
                          223,
                          224
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 82
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
                  "days": 59,
                  "type": "type1",
                  "amount": 133
                },
                "fine": {
                  "days": 77,
                  "type": "type1",
                  "amount": 151
                },
                "max_days_to_pay_past_due": 65
              },
              "manual_billing": true
            },
            "subscription_item": {}
          }
        ],
        "increments": [
          {},
          {},
          {}
        ],
        "subscription": {
          "id": "id7",
          "code": "code5",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval5",
          "interval_count": 85,
          "billing_type": "billing_type9",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id5",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status7",
            "duration": 69,
            "created_at": "created_at3",
            "updated_at": "updated_at1",
            "cycle": 9
          },
          "payment_method": "payment_method3",
          "currency": "currency7",
          "installments": 253,
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
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
                "key1": "metadata9",
                "key2": "metadata8"
              },
              "line_1": "line_17",
              "line_2": "line_21",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata7",
              "key2": "metadata8"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code9",
                "number": "number3",
                "area_code": "area_code9"
              },
              "mobile_phone": {
                "country_code": "country_code9",
                "number": "number1",
                "area_code": "area_code1"
              }
            },
            "fb_id": 245,
            "code": "code5",
            "document_type": "document_type5"
          },
          "card": {
            "id": "id1",
            "last_four_digits": "last_four_digits7",
            "brand": "brand5",
            "holder_name": "holder_name7",
            "exp_month": 109,
            "exp_year": 187,
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street7",
              "number": "number5",
              "zip_code": "zip_code1",
              "neighborhood": "neighborhood3",
              "city": "city3",
              "state": "state7",
              "country": "country1",
              "complement": "complement7",
              "line_1": "line_19",
              "line_2": "line_25"
            },
            "customer": {
              "id": "id1",
              "name": "name1",
              "email": "email5",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document5",
              "type": "type9",
              "fb_access_token": "fb_access_token5",
              "address": {
                "id": "id7",
                "street": "street7",
                "number": "number5",
                "complement": "complement3",
                "zip_code": "zip_code1",
                "neighborhood": "neighborhood3",
                "city": "city7",
                "state": "state3",
                "country": "country1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata3"
                },
                "line_1": "line_19",
                "line_2": "line_25",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code7",
                  "number": "number9",
                  "area_code": "area_code3"
                },
                "mobile_phone": {
                  "country_code": "country_code7",
                  "number": "number5",
                  "area_code": "area_code7"
                }
              },
              "fb_id": 175,
              "code": "code9",
              "document_type": "document_type9"
            },
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata3",
              "key2": "metadata4"
            },
            "type": "type9",
            "holder_document": "holder_document5",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits1",
            "label": "label1"
          },
          "items": [
            {}
          ],
          "statement_descriptor": "statement_descriptor7",
          "metadata": {
            "key0": "metadata4"
          },
          "setup": {
            "id": "id1",
            "description": "description1",
            "amount": 21,
            "status": "status3"
          },
          "gateway_affiliation_id": "gateway_affiliation_id3",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 225,
          "minimum_price": 173,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id8",
              "value": 97.3,
              "discount_type": "discount_type6",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 26,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id9",
              "value": 97.31,
              "discount_type": "discount_type7",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 27,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {},
            {},
            {}
          ],
          "boleto_due_days": 197,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type3",
                "amount": 157,
                "recipient": {
                  "id": "id9",
                  "name": "name9",
                  "email": "email7",
                  "document": "document7",
                  "description": "description1",
                  "type": "type1",
                  "status": "status9",
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
                    "type": "type3",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata4",
                      "key1": "metadata3",
                      "key2": "metadata2"
                    },
                    "pix_key": "pix_key9"
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
                    "key0": "metadata4",
                    "key1": "metadata5",
                    "key2": "metadata6"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type7",
                    "volume_percentage": 237,
                    "delay": 53,
                    "days": [
                      29
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval5",
                    "transfer_day": 147
                  },
                  "code": "code7",
                  "payment_mode": "payment_mode7"
                },
                "gateway_id": "gateway_id3",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee3"
                },
                "id": "id7"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 149,
              "type": "type7",
              "amount": 223
            },
            "fine": {
              "days": 141,
              "type": "type1",
              "amount": 215
            },
            "max_days_to_pay_past_due": 129
          },
          "manual_billing": true
        },
        "name": "name1",
        "quantity": 223,
        "cycles": 243,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      }
    },
    {
      "id": "id6",
      "value": 145.68,
      "increment_type": "increment_type8",
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "cycles": 0,
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "description": "description6",
      "subscription": {
        "id": "id2",
        "code": "code0",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval0",
        "interval_count": 98,
        "billing_type": "billing_type4",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id0",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status2",
          "duration": 82,
          "created_at": "created_at8",
          "updated_at": "updated_at6",
          "cycle": 22
        },
        "payment_method": "payment_method8",
        "currency": "currency2",
        "installments": 10,
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
              "key0": "metadata5"
            },
            "line_1": "line_12",
            "line_2": "line_26",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata1"
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
          "fb_id": 2,
          "code": "code0",
          "document_type": "document_type0"
        },
        "card": {
          "id": "id6",
          "last_four_digits": "last_four_digits2",
          "brand": "brand0",
          "holder_name": "holder_name2",
          "exp_month": 96,
          "exp_year": 200,
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
                "key0": "metadata7",
                "key1": "metadata6",
                "key2": "metadata5"
              },
              "line_1": "line_16",
              "line_2": "line_28",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata9",
              "key1": "metadata0",
              "key2": "metadata1"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code4",
                "number": "number6",
                "area_code": "area_code6"
              },
              "mobile_phone": {
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 228,
            "code": "code2",
            "document_type": "document_type2"
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
          {
            "id": "id9",
            "description": "description9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 123,
              "scheme_type": "scheme_type1",
              "price_brackets": [
                {
                  "start_quantity": 86,
                  "price": 232,
                  "end_quantity": 94,
                  "overage_price": 108
                }
              ],
              "minimum_price": 27,
              "percentage": 49.19
            },
            "discounts": [
              {
                "id": "id0",
                "value": 46.82,
                "discount_type": "discount_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 98,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
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
            "quantity": 143,
            "cycles": 163,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          {
            "id": "id0",
            "description": "description0",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 122,
              "scheme_type": "scheme_type2",
              "price_brackets": [
                {
                  "start_quantity": 87,
                  "price": 231,
                  "end_quantity": 95,
                  "overage_price": 109
                },
                {
                  "start_quantity": 88,
                  "price": 230,
                  "end_quantity": 96,
                  "overage_price": 110
                }
              ],
              "minimum_price": 26,
              "percentage": 49.2
            },
            "discounts": [
              {
                "id": "id1",
                "value": 46.83,
                "discount_type": "discount_type9",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 99,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id2",
                "value": 46.84,
                "discount_type": "discount_type0",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 100,
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
            "quantity": 144,
            "cycles": 164,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          {
            "id": "id1",
            "description": "description1",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 121,
              "scheme_type": "scheme_type3",
              "price_brackets": [
                {
                  "start_quantity": 88,
                  "price": 230,
                  "end_quantity": 96,
                  "overage_price": 110
                },
                {
                  "start_quantity": 89,
                  "price": 229,
                  "end_quantity": 97,
                  "overage_price": 111
                },
                {
                  "start_quantity": 90,
                  "price": 228,
                  "end_quantity": 98,
                  "overage_price": 112
                }
              ],
              "minimum_price": 25,
              "percentage": 49.21
            },
            "discounts": [
              {
                "id": "id2",
                "value": 46.84,
                "discount_type": "discount_type0",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 100,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id3",
                "value": 46.85,
                "discount_type": "discount_type1",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 101,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id4",
                "value": 46.86,
                "discount_type": "discount_type2",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 102,
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
            "quantity": 145,
            "cycles": 165,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor2",
        "metadata": {
          "key0": "metadata1",
          "key1": "metadata2"
        },
        "setup": {
          "id": "id6",
          "description": "description6",
          "amount": 34,
          "status": "status8"
        },
        "gateway_affiliation_id": "gateway_affiliation_id8",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 238,
        "minimum_price": 160,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {
            "id": "id3",
            "value": 76.95,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 39,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {},
            "subscription_item": {
              "id": "id9",
              "description": "description9",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 3,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 206,
                    "price": 144,
                    "end_quantity": 214,
                    "overage_price": 228
                  },
                  {
                    "start_quantity": 207,
                    "price": 145,
                    "end_quantity": 215,
                    "overage_price": 229
                  },
                  {
                    "start_quantity": 208,
                    "price": 146,
                    "end_quantity": 216,
                    "overage_price": 230
                  }
                ],
                "minimum_price": 163,
                "percentage": 114.39
              },
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "subscription": {},
              "name": "name9",
              "quantity": 7,
              "cycles": 27,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "increments": [
          {},
          {}
        ],
        "boleto_due_days": 210,
        "split": {
          "enabled": false,
          "rules": [
            {
              "type": "type8",
              "amount": 170,
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
                    "key0": "metadata9"
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
                  }
                ],
                "metadata": {
                  "key0": "metadata9"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type2",
                  "volume_percentage": 224,
                  "delay": 66,
                  "days": [
                    42,
                    43,
                    44
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval0",
                  "transfer_day": 134
                },
                "code": "code2",
                "payment_mode": "payment_mode2"
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
              "amount": 171,
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
                    "key0": "metadata0",
                    "key1": "metadata9",
                    "key2": "metadata8"
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
                  "volume_percentage": 223,
                  "delay": 67,
                  "days": [
                    43
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval9",
                  "transfer_day": 133
                },
                "code": "code3",
                "payment_mode": "payment_mode1"
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
              "amount": 172,
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
                    "key1": "metadata0"
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
                  "volume_percentage": 222,
                  "delay": 68,
                  "days": [
                    44,
                    45
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval8",
                  "transfer_day": 132
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
            "days": 136,
            "type": "type2",
            "amount": 210
          },
          "fine": {
            "days": 154,
            "type": "type6",
            "amount": 228
          },
          "max_days_to_pay_past_due": 142
        },
        "manual_billing": false
      },
      "subscription_item": {
        "id": "id2",
        "description": "description2",
        "status": "status4",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 42,
          "scheme_type": "scheme_type4",
          "price_brackets": [
            {
              "start_quantity": 167,
              "price": 105,
              "end_quantity": 175,
              "overage_price": 189
            },
            {
              "start_quantity": 168,
              "price": 106,
              "end_quantity": 176,
              "overage_price": 190
            },
            {
              "start_quantity": 169,
              "price": 107,
              "end_quantity": 177,
              "overage_price": 191
            }
          ],
          "minimum_price": 54,
          "percentage": 183.12
        },
        "discounts": [
          {
            "id": "id3",
            "value": 180.75,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 179,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {
              "id": "id9",
              "code": "code7",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval7",
              "interval_count": 21,
              "billing_type": "billing_type3",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id7",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status9",
                "duration": 5,
                "created_at": "created_at5",
                "updated_at": "updated_at3",
                "cycle": 201
              },
              "payment_method": "payment_method9",
              "currency": "currency9",
              "installments": 189,
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id9",
                "name": "name9",
                "email": "email3",
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
                    "key0": "metadata6",
                    "key1": "metadata7",
                    "key2": "metadata8"
                  },
                  "line_1": "line_19",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9",
                  "key2": "metadata8"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code1",
                    "number": "number9",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code1",
                    "number": "number9",
                    "area_code": "area_code1"
                  }
                },
                "fb_id": 181,
                "code": "code7",
                "document_type": "document_type7"
              },
              "card": {
                "id": "id3",
                "last_four_digits": "last_four_digits9",
                "brand": "brand7",
                "holder_name": "holder_name9",
                "exp_month": 83,
                "exp_year": 123,
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street5",
                  "number": "number3",
                  "zip_code": "zip_code9",
                  "neighborhood": "neighborhood1",
                  "city": "city5",
                  "state": "state1",
                  "country": "country9",
                  "complement": "complement1",
                  "line_1": "line_11",
                  "line_2": "line_23"
                },
                "customer": {
                  "id": "id3",
                  "name": "name3",
                  "email": "email3",
                  "delinquent": true,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document7",
                  "type": "type3",
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
                      "key0": "metadata0"
                    },
                    "line_1": "line_13",
                    "line_2": "line_27",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata0"
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
                  "fb_id": 111,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9"
                },
                "type": "type3",
                "holder_document": "holder_document7",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits3",
                "label": "label3"
              },
              "items": [
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor9",
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata9"
              },
              "setup": {
                "id": "id3",
                "description": "description3",
                "amount": 213,
                "status": "status5"
              },
              "gateway_affiliation_id": "gateway_affiliation_id5",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 161,
              "minimum_price": 19,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "boleto_due_days": 133,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type9",
                    "amount": 93,
                    "recipient": {
                      "id": "id1",
                      "name": "name1",
                      "email": "email5",
                      "document": "document5",
                      "description": "description1",
                      "type": "type1",
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
                          "key1": "metadata1",
                          "key2": "metadata2"
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
                        },
                        {
                          "gateway": "gateway7",
                          "status": "status9",
                          "pgid": "pgid3",
                          "created_at": "created_at5",
                          "updated_at": "updated_at3"
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
                        "volume_percentage": 211,
                        "delay": 245,
                        "days": [
                          221,
                          222
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 81
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
                    "amount": 94,
                    "recipient": {
                      "id": "id2",
                      "name": "name2",
                      "email": "email6",
                      "document": "document6",
                      "description": "description2",
                      "type": "type2",
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
                          "key0": "metadata1"
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
                        }
                      ],
                      "metadata": {
                        "key0": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type6",
                        "volume_percentage": 212,
                        "delay": 246,
                        "days": [
                          222,
                          223,
                          224
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 82
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
                  "days": 59,
                  "type": "type1",
                  "amount": 133
                },
                "fine": {
                  "days": 77,
                  "type": "type1",
                  "amount": 151
                },
                "max_days_to_pay_past_due": 65
              },
              "manual_billing": true
            },
            "subscription_item": {}
          },
          {
            "id": "id4",
            "value": 180.76,
            "discount_type": "discount_type2",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 180,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description4",
            "subscription": {
              "id": "id0",
              "code": "code8",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval8",
              "interval_count": 22,
              "billing_type": "billing_type4",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id8",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status0",
                "duration": 6,
                "created_at": "created_at6",
                "updated_at": "updated_at4",
                "cycle": 202
              },
              "payment_method": "payment_method0",
              "currency": "currency0",
              "installments": 190,
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id0",
                "name": "name0",
                "email": "email4",
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
                    "key0": "metadata7"
                  },
                  "line_1": "line_10",
                  "line_2": "line_24",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata9"
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
                "fb_id": 182,
                "code": "code8",
                "document_type": "document_type8"
              },
              "card": {
                "id": "id4",
                "last_four_digits": "last_four_digits0",
                "brand": "brand8",
                "holder_name": "holder_name0",
                "exp_month": 84,
                "exp_year": 124,
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street6",
                  "number": "number4",
                  "zip_code": "zip_code0",
                  "neighborhood": "neighborhood2",
                  "city": "city6",
                  "state": "state2",
                  "country": "country0",
                  "complement": "complement2",
                  "line_1": "line_10",
                  "line_2": "line_24"
                },
                "customer": {
                  "id": "id4",
                  "name": "name4",
                  "email": "email2",
                  "delinquent": false,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document8",
                  "type": "type4",
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
                      "key1": "metadata8"
                    },
                    "line_1": "line_14",
                    "line_2": "line_28",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata1",
                    "key1": "metadata0",
                    "key2": "metadata9"
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
                  "fb_id": 112,
                  "code": "code2",
                  "document_type": "document_type2"
                },
                "metadata": {
                  "key0": "metadata1"
                },
                "type": "type4",
                "holder_document": "holder_document8",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits4",
                "label": "label4"
              },
              "items": [
                {},
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor0",
              "metadata": {
                "key0": "metadata9",
                "key1": "metadata8",
                "key2": "metadata7"
              },
              "setup": {
                "id": "id4",
                "description": "description4",
                "amount": 214,
                "status": "status6"
              },
              "gateway_affiliation_id": "gateway_affiliation_id6",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 162,
              "minimum_price": 20,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "boleto_due_days": 134,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type0",
                    "amount": 94,
                    "recipient": {
                      "id": "id2",
                      "name": "name2",
                      "email": "email6",
                      "document": "document6",
                      "description": "description2",
                      "type": "type2",
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
                          "key0": "metadata1"
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
                        }
                      ],
                      "metadata": {
                        "key0": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type6",
                        "volume_percentage": 212,
                        "delay": 246,
                        "days": [
                          222,
                          223,
                          224
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 82
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
                  },
                  {
                    "type": "type1",
                    "amount": 95,
                    "recipient": {
                      "id": "id3",
                      "name": "name3",
                      "email": "email7",
                      "document": "document7",
                      "description": "description3",
                      "type": "type3",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id1",
                        "holder_name": "holder_name7",
                        "holder_type": "holder_type3",
                        "bank": "bank9",
                        "branch_number": "branch_number7",
                        "branch_check_digit": "branch_check_digit7",
                        "account_number": "account_number1",
                        "account_check_digit": "account_check_digit7",
                        "type": "type1",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata2",
                          "key1": "metadata3"
                        },
                        "pix_key": "pix_key5"
                      },
                      "gateway_recipients": [
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
                        "key0": "metadata6",
                        "key1": "metadata5"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type7",
                        "volume_percentage": 213,
                        "delay": 247,
                        "days": [
                          223
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval9",
                        "transfer_day": 83
                      },
                      "code": "code1",
                      "payment_mode": "payment_mode7"
                    },
                    "gateway_id": "gateway_id1",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee7"
                    },
                    "id": "id1"
                  },
                  {
                    "type": "type2",
                    "amount": 96,
                    "recipient": {
                      "id": "id4",
                      "name": "name4",
                      "email": "email8",
                      "document": "document8",
                      "description": "description4",
                      "type": "type4",
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
                          "key0": "metadata3",
                          "key1": "metadata4",
                          "key2": "metadata5"
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
                        "key0": "metadata5",
                        "key1": "metadata4",
                        "key2": "metadata3"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 214,
                        "delay": 248,
                        "days": [
                          224,
                          225
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval0",
                        "transfer_day": 84
                      },
                      "code": "code2",
                      "payment_mode": "payment_mode8"
                    },
                    "gateway_id": "gateway_id2",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee8"
                    },
                    "id": "id2"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 60,
                  "type": "type0",
                  "amount": 134
                },
                "fine": {
                  "days": 78,
                  "type": "type2",
                  "amount": 152
                },
                "max_days_to_pay_past_due": 66
              },
              "manual_billing": false
            },
            "subscription_item": {}
          },
          {
            "id": "id5",
            "value": 180.77,
            "discount_type": "discount_type3",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 181,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description5",
            "subscription": {
              "id": "id1",
              "code": "code9",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval9",
              "interval_count": 23,
              "billing_type": "billing_type5",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id9",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status1",
                "duration": 7,
                "created_at": "created_at7",
                "updated_at": "updated_at5",
                "cycle": 203
              },
              "payment_method": "payment_method1",
              "currency": "currency1",
              "installments": 191,
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id1",
                "name": "name1",
                "email": "email5",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document5",
                "type": "type1",
                "fb_access_token": "fb_access_token5",
                "address": {
                  "id": "id7",
                  "street": "street7",
                  "number": "number5",
                  "complement": "complement3",
                  "zip_code": "zip_code1",
                  "neighborhood": "neighborhood3",
                  "city": "city7",
                  "state": "state3",
                  "country": "country1",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "customer": {},
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata9"
                  },
                  "line_1": "line_11",
                  "line_2": "line_25",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata8",
                  "key1": "metadata7"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code3",
                    "number": "number1",
                    "area_code": "area_code3"
                  },
                  "mobile_phone": {
                    "country_code": "country_code3",
                    "number": "number1",
                    "area_code": "area_code3"
                  }
                },
                "fb_id": 183,
                "code": "code9",
                "document_type": "document_type9"
              },
              "card": {
                "id": "id5",
                "last_four_digits": "last_four_digits1",
                "brand": "brand9",
                "holder_name": "holder_name1",
                "exp_month": 85,
                "exp_year": 125,
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street7",
                  "number": "number5",
                  "zip_code": "zip_code1",
                  "neighborhood": "neighborhood3",
                  "city": "city7",
                  "state": "state3",
                  "country": "country1",
                  "complement": "complement3",
                  "line_1": "line_19",
                  "line_2": "line_25"
                },
                "customer": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
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
                      "key0": "metadata8",
                      "key1": "metadata7",
                      "key2": "metadata6"
                    },
                    "line_1": "line_15",
                    "line_2": "line_29",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata2",
                    "key1": "metadata1"
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
                  "fb_id": 113,
                  "code": "code3",
                  "document_type": "document_type3"
                },
                "metadata": {
                  "key0": "metadata2",
                  "key1": "metadata1",
                  "key2": "metadata0"
                },
                "type": "type5",
                "holder_document": "holder_document9",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits5",
                "label": "label5"
              },
              "items": [
                {}
              ],
              "statement_descriptor": "statement_descriptor1",
              "metadata": {
                "key0": "metadata8"
              },
              "setup": {
                "id": "id5",
                "description": "description5",
                "amount": 215,
                "status": "status7"
              },
              "gateway_affiliation_id": "gateway_affiliation_id7",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 163,
              "minimum_price": 21,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "boleto_due_days": 135,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type1",
                    "amount": 95,
                    "recipient": {
                      "id": "id3",
                      "name": "name3",
                      "email": "email7",
                      "document": "document7",
                      "description": "description3",
                      "type": "type3",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id1",
                        "holder_name": "holder_name7",
                        "holder_type": "holder_type3",
                        "bank": "bank9",
                        "branch_number": "branch_number7",
                        "branch_check_digit": "branch_check_digit7",
                        "account_number": "account_number1",
                        "account_check_digit": "account_check_digit7",
                        "type": "type1",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata2",
                          "key1": "metadata3"
                        },
                        "pix_key": "pix_key5"
                      },
                      "gateway_recipients": [
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
                        "key0": "metadata6",
                        "key1": "metadata5"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type7",
                        "volume_percentage": 213,
                        "delay": 247,
                        "days": [
                          223
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval9",
                        "transfer_day": 83
                      },
                      "code": "code1",
                      "payment_mode": "payment_mode7"
                    },
                    "gateway_id": "gateway_id1",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee7"
                    },
                    "id": "id1"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 61,
                  "type": "type9",
                  "amount": 135
                },
                "fine": {
                  "days": 79,
                  "type": "type3",
                  "amount": 153
                },
                "max_days_to_pay_past_due": 67
              },
              "manual_billing": true
            },
            "subscription_item": {}
          }
        ],
        "increments": [
          {}
        ],
        "subscription": {
          "id": "id8",
          "code": "code6",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval6",
          "interval_count": 86,
          "billing_type": "billing_type8",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id6",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status8",
            "duration": 70,
            "created_at": "created_at4",
            "updated_at": "updated_at2",
            "cycle": 10
          },
          "payment_method": "payment_method2",
          "currency": "currency8",
          "installments": 254,
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
                "key0": "metadata1",
                "key1": "metadata0"
              },
              "line_1": "line_18",
              "line_2": "line_22",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata6"
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
            "fb_id": 246,
            "code": "code6",
            "document_type": "document_type6"
          },
          "card": {
            "id": "id2",
            "last_four_digits": "last_four_digits8",
            "brand": "brand6",
            "holder_name": "holder_name8",
            "exp_month": 108,
            "exp_year": 188,
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street6",
              "number": "number6",
              "zip_code": "zip_code0",
              "neighborhood": "neighborhood2",
              "city": "city4",
              "state": "state8",
              "country": "country0",
              "complement": "complement8",
              "line_1": "line_10",
              "line_2": "line_24"
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
                  "key0": "metadata5"
                },
                "line_1": "line_18",
                "line_2": "line_26",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata1"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code6",
                  "number": "number8",
                  "area_code": "area_code4"
                },
                "mobile_phone": {
                  "country_code": "country_code6",
                  "number": "number6",
                  "area_code": "area_code6"
                }
              },
              "fb_id": 176,
              "code": "code0",
              "document_type": "document_type0"
            },
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata2"
            },
            "type": "type8",
            "holder_document": "holder_document4",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits2",
            "label": "label2"
          },
          "items": [
            {},
            {}
          ],
          "statement_descriptor": "statement_descriptor8",
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata4",
            "key2": "metadata3"
          },
          "setup": {
            "id": "id2",
            "description": "description2",
            "amount": 22,
            "status": "status4"
          },
          "gateway_affiliation_id": "gateway_affiliation_id4",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 226,
          "minimum_price": 172,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id9",
              "value": 97.31,
              "discount_type": "discount_type7",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 27,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id0",
              "value": 97.32,
              "discount_type": "discount_type8",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 28,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description0",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id1",
              "value": 97.33,
              "discount_type": "discount_type9",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 29,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description1",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {}
          ],
          "boleto_due_days": 198,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type2",
                "amount": 158,
                "recipient": {
                  "id": "id0",
                  "name": "name0",
                  "email": "email6",
                  "document": "document6",
                  "description": "description0",
                  "type": "type0",
                  "status": "status8",
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
                    "type": "type2",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata5",
                      "key1": "metadata4"
                    },
                    "pix_key": "pix_key8"
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
                    "key0": "metadata3",
                    "key1": "metadata4"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type6",
                    "volume_percentage": 236,
                    "delay": 54,
                    "days": [
                      30,
                      31
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval4",
                    "transfer_day": 146
                  },
                  "code": "code8",
                  "payment_mode": "payment_mode6"
                },
                "gateway_id": "gateway_id2",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee4"
                },
                "id": "id8"
              },
              {
                "type": "type1",
                "amount": 159,
                "recipient": {
                  "id": "id1",
                  "name": "name1",
                  "email": "email5",
                  "document": "document5",
                  "description": "description9",
                  "type": "type9",
                  "status": "status7",
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
                    "type": "type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata6"
                    },
                    "pix_key": "pix_key7"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway5",
                      "status": "status7",
                      "pgid": "pgid1",
                      "created_at": "created_at3",
                      "updated_at": "updated_at1"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata2"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type5",
                    "volume_percentage": 235,
                    "delay": 55,
                    "days": [
                      31,
                      32,
                      33
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval3",
                    "transfer_day": 145
                  },
                  "code": "code9",
                  "payment_mode": "payment_mode5"
                },
                "gateway_id": "gateway_id1",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee5"
                },
                "id": "id9"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 148,
              "type": "type8",
              "amount": 222
            },
            "fine": {
              "days": 142,
              "type": "type0",
              "amount": 216
            },
            "max_days_to_pay_past_due": 130
          },
          "manual_billing": false
        },
        "name": "name2",
        "quantity": 224,
        "cycles": 244,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      }
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

