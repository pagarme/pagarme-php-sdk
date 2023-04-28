
# List Subscription Items Response

Response model for listing subscription items

## Structure

`ListSubscriptionItemsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetSubscriptionItemResponse[])`](../../doc/models/get-subscription-item-response.md) | Optional | The subscription items | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
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
            "start_quantity": 178,
            "price": 116,
            "end_quantity": 186,
            "overage_price": 200
          },
          {
            "start_quantity": 179,
            "price": 117,
            "end_quantity": 187,
            "overage_price": 201
          },
          {
            "start_quantity": 180,
            "price": 118,
            "end_quantity": 188,
            "overage_price": 202
          }
        ],
        "minimum_price": 65,
        "percentage": 162.75
      },
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
          "subscription": {
            "id": "id2",
            "code": "code0",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval0",
            "interval_count": 32,
            "billing_type": "billing_type6",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id0",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status2",
              "duration": 16,
              "created_at": "created_at8",
              "updated_at": "updated_at6",
              "cycle": 212
            },
            "payment_method": "payment_method2",
            "currency": "currency2",
            "installments": 200,
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id2",
              "name": "name2",
              "email": "email6",
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
                  "key0": "metadata9",
                  "key1": "metadata0",
                  "key2": "metadata1"
                },
                "line_1": "line_12",
                "line_2": "line_26",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata6",
                "key2": "metadata5"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code4",
                  "number": "number2",
                  "area_code": "area_code4"
                },
                "mobile_phone": {
                  "country_code": "country_code4",
                  "number": "number2",
                  "area_code": "area_code4"
                }
              },
              "fb_id": 192,
              "code": "code0",
              "document_type": "document_type0"
            },
            "card": {
              "id": "id6",
              "last_four_digits": "last_four_digits2",
              "brand": "brand0",
              "holder_name": "holder_name2",
              "exp_month": 94,
              "exp_year": 134,
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street8",
                "number": "number6",
                "zip_code": "zip_code2",
                "neighborhood": "neighborhood4",
                "city": "city8",
                "state": "state4",
                "country": "country2",
                "complement": "complement4",
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
                    "key0": "metadata7"
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
                    "number": "number4",
                    "area_code": "area_code8"
                  }
                },
                "fb_id": 122,
                "code": "code4",
                "document_type": "document_type4"
              },
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata2"
              },
              "type": "type6",
              "holder_document": "holder_document0",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits6",
              "label": "label6"
            },
            "items": [
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor2",
            "metadata": {
              "key0": "metadata7",
              "key1": "metadata6"
            },
            "setup": {
              "id": "id6",
              "description": "description6",
              "amount": 224,
              "status": "status8"
            },
            "gateway_affiliation_id": "gateway_affiliation_id8",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 172,
            "minimum_price": 30,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {},
              {},
              {}
            ],
            "increments": [
              {
                "id": "id1",
                "value": 202.93,
                "increment_type": "increment_type3",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 163,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 144,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type2",
                  "amount": 104,
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
                      "volume_percentage": 222,
                      "delay": 0,
                      "days": [
                        232,
                        233
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval0",
                      "transfer_day": 92
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
                },
                {
                  "type": "type3",
                  "amount": 105,
                  "recipient": {
                    "id": "id5",
                    "name": "name5",
                    "email": "email9",
                    "document": "document9",
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
                        "key0": "metadata4"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata4"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type9",
                      "volume_percentage": 223,
                      "delay": 1,
                      "days": [
                        233,
                        234,
                        235
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval1",
                      "transfer_day": 93
                    },
                    "code": "code3",
                    "payment_mode": "payment_mode9"
                  },
                  "gateway_id": "gateway_id3",
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
                "days": 70,
                "type": "type8",
                "amount": 144
              },
              "fine": {
                "days": 88,
                "type": "type4",
                "amount": 162
              },
              "max_days_to_pay_past_due": 76
            },
            "manual_billing": false
          },
          "subscription_item": {}
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
          "subscription": {
            "id": "id3",
            "code": "code1",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval1",
            "interval_count": 33,
            "billing_type": "billing_type7",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id1",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status3",
              "duration": 17,
              "created_at": "created_at9",
              "updated_at": "updated_at7",
              "cycle": 213
            },
            "payment_method": "payment_method3",
            "currency": "currency3",
            "installments": 201,
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id3",
              "name": "name3",
              "email": "email7",
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
                "key0": "metadata6"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code5",
                  "number": "number3",
                  "area_code": "area_code5"
                },
                "mobile_phone": {
                  "country_code": "country_code5",
                  "number": "number3",
                  "area_code": "area_code5"
                }
              },
              "fb_id": 193,
              "code": "code1",
              "document_type": "document_type1"
            },
            "card": {
              "id": "id7",
              "last_four_digits": "last_four_digits3",
              "brand": "brand1",
              "holder_name": "holder_name3",
              "exp_month": 95,
              "exp_year": 135,
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street9",
                "number": "number7",
                "zip_code": "zip_code3",
                "neighborhood": "neighborhood5",
                "city": "city9",
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
                "document": "document1",
                "type": "type7",
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
                    "key0": "metadata6",
                    "key1": "metadata5"
                  },
                  "line_1": "line_17",
                  "line_2": "line_21",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata3",
                  "key2": "metadata2"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number7",
                    "area_code": "area_code9"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 123,
                "code": "code5",
                "document_type": "document_type5"
              },
              "metadata": {
                "key0": "metadata4"
              },
              "type": "type7",
              "holder_document": "holder_document1",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits7",
              "label": "label7"
            },
            "items": [
              {},
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor3",
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5",
              "key2": "metadata4"
            },
            "setup": {
              "id": "id7",
              "description": "description7",
              "amount": 225,
              "status": "status9"
            },
            "gateway_affiliation_id": "gateway_affiliation_id9",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 173,
            "minimum_price": 31,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id2",
                "value": 202.94,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 162,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id3",
                "value": 202.95,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 161,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 145,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type3",
                  "amount": 105,
                  "recipient": {
                    "id": "id5",
                    "name": "name5",
                    "email": "email9",
                    "document": "document9",
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
                        "key0": "metadata4"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata4"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type9",
                      "volume_percentage": 223,
                      "delay": 1,
                      "days": [
                        233,
                        234,
                        235
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval1",
                      "transfer_day": 93
                    },
                    "code": "code3",
                    "payment_mode": "payment_mode9"
                  },
                  "gateway_id": "gateway_id3",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee9"
                  },
                  "id": "id3"
                },
                {
                  "type": "type4",
                  "amount": 106,
                  "recipient": {
                    "id": "id6",
                    "name": "name6",
                    "email": "email0",
                    "document": "document0",
                    "description": "description6",
                    "type": "type6",
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
                        "key1": "metadata6"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata3",
                      "key1": "metadata2"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type0",
                      "volume_percentage": 224,
                      "delay": 2,
                      "days": [
                        234
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval2",
                      "transfer_day": 94
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
                  "amount": 107,
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
                      "volume_percentage": 225,
                      "delay": 3,
                      "days": [
                        235,
                        236
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval3",
                      "transfer_day": 95
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
                "days": 71,
                "type": "type7",
                "amount": 145
              },
              "fine": {
                "days": 89,
                "type": "type5",
                "amount": 163
              },
              "max_days_to_pay_past_due": 77
            },
            "manual_billing": true
          },
          "subscription_item": {}
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
          "subscription": {
            "id": "id4",
            "code": "code2",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval2",
            "interval_count": 34,
            "billing_type": "billing_type8",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id2",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status4",
              "duration": 18,
              "created_at": "created_at0",
              "updated_at": "updated_at8",
              "cycle": 214
            },
            "payment_method": "payment_method4",
            "currency": "currency4",
            "installments": 202,
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id4",
              "name": "name4",
              "email": "email8",
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
                  "key0": "metadata1",
                  "key1": "metadata2"
                },
                "line_1": "line_14",
                "line_2": "line_28",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata4"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code6",
                  "number": "number4",
                  "area_code": "area_code6"
                },
                "mobile_phone": {
                  "country_code": "country_code6",
                  "number": "number4",
                  "area_code": "area_code6"
                }
              },
              "fb_id": 194,
              "code": "code2",
              "document_type": "document_type2"
            },
            "card": {
              "id": "id8",
              "last_four_digits": "last_four_digits4",
              "brand": "brand2",
              "holder_name": "holder_name4",
              "exp_month": 96,
              "exp_year": 136,
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street0",
                "number": "number8",
                "zip_code": "zip_code4",
                "neighborhood": "neighborhood6",
                "city": "city0",
                "state": "state6",
                "country": "country4",
                "complement": "complement6",
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
                    "key1": "metadata4",
                    "key2": "metadata3"
                  },
                  "line_1": "line_18",
                  "line_2": "line_22",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata5",
                  "key1": "metadata4"
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
                "fb_id": 124,
                "code": "code6",
                "document_type": "document_type6"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata4",
                "key2": "metadata3"
              },
              "type": "type8",
              "holder_document": "holder_document2",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits8",
              "label": "label8"
            },
            "items": [
              {}
            ],
            "statement_descriptor": "statement_descriptor4",
            "metadata": {
              "key0": "metadata5"
            },
            "setup": {
              "id": "id8",
              "description": "description8",
              "amount": 226,
              "status": "status0"
            },
            "gateway_affiliation_id": "gateway_affiliation_id0",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 174,
            "minimum_price": 32,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id3",
                "value": 202.95,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 161,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id4",
                "value": 202.96,
                "increment_type": "increment_type6",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 160,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id5",
                "value": 202.97,
                "increment_type": "increment_type7",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 159,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 146,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type4",
                  "amount": 106,
                  "recipient": {
                    "id": "id6",
                    "name": "name6",
                    "email": "email0",
                    "document": "document0",
                    "description": "description6",
                    "type": "type6",
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
                        "key1": "metadata6"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata3",
                      "key1": "metadata2"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type0",
                      "volume_percentage": 224,
                      "delay": 2,
                      "days": [
                        234
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval2",
                      "transfer_day": 94
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
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 72,
                "type": "type6",
                "amount": 146
              },
              "fine": {
                "days": 90,
                "type": "type6",
                "amount": 164
              },
              "max_days_to_pay_past_due": 78
            },
            "manual_billing": false
          },
          "subscription_item": {}
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
          "subscription": {
            "id": "id0",
            "code": "code8",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval2",
            "interval_count": 12,
            "billing_type": "billing_type6",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id8",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status0",
              "duration": 252,
              "created_at": "created_at6",
              "updated_at": "updated_at4",
              "cycle": 192
            },
            "payment_method": "payment_method0",
            "currency": "currency0",
            "installments": 180,
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
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
                  "key0": "metadata3"
                },
                "line_1": "line_10",
                "line_2": "line_24",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata3"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code8",
                  "number": "number0",
                  "area_code": "area_code2"
                },
                "mobile_phone": {
                  "country_code": "country_code8",
                  "number": "number4",
                  "area_code": "area_code8"
                }
              },
              "fb_id": 244,
              "code": "code8",
              "document_type": "document_type8"
            },
            "card": {
              "id": "id6",
              "last_four_digits": "last_four_digits2",
              "brand": "brand0",
              "holder_name": "holder_name2",
              "exp_month": 158,
              "exp_year": 138,
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
                  "line_1": "line_14",
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
                "fb_id": 126,
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
              {}
            ],
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
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 104,
            "minimum_price": 246,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id1",
                "value": 73.53,
                "discount_type": "discount_type9",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 209,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id2",
                "value": 73.54,
                "discount_type": "discount_type0",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 210,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id3",
                "value": 73.55,
                "discount_type": "discount_type1",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 211,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {}
            ],
            "boleto_due_days": 124,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type0",
                  "amount": 172,
                  "recipient": {
                    "id": "id8",
                    "name": "name8",
                    "email": "email8",
                    "document": "document8",
                    "description": "description2",
                    "type": "type2",
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
                      "type": "type4",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata3"
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
                      "key0": "metadata5"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type8",
                      "volume_percentage": 146,
                      "delay": 144,
                      "days": [
                        120,
                        121,
                        122
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval6",
                      "transfer_day": 56
                    },
                    "code": "code6",
                    "payment_mode": "payment_mode8"
                  },
                  "gateway_id": "gateway_id0",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee0"
                  },
                  "id": "id0"
                },
                {
                  "type": "type9",
                  "amount": 171,
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
                      "volume_percentage": 147,
                      "delay": 143,
                      "days": [
                        119,
                        120
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval7",
                      "transfer_day": 57
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
                "days": 90,
                "type": "type0",
                "amount": 164
              },
              "fine": {
                "days": 72,
                "type": "type2",
                "amount": 110
              },
              "max_days_to_pay_past_due": 188
            },
            "manual_billing": false
          },
          "subscription_item": {}
        }
      ],
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
          {},
          {}
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
            "subscription_item": {}
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
            "subscription_item": {}
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
            "subscription_item": {}
          }
        ],
        "increments": [
          {
            "id": "id0",
            "value": 58.82,
            "increment_type": "increment_type2",
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 238,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description0",
            "subscription": {},
            "subscription_item": {}
          }
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
      "name": "name5",
      "quantity": 235,
      "cycles": 255,
      "deleted_at": "2016-03-13T12:52:32.123Z"
    },
    {
      "id": "id6",
      "description": "description6",
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "pricing_scheme": {
        "price": 30,
        "scheme_type": "scheme_type8",
        "price_brackets": [
          {
            "start_quantity": 179,
            "price": 117,
            "end_quantity": 187,
            "overage_price": 201
          }
        ],
        "minimum_price": 66,
        "percentage": 162.76
      },
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
          "subscription": {
            "id": "id3",
            "code": "code1",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval1",
            "interval_count": 33,
            "billing_type": "billing_type7",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id1",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status3",
              "duration": 17,
              "created_at": "created_at9",
              "updated_at": "updated_at7",
              "cycle": 213
            },
            "payment_method": "payment_method3",
            "currency": "currency3",
            "installments": 201,
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id3",
              "name": "name3",
              "email": "email7",
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
                "key0": "metadata6"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code5",
                  "number": "number3",
                  "area_code": "area_code5"
                },
                "mobile_phone": {
                  "country_code": "country_code5",
                  "number": "number3",
                  "area_code": "area_code5"
                }
              },
              "fb_id": 193,
              "code": "code1",
              "document_type": "document_type1"
            },
            "card": {
              "id": "id7",
              "last_four_digits": "last_four_digits3",
              "brand": "brand1",
              "holder_name": "holder_name3",
              "exp_month": 95,
              "exp_year": 135,
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street9",
                "number": "number7",
                "zip_code": "zip_code3",
                "neighborhood": "neighborhood5",
                "city": "city9",
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
                "document": "document1",
                "type": "type7",
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
                    "key0": "metadata6",
                    "key1": "metadata5"
                  },
                  "line_1": "line_17",
                  "line_2": "line_21",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata3",
                  "key2": "metadata2"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number7",
                    "area_code": "area_code9"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 123,
                "code": "code5",
                "document_type": "document_type5"
              },
              "metadata": {
                "key0": "metadata4"
              },
              "type": "type7",
              "holder_document": "holder_document1",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits7",
              "label": "label7"
            },
            "items": [
              {},
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor3",
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5",
              "key2": "metadata4"
            },
            "setup": {
              "id": "id7",
              "description": "description7",
              "amount": 225,
              "status": "status9"
            },
            "gateway_affiliation_id": "gateway_affiliation_id9",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 173,
            "minimum_price": 31,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id2",
                "value": 202.94,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 162,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id3",
                "value": 202.95,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 161,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 145,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type3",
                  "amount": 105,
                  "recipient": {
                    "id": "id5",
                    "name": "name5",
                    "email": "email9",
                    "document": "document9",
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
                        "key0": "metadata4"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata4"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type9",
                      "volume_percentage": 223,
                      "delay": 1,
                      "days": [
                        233,
                        234,
                        235
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval1",
                      "transfer_day": 93
                    },
                    "code": "code3",
                    "payment_mode": "payment_mode9"
                  },
                  "gateway_id": "gateway_id3",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee9"
                  },
                  "id": "id3"
                },
                {
                  "type": "type4",
                  "amount": 106,
                  "recipient": {
                    "id": "id6",
                    "name": "name6",
                    "email": "email0",
                    "document": "document0",
                    "description": "description6",
                    "type": "type6",
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
                        "key1": "metadata6"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata3",
                      "key1": "metadata2"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type0",
                      "volume_percentage": 224,
                      "delay": 2,
                      "days": [
                        234
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval2",
                      "transfer_day": 94
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
                  "amount": 107,
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
                      "volume_percentage": 225,
                      "delay": 3,
                      "days": [
                        235,
                        236
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval3",
                      "transfer_day": 95
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
                "days": 71,
                "type": "type7",
                "amount": 145
              },
              "fine": {
                "days": 89,
                "type": "type5",
                "amount": 163
              },
              "max_days_to_pay_past_due": 77
            },
            "manual_billing": true
          },
          "subscription_item": {}
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
          "subscription": {
            "id": "id9",
            "code": "code7",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval3",
            "interval_count": 11,
            "billing_type": "billing_type7",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id7",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status1",
              "duration": 251,
              "created_at": "created_at5",
              "updated_at": "updated_at3",
              "cycle": 191
            },
            "payment_method": "payment_method1",
            "currency": "currency1",
            "installments": 179,
            "status": "status9",
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
                  "key1": "metadata3",
                  "key2": "metadata2"
                },
                "line_1": "line_19",
                "line_2": "line_25",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3",
                "key2": "metadata4"
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
              "fb_id": 245,
              "code": "code9",
              "document_type": "document_type9"
            },
            "card": {
              "id": "id7",
              "last_four_digits": "last_four_digits3",
              "brand": "brand1",
              "holder_name": "holder_name3",
              "exp_month": 157,
              "exp_year": 139,
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
                  "line_1": "line_13",
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
                "fb_id": 127,
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
            "statement_descriptor": "statement_descriptor9",
            "metadata": {
              "key0": "metadata4"
            },
            "setup": {
              "id": "id3",
              "description": "description7",
              "amount": 53,
              "status": "status5"
            },
            "gateway_affiliation_id": "gateway_affiliation_id5",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 105,
            "minimum_price": 247,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id0",
                "value": 73.52,
                "discount_type": "discount_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 208,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 73.53,
                "discount_type": "discount_type9",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 209,
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
            "boleto_due_days": 123,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type1",
                  "amount": 173,
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
                      "volume_percentage": 145,
                      "delay": 145,
                      "days": [
                        121
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval5",
                      "transfer_day": 55
                    },
                    "code": "code7",
                    "payment_mode": "payment_mode7"
                  },
                  "gateway_id": "gateway_id1",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee1"
                  },
                  "id": "id9"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 89,
                "type": "type9",
                "amount": 163
              },
              "fine": {
                "days": 71,
                "type": "type3",
                "amount": 111
              },
              "max_days_to_pay_past_due": 189
            },
            "manual_billing": true
          },
          "subscription_item": {}
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
          "subscription": {
            "id": "id8",
            "code": "code6",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval4",
            "interval_count": 10,
            "billing_type": "billing_type8",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id6",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status2",
              "duration": 250,
              "created_at": "created_at4",
              "updated_at": "updated_at2",
              "cycle": 190
            },
            "payment_method": "payment_method2",
            "currency": "currency2",
            "installments": 178,
            "status": "status0",
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
                  "key0": "metadata5",
                  "key1": "metadata4"
                },
                "line_1": "line_18",
                "line_2": "line_26",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata1",
                "key1": "metadata2"
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
              "fb_id": 246,
              "code": "code0",
              "document_type": "document_type0"
            },
            "card": {
              "id": "id8",
              "last_four_digits": "last_four_digits4",
              "brand": "brand2",
              "holder_name": "holder_name4",
              "exp_month": 156,
              "exp_year": 140,
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
                    "key0": "metadata1"
                  },
                  "line_1": "line_12",
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
                "fb_id": 128,
                "code": "code6",
                "document_type": "document_type6"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6"
              },
              "type": "type2",
              "holder_document": "holder_document8",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits8",
              "label": "label8"
            },
            "items": [
              {},
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor8",
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata6"
            },
            "setup": {
              "id": "id2",
              "description": "description8",
              "amount": 54,
              "status": "status6"
            },
            "gateway_affiliation_id": "gateway_affiliation_id4",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 106,
            "minimum_price": 248,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id9",
                "value": 73.51,
                "discount_type": "discount_type7",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 207,
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
            "boleto_due_days": 122,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type2",
                  "amount": 174,
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
                      "volume_percentage": 144,
                      "delay": 146,
                      "days": [
                        122,
                        123
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval4",
                      "transfer_day": 54
                    },
                    "code": "code8",
                    "payment_mode": "payment_mode6"
                  },
                  "gateway_id": "gateway_id2",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee2"
                  },
                  "id": "id8"
                },
                {
                  "type": "type1",
                  "amount": 173,
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
                      "volume_percentage": 145,
                      "delay": 145,
                      "days": [
                        121
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval5",
                      "transfer_day": 55
                    },
                    "code": "code7",
                    "payment_mode": "payment_mode7"
                  },
                  "gateway_id": "gateway_id1",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee1"
                  },
                  "id": "id9"
                },
                {
                  "type": "type0",
                  "amount": 172,
                  "recipient": {
                    "id": "id8",
                    "name": "name8",
                    "email": "email8",
                    "document": "document8",
                    "description": "description2",
                    "type": "type2",
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
                      "type": "type4",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata3"
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
                      "key0": "metadata5"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type8",
                      "volume_percentage": 146,
                      "delay": 144,
                      "days": [
                        120,
                        121,
                        122
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval6",
                      "transfer_day": 56
                    },
                    "code": "code6",
                    "payment_mode": "payment_mode8"
                  },
                  "gateway_id": "gateway_id0",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee0"
                  },
                  "id": "id0"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 88,
                "type": "type8",
                "amount": 162
              },
              "fine": {
                "days": 70,
                "type": "type4",
                "amount": 112
              },
              "max_days_to_pay_past_due": 190
            },
            "manual_billing": false
          },
          "subscription_item": {}
        }
      ],
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
          {},
          {},
          {}
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
            "subscription_item": {}
          }
        ],
        "increments": [
          {
            "id": "id9",
            "value": 58.81,
            "increment_type": "increment_type1",
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 239,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description1",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id8",
            "value": 58.8,
            "increment_type": "increment_type0",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 240,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {},
            "subscription_item": {}
          }
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
      "name": "name6",
      "quantity": 236,
      "cycles": 0,
      "deleted_at": "2016-03-13T12:52:32.123Z"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

