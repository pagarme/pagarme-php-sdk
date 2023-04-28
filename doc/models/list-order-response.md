
# List Order Response

Response object for listing order objects

## Structure

`ListOrderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetOrderResponse[])`](../../doc/models/get-order-response.md) | Optional | The order object | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "currency": "currency5",
      "items": [
        {
          "id": "id2",
          "amount": 180,
          "description": "description2",
          "quantity": 38,
          "category": "category0",
          "code": "code0"
        },
        {
          "id": "id3",
          "amount": 181,
          "description": "description3",
          "quantity": 39,
          "category": "category1",
          "code": "code1"
        }
      ],
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
      "status": "status7",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "charges": [
        {
          "id": "id1",
          "code": "code9",
          "gateway_id": "gateway_id1",
          "amount": 113,
          "status": "status3",
          "currency": "currency1",
          "payment_method": "payment_method1",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": {
            "gateway_id": "gateway_id3",
            "amount": 171,
            "status": "status5",
            "success": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "attempt_count": 147,
            "max_attempts": 135,
            "splits": [
              {
                "type": "type5",
                "amount": 103,
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
                      "key0": "metadata6"
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
                    "key0": "metadata2"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 221,
                    "delay": 255,
                    "days": [
                      231,
                      232,
                      233
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval3",
                    "transfer_day": 91
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
                "amount": 104,
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
                      "key0": "metadata7",
                      "key1": "metadata8"
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
                    "key0": "metadata1",
                    "key1": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type2",
                    "volume_percentage": 222,
                    "delay": 0,
                    "days": [
                      232
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval4",
                    "transfer_day": 92
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
            ],
            "next_attempt": "2016-03-13T12:52:32.123Z",
            "transaction_type": "transaction",
            "id": "id3",
            "gateway_response": {
              "code": "code3",
              "errors": [
                {
                  "message": "message0"
                },
                {
                  "message": "message1"
                }
              ]
            },
            "antifraud_response": {
              "status": "status3",
              "return_code": "return_code1",
              "return_message": "return_message9",
              "provider_name": "provider_name9",
              "score": "score1"
            },
            "metadata": {
              "key0": "metadata4"
            },
            "split": [
              {
                "type": "type1",
                "amount": 117,
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
                      "key0": "metadata2"
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
                    }
                  ],
                  "metadata": {
                    "key0": "metadata4"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type7",
                    "volume_percentage": 235,
                    "delay": 13,
                    "days": [
                      245,
                      246,
                      247
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 105
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
            ],
            "interest": {
              "days": 77,
              "type": "type3",
              "amount": 151
            },
            "fine": {
              "days": 95,
              "type": "type5",
              "amount": 169
            },
            "max_days_to_pay_past_due": 83
          },
          "invoice": {
            "id": "id5",
            "code": "code3",
            "url": "url9",
            "amount": 59,
            "status": "status7",
            "payment_method": "payment_method5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "items": [
              {
                "amount": 118,
                "description": "description2",
                "pricing_scheme": {
                  "price": 34,
                  "scheme_type": "scheme_type4",
                  "price_brackets": [
                    {
                      "start_quantity": 175,
                      "price": 113,
                      "end_quantity": 183,
                      "overage_price": 197
                    },
                    {
                      "start_quantity": 176,
                      "price": 114,
                      "end_quantity": 184,
                      "overage_price": 198
                    },
                    {
                      "start_quantity": 177,
                      "price": 115,
                      "end_quantity": 185,
                      "overage_price": 199
                    }
                  ],
                  "minimum_price": 62,
                  "percentage": 162.72
                },
                "price_bracket": {
                  "start_quantity": 92,
                  "price": 30,
                  "end_quantity": 100,
                  "overage_price": 114
                },
                "quantity": 232,
                "name": "name2",
                "subscription_item_id": "subscription_item_id6"
              },
              {
                "amount": 119,
                "description": "description3",
                "pricing_scheme": {
                  "price": 33,
                  "scheme_type": "scheme_type5",
                  "price_brackets": [
                    {
                      "start_quantity": 176,
                      "price": 114,
                      "end_quantity": 184,
                      "overage_price": 198
                    }
                  ],
                  "minimum_price": 63,
                  "percentage": 162.73
                },
                "price_bracket": {
                  "start_quantity": 93,
                  "price": 31,
                  "end_quantity": 101,
                  "overage_price": 115
                },
                "quantity": 233,
                "name": "name3",
                "subscription_item_id": "subscription_item_id7"
              }
            ],
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
                  "key0": "metadata2",
                  "key1": "metadata3",
                  "key2": "metadata4"
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
              "fb_id": 91,
              "code": "code3",
              "document_type": "document_type3"
            },
            "charge": {},
            "installments": 99,
            "billing_address": {
              "street": "street7",
              "number": "number5",
              "zip_code": "zip_code1",
              "neighborhood": "neighborhood3",
              "city": "city7",
              "state": "state3",
              "country": "country1",
              "complement": "complement3",
              "line_1": "line_11",
              "line_2": "line_25"
            },
            "subscription": {
              "id": "id1",
              "code": "code9",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval1",
              "interval_count": 35,
              "billing_type": "billing_type5",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id9",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status1",
                "duration": 19,
                "created_at": "created_at7",
                "updated_at": "updated_at5",
                "cycle": 215
              },
              "payment_method": "payment_method9",
              "currency": "currency1",
              "installments": 203,
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
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
                  "line_1": "line_11",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number1",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 221,
                "code": "code7",
                "document_type": "document_type7"
              },
              "card": {
                "id": "id5",
                "last_four_digits": "last_four_digits1",
                "brand": "brand9",
                "holder_name": "holder_name1",
                "exp_month": 181,
                "exp_year": 115,
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
                      "key1": "metadata7",
                      "key2": "metadata6"
                    },
                    "line_1": "line_15",
                    "line_2": "line_29",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata9",
                    "key2": "metadata0"
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
                  "fb_id": 103,
                  "code": "code3",
                  "document_type": "document_type3"
                },
                "metadata": {
                  "key0": "metadata8"
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
                    "price": 102,
                    "scheme_type": "scheme_type0",
                    "price_brackets": [
                      {
                        "start_quantity": 107,
                        "price": 211,
                        "end_quantity": 115,
                        "overage_price": 129
                      },
                      {
                        "start_quantity": 108,
                        "price": 210,
                        "end_quantity": 116,
                        "overage_price": 130
                      },
                      {
                        "start_quantity": 109,
                        "price": 209,
                        "end_quantity": 117,
                        "overage_price": 131
                      }
                    ],
                    "minimum_price": 6,
                    "percentage": 185.08
                  },
                  "discounts": [
                    {
                      "id": "id9",
                      "value": 76.91,
                      "discount_type": "discount_type7",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 35,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id0",
                      "value": 76.92,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 36,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id1",
                      "value": 76.93,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 37,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {
                      "id": "id3",
                      "value": 58.85,
                      "increment_type": "increment_type5",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 235,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description7",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name8",
                  "quantity": 80,
                  "cycles": 156,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                {
                  "id": "id9",
                  "description": "description9",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 103,
                    "scheme_type": "scheme_type9",
                    "price_brackets": [
                      {
                        "start_quantity": 106,
                        "price": 212,
                        "end_quantity": 114,
                        "overage_price": 128
                      },
                      {
                        "start_quantity": 107,
                        "price": 211,
                        "end_quantity": 115,
                        "overage_price": 129
                      }
                    ],
                    "minimum_price": 7,
                    "percentage": 185.07
                  },
                  "discounts": [
                    {
                      "id": "id0",
                      "value": 76.92,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 36,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {
                      "id": "id2",
                      "value": 58.84,
                      "increment_type": "increment_type4",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 236,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description8",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id1",
                      "value": 58.83,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 237,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name9",
                  "quantity": 81,
                  "cycles": 155,
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
                "amount": 227,
                "status": "status3"
              },
              "gateway_affiliation_id": "gateway_affiliation_id7",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 81,
              "minimum_price": 223,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id2",
                  "value": 107.04,
                  "discount_type": "discount_type0",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 232,
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
                      "price": 66,
                      "scheme_type": "scheme_type0",
                      "price_brackets": [
                        {
                          "start_quantity": 143,
                          "price": 175,
                          "end_quantity": 151,
                          "overage_price": 165
                        },
                        {
                          "start_quantity": 144,
                          "price": 174,
                          "end_quantity": 152,
                          "overage_price": 166
                        }
                      ],
                      "minimum_price": 226,
                      "percentage": 144.48
                    },
                    "discounts": [
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id7",
                        "value": 253.39,
                        "increment_type": "increment_type9",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 237,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description7",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id8",
                        "value": 253.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 236,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id9",
                        "value": 253.41,
                        "increment_type": "increment_type1",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 235,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name8",
                    "quantity": 200,
                    "cycles": 220,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id3",
                  "value": 107.05,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 233,
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
                      "price": 65,
                      "scheme_type": "scheme_type1",
                      "price_brackets": [
                        {
                          "start_quantity": 144,
                          "price": 174,
                          "end_quantity": 152,
                          "overage_price": 166
                        },
                        {
                          "start_quantity": 145,
                          "price": 173,
                          "end_quantity": 153,
                          "overage_price": 167
                        },
                        {
                          "start_quantity": 146,
                          "price": 172,
                          "end_quantity": 154,
                          "overage_price": 168
                        }
                      ],
                      "minimum_price": 225,
                      "percentage": 144.49
                    },
                    "discounts": [
                      {},
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id8",
                        "value": 253.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 236,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name9",
                    "quantity": 201,
                    "cycles": 221,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id4",
                  "value": 107.06,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 234,
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
                      "price": 64,
                      "scheme_type": "scheme_type2",
                      "price_brackets": [
                        {
                          "start_quantity": 145,
                          "price": 173,
                          "end_quantity": 153,
                          "overage_price": 167
                        }
                      ],
                      "minimum_price": 224,
                      "percentage": 144.5
                    },
                    "discounts": [
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id9",
                        "value": 253.41,
                        "increment_type": "increment_type1",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 235,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id0",
                        "value": 253.42,
                        "increment_type": "increment_type2",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 234,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name0",
                    "quantity": 202,
                    "cycles": 222,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "increments": [
                {
                  "id": "id6",
                  "value": 27.38,
                  "increment_type": "increment_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 54,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id2",
                    "description": "description8",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 192,
                      "scheme_type": "scheme_type6",
                      "price_brackets": [
                        {
                          "start_quantity": 17,
                          "price": 211,
                          "end_quantity": 25,
                          "overage_price": 39
                        }
                      ],
                      "minimum_price": 160,
                      "percentage": 199.54
                    },
                    "discounts": [
                      {
                        "id": "id3",
                        "value": 62.45,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 125,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description3",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id4",
                        "value": 62.46,
                        "discount_type": "discount_type2",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 126,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description4",
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
                    "quantity": 170,
                    "cycles": 66,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "boleto_due_days": 147,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type9",
                    "amount": 149,
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
                          "key0": "metadata2"
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
                        }
                      ],
                      "metadata": {
                        "key0": "metadata6"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type9",
                        "volume_percentage": 169,
                        "delay": 121,
                        "days": [
                          97,
                          98,
                          99
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 79
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
                  },
                  {
                    "type": "type8",
                    "amount": 148,
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
                        "volume_percentage": 170,
                        "delay": 120,
                        "days": [
                          96,
                          97
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 80
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
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 113,
                  "type": "type1",
                  "amount": 187
                },
                "fine": {
                  "days": 95,
                  "type": "type1",
                  "amount": 169
                },
                "max_days_to_pay_past_due": 165
              },
              "manual_billing": true
            },
            "cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id5",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {
                "id": "id1",
                "code": "code9",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval9",
                "interval_count": 87,
                "billing_type": "billing_type5",
                "current_cycle": {},
                "payment_method": "payment_method1",
                "currency": "currency1",
                "installments": 255,
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
                      "key0": "metadata2"
                    },
                    "line_1": "line_11",
                    "line_2": "line_25",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata8"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code3",
                      "number": "number1",
                      "area_code": "area_code3"
                    },
                    "mobile_phone": {
                      "country_code": "country_code7",
                      "number": "number9",
                      "area_code": "area_code3"
                    }
                  },
                  "fb_id": 247,
                  "code": "code9",
                  "document_type": "document_type9"
                },
                "card": {
                  "id": "id5",
                  "last_four_digits": "last_four_digits1",
                  "brand": "brand9",
                  "holder_name": "holder_name1",
                  "exp_month": 107,
                  "exp_year": 189,
                  "status": "status3",
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
                        "key1": "metadata7",
                        "key2": "metadata6"
                      },
                      "line_1": "line_15",
                      "line_2": "line_29",
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    },
                    "metadata": {
                      "key0": "metadata8",
                      "key1": "metadata9",
                      "key2": "metadata0"
                    },
                    "phones": {
                      "home_phone": {
                        "country_code": "country_code7",
                        "number": "number5",
                        "area_code": "area_code7"
                      },
                      "mobile_phone": {
                        "country_code": "country_code3",
                        "number": "number9",
                        "area_code": "area_code3"
                      }
                    },
                    "fb_id": 177,
                    "code": "code3",
                    "document_type": "document_type3"
                  },
                  "metadata": {
                    "key0": "metadata8"
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
                      "price": 134,
                      "scheme_type": "scheme_type0",
                      "price_brackets": [
                        {
                          "start_quantity": 75,
                          "price": 243,
                          "end_quantity": 83,
                          "overage_price": 97
                        }
                      ],
                      "minimum_price": 38,
                      "percentage": 215.48
                    },
                    "discounts": [
                      {
                        "id": "id9",
                        "value": 213.11,
                        "discount_type": "discount_type7",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 87,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {
                        "id": "id7",
                        "value": 68.39,
                        "increment_type": "increment_type9",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 49,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description7",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id8",
                        "value": 68.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 48,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name8",
                    "quantity": 132,
                    "cycles": 152,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  {
                    "id": "id9",
                    "description": "description9",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 133,
                      "scheme_type": "scheme_type1",
                      "price_brackets": [
                        {
                          "start_quantity": 76,
                          "price": 242,
                          "end_quantity": 84,
                          "overage_price": 98
                        },
                        {
                          "start_quantity": 77,
                          "price": 241,
                          "end_quantity": 85,
                          "overage_price": 99
                        }
                      ],
                      "minimum_price": 37,
                      "percentage": 215.49
                    },
                    "discounts": [
                      {
                        "id": "id0",
                        "value": 213.12,
                        "discount_type": "discount_type8",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 88,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id1",
                        "value": 213.13,
                        "discount_type": "discount_type9",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 89,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {
                        "id": "id8",
                        "value": 68.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 48,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id9",
                        "value": 68.41,
                        "increment_type": "increment_type1",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 47,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id0",
                        "value": 68.42,
                        "increment_type": "increment_type2",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 46,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name9",
                    "quantity": 133,
                    "cycles": 153,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  {
                    "id": "id0",
                    "description": "description0",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 132,
                      "scheme_type": "scheme_type2",
                      "price_brackets": [
                        {
                          "start_quantity": 77,
                          "price": 241,
                          "end_quantity": 85,
                          "overage_price": 99
                        },
                        {
                          "start_quantity": 78,
                          "price": 240,
                          "end_quantity": 86,
                          "overage_price": 100
                        },
                        {
                          "start_quantity": 79,
                          "price": 239,
                          "end_quantity": 87,
                          "overage_price": 101
                        }
                      ],
                      "minimum_price": 36,
                      "percentage": 215.5
                    },
                    "discounts": [
                      {
                        "id": "id1",
                        "value": 213.13,
                        "discount_type": "discount_type9",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 89,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id2",
                        "value": 213.14,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 90,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description2",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id3",
                        "value": 213.15,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 91,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description3",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {
                        "id": "id9",
                        "value": 68.41,
                        "increment_type": "increment_type1",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 47,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name0",
                    "quantity": 134,
                    "cycles": 154,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                ],
                "statement_descriptor": "statement_descriptor1",
                "metadata": {
                  "key0": "metadata8",
                  "key1": "metadata7"
                },
                "setup": {
                  "id": "id5",
                  "description": "description5",
                  "amount": 23,
                  "status": "status7"
                },
                "gateway_affiliation_id": "gateway_affiliation_id7",
                "next_billing_at": "2016-03-13T12:52:32.123Z",
                "billing_day": 227,
                "minimum_price": 85,
                "canceled_at": "2016-03-13T12:52:32.123Z",
                "discounts": [
                  {
                    "id": "id2",
                    "value": 243.24,
                    "discount_type": "discount_type0",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 28,
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
                        "price": 242,
                        "scheme_type": "scheme_type0",
                        "price_brackets": [
                          {
                            "start_quantity": 195,
                            "price": 133,
                            "end_quantity": 203,
                            "overage_price": 217
                          },
                          {
                            "start_quantity": 196,
                            "price": 134,
                            "end_quantity": 204,
                            "overage_price": 218
                          },
                          {
                            "start_quantity": 197,
                            "price": 135,
                            "end_quantity": 205,
                            "overage_price": 219
                          }
                        ],
                        "minimum_price": 82,
                        "percentage": 24.68
                      },
                      "discounts": [
                        {},
                        {},
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id7",
                          "value": 133.59,
                          "increment_type": "increment_type9",
                          "status": "status9",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 71,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description7",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name8",
                      "quantity": 252,
                      "cycles": 16,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "increments": [
                  {
                    "id": "id0",
                    "value": 98.52,
                    "increment_type": "increment_type2",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 108,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id6",
                      "description": "description4",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 138,
                        "scheme_type": "scheme_type2",
                        "price_brackets": [
                          {
                            "start_quantity": 71,
                            "price": 9,
                            "end_quantity": 79,
                            "overage_price": 93
                          },
                          {
                            "start_quantity": 72,
                            "price": 10,
                            "end_quantity": 80,
                            "overage_price": 94
                          },
                          {
                            "start_quantity": 73,
                            "price": 11,
                            "end_quantity": 81,
                            "overage_price": 95
                          }
                        ],
                        "minimum_price": 42,
                        "percentage": 128.4
                      },
                      "discounts": [
                        {
                          "id": "id7",
                          "value": 133.59,
                          "discount_type": "discount_type5",
                          "status": "status9",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 71,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description7",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id8",
                          "value": 133.6,
                          "discount_type": "discount_type6",
                          "status": "status0",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 72,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description8",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id9",
                          "value": 133.61,
                          "discount_type": "discount_type7",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "increments": [
                        {}
                      ],
                      "subscription": {},
                      "name": "name6",
                      "quantity": 116,
                      "cycles": 120,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id1",
                    "value": 98.53,
                    "increment_type": "increment_type3",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 107,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id7",
                      "description": "description3",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 139,
                        "scheme_type": "scheme_type1",
                        "price_brackets": [
                          {
                            "start_quantity": 70,
                            "price": 8,
                            "end_quantity": 78,
                            "overage_price": 92
                          },
                          {
                            "start_quantity": 71,
                            "price": 9,
                            "end_quantity": 79,
                            "overage_price": 93
                          }
                        ],
                        "minimum_price": 43,
                        "percentage": 128.39
                      },
                      "discounts": [
                        {
                          "id": "id8",
                          "value": 133.6,
                          "discount_type": "discount_type6",
                          "status": "status0",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 72,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description8",
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
                      "name": "name7",
                      "quantity": 117,
                      "cycles": 119,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "boleto_due_days": 199,
                "split": {
                  "enabled": true,
                  "rules": [
                    {
                      "type": "type9",
                      "amount": 159,
                      "recipient": {
                        "id": "id3",
                        "name": "name3",
                        "email": "email3",
                        "document": "document3",
                        "description": "description3",
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
                          "type": "type1",
                          "status": "status3",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "updated_at": "2016-03-13T12:52:32.123Z",
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "recipient": {},
                          "metadata": {
                            "key0": "metadata8"
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
                          }
                        ],
                        "metadata": {
                          "key0": "metadata0"
                        },
                        "automatic_anticipation_settings": {
                          "enabled": true,
                          "type": "type3",
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
                          "transfer_interval": "transfer_interval1",
                          "transfer_day": 145
                        },
                        "code": "code1",
                        "payment_mode": "payment_mode7"
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
                      "amount": 160,
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
                            "key0": "metadata9",
                            "key1": "metadata8",
                            "key2": "metadata7"
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
                          }
                        ],
                        "metadata": {
                          "key0": "metadata9",
                          "key1": "metadata0",
                          "key2": "metadata1"
                        },
                        "automatic_anticipation_settings": {
                          "enabled": false,
                          "type": "type2",
                          "volume_percentage": 234,
                          "delay": 56,
                          "days": [
                            32
                          ]
                        },
                        "transfer_settings": {
                          "transfer_enabled": false,
                          "transfer_interval": "transfer_interval0",
                          "transfer_day": 144
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
                      "amount": 161,
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
                            "key1": "metadata9"
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
                          "key0": "metadata8",
                          "key1": "metadata9"
                        },
                        "automatic_anticipation_settings": {
                          "enabled": true,
                          "type": "type1",
                          "volume_percentage": 233,
                          "delay": 57,
                          "days": [
                            33,
                            34
                          ]
                        },
                        "transfer_settings": {
                          "transfer_enabled": true,
                          "transfer_interval": "transfer_interval9",
                          "transfer_day": 143
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
                    "days": 147,
                    "type": "type1",
                    "amount": 221
                  },
                  "fine": {
                    "days": 143,
                    "type": "type7",
                    "amount": 217
                  },
                  "max_days_to_pay_past_due": 131
                },
                "manual_billing": true
              },
              "status": "status7",
              "duration": 13,
              "created_at": "created_at3",
              "updated_at": "updated_at1",
              "cycle": 209
            },
            "shipping": {
              "amount": 157,
              "description": "description9",
              "recipient_name": "recipient_name7",
              "recipient_phone": "recipient_phone1",
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
                  "address": {},
                  "metadata": {
                    "key0": "metadata6",
                    "key1": "metadata7"
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
                  "fb_id": 205,
                  "code": "code3",
                  "document_type": "document_type3"
                },
                "metadata": {
                  "key0": "metadata6"
                },
                "line_1": "line_19",
                "line_2": "line_23",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "max_delivery_date": "2016-03-13T12:52:32.123Z",
              "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
              "type": "type9"
            },
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata3"
            },
            "due_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "seen_at": "2016-03-13T12:52:32.123Z",
            "total_discount": 167,
            "total_increment": 239,
            "subscription_id": "subscription_id5"
          },
          "order": {},
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
                "key1": "metadata9",
                "key2": "metadata0"
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
                "number": "number9",
                "area_code": "area_code3"
              }
            },
            "fb_id": 145,
            "code": "code9",
            "document_type": "document_type9"
          },
          "metadata": {
            "key0": "metadata8",
            "key1": "metadata7"
          },
          "paid_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "canceled_amount": 223,
          "paid_amount": 205,
          "interest_and_fine_paid": 209,
          "recurrency_cycle": "recurrency_cycle5"
        },
        {
          "id": "id2",
          "code": "code0",
          "gateway_id": "gateway_id2",
          "amount": 114,
          "status": "status4",
          "currency": "currency2",
          "payment_method": "payment_method2",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": {
            "gateway_id": "gateway_id4",
            "amount": 172,
            "status": "status6",
            "success": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "attempt_count": 148,
            "max_attempts": 136,
            "splits": [
              {
                "type": "type6",
                "amount": 104,
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
                      "key0": "metadata7",
                      "key1": "metadata8"
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
                    "key0": "metadata1",
                    "key1": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type2",
                    "volume_percentage": 222,
                    "delay": 0,
                    "days": [
                      232
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval4",
                    "transfer_day": 92
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
                "amount": 105,
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
                      "key1": "metadata9",
                      "key2": "metadata0"
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
                    "key0": "metadata0",
                    "key1": "metadata9",
                    "key2": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type3",
                    "volume_percentage": 223,
                    "delay": 1,
                    "days": [
                      233,
                      234
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval5",
                    "transfer_day": 93
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
                "amount": 106,
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
                      "key0": "metadata9"
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
                    "key0": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type4",
                    "volume_percentage": 224,
                    "delay": 2,
                    "days": [
                      234,
                      235,
                      236
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval6",
                    "transfer_day": 94
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
            ],
            "next_attempt": "2016-03-13T12:52:32.123Z",
            "transaction_type": "transaction",
            "id": "id4",
            "gateway_response": {
              "code": "code4",
              "errors": [
                {
                  "message": "message1"
                },
                {
                  "message": "message2"
                },
                {
                  "message": "message3"
                }
              ]
            },
            "antifraud_response": {
              "status": "status4",
              "return_code": "return_code2",
              "return_message": "return_message0",
              "provider_name": "provider_name0",
              "score": "score2"
            },
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata6"
            },
            "split": [
              {
                "type": "type2",
                "amount": 118,
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
                      "key1": "metadata4"
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
                    }
                  ],
                  "metadata": {
                    "key0": "metadata5",
                    "key1": "metadata6"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type8",
                    "volume_percentage": 236,
                    "delay": 14,
                    "days": [
                      246
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 106
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
                "amount": 119,
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
                      "key0": "metadata4",
                      "key1": "metadata5",
                      "key2": "metadata6"
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
                    "key0": "metadata6",
                    "key1": "metadata7",
                    "key2": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type9",
                    "volume_percentage": 237,
                    "delay": 15,
                    "days": [
                      247,
                      248
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval1",
                    "transfer_day": 107
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
            ],
            "interest": {
              "days": 78,
              "type": "type4",
              "amount": 152
            },
            "fine": {
              "days": 96,
              "type": "type6",
              "amount": 170
            },
            "max_days_to_pay_past_due": 84
          },
          "invoice": {
            "id": "id6",
            "code": "code4",
            "url": "url0",
            "amount": 60,
            "status": "status8",
            "payment_method": "payment_method6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "items": [
              {
                "amount": 119,
                "description": "description3",
                "pricing_scheme": {
                  "price": 33,
                  "scheme_type": "scheme_type5",
                  "price_brackets": [
                    {
                      "start_quantity": 176,
                      "price": 114,
                      "end_quantity": 184,
                      "overage_price": 198
                    }
                  ],
                  "minimum_price": 63,
                  "percentage": 162.73
                },
                "price_bracket": {
                  "start_quantity": 93,
                  "price": 31,
                  "end_quantity": 101,
                  "overage_price": 115
                },
                "quantity": 233,
                "name": "name3",
                "subscription_item_id": "subscription_item_id7"
              },
              {
                "amount": 120,
                "description": "description4",
                "pricing_scheme": {
                  "price": 32,
                  "scheme_type": "scheme_type6",
                  "price_brackets": [
                    {
                      "start_quantity": 177,
                      "price": 115,
                      "end_quantity": 185,
                      "overage_price": 199
                    },
                    {
                      "start_quantity": 178,
                      "price": 116,
                      "end_quantity": 186,
                      "overage_price": 200
                    }
                  ],
                  "minimum_price": 64,
                  "percentage": 162.74
                },
                "price_bracket": {
                  "start_quantity": 94,
                  "price": 32,
                  "end_quantity": 102,
                  "overage_price": 116
                },
                "quantity": 234,
                "name": "name4",
                "subscription_item_id": "subscription_item_id8"
              },
              {
                "amount": 121,
                "description": "description5",
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
                "price_bracket": {
                  "start_quantity": 95,
                  "price": 33,
                  "end_quantity": 103,
                  "overage_price": 117
                },
                "quantity": 235,
                "name": "name5",
                "subscription_item_id": "subscription_item_id9"
              }
            ],
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
                  "number": "number4",
                  "area_code": "area_code8"
                }
              },
              "fb_id": 92,
              "code": "code4",
              "document_type": "document_type4"
            },
            "charge": {},
            "installments": 100,
            "billing_address": {
              "street": "street8",
              "number": "number6",
              "zip_code": "zip_code2",
              "neighborhood": "neighborhood4",
              "city": "city8",
              "state": "state4",
              "country": "country2",
              "complement": "complement4",
              "line_1": "line_12",
              "line_2": "line_26"
            },
            "subscription": {
              "id": "id2",
              "code": "code0",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval0",
              "interval_count": 36,
              "billing_type": "billing_type4",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id0",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status2",
                "duration": 20,
                "created_at": "created_at8",
                "updated_at": "updated_at6",
                "cycle": 216
              },
              "payment_method": "payment_method8",
              "currency": "currency2",
              "installments": 204,
              "status": "status6",
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
                  "line_1": "line_12",
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
                "fb_id": 220,
                "code": "code6",
                "document_type": "document_type6"
              },
              "card": {
                "id": "id4",
                "last_four_digits": "last_four_digits0",
                "brand": "brand8",
                "holder_name": "holder_name0",
                "exp_month": 182,
                "exp_year": 114,
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
                  "fb_id": 102,
                  "code": "code2",
                  "document_type": "document_type2"
                },
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata0"
                },
                "type": "type6",
                "holder_document": "holder_document2",
                "deleted_at": "2016-03-13T12:52:32.123Z",
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
                    "price": 103,
                    "scheme_type": "scheme_type9",
                    "price_brackets": [
                      {
                        "start_quantity": 106,
                        "price": 212,
                        "end_quantity": 114,
                        "overage_price": 128
                      },
                      {
                        "start_quantity": 107,
                        "price": 211,
                        "end_quantity": 115,
                        "overage_price": 129
                      }
                    ],
                    "minimum_price": 7,
                    "percentage": 185.07
                  },
                  "discounts": [
                    {
                      "id": "id0",
                      "value": 76.92,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 36,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {
                      "id": "id2",
                      "value": 58.84,
                      "increment_type": "increment_type4",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 236,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description8",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id1",
                      "value": 58.83,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 237,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name9",
                  "quantity": 81,
                  "cycles": 155,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                {
                  "id": "id0",
                  "description": "description0",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 104,
                    "scheme_type": "scheme_type8",
                    "price_brackets": [
                      {
                        "start_quantity": 105,
                        "price": 213,
                        "end_quantity": 113,
                        "overage_price": 127
                      }
                    ],
                    "minimum_price": 8,
                    "percentage": 185.06
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 76.93,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 37,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    },
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
                    }
                  ],
                  "increments": [
                    {
                      "id": "id1",
                      "value": 58.83,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 237,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
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
                    },
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
                    }
                  ],
                  "subscription": {},
                  "name": "name0",
                  "quantity": 82,
                  "cycles": 154,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                {
                  "id": "id1",
                  "description": "description1",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 105,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 104,
                        "price": 214,
                        "end_quantity": 112,
                        "overage_price": 126
                      },
                      {
                        "start_quantity": 105,
                        "price": 213,
                        "end_quantity": 113,
                        "overage_price": 127
                      },
                      {
                        "start_quantity": 106,
                        "price": 212,
                        "end_quantity": 114,
                        "overage_price": 128
                      }
                    ],
                    "minimum_price": 9,
                    "percentage": 185.05
                  },
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
                  "subscription": {},
                  "name": "name1",
                  "quantity": 83,
                  "cycles": 153,
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
                "description": "description4",
                "amount": 228,
                "status": "status2"
              },
              "gateway_affiliation_id": "gateway_affiliation_id8",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 80,
              "minimum_price": 222,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id3",
                  "value": 107.05,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 233,
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
                      "price": 65,
                      "scheme_type": "scheme_type1",
                      "price_brackets": [
                        {
                          "start_quantity": 144,
                          "price": 174,
                          "end_quantity": 152,
                          "overage_price": 166
                        },
                        {
                          "start_quantity": 145,
                          "price": 173,
                          "end_quantity": 153,
                          "overage_price": 167
                        },
                        {
                          "start_quantity": 146,
                          "price": 172,
                          "end_quantity": 154,
                          "overage_price": 168
                        }
                      ],
                      "minimum_price": 225,
                      "percentage": 144.49
                    },
                    "discounts": [
                      {},
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id8",
                        "value": 253.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 236,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name9",
                    "quantity": 201,
                    "cycles": 221,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "increments": [
                {
                  "id": "id5",
                  "value": 27.37,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 55,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id1",
                    "description": "description9",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 191,
                      "scheme_type": "scheme_type7",
                      "price_brackets": [
                        {
                          "start_quantity": 18,
                          "price": 212,
                          "end_quantity": 26,
                          "overage_price": 40
                        },
                        {
                          "start_quantity": 19,
                          "price": 213,
                          "end_quantity": 27,
                          "overage_price": 41
                        }
                      ],
                      "minimum_price": 161,
                      "percentage": 199.55
                    },
                    "discounts": [
                      {
                        "id": "id2",
                        "value": 62.44,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 124,
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
                    "name": "name1",
                    "quantity": 169,
                    "cycles": 67,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id6",
                  "value": 27.38,
                  "increment_type": "increment_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 54,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id2",
                    "description": "description8",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 192,
                      "scheme_type": "scheme_type6",
                      "price_brackets": [
                        {
                          "start_quantity": 17,
                          "price": 211,
                          "end_quantity": 25,
                          "overage_price": 39
                        }
                      ],
                      "minimum_price": 160,
                      "percentage": 199.54
                    },
                    "discounts": [
                      {
                        "id": "id3",
                        "value": 62.45,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 125,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description3",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id4",
                        "value": 62.46,
                        "discount_type": "discount_type2",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 126,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description4",
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
                    "quantity": 170,
                    "cycles": 66,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id7",
                  "value": 27.39,
                  "increment_type": "increment_type9",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 53,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description3",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id3",
                    "description": "description7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 193,
                      "scheme_type": "scheme_type5",
                      "price_brackets": [
                        {
                          "start_quantity": 16,
                          "price": 210,
                          "end_quantity": 24,
                          "overage_price": 38
                        },
                        {
                          "start_quantity": 17,
                          "price": 211,
                          "end_quantity": 25,
                          "overage_price": 39
                        },
                        {
                          "start_quantity": 18,
                          "price": 212,
                          "end_quantity": 26,
                          "overage_price": 40
                        }
                      ],
                      "minimum_price": 159,
                      "percentage": 199.53
                    },
                    "discounts": [
                      {
                        "id": "id4",
                        "value": 62.46,
                        "discount_type": "discount_type2",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 126,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description4",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id5",
                        "value": 62.47,
                        "discount_type": "discount_type3",
                        "status": "status7",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 127,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description5",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id6",
                        "value": 62.48,
                        "discount_type": "discount_type4",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 128,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description6",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {}
                    ],
                    "subscription": {},
                    "name": "name3",
                    "quantity": 171,
                    "cycles": 65,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "boleto_due_days": 148,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type8",
                    "amount": 148,
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
                        "volume_percentage": 170,
                        "delay": 120,
                        "days": [
                          96,
                          97
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 80
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
                    "type": "type7",
                    "amount": 147,
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
                        "volume_percentage": 171,
                        "delay": 119,
                        "days": [
                          95
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval9",
                        "transfer_day": 81
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
                    "type": "type6",
                    "amount": 146,
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
                        "volume_percentage": 172,
                        "delay": 118,
                        "days": [
                          94,
                          95,
                          96
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval0",
                        "transfer_day": 82
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
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 114,
                  "type": "type2",
                  "amount": 188
                },
                "fine": {
                  "days": 96,
                  "type": "type0",
                  "amount": 170
                },
                "max_days_to_pay_past_due": 164
              },
              "manual_billing": false
            },
            "cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id6",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {
                "id": "id2",
                "code": "code0",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval0",
                "interval_count": 88,
                "billing_type": "billing_type6",
                "current_cycle": {},
                "payment_method": "payment_method2",
                "currency": "currency2",
                "installments": 0,
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
                      "key0": "metadata1",
                      "key1": "metadata0"
                    },
                    "line_1": "line_12",
                    "line_2": "line_26",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata8",
                    "key2": "metadata7"
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
                  "fb_id": 248,
                  "code": "code0",
                  "document_type": "document_type0"
                },
                "card": {
                  "id": "id6",
                  "last_four_digits": "last_four_digits2",
                  "brand": "brand0",
                  "holder_name": "holder_name2",
                  "exp_month": 106,
                  "exp_year": 190,
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
                        "key1": "metadata8"
                      },
                      "line_1": "line_16",
                      "line_2": "line_20",
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    },
                    "metadata": {
                      "key0": "metadata7",
                      "key1": "metadata8"
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
                    "fb_id": 178,
                    "code": "code4",
                    "document_type": "document_type4"
                  },
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8",
                    "key2": "metadata9"
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
                      "price": 133,
                      "scheme_type": "scheme_type1",
                      "price_brackets": [
                        {
                          "start_quantity": 76,
                          "price": 242,
                          "end_quantity": 84,
                          "overage_price": 98
                        },
                        {
                          "start_quantity": 77,
                          "price": 241,
                          "end_quantity": 85,
                          "overage_price": 99
                        }
                      ],
                      "minimum_price": 37,
                      "percentage": 215.49
                    },
                    "discounts": [
                      {
                        "id": "id0",
                        "value": 213.12,
                        "discount_type": "discount_type8",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 88,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id1",
                        "value": 213.13,
                        "discount_type": "discount_type9",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 89,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {
                        "id": "id8",
                        "value": 68.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 48,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id9",
                        "value": 68.41,
                        "increment_type": "increment_type1",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 47,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id0",
                        "value": 68.42,
                        "increment_type": "increment_type2",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 46,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name9",
                    "quantity": 133,
                    "cycles": 153,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                ],
                "statement_descriptor": "statement_descriptor2",
                "metadata": {
                  "key0": "metadata9"
                },
                "setup": {
                  "id": "id6",
                  "description": "description6",
                  "amount": 24,
                  "status": "status8"
                },
                "gateway_affiliation_id": "gateway_affiliation_id8",
                "next_billing_at": "2016-03-13T12:52:32.123Z",
                "billing_day": 228,
                "minimum_price": 86,
                "canceled_at": "2016-03-13T12:52:32.123Z",
                "discounts": [
                  {
                    "id": "id3",
                    "value": 243.25,
                    "discount_type": "discount_type1",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 29,
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
                        "price": 243,
                        "scheme_type": "scheme_type1",
                        "price_brackets": [
                          {
                            "start_quantity": 196,
                            "price": 134,
                            "end_quantity": 204,
                            "overage_price": 218
                          }
                        ],
                        "minimum_price": 83,
                        "percentage": 24.69
                      },
                      "discounts": [
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id8",
                          "value": 133.6,
                          "increment_type": "increment_type0",
                          "status": "status0",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 72,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description8",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id9",
                          "value": 133.61,
                          "increment_type": "increment_type1",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name9",
                      "quantity": 253,
                      "cycles": 17,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id4",
                    "value": 243.26,
                    "discount_type": "discount_type2",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 30,
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
                            "start_quantity": 197,
                            "price": 135,
                            "end_quantity": 205,
                            "overage_price": 219
                          },
                          {
                            "start_quantity": 198,
                            "price": 136,
                            "end_quantity": 206,
                            "overage_price": 220
                          }
                        ],
                        "minimum_price": 84,
                        "percentage": 24.7
                      },
                      "discounts": [
                        {},
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id9",
                          "value": 133.61,
                          "increment_type": "increment_type1",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id0",
                          "value": 133.62,
                          "increment_type": "increment_type2",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description0",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id1",
                          "value": 133.63,
                          "increment_type": "increment_type3",
                          "status": "status3",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 75,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description1",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name0",
                      "quantity": 254,
                      "cycles": 18,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "increments": [
                  {
                    "id": "id1",
                    "value": 98.53,
                    "increment_type": "increment_type3",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 107,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id7",
                      "description": "description3",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 139,
                        "scheme_type": "scheme_type1",
                        "price_brackets": [
                          {
                            "start_quantity": 70,
                            "price": 8,
                            "end_quantity": 78,
                            "overage_price": 92
                          },
                          {
                            "start_quantity": 71,
                            "price": 9,
                            "end_quantity": 79,
                            "overage_price": 93
                          }
                        ],
                        "minimum_price": 43,
                        "percentage": 128.39
                      },
                      "discounts": [
                        {
                          "id": "id8",
                          "value": 133.6,
                          "discount_type": "discount_type6",
                          "status": "status0",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 72,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description8",
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
                      "name": "name7",
                      "quantity": 117,
                      "cycles": 119,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id2",
                    "value": 98.54,
                    "increment_type": "increment_type4",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 106,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id8",
                      "description": "description2",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 140,
                        "scheme_type": "scheme_type0",
                        "price_brackets": [
                          {
                            "start_quantity": 69,
                            "price": 7,
                            "end_quantity": 77,
                            "overage_price": 91
                          }
                        ],
                        "minimum_price": 44,
                        "percentage": 128.38
                      },
                      "discounts": [
                        {
                          "id": "id9",
                          "value": 133.61,
                          "discount_type": "discount_type7",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id0",
                          "value": 133.62,
                          "discount_type": "discount_type8",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
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
                      "name": "name8",
                      "quantity": 118,
                      "cycles": 118,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id3",
                    "value": 98.55,
                    "increment_type": "increment_type5",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 105,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id9",
                      "description": "description1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 141,
                        "scheme_type": "scheme_type9",
                        "price_brackets": [
                          {
                            "start_quantity": 68,
                            "price": 6,
                            "end_quantity": 76,
                            "overage_price": 90
                          },
                          {
                            "start_quantity": 69,
                            "price": 7,
                            "end_quantity": 77,
                            "overage_price": 91
                          },
                          {
                            "start_quantity": 70,
                            "price": 8,
                            "end_quantity": 78,
                            "overage_price": 92
                          }
                        ],
                        "minimum_price": 45,
                        "percentage": 128.37
                      },
                      "discounts": [
                        {
                          "id": "id0",
                          "value": 133.62,
                          "discount_type": "discount_type8",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description0",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id1",
                          "value": 133.63,
                          "discount_type": "discount_type9",
                          "status": "status3",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 75,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description1",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id2",
                          "value": 133.64,
                          "discount_type": "discount_type0",
                          "status": "status4",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 76,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description2",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "increments": [
                        {}
                      ],
                      "subscription": {},
                      "name": "name9",
                      "quantity": 119,
                      "cycles": 117,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "boleto_due_days": 200,
                "split": {
                  "enabled": false,
                  "rules": [
                    {
                      "type": "type8",
                      "amount": 160,
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
                            "key0": "metadata9",
                            "key1": "metadata8",
                            "key2": "metadata7"
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
                          }
                        ],
                        "metadata": {
                          "key0": "metadata9",
                          "key1": "metadata0",
                          "key2": "metadata1"
                        },
                        "automatic_anticipation_settings": {
                          "enabled": false,
                          "type": "type2",
                          "volume_percentage": 234,
                          "delay": 56,
                          "days": [
                            32
                          ]
                        },
                        "transfer_settings": {
                          "transfer_enabled": false,
                          "transfer_interval": "transfer_interval0",
                          "transfer_day": 144
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
                    }
                  ]
                },
                "boleto": {
                  "interest": {
                    "days": 146,
                    "type": "type2",
                    "amount": 220
                  },
                  "fine": {
                    "days": 144,
                    "type": "type6",
                    "amount": 218
                  },
                  "max_days_to_pay_past_due": 132
                },
                "manual_billing": false
              },
              "status": "status8",
              "duration": 14,
              "created_at": "created_at4",
              "updated_at": "updated_at2",
              "cycle": 210
            },
            "shipping": {
              "amount": 158,
              "description": "description0",
              "recipient_name": "recipient_name8",
              "recipient_phone": "recipient_phone2",
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
                  "address": {},
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8",
                    "key2": "metadata9"
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
                  "fb_id": 206,
                  "code": "code4",
                  "document_type": "document_type4"
                },
                "metadata": {
                  "key0": "metadata7",
                  "key1": "metadata8"
                },
                "line_1": "line_10",
                "line_2": "line_24",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "max_delivery_date": "2016-03-13T12:52:32.123Z",
              "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
              "type": "type0"
            },
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata2",
              "key2": "metadata1"
            },
            "due_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "seen_at": "2016-03-13T12:52:32.123Z",
            "total_discount": 168,
            "total_increment": 240,
            "subscription_id": "subscription_id6"
          },
          "order": {},
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
                "key0": "metadata9"
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
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 146,
            "code": "code0",
            "document_type": "document_type0"
          },
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata6",
            "key2": "metadata5"
          },
          "paid_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "canceled_amount": 224,
          "paid_amount": 206,
          "interest_and_fine_paid": 210,
          "recurrency_cycle": "recurrency_cycle6"
        },
        {
          "id": "id3",
          "code": "code1",
          "gateway_id": "gateway_id3",
          "amount": 115,
          "status": "status5",
          "currency": "currency3",
          "payment_method": "payment_method3",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": {
            "gateway_id": "gateway_id5",
            "amount": 173,
            "status": "status7",
            "success": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "attempt_count": 149,
            "max_attempts": 137,
            "splits": [
              {
                "type": "type7",
                "amount": 105,
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
                      "key1": "metadata9",
                      "key2": "metadata0"
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
                    "key0": "metadata0",
                    "key1": "metadata9",
                    "key2": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type3",
                    "volume_percentage": 223,
                    "delay": 1,
                    "days": [
                      233,
                      234
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval5",
                    "transfer_day": 93
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
              }
            ],
            "next_attempt": "2016-03-13T12:52:32.123Z",
            "transaction_type": "transaction",
            "id": "id5",
            "gateway_response": {
              "code": "code5",
              "errors": [
                {
                  "message": "message2"
                }
              ]
            },
            "antifraud_response": {
              "status": "status5",
              "return_code": "return_code3",
              "return_message": "return_message1",
              "provider_name": "provider_name1",
              "score": "score3"
            },
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata7",
              "key2": "metadata8"
            },
            "split": [
              {
                "type": "type3",
                "amount": 119,
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
                      "key0": "metadata4",
                      "key1": "metadata5",
                      "key2": "metadata6"
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
                    "key0": "metadata6",
                    "key1": "metadata7",
                    "key2": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type9",
                    "volume_percentage": 237,
                    "delay": 15,
                    "days": [
                      247,
                      248
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval1",
                    "transfer_day": 107
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
                "amount": 120,
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
                      "key0": "metadata5"
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
                    }
                  ],
                  "metadata": {
                    "key0": "metadata7"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type0",
                    "volume_percentage": 238,
                    "delay": 16,
                    "days": [
                      248,
                      249,
                      250
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval2",
                    "transfer_day": 108
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
                "amount": 121,
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
                      "key1": "metadata7"
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
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 239,
                    "delay": 17,
                    "days": [
                      249
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval3",
                    "transfer_day": 109
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
            ],
            "interest": {
              "days": 79,
              "type": "type5",
              "amount": 153
            },
            "fine": {
              "days": 97,
              "type": "type7",
              "amount": 171
            },
            "max_days_to_pay_past_due": 85
          },
          "invoice": {
            "id": "id7",
            "code": "code5",
            "url": "url1",
            "amount": 61,
            "status": "status9",
            "payment_method": "payment_method7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "items": [
              {
                "amount": 120,
                "description": "description4",
                "pricing_scheme": {
                  "price": 32,
                  "scheme_type": "scheme_type6",
                  "price_brackets": [
                    {
                      "start_quantity": 177,
                      "price": 115,
                      "end_quantity": 185,
                      "overage_price": 199
                    },
                    {
                      "start_quantity": 178,
                      "price": 116,
                      "end_quantity": 186,
                      "overage_price": 200
                    }
                  ],
                  "minimum_price": 64,
                  "percentage": 162.74
                },
                "price_bracket": {
                  "start_quantity": 94,
                  "price": 32,
                  "end_quantity": 102,
                  "overage_price": 116
                },
                "quantity": 234,
                "name": "name4",
                "subscription_item_id": "subscription_item_id8"
              }
            ],
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
                  "key0": "metadata4",
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
              "fb_id": 93,
              "code": "code5",
              "document_type": "document_type5"
            },
            "charge": {},
            "installments": 101,
            "billing_address": {
              "street": "street9",
              "number": "number7",
              "zip_code": "zip_code3",
              "neighborhood": "neighborhood5",
              "city": "city9",
              "state": "state5",
              "country": "country3",
              "complement": "complement5",
              "line_1": "line_13",
              "line_2": "line_27"
            },
            "subscription": {
              "id": "id3",
              "code": "code1",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval9",
              "interval_count": 37,
              "billing_type": "billing_type3",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id1",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status3",
                "duration": 21,
                "created_at": "created_at9",
                "updated_at": "updated_at7",
                "cycle": 217
              },
              "payment_method": "payment_method7",
              "currency": "currency3",
              "installments": 205,
              "status": "status5",
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
                  "line_1": "line_13",
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
                    "country_code": "country_code1",
                    "number": "number3",
                    "area_code": "area_code9"
                  },
                  "mobile_phone": {
                    "country_code": "country_code1",
                    "number": "number1",
                    "area_code": "area_code1"
                  }
                },
                "fb_id": 219,
                "code": "code5",
                "document_type": "document_type5"
              },
              "card": {
                "id": "id3",
                "last_four_digits": "last_four_digits9",
                "brand": "brand7",
                "holder_name": "holder_name9",
                "exp_month": 183,
                "exp_year": 113,
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
                  "fb_id": 101,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata1",
                  "key2": "metadata2"
                },
                "type": "type7",
                "holder_document": "holder_document3",
                "deleted_at": "2016-03-13T12:52:32.123Z",
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
                    "price": 104,
                    "scheme_type": "scheme_type8",
                    "price_brackets": [
                      {
                        "start_quantity": 105,
                        "price": 213,
                        "end_quantity": 113,
                        "overage_price": 127
                      }
                    ],
                    "minimum_price": 8,
                    "percentage": 185.06
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 76.93,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 37,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    },
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
                    }
                  ],
                  "increments": [
                    {
                      "id": "id1",
                      "value": 58.83,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 237,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
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
                    },
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
                    }
                  ],
                  "subscription": {},
                  "name": "name0",
                  "quantity": 82,
                  "cycles": 154,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              ],
              "statement_descriptor": "statement_descriptor3",
              "metadata": {
                "key0": "metadata0"
              },
              "setup": {
                "id": "id7",
                "description": "description3",
                "amount": 229,
                "status": "status1"
              },
              "gateway_affiliation_id": "gateway_affiliation_id9",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 79,
              "minimum_price": 221,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id4",
                  "value": 107.06,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 234,
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
                      "price": 64,
                      "scheme_type": "scheme_type2",
                      "price_brackets": [
                        {
                          "start_quantity": 145,
                          "price": 173,
                          "end_quantity": 153,
                          "overage_price": 167
                        }
                      ],
                      "minimum_price": 224,
                      "percentage": 144.5
                    },
                    "discounts": [
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id9",
                        "value": 253.41,
                        "increment_type": "increment_type1",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 235,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id0",
                        "value": 253.42,
                        "increment_type": "increment_type2",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 234,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name0",
                    "quantity": 202,
                    "cycles": 222,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id5",
                  "value": 107.07,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 235,
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
                      "price": 63,
                      "scheme_type": "scheme_type3",
                      "price_brackets": [
                        {
                          "start_quantity": 146,
                          "price": 172,
                          "end_quantity": 154,
                          "overage_price": 168
                        },
                        {
                          "start_quantity": 147,
                          "price": 171,
                          "end_quantity": 155,
                          "overage_price": 169
                        }
                      ],
                      "minimum_price": 223,
                      "percentage": 144.51
                    },
                    "discounts": [
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id0",
                        "value": 253.42,
                        "increment_type": "increment_type2",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 234,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id1",
                        "value": 253.43,
                        "increment_type": "increment_type3",
                        "status": "status7",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 233,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id2",
                        "value": 253.44,
                        "increment_type": "increment_type4",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 232,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description2",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name1",
                    "quantity": 203,
                    "cycles": 223,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "increments": [
                {
                  "id": "id4",
                  "value": 27.36,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 56,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id0",
                    "description": "description0",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 190,
                      "scheme_type": "scheme_type8",
                      "price_brackets": [
                        {
                          "start_quantity": 19,
                          "price": 213,
                          "end_quantity": 27,
                          "overage_price": 41
                        },
                        {
                          "start_quantity": 20,
                          "price": 214,
                          "end_quantity": 28,
                          "overage_price": 42
                        },
                        {
                          "start_quantity": 21,
                          "price": 215,
                          "end_quantity": 29,
                          "overage_price": 43
                        }
                      ],
                      "minimum_price": 162,
                      "percentage": 199.56
                    },
                    "discounts": [
                      {
                        "id": "id1",
                        "value": 62.43,
                        "discount_type": "discount_type9",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 123,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id2",
                        "value": 62.44,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 124,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description2",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id3",
                        "value": 62.45,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 125,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description3",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {}
                    ],
                    "subscription": {},
                    "name": "name0",
                    "quantity": 168,
                    "cycles": 68,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id5",
                  "value": 27.37,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 55,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id1",
                    "description": "description9",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 191,
                      "scheme_type": "scheme_type7",
                      "price_brackets": [
                        {
                          "start_quantity": 18,
                          "price": 212,
                          "end_quantity": 26,
                          "overage_price": 40
                        },
                        {
                          "start_quantity": 19,
                          "price": 213,
                          "end_quantity": 27,
                          "overage_price": 41
                        }
                      ],
                      "minimum_price": 161,
                      "percentage": 199.55
                    },
                    "discounts": [
                      {
                        "id": "id2",
                        "value": 62.44,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 124,
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
                    "name": "name1",
                    "quantity": 169,
                    "cycles": 67,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "boleto_due_days": 149,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type7",
                    "amount": 147,
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
                        "volume_percentage": 171,
                        "delay": 119,
                        "days": [
                          95
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval9",
                        "transfer_day": 81
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
                  "days": 115,
                  "type": "type3",
                  "amount": 189
                },
                "fine": {
                  "days": 97,
                  "type": "type9",
                  "amount": 171
                },
                "max_days_to_pay_past_due": 163
              },
              "manual_billing": true
            },
            "cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id7",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {
                "id": "id3",
                "code": "code1",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval1",
                "interval_count": 89,
                "billing_type": "billing_type7",
                "current_cycle": {},
                "payment_method": "payment_method3",
                "currency": "currency3",
                "installments": 1,
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
                      "key1": "metadata9",
                      "key2": "metadata8"
                    },
                    "line_1": "line_13",
                    "line_2": "line_27",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata9"
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
                  "fb_id": 249,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "card": {
                  "id": "id7",
                  "last_four_digits": "last_four_digits3",
                  "brand": "brand1",
                  "holder_name": "holder_name3",
                  "exp_month": 105,
                  "exp_year": 191,
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
                        "key0": "metadata0"
                      },
                      "line_1": "line_17",
                      "line_2": "line_21",
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    },
                    "metadata": {
                      "key0": "metadata6"
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
                    "fb_id": 179,
                    "code": "code5",
                    "document_type": "document_type5"
                  },
                  "metadata": {
                    "key0": "metadata6",
                    "key1": "metadata7"
                  },
                  "type": "type3",
                  "holder_document": "holder_document9",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "first_six_digits": "first_six_digits7",
                  "label": "label7"
                },
                "items": [
                  {
                    "id": "id0",
                    "description": "description0",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 132,
                      "scheme_type": "scheme_type2",
                      "price_brackets": [
                        {
                          "start_quantity": 77,
                          "price": 241,
                          "end_quantity": 85,
                          "overage_price": 99
                        },
                        {
                          "start_quantity": 78,
                          "price": 240,
                          "end_quantity": 86,
                          "overage_price": 100
                        },
                        {
                          "start_quantity": 79,
                          "price": 239,
                          "end_quantity": 87,
                          "overage_price": 101
                        }
                      ],
                      "minimum_price": 36,
                      "percentage": 215.5
                    },
                    "discounts": [
                      {
                        "id": "id1",
                        "value": 213.13,
                        "discount_type": "discount_type9",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 89,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id2",
                        "value": 213.14,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 90,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description2",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id3",
                        "value": 213.15,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 91,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description3",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {
                        "id": "id9",
                        "value": 68.41,
                        "increment_type": "increment_type1",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 47,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name0",
                    "quantity": 134,
                    "cycles": 154,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  {
                    "id": "id1",
                    "description": "description1",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 131,
                      "scheme_type": "scheme_type3",
                      "price_brackets": [
                        {
                          "start_quantity": 78,
                          "price": 240,
                          "end_quantity": 86,
                          "overage_price": 100
                        }
                      ],
                      "minimum_price": 35,
                      "percentage": 215.51
                    },
                    "discounts": [
                      {
                        "id": "id2",
                        "value": 213.14,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 90,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description2",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {
                        "id": "id0",
                        "value": 68.42,
                        "increment_type": "increment_type2",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 46,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id1",
                        "value": 68.43,
                        "increment_type": "increment_type3",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 45,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name1",
                    "quantity": 135,
                    "cycles": 155,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                ],
                "statement_descriptor": "statement_descriptor3",
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9",
                  "key2": "metadata8"
                },
                "setup": {
                  "id": "id7",
                  "description": "description7",
                  "amount": 25,
                  "status": "status9"
                },
                "gateway_affiliation_id": "gateway_affiliation_id9",
                "next_billing_at": "2016-03-13T12:52:32.123Z",
                "billing_day": 229,
                "minimum_price": 87,
                "canceled_at": "2016-03-13T12:52:32.123Z",
                "discounts": [
                  {
                    "id": "id4",
                    "value": 243.26,
                    "discount_type": "discount_type2",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 30,
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
                            "start_quantity": 197,
                            "price": 135,
                            "end_quantity": 205,
                            "overage_price": 219
                          },
                          {
                            "start_quantity": 198,
                            "price": 136,
                            "end_quantity": 206,
                            "overage_price": 220
                          }
                        ],
                        "minimum_price": 84,
                        "percentage": 24.7
                      },
                      "discounts": [
                        {},
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id9",
                          "value": 133.61,
                          "increment_type": "increment_type1",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id0",
                          "value": 133.62,
                          "increment_type": "increment_type2",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description0",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id1",
                          "value": 133.63,
                          "increment_type": "increment_type3",
                          "status": "status3",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 75,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description1",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name0",
                      "quantity": 254,
                      "cycles": 18,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id5",
                    "value": 243.27,
                    "discount_type": "discount_type3",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 31,
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
                        "price": 245,
                        "scheme_type": "scheme_type3",
                        "price_brackets": [
                          {
                            "start_quantity": 198,
                            "price": 136,
                            "end_quantity": 206,
                            "overage_price": 220
                          },
                          {
                            "start_quantity": 199,
                            "price": 137,
                            "end_quantity": 207,
                            "overage_price": 221
                          },
                          {
                            "start_quantity": 200,
                            "price": 138,
                            "end_quantity": 208,
                            "overage_price": 222
                          }
                        ],
                        "minimum_price": 85,
                        "percentage": 24.71
                      },
                      "discounts": [
                        {},
                        {},
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id0",
                          "value": 133.62,
                          "increment_type": "increment_type2",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description0",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name1",
                      "quantity": 255,
                      "cycles": 19,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id6",
                    "value": 243.28,
                    "discount_type": "discount_type4",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 32,
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
                        "price": 246,
                        "scheme_type": "scheme_type4",
                        "price_brackets": [
                          {
                            "start_quantity": 199,
                            "price": 137,
                            "end_quantity": 207,
                            "overage_price": 221
                          }
                        ],
                        "minimum_price": 86,
                        "percentage": 24.72
                      },
                      "discounts": [
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id1",
                          "value": 133.63,
                          "increment_type": "increment_type3",
                          "status": "status3",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 75,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description1",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id2",
                          "value": 133.64,
                          "increment_type": "increment_type4",
                          "status": "status4",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 76,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description2",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name2",
                      "quantity": 0,
                      "cycles": 20,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "increments": [
                  {
                    "id": "id2",
                    "value": 98.54,
                    "increment_type": "increment_type4",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 106,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id8",
                      "description": "description2",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 140,
                        "scheme_type": "scheme_type0",
                        "price_brackets": [
                          {
                            "start_quantity": 69,
                            "price": 7,
                            "end_quantity": 77,
                            "overage_price": 91
                          }
                        ],
                        "minimum_price": 44,
                        "percentage": 128.38
                      },
                      "discounts": [
                        {
                          "id": "id9",
                          "value": 133.61,
                          "discount_type": "discount_type7",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id0",
                          "value": 133.62,
                          "discount_type": "discount_type8",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
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
                      "name": "name8",
                      "quantity": 118,
                      "cycles": 118,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "boleto_due_days": 201,
                "split": {
                  "enabled": true,
                  "rules": [
                    {
                      "type": "type7",
                      "amount": 161,
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
                            "key1": "metadata9"
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
                          "key0": "metadata8",
                          "key1": "metadata9"
                        },
                        "automatic_anticipation_settings": {
                          "enabled": true,
                          "type": "type1",
                          "volume_percentage": 233,
                          "delay": 57,
                          "days": [
                            33,
                            34
                          ]
                        },
                        "transfer_settings": {
                          "transfer_enabled": true,
                          "transfer_interval": "transfer_interval9",
                          "transfer_day": 143
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
                      "amount": 162,
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
                            "key0": "metadata1"
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
                          }
                        ],
                        "metadata": {
                          "key0": "metadata7"
                        },
                        "automatic_anticipation_settings": {
                          "enabled": false,
                          "type": "type0",
                          "volume_percentage": 232,
                          "delay": 58,
                          "days": [
                            34,
                            35,
                            36
                          ]
                        },
                        "transfer_settings": {
                          "transfer_enabled": false,
                          "transfer_interval": "transfer_interval8",
                          "transfer_day": 142
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
                    "days": 145,
                    "type": "type3",
                    "amount": 219
                  },
                  "fine": {
                    "days": 145,
                    "type": "type5",
                    "amount": 219
                  },
                  "max_days_to_pay_past_due": 133
                },
                "manual_billing": true
              },
              "status": "status9",
              "duration": 15,
              "created_at": "created_at5",
              "updated_at": "updated_at3",
              "cycle": 211
            },
            "shipping": {
              "amount": 159,
              "description": "description1",
              "recipient_name": "recipient_name9",
              "recipient_phone": "recipient_phone3",
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
                "customer": {
                  "id": "id7",
                  "name": "name7",
                  "email": "email1",
                  "delinquent": true,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document1",
                  "type": "type7",
                  "fb_access_token": "fb_access_token1",
                  "address": {},
                  "metadata": {
                    "key0": "metadata8"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code9",
                      "number": "number7",
                      "area_code": "area_code9"
                    },
                    "mobile_phone": {
                      "country_code": "country_code9",
                      "number": "number7",
                      "area_code": "area_code9"
                    }
                  },
                  "fb_id": 207,
                  "code": "code5",
                  "document_type": "document_type5"
                },
                "metadata": {
                  "key0": "metadata8",
                  "key1": "metadata9",
                  "key2": "metadata0"
                },
                "line_1": "line_11",
                "line_2": "line_25",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "max_delivery_date": "2016-03-13T12:52:32.123Z",
              "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
              "type": "type1"
            },
            "metadata": {
              "key0": "metadata2"
            },
            "due_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "seen_at": "2016-03-13T12:52:32.123Z",
            "total_discount": 169,
            "total_increment": 241,
            "subscription_id": "subscription_id7"
          },
          "order": {},
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
                "key0": "metadata0",
                "key1": "metadata1"
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
            "fb_id": 147,
            "code": "code1",
            "document_type": "document_type1"
          },
          "metadata": {
            "key0": "metadata6"
          },
          "paid_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "canceled_amount": 225,
          "paid_amount": 207,
          "interest_and_fine_paid": 211,
          "recurrency_cycle": "recurrency_cycle7"
        }
      ],
      "invoice_url": "invoice_url7",
      "shipping": {
        "amount": 219,
        "description": "description9",
        "recipient_name": "recipient_name7",
        "recipient_phone": "recipient_phone1",
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
            "address": {},
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata7"
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
            "fb_id": 11,
            "code": "code3",
            "document_type": "document_type3"
          },
          "metadata": {
            "key0": "metadata6"
          },
          "line_1": "line_19",
          "line_2": "line_23",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "max_delivery_date": "2016-03-13T12:52:32.123Z",
        "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
        "type": "type9"
      },
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "checkouts": [
        {
          "id": "id2",
          "amount": 130,
          "default_payment_method": "default_payment_method2",
          "success_url": "success_url4",
          "payment_url": "payment_url6",
          "gateway_affiliation_id": "gateway_affiliation_id8",
          "accepted_payment_methods": [
            "accepted_payment_methods5",
            "accepted_payment_methods6",
            "accepted_payment_methods7"
          ],
          "status": "status4",
          "skip_checkout_success_page": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "customer_editable": false,
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
              "key0": "metadata3",
              "key1": "metadata4",
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
            "fb_id": 162,
            "code": "code0",
            "document_type": "document_type0"
          },
          "billingaddress": {
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
              "address": {},
              "metadata": {
                "key0": "metadata1",
                "key1": "metadata2"
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
              "fb_id": 244,
              "code": "code8",
              "document_type": "document_type8"
            },
            "metadata": {
              "key0": "metadata1"
            },
            "line_1": "line_14",
            "line_2": "line_28",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "credit_card": {
            "statementDescriptor": "statementDescriptor6",
            "installments": [
              {
                "number": "number3",
                "total": 87
              }
            ],
            "authentication": {
              "type": "type2",
              "threed_secure": {
                "mpi": "mpi8",
                "eci": "eci0",
                "cavv": "cavv6",
                "transaction_Id": "transaction_Id6",
                "success_url": "success_url2"
              }
            }
          },
          "boleto": {
            "due_at": "2016-03-13T12:52:32.123Z",
            "instructions": "instructions0"
          },
          "billing_address_editable": false,
          "shipping": {
            "amount": 228,
            "description": "description6",
            "recipient_name": "recipient_name4",
            "recipient_phone": "recipient_phone8",
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
                "address": {},
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata4"
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
                "fb_id": 20,
                "code": "code0",
                "document_type": "document_type0"
              },
              "metadata": {
                "key0": "metadata3"
              },
              "line_1": "line_16",
              "line_2": "line_20",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "max_delivery_date": "2016-03-13T12:52:32.123Z",
            "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
            "type": "type6"
          },
          "shippable": false,
          "closed_at": "2016-03-13T12:52:32.123Z",
          "expires_at": "2016-03-13T12:52:32.123Z",
          "currency": "currency2",
          "debit_card": {
            "statement_descriptor": "statement_descriptor6",
            "authentication": {
              "type": "type8",
              "threed_secure": {
                "mpi": "mpi4",
                "eci": "eci6",
                "cavv": "cavv2",
                "transaction_Id": "transaction_Id2",
                "success_url": "success_url8"
              }
            }
          },
          "bank_transfer": {
            "bank": [
              "bank7",
              "bank8",
              "bank9"
            ]
          },
          "accepted_brands": [
            "accepted_brands8",
            "accepted_brands9",
            "accepted_brands0"
          ],
          "pix": {
            "expires_at": "2016-03-13T12:52:32.123Z",
            "additional_information": [
              {
                "Name": "Name9",
                "Value": "Value7"
              },
              {
                "Name": "Name0",
                "Value": "Value8"
              },
              {
                "Name": "Name1",
                "Value": "Value9"
              }
            ]
          }
        }
      ],
      "ip": "ip9",
      "session_id": "session_id7",
      "location": {
        "latitude": "latitude3",
        "longitude": "longitude3"
      },
      "device": {
        "platform": "platform5"
      },
      "closed": true
    },
    {
      "id": "id6",
      "code": "code4",
      "currency": "currency6",
      "items": [
        {
          "id": "id3",
          "amount": 181,
          "description": "description3",
          "quantity": 39,
          "category": "category1",
          "code": "code1"
        },
        {
          "id": "id4",
          "amount": 182,
          "description": "description4",
          "quantity": 40,
          "category": "category2",
          "code": "code2"
        },
        {
          "id": "id5",
          "amount": 183,
          "description": "description5",
          "quantity": 41,
          "category": "category3",
          "code": "code3"
        }
      ],
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
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "charges": [
        {
          "id": "id2",
          "code": "code0",
          "gateway_id": "gateway_id2",
          "amount": 114,
          "status": "status4",
          "currency": "currency2",
          "payment_method": "payment_method2",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": {
            "gateway_id": "gateway_id4",
            "amount": 172,
            "status": "status6",
            "success": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "attempt_count": 148,
            "max_attempts": 136,
            "splits": [
              {
                "type": "type6",
                "amount": 104,
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
                      "key0": "metadata7",
                      "key1": "metadata8"
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
                    "key0": "metadata1",
                    "key1": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type2",
                    "volume_percentage": 222,
                    "delay": 0,
                    "days": [
                      232
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval4",
                    "transfer_day": 92
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
                "amount": 105,
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
                      "key1": "metadata9",
                      "key2": "metadata0"
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
                    "key0": "metadata0",
                    "key1": "metadata9",
                    "key2": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type3",
                    "volume_percentage": 223,
                    "delay": 1,
                    "days": [
                      233,
                      234
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval5",
                    "transfer_day": 93
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
                "amount": 106,
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
                      "key0": "metadata9"
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
                    "key0": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type4",
                    "volume_percentage": 224,
                    "delay": 2,
                    "days": [
                      234,
                      235,
                      236
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval6",
                    "transfer_day": 94
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
            ],
            "next_attempt": "2016-03-13T12:52:32.123Z",
            "transaction_type": "transaction",
            "id": "id4",
            "gateway_response": {
              "code": "code4",
              "errors": [
                {
                  "message": "message1"
                },
                {
                  "message": "message2"
                },
                {
                  "message": "message3"
                }
              ]
            },
            "antifraud_response": {
              "status": "status4",
              "return_code": "return_code2",
              "return_message": "return_message0",
              "provider_name": "provider_name0",
              "score": "score2"
            },
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata6"
            },
            "split": [
              {
                "type": "type2",
                "amount": 118,
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
                      "key1": "metadata4"
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
                    }
                  ],
                  "metadata": {
                    "key0": "metadata5",
                    "key1": "metadata6"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type8",
                    "volume_percentage": 236,
                    "delay": 14,
                    "days": [
                      246
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 106
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
                "amount": 119,
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
                      "key0": "metadata4",
                      "key1": "metadata5",
                      "key2": "metadata6"
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
                    "key0": "metadata6",
                    "key1": "metadata7",
                    "key2": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type9",
                    "volume_percentage": 237,
                    "delay": 15,
                    "days": [
                      247,
                      248
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval1",
                    "transfer_day": 107
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
            ],
            "interest": {
              "days": 78,
              "type": "type4",
              "amount": 152
            },
            "fine": {
              "days": 96,
              "type": "type6",
              "amount": 170
            },
            "max_days_to_pay_past_due": 84
          },
          "invoice": {
            "id": "id6",
            "code": "code4",
            "url": "url0",
            "amount": 60,
            "status": "status8",
            "payment_method": "payment_method6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "items": [
              {
                "amount": 119,
                "description": "description3",
                "pricing_scheme": {
                  "price": 33,
                  "scheme_type": "scheme_type5",
                  "price_brackets": [
                    {
                      "start_quantity": 176,
                      "price": 114,
                      "end_quantity": 184,
                      "overage_price": 198
                    }
                  ],
                  "minimum_price": 63,
                  "percentage": 162.73
                },
                "price_bracket": {
                  "start_quantity": 93,
                  "price": 31,
                  "end_quantity": 101,
                  "overage_price": 115
                },
                "quantity": 233,
                "name": "name3",
                "subscription_item_id": "subscription_item_id7"
              },
              {
                "amount": 120,
                "description": "description4",
                "pricing_scheme": {
                  "price": 32,
                  "scheme_type": "scheme_type6",
                  "price_brackets": [
                    {
                      "start_quantity": 177,
                      "price": 115,
                      "end_quantity": 185,
                      "overage_price": 199
                    },
                    {
                      "start_quantity": 178,
                      "price": 116,
                      "end_quantity": 186,
                      "overage_price": 200
                    }
                  ],
                  "minimum_price": 64,
                  "percentage": 162.74
                },
                "price_bracket": {
                  "start_quantity": 94,
                  "price": 32,
                  "end_quantity": 102,
                  "overage_price": 116
                },
                "quantity": 234,
                "name": "name4",
                "subscription_item_id": "subscription_item_id8"
              },
              {
                "amount": 121,
                "description": "description5",
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
                "price_bracket": {
                  "start_quantity": 95,
                  "price": 33,
                  "end_quantity": 103,
                  "overage_price": 117
                },
                "quantity": 235,
                "name": "name5",
                "subscription_item_id": "subscription_item_id9"
              }
            ],
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
                  "number": "number4",
                  "area_code": "area_code8"
                }
              },
              "fb_id": 92,
              "code": "code4",
              "document_type": "document_type4"
            },
            "charge": {},
            "installments": 100,
            "billing_address": {
              "street": "street8",
              "number": "number6",
              "zip_code": "zip_code2",
              "neighborhood": "neighborhood4",
              "city": "city8",
              "state": "state4",
              "country": "country2",
              "complement": "complement4",
              "line_1": "line_12",
              "line_2": "line_26"
            },
            "subscription": {
              "id": "id2",
              "code": "code0",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval0",
              "interval_count": 36,
              "billing_type": "billing_type4",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id0",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status2",
                "duration": 20,
                "created_at": "created_at8",
                "updated_at": "updated_at6",
                "cycle": 216
              },
              "payment_method": "payment_method8",
              "currency": "currency2",
              "installments": 204,
              "status": "status6",
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
                  "line_1": "line_12",
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
                "fb_id": 220,
                "code": "code6",
                "document_type": "document_type6"
              },
              "card": {
                "id": "id4",
                "last_four_digits": "last_four_digits0",
                "brand": "brand8",
                "holder_name": "holder_name0",
                "exp_month": 182,
                "exp_year": 114,
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
                  "fb_id": 102,
                  "code": "code2",
                  "document_type": "document_type2"
                },
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata0"
                },
                "type": "type6",
                "holder_document": "holder_document2",
                "deleted_at": "2016-03-13T12:52:32.123Z",
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
                    "price": 103,
                    "scheme_type": "scheme_type9",
                    "price_brackets": [
                      {
                        "start_quantity": 106,
                        "price": 212,
                        "end_quantity": 114,
                        "overage_price": 128
                      },
                      {
                        "start_quantity": 107,
                        "price": 211,
                        "end_quantity": 115,
                        "overage_price": 129
                      }
                    ],
                    "minimum_price": 7,
                    "percentage": 185.07
                  },
                  "discounts": [
                    {
                      "id": "id0",
                      "value": 76.92,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 36,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {
                      "id": "id2",
                      "value": 58.84,
                      "increment_type": "increment_type4",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 236,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description8",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id1",
                      "value": 58.83,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 237,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name9",
                  "quantity": 81,
                  "cycles": 155,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                {
                  "id": "id0",
                  "description": "description0",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 104,
                    "scheme_type": "scheme_type8",
                    "price_brackets": [
                      {
                        "start_quantity": 105,
                        "price": 213,
                        "end_quantity": 113,
                        "overage_price": 127
                      }
                    ],
                    "minimum_price": 8,
                    "percentage": 185.06
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 76.93,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 37,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    },
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
                    }
                  ],
                  "increments": [
                    {
                      "id": "id1",
                      "value": 58.83,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 237,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
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
                    },
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
                    }
                  ],
                  "subscription": {},
                  "name": "name0",
                  "quantity": 82,
                  "cycles": 154,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                {
                  "id": "id1",
                  "description": "description1",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 105,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 104,
                        "price": 214,
                        "end_quantity": 112,
                        "overage_price": 126
                      },
                      {
                        "start_quantity": 105,
                        "price": 213,
                        "end_quantity": 113,
                        "overage_price": 127
                      },
                      {
                        "start_quantity": 106,
                        "price": 212,
                        "end_quantity": 114,
                        "overage_price": 128
                      }
                    ],
                    "minimum_price": 9,
                    "percentage": 185.05
                  },
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
                  "subscription": {},
                  "name": "name1",
                  "quantity": 83,
                  "cycles": 153,
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
                "description": "description4",
                "amount": 228,
                "status": "status2"
              },
              "gateway_affiliation_id": "gateway_affiliation_id8",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 80,
              "minimum_price": 222,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id3",
                  "value": 107.05,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 233,
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
                      "price": 65,
                      "scheme_type": "scheme_type1",
                      "price_brackets": [
                        {
                          "start_quantity": 144,
                          "price": 174,
                          "end_quantity": 152,
                          "overage_price": 166
                        },
                        {
                          "start_quantity": 145,
                          "price": 173,
                          "end_quantity": 153,
                          "overage_price": 167
                        },
                        {
                          "start_quantity": 146,
                          "price": 172,
                          "end_quantity": 154,
                          "overage_price": 168
                        }
                      ],
                      "minimum_price": 225,
                      "percentage": 144.49
                    },
                    "discounts": [
                      {},
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id8",
                        "value": 253.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 236,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name9",
                    "quantity": 201,
                    "cycles": 221,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "increments": [
                {
                  "id": "id5",
                  "value": 27.37,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 55,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id1",
                    "description": "description9",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 191,
                      "scheme_type": "scheme_type7",
                      "price_brackets": [
                        {
                          "start_quantity": 18,
                          "price": 212,
                          "end_quantity": 26,
                          "overage_price": 40
                        },
                        {
                          "start_quantity": 19,
                          "price": 213,
                          "end_quantity": 27,
                          "overage_price": 41
                        }
                      ],
                      "minimum_price": 161,
                      "percentage": 199.55
                    },
                    "discounts": [
                      {
                        "id": "id2",
                        "value": 62.44,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 124,
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
                    "name": "name1",
                    "quantity": 169,
                    "cycles": 67,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id6",
                  "value": 27.38,
                  "increment_type": "increment_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 54,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id2",
                    "description": "description8",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 192,
                      "scheme_type": "scheme_type6",
                      "price_brackets": [
                        {
                          "start_quantity": 17,
                          "price": 211,
                          "end_quantity": 25,
                          "overage_price": 39
                        }
                      ],
                      "minimum_price": 160,
                      "percentage": 199.54
                    },
                    "discounts": [
                      {
                        "id": "id3",
                        "value": 62.45,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 125,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description3",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id4",
                        "value": 62.46,
                        "discount_type": "discount_type2",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 126,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description4",
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
                    "quantity": 170,
                    "cycles": 66,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id7",
                  "value": 27.39,
                  "increment_type": "increment_type9",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 53,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description3",
                  "subscription": {},
                  "subscription_item": {
                    "id": "id3",
                    "description": "description7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "pricing_scheme": {
                      "price": 193,
                      "scheme_type": "scheme_type5",
                      "price_brackets": [
                        {
                          "start_quantity": 16,
                          "price": 210,
                          "end_quantity": 24,
                          "overage_price": 38
                        },
                        {
                          "start_quantity": 17,
                          "price": 211,
                          "end_quantity": 25,
                          "overage_price": 39
                        },
                        {
                          "start_quantity": 18,
                          "price": 212,
                          "end_quantity": 26,
                          "overage_price": 40
                        }
                      ],
                      "minimum_price": 159,
                      "percentage": 199.53
                    },
                    "discounts": [
                      {
                        "id": "id4",
                        "value": 62.46,
                        "discount_type": "discount_type2",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 126,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description4",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id5",
                        "value": 62.47,
                        "discount_type": "discount_type3",
                        "status": "status7",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 127,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description5",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id6",
                        "value": 62.48,
                        "discount_type": "discount_type4",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 128,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description6",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {}
                    ],
                    "subscription": {},
                    "name": "name3",
                    "quantity": 171,
                    "cycles": 65,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "boleto_due_days": 148,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type8",
                    "amount": 148,
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
                        "volume_percentage": 170,
                        "delay": 120,
                        "days": [
                          96,
                          97
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 80
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
                    "type": "type7",
                    "amount": 147,
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
                        "volume_percentage": 171,
                        "delay": 119,
                        "days": [
                          95
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval9",
                        "transfer_day": 81
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
                    "type": "type6",
                    "amount": 146,
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
                        "volume_percentage": 172,
                        "delay": 118,
                        "days": [
                          94,
                          95,
                          96
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval0",
                        "transfer_day": 82
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
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 114,
                  "type": "type2",
                  "amount": 188
                },
                "fine": {
                  "days": 96,
                  "type": "type0",
                  "amount": 170
                },
                "max_days_to_pay_past_due": 164
              },
              "manual_billing": false
            },
            "cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id6",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {
                "id": "id2",
                "code": "code0",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval0",
                "interval_count": 88,
                "billing_type": "billing_type6",
                "current_cycle": {},
                "payment_method": "payment_method2",
                "currency": "currency2",
                "installments": 0,
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
                      "key0": "metadata1",
                      "key1": "metadata0"
                    },
                    "line_1": "line_12",
                    "line_2": "line_26",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata8",
                    "key2": "metadata7"
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
                  "fb_id": 248,
                  "code": "code0",
                  "document_type": "document_type0"
                },
                "card": {
                  "id": "id6",
                  "last_four_digits": "last_four_digits2",
                  "brand": "brand0",
                  "holder_name": "holder_name2",
                  "exp_month": 106,
                  "exp_year": 190,
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
                        "key1": "metadata8"
                      },
                      "line_1": "line_16",
                      "line_2": "line_20",
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    },
                    "metadata": {
                      "key0": "metadata7",
                      "key1": "metadata8"
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
                    "fb_id": 178,
                    "code": "code4",
                    "document_type": "document_type4"
                  },
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8",
                    "key2": "metadata9"
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
                      "price": 133,
                      "scheme_type": "scheme_type1",
                      "price_brackets": [
                        {
                          "start_quantity": 76,
                          "price": 242,
                          "end_quantity": 84,
                          "overage_price": 98
                        },
                        {
                          "start_quantity": 77,
                          "price": 241,
                          "end_quantity": 85,
                          "overage_price": 99
                        }
                      ],
                      "minimum_price": 37,
                      "percentage": 215.49
                    },
                    "discounts": [
                      {
                        "id": "id0",
                        "value": 213.12,
                        "discount_type": "discount_type8",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 88,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id1",
                        "value": 213.13,
                        "discount_type": "discount_type9",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 89,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "increments": [
                      {
                        "id": "id8",
                        "value": 68.4,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 48,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id9",
                        "value": 68.41,
                        "increment_type": "increment_type1",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 47,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id0",
                        "value": 68.42,
                        "increment_type": "increment_type2",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 46,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name9",
                    "quantity": 133,
                    "cycles": 153,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                ],
                "statement_descriptor": "statement_descriptor2",
                "metadata": {
                  "key0": "metadata9"
                },
                "setup": {
                  "id": "id6",
                  "description": "description6",
                  "amount": 24,
                  "status": "status8"
                },
                "gateway_affiliation_id": "gateway_affiliation_id8",
                "next_billing_at": "2016-03-13T12:52:32.123Z",
                "billing_day": 228,
                "minimum_price": 86,
                "canceled_at": "2016-03-13T12:52:32.123Z",
                "discounts": [
                  {
                    "id": "id3",
                    "value": 243.25,
                    "discount_type": "discount_type1",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 29,
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
                        "price": 243,
                        "scheme_type": "scheme_type1",
                        "price_brackets": [
                          {
                            "start_quantity": 196,
                            "price": 134,
                            "end_quantity": 204,
                            "overage_price": 218
                          }
                        ],
                        "minimum_price": 83,
                        "percentage": 24.69
                      },
                      "discounts": [
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id8",
                          "value": 133.6,
                          "increment_type": "increment_type0",
                          "status": "status0",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 72,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description8",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id9",
                          "value": 133.61,
                          "increment_type": "increment_type1",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name9",
                      "quantity": 253,
                      "cycles": 17,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id4",
                    "value": 243.26,
                    "discount_type": "discount_type2",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 30,
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
                            "start_quantity": 197,
                            "price": 135,
                            "end_quantity": 205,
                            "overage_price": 219
                          },
                          {
                            "start_quantity": 198,
                            "price": 136,
                            "end_quantity": 206,
                            "overage_price": 220
                          }
                        ],
                        "minimum_price": 84,
                        "percentage": 24.7
                      },
                      "discounts": [
                        {},
                        {}
                      ],
                      "increments": [
                        {
                          "id": "id9",
                          "value": 133.61,
                          "increment_type": "increment_type1",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id0",
                          "value": 133.62,
                          "increment_type": "increment_type2",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description0",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id1",
                          "value": 133.63,
                          "increment_type": "increment_type3",
                          "status": "status3",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 75,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description1",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "subscription": {},
                      "name": "name0",
                      "quantity": 254,
                      "cycles": 18,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "increments": [
                  {
                    "id": "id1",
                    "value": 98.53,
                    "increment_type": "increment_type3",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 107,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id7",
                      "description": "description3",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 139,
                        "scheme_type": "scheme_type1",
                        "price_brackets": [
                          {
                            "start_quantity": 70,
                            "price": 8,
                            "end_quantity": 78,
                            "overage_price": 92
                          },
                          {
                            "start_quantity": 71,
                            "price": 9,
                            "end_quantity": 79,
                            "overage_price": 93
                          }
                        ],
                        "minimum_price": 43,
                        "percentage": 128.39
                      },
                      "discounts": [
                        {
                          "id": "id8",
                          "value": 133.6,
                          "discount_type": "discount_type6",
                          "status": "status0",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 72,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description8",
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
                      "name": "name7",
                      "quantity": 117,
                      "cycles": 119,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id2",
                    "value": 98.54,
                    "increment_type": "increment_type4",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 106,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id8",
                      "description": "description2",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 140,
                        "scheme_type": "scheme_type0",
                        "price_brackets": [
                          {
                            "start_quantity": 69,
                            "price": 7,
                            "end_quantity": 77,
                            "overage_price": 91
                          }
                        ],
                        "minimum_price": 44,
                        "percentage": 128.38
                      },
                      "discounts": [
                        {
                          "id": "id9",
                          "value": 133.61,
                          "discount_type": "discount_type7",
                          "status": "status1",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 73,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description9",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id0",
                          "value": 133.62,
                          "discount_type": "discount_type8",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
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
                      "name": "name8",
                      "quantity": 118,
                      "cycles": 118,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  },
                  {
                    "id": "id3",
                    "value": 98.55,
                    "increment_type": "increment_type5",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 105,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {
                      "id": "id9",
                      "description": "description1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "pricing_scheme": {
                        "price": 141,
                        "scheme_type": "scheme_type9",
                        "price_brackets": [
                          {
                            "start_quantity": 68,
                            "price": 6,
                            "end_quantity": 76,
                            "overage_price": 90
                          },
                          {
                            "start_quantity": 69,
                            "price": 7,
                            "end_quantity": 77,
                            "overage_price": 91
                          },
                          {
                            "start_quantity": 70,
                            "price": 8,
                            "end_quantity": 78,
                            "overage_price": 92
                          }
                        ],
                        "minimum_price": 45,
                        "percentage": 128.37
                      },
                      "discounts": [
                        {
                          "id": "id0",
                          "value": 133.62,
                          "discount_type": "discount_type8",
                          "status": "status2",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 74,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description0",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id1",
                          "value": 133.63,
                          "discount_type": "discount_type9",
                          "status": "status3",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 75,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description1",
                          "subscription": {},
                          "subscription_item": {}
                        },
                        {
                          "id": "id2",
                          "value": 133.64,
                          "discount_type": "discount_type0",
                          "status": "status4",
                          "created_at": "2016-03-13T12:52:32.123Z",
                          "cycles": 76,
                          "deleted_at": "2016-03-13T12:52:32.123Z",
                          "description": "description2",
                          "subscription": {},
                          "subscription_item": {}
                        }
                      ],
                      "increments": [
                        {}
                      ],
                      "subscription": {},
                      "name": "name9",
                      "quantity": 119,
                      "cycles": 117,
                      "deleted_at": "2016-03-13T12:52:32.123Z"
                    }
                  }
                ],
                "boleto_due_days": 200,
                "split": {
                  "enabled": false,
                  "rules": [
                    {
                      "type": "type8",
                      "amount": 160,
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
                            "key0": "metadata9",
                            "key1": "metadata8",
                            "key2": "metadata7"
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
                          }
                        ],
                        "metadata": {
                          "key0": "metadata9",
                          "key1": "metadata0",
                          "key2": "metadata1"
                        },
                        "automatic_anticipation_settings": {
                          "enabled": false,
                          "type": "type2",
                          "volume_percentage": 234,
                          "delay": 56,
                          "days": [
                            32
                          ]
                        },
                        "transfer_settings": {
                          "transfer_enabled": false,
                          "transfer_interval": "transfer_interval0",
                          "transfer_day": 144
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
                    }
                  ]
                },
                "boleto": {
                  "interest": {
                    "days": 146,
                    "type": "type2",
                    "amount": 220
                  },
                  "fine": {
                    "days": 144,
                    "type": "type6",
                    "amount": 218
                  },
                  "max_days_to_pay_past_due": 132
                },
                "manual_billing": false
              },
              "status": "status8",
              "duration": 14,
              "created_at": "created_at4",
              "updated_at": "updated_at2",
              "cycle": 210
            },
            "shipping": {
              "amount": 158,
              "description": "description0",
              "recipient_name": "recipient_name8",
              "recipient_phone": "recipient_phone2",
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
                  "address": {},
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8",
                    "key2": "metadata9"
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
                  "fb_id": 206,
                  "code": "code4",
                  "document_type": "document_type4"
                },
                "metadata": {
                  "key0": "metadata7",
                  "key1": "metadata8"
                },
                "line_1": "line_10",
                "line_2": "line_24",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "max_delivery_date": "2016-03-13T12:52:32.123Z",
              "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
              "type": "type0"
            },
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata2",
              "key2": "metadata1"
            },
            "due_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "seen_at": "2016-03-13T12:52:32.123Z",
            "total_discount": 168,
            "total_increment": 240,
            "subscription_id": "subscription_id6"
          },
          "order": {},
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
                "key0": "metadata9"
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
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 146,
            "code": "code0",
            "document_type": "document_type0"
          },
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata6",
            "key2": "metadata5"
          },
          "paid_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "canceled_amount": 224,
          "paid_amount": 206,
          "interest_and_fine_paid": 210,
          "recurrency_cycle": "recurrency_cycle6"
        }
      ],
      "invoice_url": "invoice_url8",
      "shipping": {
        "amount": 220,
        "description": "description0",
        "recipient_name": "recipient_name8",
        "recipient_phone": "recipient_phone2",
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
            "address": {},
            "metadata": {
              "key0": "metadata7",
              "key1": "metadata8",
              "key2": "metadata9"
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
            "fb_id": 12,
            "code": "code4",
            "document_type": "document_type4"
          },
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata8"
          },
          "line_1": "line_10",
          "line_2": "line_24",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "max_delivery_date": "2016-03-13T12:52:32.123Z",
        "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
        "type": "type0"
      },
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "checkouts": [
        {
          "id": "id3",
          "amount": 131,
          "default_payment_method": "default_payment_method3",
          "success_url": "success_url5",
          "payment_url": "payment_url7",
          "gateway_affiliation_id": "gateway_affiliation_id9",
          "accepted_payment_methods": [
            "accepted_payment_methods6"
          ],
          "status": "status5",
          "skip_checkout_success_page": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "customer_editable": true,
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
              "key0": "metadata4"
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
            "fb_id": 163,
            "code": "code1",
            "document_type": "document_type1"
          },
          "billingaddress": {
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
              "address": {},
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3",
                "key2": "metadata4"
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
              "fb_id": 245,
              "code": "code9",
              "document_type": "document_type9"
            },
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata3"
            },
            "line_1": "line_15",
            "line_2": "line_29",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "credit_card": {
            "statementDescriptor": "statementDescriptor7",
            "installments": [
              {
                "number": "number4",
                "total": 88
              },
              {
                "number": "number5",
                "total": 89
              }
            ],
            "authentication": {
              "type": "type3",
              "threed_secure": {
                "mpi": "mpi9",
                "eci": "eci1",
                "cavv": "cavv7",
                "transaction_Id": "transaction_Id7",
                "success_url": "success_url3"
              }
            }
          },
          "boleto": {
            "due_at": "2016-03-13T12:52:32.123Z",
            "instructions": "instructions1"
          },
          "billing_address_editable": true,
          "shipping": {
            "amount": 229,
            "description": "description7",
            "recipient_name": "recipient_name5",
            "recipient_phone": "recipient_phone9",
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
                "address": {},
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata5",
                  "key2": "metadata6"
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
                "fb_id": 21,
                "code": "code1",
                "document_type": "document_type1"
              },
              "metadata": {
                "key0": "metadata4",
                "key1": "metadata5"
              },
              "line_1": "line_17",
              "line_2": "line_21",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "max_delivery_date": "2016-03-13T12:52:32.123Z",
            "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
            "type": "type7"
          },
          "shippable": true,
          "closed_at": "2016-03-13T12:52:32.123Z",
          "expires_at": "2016-03-13T12:52:32.123Z",
          "currency": "currency3",
          "debit_card": {
            "statement_descriptor": "statement_descriptor7",
            "authentication": {
              "type": "type9",
              "threed_secure": {
                "mpi": "mpi5",
                "eci": "eci7",
                "cavv": "cavv3",
                "transaction_Id": "transaction_Id3",
                "success_url": "success_url9"
              }
            }
          },
          "bank_transfer": {
            "bank": [
              "bank8"
            ]
          },
          "accepted_brands": [
            "accepted_brands9"
          ],
          "pix": {
            "expires_at": "2016-03-13T12:52:32.123Z",
            "additional_information": [
              {
                "Name": "Name0",
                "Value": "Value8"
              }
            ]
          }
        },
        {
          "id": "id4",
          "amount": 132,
          "default_payment_method": "default_payment_method4",
          "success_url": "success_url6",
          "payment_url": "payment_url8",
          "gateway_affiliation_id": "gateway_affiliation_id0",
          "accepted_payment_methods": [
            "accepted_payment_methods7",
            "accepted_payment_methods8"
          ],
          "status": "status6",
          "skip_checkout_success_page": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "customer_editable": false,
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
              "key1": "metadata6"
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
            "fb_id": 164,
            "code": "code2",
            "document_type": "document_type2"
          },
          "billingaddress": {
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
              "address": {},
              "metadata": {
                "key0": "metadata3"
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
              "fb_id": 246,
              "code": "code0",
              "document_type": "document_type0"
            },
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata4",
              "key2": "metadata5"
            },
            "line_1": "line_16",
            "line_2": "line_20",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "credit_card": {
            "statementDescriptor": "statementDescriptor8",
            "installments": [
              {
                "number": "number5",
                "total": 89
              },
              {
                "number": "number6",
                "total": 90
              },
              {
                "number": "number7",
                "total": 91
              }
            ],
            "authentication": {
              "type": "type4",
              "threed_secure": {
                "mpi": "mpi0",
                "eci": "eci2",
                "cavv": "cavv8",
                "transaction_Id": "transaction_Id8",
                "success_url": "success_url4"
              }
            }
          },
          "boleto": {
            "due_at": "2016-03-13T12:52:32.123Z",
            "instructions": "instructions2"
          },
          "billing_address_editable": false,
          "shipping": {
            "amount": 230,
            "description": "description8",
            "recipient_name": "recipient_name6",
            "recipient_phone": "recipient_phone0",
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
                "address": {},
                "metadata": {
                  "key0": "metadata5"
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
                "fb_id": 22,
                "code": "code2",
                "document_type": "document_type2"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6",
                "key2": "metadata7"
              },
              "line_1": "line_18",
              "line_2": "line_22",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "max_delivery_date": "2016-03-13T12:52:32.123Z",
            "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
            "type": "type8"
          },
          "shippable": false,
          "closed_at": "2016-03-13T12:52:32.123Z",
          "expires_at": "2016-03-13T12:52:32.123Z",
          "currency": "currency4",
          "debit_card": {
            "statement_descriptor": "statement_descriptor8",
            "authentication": {
              "type": "type0",
              "threed_secure": {
                "mpi": "mpi6",
                "eci": "eci8",
                "cavv": "cavv4",
                "transaction_Id": "transaction_Id4",
                "success_url": "success_url0"
              }
            }
          },
          "bank_transfer": {
            "bank": [
              "bank9",
              "bank0"
            ]
          },
          "accepted_brands": [
            "accepted_brands0",
            "accepted_brands1"
          ],
          "pix": {
            "expires_at": "2016-03-13T12:52:32.123Z",
            "additional_information": [
              {
                "Name": "Name1",
                "Value": "Value9"
              },
              {
                "Name": "Name2",
                "Value": "Value0"
              }
            ]
          }
        }
      ],
      "ip": "ip0",
      "session_id": "session_id8",
      "location": {
        "latitude": "latitude4",
        "longitude": "longitude4"
      },
      "device": {
        "platform": "platform6"
      },
      "closed": false
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

