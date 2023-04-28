
# List Charges Response

Response object for listing charges

## Structure

`ListChargesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetChargeResponse[])`](../../doc/models/get-charge-response.md) | Optional | The charge objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "gateway_id": "gateway_id5",
      "amount": 121,
      "status": "status7",
      "currency": "currency5",
      "payment_method": "payment_method5",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": {
        "gateway_id": "gateway_id7",
        "amount": 179,
        "status": "status9",
        "success": true,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "attempt_count": 155,
        "max_attempts": 143,
        "splits": [
          {
            "type": "type9",
            "amount": 111,
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
                  "key0": "metadata0"
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
                }
              ],
              "metadata": {
                "key0": "metadata8"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type5",
                "volume_percentage": 229,
                "delay": 7,
                "days": [
                  239,
                  240,
                  241
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval7",
                "transfer_day": 99
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
            "amount": 112,
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
                  "key0": "metadata1",
                  "key1": "metadata2"
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
                }
              ],
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata6"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type6",
                "volume_percentage": 230,
                "delay": 8,
                "days": [
                  240
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval8",
                "transfer_day": 100
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
        ],
        "next_attempt": "2016-03-13T12:52:32.123Z",
        "transaction_type": "transaction",
        "id": "id7",
        "gateway_response": {
          "code": "code7",
          "errors": [
            {
              "message": "message4"
            },
            {
              "message": "message5"
            }
          ]
        },
        "antifraud_response": {
          "status": "status7",
          "return_code": "return_code5",
          "return_message": "return_message3",
          "provider_name": "provider_name3",
          "score": "score5"
        },
        "metadata": {
          "key0": "metadata8"
        },
        "split": [
          {
            "type": "type5",
            "amount": 125,
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
                "key0": "metadata8"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type1",
                "volume_percentage": 243,
                "delay": 21,
                "days": [
                  253,
                  254,
                  255
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval3",
                "transfer_day": 113
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
          "days": 85,
          "type": "type7",
          "amount": 159
        },
        "fine": {
          "days": 103,
          "type": "type9",
          "amount": 177
        },
        "max_days_to_pay_past_due": 91
      },
      "invoice": {
        "id": "id9",
        "code": "code7",
        "url": "url3",
        "amount": 67,
        "status": "status1",
        "payment_method": "payment_method9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "items": [
          {
            "amount": 126,
            "description": "description6",
            "pricing_scheme": {
              "price": 230,
              "scheme_type": "scheme_type8",
              "price_brackets": [
                {
                  "start_quantity": 183,
                  "price": 121,
                  "end_quantity": 191,
                  "overage_price": 205
                },
                {
                  "start_quantity": 184,
                  "price": 122,
                  "end_quantity": 192,
                  "overage_price": 206
                },
                {
                  "start_quantity": 185,
                  "price": 123,
                  "end_quantity": 193,
                  "overage_price": 207
                }
              ],
              "minimum_price": 70,
              "percentage": 101.36
            },
            "price_bracket": {
              "start_quantity": 100,
              "price": 38,
              "end_quantity": 108,
              "overage_price": 122
            },
            "quantity": 240,
            "name": "name6",
            "subscription_item_id": "subscription_item_id0"
          },
          {
            "amount": 127,
            "description": "description7",
            "pricing_scheme": {
              "price": 231,
              "scheme_type": "scheme_type9",
              "price_brackets": [
                {
                  "start_quantity": 184,
                  "price": 122,
                  "end_quantity": 192,
                  "overage_price": 206
                }
              ],
              "minimum_price": 71,
              "percentage": 101.37
            },
            "price_bracket": {
              "start_quantity": 101,
              "price": 39,
              "end_quantity": 109,
              "overage_price": 123
            },
            "quantity": 241,
            "name": "name7",
            "subscription_item_id": "subscription_item_id1"
          }
        ],
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
          "fb_id": 99,
          "code": "code7",
          "document_type": "document_type7"
        },
        "charge": {},
        "installments": 107,
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
        "subscription": {
          "id": "id5",
          "code": "code3",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval3",
          "interval_count": 43,
          "billing_type": "billing_type1",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id3",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status5",
            "duration": 27,
            "created_at": "created_at1",
            "updated_at": "updated_at9",
            "cycle": 223
          },
          "payment_method": "payment_method5",
          "currency": "currency5",
          "installments": 211,
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
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
            "fb_id": 203,
            "code": "code3",
            "document_type": "document_type3"
          },
          "card": {
            "id": "id9",
            "last_four_digits": "last_four_digits5",
            "brand": "brand3",
            "holder_name": "holder_name5",
            "exp_month": 151,
            "exp_year": 145,
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
              "fb_id": 27,
              "code": "code9",
              "document_type": "document_type9"
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
            {
              "id": "id2",
              "description": "description2",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 178,
                "scheme_type": "scheme_type4",
                "price_brackets": [
                  {
                    "start_quantity": 31,
                    "price": 31,
                    "end_quantity": 39,
                    "overage_price": 53
                  },
                  {
                    "start_quantity": 32,
                    "price": 30,
                    "end_quantity": 40,
                    "overage_price": 54
                  },
                  {
                    "start_quantity": 33,
                    "price": 29,
                    "end_quantity": 41,
                    "overage_price": 55
                  }
                ],
                "minimum_price": 82,
                "percentage": 17.92
              },
              "discounts": [
                {
                  "id": "id3",
                  "value": 15.55,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 43,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description3",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id4",
                  "value": 15.56,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 44,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id5",
                  "value": 15.57,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 45,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id1",
                  "value": 126.83,
                  "increment_type": "increment_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 93,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name2",
              "quantity": 88,
              "cycles": 148,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id3",
              "description": "description3",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 177,
                "scheme_type": "scheme_type5",
                "price_brackets": [
                  {
                    "start_quantity": 32,
                    "price": 30,
                    "end_quantity": 40,
                    "overage_price": 54
                  }
                ],
                "minimum_price": 81,
                "percentage": 17.93
              },
              "discounts": [
                {
                  "id": "id4",
                  "value": 15.56,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 44,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id2",
                  "value": 126.84,
                  "increment_type": "increment_type4",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 92,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id3",
                  "value": 126.85,
                  "increment_type": "increment_type5",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 91,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name3",
              "quantity": 89,
              "cycles": 147,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          ],
          "statement_descriptor": "statement_descriptor5",
          "metadata": {
            "key0": "metadata8",
            "key1": "metadata9",
            "key2": "metadata0"
          },
          "setup": {
            "id": "id9",
            "description": "description9",
            "amount": 235,
            "status": "status9"
          },
          "gateway_affiliation_id": "gateway_affiliation_id1",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 183,
          "minimum_price": 215,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id6",
              "value": 45.68,
              "discount_type": "discount_type4",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 240,
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
                  "price": 58,
                  "scheme_type": "scheme_type4",
                  "price_brackets": [
                    {
                      "start_quantity": 151,
                      "price": 89,
                      "end_quantity": 159,
                      "overage_price": 173
                    },
                    {
                      "start_quantity": 152,
                      "price": 90,
                      "end_quantity": 160,
                      "overage_price": 174
                    }
                  ],
                  "minimum_price": 218,
                  "percentage": 83.12
                },
                "discounts": [
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id1",
                    "value": 192.03,
                    "increment_type": "increment_type3",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 229,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id2",
                    "value": 192.04,
                    "increment_type": "increment_type4",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 228,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id3",
                    "value": 192.05,
                    "increment_type": "increment_type5",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 227,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description3",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name2",
                "quantity": 208,
                "cycles": 228,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id7",
              "value": 45.69,
              "discount_type": "discount_type5",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 241,
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
                  "price": 57,
                  "scheme_type": "scheme_type5",
                  "price_brackets": [
                    {
                      "start_quantity": 152,
                      "price": 90,
                      "end_quantity": 160,
                      "overage_price": 174
                    },
                    {
                      "start_quantity": 153,
                      "price": 91,
                      "end_quantity": 161,
                      "overage_price": 175
                    },
                    {
                      "start_quantity": 154,
                      "price": 92,
                      "end_quantity": 162,
                      "overage_price": 176
                    }
                  ],
                  "minimum_price": 217,
                  "percentage": 83.13
                },
                "discounts": [
                  {},
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id2",
                    "value": 192.04,
                    "increment_type": "increment_type4",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 228,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name3",
                "quantity": 209,
                "cycles": 229,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id8",
              "value": 45.7,
              "discount_type": "discount_type6",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 242,
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
                  "price": 56,
                  "scheme_type": "scheme_type6",
                  "price_brackets": [
                    {
                      "start_quantity": 153,
                      "price": 91,
                      "end_quantity": 161,
                      "overage_price": 175
                    }
                  ],
                  "minimum_price": 216,
                  "percentage": 83.14
                },
                "discounts": [
                  {}
                ],
                "increments": [
                  {
                    "id": "id3",
                    "value": 192.05,
                    "increment_type": "increment_type5",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 227,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description3",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id4",
                    "value": 192.06,
                    "increment_type": "increment_type6",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 226,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description4",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name4",
                "quantity": 210,
                "cycles": 230,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "increments": [
            {
              "id": "id6",
              "value": 90.08,
              "increment_type": "increment_type8",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 184,
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
                  "price": 62,
                  "scheme_type": "scheme_type6",
                  "price_brackets": [
                    {
                      "start_quantity": 147,
                      "price": 85,
                      "end_quantity": 155,
                      "overage_price": 169
                    }
                  ],
                  "minimum_price": 222,
                  "percentage": 136.84
                },
                "discounts": [
                  {
                    "id": "id3",
                    "value": 125.15,
                    "discount_type": "discount_type1",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 251,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description3",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id4",
                    "value": 125.16,
                    "discount_type": "discount_type2",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 252,
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
                "quantity": 40,
                "cycles": 196,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "boleto_due_days": 155,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type5",
                "amount": 115,
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
                    "volume_percentage": 23,
                    "delay": 11,
                    "days": [
                      243,
                      244
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval7",
                    "transfer_day": 189
                  },
                  "code": "code5",
                  "payment_mode": "payment_mode9"
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
                "type": "type4",
                "amount": 116,
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
                    "volume_percentage": 22,
                    "delay": 12,
                    "days": [
                      244,
                      245,
                      246
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval6",
                    "transfer_day": 188
                  },
                  "code": "code6",
                  "payment_mode": "payment_mode8"
                },
                "gateway_id": "gateway_id4",
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
              "days": 191,
              "type": "type5",
              "amount": 9
            },
            "fine": {
              "days": 99,
              "type": "type3",
              "amount": 173
            },
            "max_days_to_pay_past_due": 87
          },
          "manual_billing": true
        },
        "cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id9",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {
            "id": "id5",
            "code": "code3",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval3",
            "interval_count": 95,
            "billing_type": "billing_type9",
            "current_cycle": {},
            "payment_method": "payment_method5",
            "currency": "currency5",
            "installments": 7,
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
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
                  "key0": "metadata2"
                },
                "line_1": "line_15",
                "line_2": "line_29",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata2"
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
              "fb_id": 255,
              "code": "code3",
              "document_type": "document_type3"
            },
            "card": {
              "id": "id9",
              "last_four_digits": "last_four_digits5",
              "brand": "brand3",
              "holder_name": "holder_name5",
              "exp_month": 99,
              "exp_year": 197,
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street1",
                "number": "number1",
                "zip_code": "zip_code5",
                "neighborhood": "neighborhood7",
                "city": "city1",
                "state": "state7",
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
                "document": "document3",
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
                    "key0": "metadata4",
                    "key1": "metadata3"
                  },
                  "line_1": "line_19",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata6",
                  "key1": "metadata5",
                  "key2": "metadata4"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code1",
                    "number": "number9",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number1",
                    "area_code": "area_code1"
                  }
                },
                "fb_id": 185,
                "code": "code7",
                "document_type": "document_type7"
              },
              "metadata": {
                "key0": "metadata6"
              },
              "type": "type1",
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
                  "price": 126,
                  "scheme_type": "scheme_type4",
                  "price_brackets": [
                    {
                      "start_quantity": 83,
                      "price": 21,
                      "end_quantity": 91,
                      "overage_price": 105
                    }
                  ],
                  "minimum_price": 226,
                  "percentage": 154.12
                },
                "discounts": [
                  {
                    "id": "id3",
                    "value": 151.75,
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
                  {
                    "id": "id1",
                    "value": 7.03,
                    "increment_type": "increment_type3",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 41,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id2",
                    "value": 7.04,
                    "increment_type": "increment_type4",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 40,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name2",
                "quantity": 140,
                "cycles": 160,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              {
                "id": "id3",
                "description": "description3",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 125,
                  "scheme_type": "scheme_type5",
                  "price_brackets": [
                    {
                      "start_quantity": 84,
                      "price": 22,
                      "end_quantity": 92,
                      "overage_price": 106
                    },
                    {
                      "start_quantity": 85,
                      "price": 23,
                      "end_quantity": 93,
                      "overage_price": 107
                    }
                  ],
                  "minimum_price": 227,
                  "percentage": 154.13
                },
                "discounts": [
                  {
                    "id": "id4",
                    "value": 151.76,
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
                    "value": 151.77,
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
                  {
                    "id": "id2",
                    "value": 7.04,
                    "increment_type": "increment_type4",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 40,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id3",
                    "value": 7.05,
                    "increment_type": "increment_type5",
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
                    "value": 7.06,
                    "increment_type": "increment_type6",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 38,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description4",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name3",
                "quantity": 141,
                "cycles": 161,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              {
                "id": "id4",
                "description": "description4",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 124,
                  "scheme_type": "scheme_type6",
                  "price_brackets": [
                    {
                      "start_quantity": 85,
                      "price": 23,
                      "end_quantity": 93,
                      "overage_price": 107
                    },
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
                  "minimum_price": 228,
                  "percentage": 154.14
                },
                "discounts": [
                  {
                    "id": "id5",
                    "value": 151.77,
                    "discount_type": "discount_type3",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 97,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description5",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id6",
                    "value": 151.78,
                    "discount_type": "discount_type4",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 98,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description6",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id7",
                    "value": 151.79,
                    "discount_type": "discount_type5",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 99,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id3",
                    "value": 7.05,
                    "increment_type": "increment_type5",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 39,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description3",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name4",
                "quantity": 142,
                "cycles": 162,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            ],
            "statement_descriptor": "statement_descriptor5",
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata3",
              "key2": "metadata2"
            },
            "setup": {
              "id": "id9",
              "description": "description9",
              "amount": 31,
              "status": "status1"
            },
            "gateway_affiliation_id": "gateway_affiliation_id1",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 235,
            "minimum_price": 93,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id6",
                "value": 181.88,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 36,
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
                    "price": 250,
                    "scheme_type": "scheme_type4",
                    "price_brackets": [
                      {
                        "start_quantity": 203,
                        "price": 141,
                        "end_quantity": 211,
                        "overage_price": 225
                      },
                      {
                        "start_quantity": 204,
                        "price": 142,
                        "end_quantity": 212,
                        "overage_price": 226
                      },
                      {
                        "start_quantity": 205,
                        "price": 143,
                        "end_quantity": 213,
                        "overage_price": 227
                      }
                    ],
                    "minimum_price": 90,
                    "percentage": 219.32
                  },
                  "discounts": [
                    {},
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id1",
                      "value": 72.23,
                      "increment_type": "increment_type3",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 79,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name2",
                  "quantity": 4,
                  "cycles": 24,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "increments": [
              {
                "id": "id4",
                "value": 37.16,
                "increment_type": "increment_type6",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 100,
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
                    "price": 146,
                    "scheme_type": "scheme_type8",
                    "price_brackets": [
                      {
                        "start_quantity": 63,
                        "price": 255,
                        "end_quantity": 71,
                        "overage_price": 85
                      },
                      {
                        "start_quantity": 64,
                        "price": 254,
                        "end_quantity": 72,
                        "overage_price": 86
                      },
                      {
                        "start_quantity": 65,
                        "price": 253,
                        "end_quantity": 73,
                        "overage_price": 87
                      }
                    ],
                    "minimum_price": 50,
                    "percentage": 189.76
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 72.23,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 79,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id2",
                      "value": 72.24,
                      "discount_type": "discount_type0",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 80,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description2",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id3",
                      "value": 72.25,
                      "discount_type": "discount_type1",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 81,
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
                  "quantity": 124,
                  "cycles": 112,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id5",
                "value": 37.17,
                "increment_type": "increment_type7",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 99,
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
                    "price": 147,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 62,
                        "price": 0,
                        "end_quantity": 70,
                        "overage_price": 84
                      },
                      {
                        "start_quantity": 63,
                        "price": 255,
                        "end_quantity": 71,
                        "overage_price": 85
                      }
                    ],
                    "minimum_price": 51,
                    "percentage": 189.75
                  },
                  "discounts": [
                    {
                      "id": "id2",
                      "value": 72.24,
                      "discount_type": "discount_type0",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 80,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description2",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {},
                    {}
                  ],
                  "subscription": {},
                  "name": "name1",
                  "quantity": 125,
                  "cycles": 111,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "boleto_due_days": 207,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type5",
                  "amount": 167,
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
                      "type": "type1",
                      "volume_percentage": 227,
                      "delay": 63,
                      "days": [
                        39,
                        40,
                        41
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval7",
                      "transfer_day": 137
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
                  "amount": 168,
                  "recipient": {
                    "id": "id8",
                    "name": "name8",
                    "email": "email8",
                    "document": "document2",
                    "description": "description8",
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
                      "type": "type6",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata3",
                        "key1": "metadata2"
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
                      "key0": "metadata5",
                      "key1": "metadata4",
                      "key2": "metadata3"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type2",
                      "volume_percentage": 226,
                      "delay": 64,
                      "days": [
                        40
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval6",
                      "transfer_day": 136
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
                  "amount": 169,
                  "recipient": {
                    "id": "id9",
                    "name": "name9",
                    "email": "email7",
                    "document": "document3",
                    "description": "description9",
                    "type": "type1",
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
                        "key0": "metadata2",
                        "key1": "metadata1",
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
                      "key0": "metadata6",
                      "key1": "metadata5"
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
                      "transfer_interval": "transfer_interval5",
                      "transfer_day": 135
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
              ]
            },
            "boleto": {
              "interest": {
                "days": 139,
                "type": "type5",
                "amount": 213
              },
              "fine": {
                "days": 151,
                "type": "type7",
                "amount": 225
              },
              "max_days_to_pay_past_due": 139
            },
            "manual_billing": true
          },
          "status": "status1",
          "duration": 21,
          "created_at": "created_at7",
          "updated_at": "updated_at5",
          "cycle": 217
        },
        "shipping": {
          "amount": 165,
          "description": "description3",
          "recipient_name": "recipient_name1",
          "recipient_phone": "recipient_phone5",
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
              "address": {},
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata1"
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
              "fb_id": 213,
              "code": "code7",
              "document_type": "document_type7"
            },
            "metadata": {
              "key0": "metadata0"
            },
            "line_1": "line_13",
            "line_2": "line_27",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "max_delivery_date": "2016-03-13T12:52:32.123Z",
          "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
          "type": "type3"
        },
        "metadata": {
          "key0": "metadata0",
          "key1": "metadata9"
        },
        "due_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "seen_at": "2016-03-13T12:52:32.123Z",
        "total_discount": 175,
        "total_increment": 247,
        "subscription_id": "subscription_id9"
      },
      "order": {
        "id": "id9",
        "code": "code7",
        "currency": "currency9",
        "items": [
          {
            "id": "id6",
            "amount": 148,
            "description": "description6",
            "quantity": 6,
            "category": "category4",
            "code": "code4"
          },
          {
            "id": "id7",
            "amount": 149,
            "description": "description7",
            "quantity": 7,
            "category": "category5",
            "code": "code5"
          },
          {
            "id": "id8",
            "amount": 150,
            "description": "description8",
            "quantity": 8,
            "category": "category6",
            "code": "code6"
          }
        ],
        "customer": {
          "id": "id9",
          "name": "name9",
          "email": "email7",
          "delinquent": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document3",
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
              "key0": "metadata4"
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
              "country_code": "country_code9",
              "number": "number1",
              "area_code": "area_code1"
            }
          },
          "fb_id": 121,
          "code": "code7",
          "document_type": "document_type7"
        },
        "status": "status1",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "charges": [
          {}
        ],
        "invoice_url": "invoice_url1",
        "shipping": {
          "amount": 187,
          "description": "description3",
          "recipient_name": "recipient_name1",
          "recipient_phone": "recipient_phone5",
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
              "address": {},
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
              "fb_id": 235,
              "code": "code7",
              "document_type": "document_type7"
            },
            "metadata": {
              "key0": "metadata0",
              "key1": "metadata1"
            },
            "line_1": "line_13",
            "line_2": "line_27",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "max_delivery_date": "2016-03-13T12:52:32.123Z",
          "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
          "type": "type3"
        },
        "metadata": {
          "key0": "metadata6",
          "key1": "metadata5"
        },
        "checkouts": [
          {
            "id": "id6",
            "amount": 98,
            "default_payment_method": "default_payment_method6",
            "success_url": "success_url8",
            "payment_url": "payment_url0",
            "gateway_affiliation_id": "gateway_affiliation_id2",
            "accepted_payment_methods": [
              "accepted_payment_methods9"
            ],
            "status": "status8",
            "skip_checkout_success_page": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "customer_editable": false,
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
              "fb_id": 130,
              "code": "code4",
              "document_type": "document_type4"
            },
            "billingaddress": {
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
                  "key0": "metadata5",
                  "key1": "metadata6",
                  "key2": "metadata7"
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
                "fb_id": 212,
                "code": "code2",
                "document_type": "document_type2"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6"
              },
              "line_1": "line_18",
              "line_2": "line_22",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "credit_card": {
              "statementDescriptor": "statementDescriptor0",
              "installments": [
                {
                  "number": "number7",
                  "total": 55
                },
                {
                  "number": "number8",
                  "total": 56
                }
              ],
              "authentication": {
                "type": "type6",
                "threed_secure": {
                  "mpi": "mpi2",
                  "eci": "eci4",
                  "cavv": "cavv0",
                  "transaction_Id": "transaction_Id0",
                  "success_url": "success_url6"
                }
              }
            },
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions4"
            },
            "billing_address_editable": false,
            "shipping": {
              "amount": 196,
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
                  "fb_id": 244,
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
            "shippable": false,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency6",
            "debit_card": {
              "statement_descriptor": "statement_descriptor0",
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
            "bank_transfer": {
              "bank": [
                "bank1"
              ]
            },
            "accepted_brands": [
              "accepted_brands2"
            ],
            "pix": {
              "expires_at": "2016-03-13T12:52:32.123Z",
              "additional_information": [
                {
                  "Name": "Name3",
                  "Value": "Value1"
                }
              ]
            }
          },
          {
            "id": "id7",
            "amount": 99,
            "default_payment_method": "default_payment_method7",
            "success_url": "success_url9",
            "payment_url": "payment_url1",
            "gateway_affiliation_id": "gateway_affiliation_id3",
            "accepted_payment_methods": [
              "accepted_payment_methods0",
              "accepted_payment_methods1"
            ],
            "status": "status9",
            "skip_checkout_success_page": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "customer_editable": true,
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
                "key0": "metadata2",
                "key1": "metadata1"
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
              "fb_id": 131,
              "code": "code5",
              "document_type": "document_type5"
            },
            "billingaddress": {
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
                  "key0": "metadata6"
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
                "fb_id": 213,
                "code": "code3",
                "document_type": "document_type3"
              },
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata7",
                "key2": "metadata8"
              },
              "line_1": "line_19",
              "line_2": "line_23",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "credit_card": {
              "statementDescriptor": "statementDescriptor1",
              "installments": [
                {
                  "number": "number8",
                  "total": 56
                },
                {
                  "number": "number9",
                  "total": 57
                },
                {
                  "number": "number0",
                  "total": 58
                }
              ],
              "authentication": {
                "type": "type7",
                "threed_secure": {
                  "mpi": "mpi3",
                  "eci": "eci5",
                  "cavv": "cavv1",
                  "transaction_Id": "transaction_Id1",
                  "success_url": "success_url7"
                }
              }
            },
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions5"
            },
            "billing_address_editable": true,
            "shipping": {
              "amount": 197,
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
                  "fb_id": 245,
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
            "shippable": true,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency7",
            "debit_card": {
              "statement_descriptor": "statement_descriptor1",
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
            "bank_transfer": {
              "bank": [
                "bank2",
                "bank3"
              ]
            },
            "accepted_brands": [
              "accepted_brands3",
              "accepted_brands4"
            ],
            "pix": {
              "expires_at": "2016-03-13T12:52:32.123Z",
              "additional_information": [
                {
                  "Name": "Name4",
                  "Value": "Value2"
                },
                {
                  "Name": "Name5",
                  "Value": "Value3"
                }
              ]
            }
          }
        ],
        "ip": "ip3",
        "session_id": "session_id1",
        "location": {
          "latitude": "latitude7",
          "longitude": "longitude7"
        },
        "device": {
          "platform": "platform9"
        },
        "closed": true
      },
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
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "paid_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "canceled_amount": 231,
      "paid_amount": 213,
      "interest_and_fine_paid": 217,
      "recurrency_cycle": "recurrency_cycle9"
    },
    {
      "id": "id6",
      "code": "code4",
      "gateway_id": "gateway_id6",
      "amount": 122,
      "status": "status8",
      "currency": "currency6",
      "payment_method": "payment_method6",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": {
        "gateway_id": "gateway_id8",
        "amount": 180,
        "status": "status0",
        "success": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "attempt_count": 156,
        "max_attempts": 144,
        "splits": [
          {
            "type": "type0",
            "amount": 112,
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
                  "key0": "metadata1",
                  "key1": "metadata2"
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
                }
              ],
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata6"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type6",
                "volume_percentage": 230,
                "delay": 8,
                "days": [
                  240
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval8",
                "transfer_day": 100
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
            "amount": 113,
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
                  "key1": "metadata3",
                  "key2": "metadata4"
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
                "key0": "metadata6",
                "key1": "metadata5",
                "key2": "metadata4"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type7",
                "volume_percentage": 231,
                "delay": 9,
                "days": [
                  241,
                  242
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval9",
                "transfer_day": 101
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
            "amount": 114,
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
                  "key0": "metadata3"
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
                "key0": "metadata5"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type8",
                "volume_percentage": 232,
                "delay": 10,
                "days": [
                  242,
                  243,
                  244
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval0",
                "transfer_day": 102
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
        ],
        "next_attempt": "2016-03-13T12:52:32.123Z",
        "transaction_type": "transaction",
        "id": "id8",
        "gateway_response": {
          "code": "code8",
          "errors": [
            {
              "message": "message5"
            },
            {
              "message": "message6"
            },
            {
              "message": "message7"
            }
          ]
        },
        "antifraud_response": {
          "status": "status8",
          "return_code": "return_code6",
          "return_message": "return_message4",
          "provider_name": "provider_name4",
          "score": "score6"
        },
        "metadata": {
          "key0": "metadata9",
          "key1": "metadata0"
        },
        "split": [
          {
            "type": "type6",
            "amount": 126,
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
                "key0": "metadata9",
                "key1": "metadata0"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type2",
                "volume_percentage": 244,
                "delay": 22,
                "days": [
                  254
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval4",
                "transfer_day": 114
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
            "amount": 127,
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
                "key1": "metadata1",
                "key2": "metadata2"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type3",
                "volume_percentage": 245,
                "delay": 23,
                "days": [
                  255,
                  0
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval5",
                "transfer_day": 115
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
        "interest": {
          "days": 86,
          "type": "type8",
          "amount": 160
        },
        "fine": {
          "days": 104,
          "type": "type0",
          "amount": 178
        },
        "max_days_to_pay_past_due": 92
      },
      "invoice": {
        "id": "id0",
        "code": "code8",
        "url": "url4",
        "amount": 68,
        "status": "status2",
        "payment_method": "payment_method0",
        "created_at": "2016-03-13T12:52:32.123Z",
        "items": [
          {
            "amount": 127,
            "description": "description7",
            "pricing_scheme": {
              "price": 231,
              "scheme_type": "scheme_type9",
              "price_brackets": [
                {
                  "start_quantity": 184,
                  "price": 122,
                  "end_quantity": 192,
                  "overage_price": 206
                }
              ],
              "minimum_price": 71,
              "percentage": 101.37
            },
            "price_bracket": {
              "start_quantity": 101,
              "price": 39,
              "end_quantity": 109,
              "overage_price": 123
            },
            "quantity": 241,
            "name": "name7",
            "subscription_item_id": "subscription_item_id1"
          },
          {
            "amount": 128,
            "description": "description8",
            "pricing_scheme": {
              "price": 232,
              "scheme_type": "scheme_type0",
              "price_brackets": [
                {
                  "start_quantity": 185,
                  "price": 123,
                  "end_quantity": 193,
                  "overage_price": 207
                },
                {
                  "start_quantity": 186,
                  "price": 124,
                  "end_quantity": 194,
                  "overage_price": 208
                }
              ],
              "minimum_price": 72,
              "percentage": 101.38
            },
            "price_bracket": {
              "start_quantity": 102,
              "price": 40,
              "end_quantity": 110,
              "overage_price": 124
            },
            "quantity": 242,
            "name": "name8",
            "subscription_item_id": "subscription_item_id2"
          },
          {
            "amount": 129,
            "description": "description9",
            "pricing_scheme": {
              "price": 233,
              "scheme_type": "scheme_type1",
              "price_brackets": [
                {
                  "start_quantity": 186,
                  "price": 124,
                  "end_quantity": 194,
                  "overage_price": 208
                },
                {
                  "start_quantity": 187,
                  "price": 125,
                  "end_quantity": 195,
                  "overage_price": 209
                },
                {
                  "start_quantity": 188,
                  "price": 126,
                  "end_quantity": 196,
                  "overage_price": 210
                }
              ],
              "minimum_price": 73,
              "percentage": 101.39
            },
            "price_bracket": {
              "start_quantity": 103,
              "price": 41,
              "end_quantity": 111,
              "overage_price": 125
            },
            "quantity": 243,
            "name": "name9",
            "subscription_item_id": "subscription_item_id3"
          }
        ],
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
          "fb_id": 100,
          "code": "code8",
          "document_type": "document_type8"
        },
        "charge": {},
        "installments": 108,
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
        "subscription": {
          "id": "id6",
          "code": "code4",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval4",
          "interval_count": 44,
          "billing_type": "billing_type0",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id4",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status6",
            "duration": 28,
            "created_at": "created_at2",
            "updated_at": "updated_at0",
            "cycle": 224
          },
          "payment_method": "payment_method4",
          "currency": "currency6",
          "installments": 212,
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
                "key0": "metadata9"
              },
              "line_1": "line_16",
              "line_2": "line_20",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata7"
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
            "fb_id": 204,
            "code": "code4",
            "document_type": "document_type4"
          },
          "card": {
            "id": "id0",
            "last_four_digits": "last_four_digits6",
            "brand": "brand4",
            "holder_name": "holder_name6",
            "exp_month": 150,
            "exp_year": 146,
            "status": "status8",
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
              "fb_id": 26,
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
            {
              "id": "id3",
              "description": "description3",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 177,
                "scheme_type": "scheme_type5",
                "price_brackets": [
                  {
                    "start_quantity": 32,
                    "price": 30,
                    "end_quantity": 40,
                    "overage_price": 54
                  }
                ],
                "minimum_price": 81,
                "percentage": 17.93
              },
              "discounts": [
                {
                  "id": "id4",
                  "value": 15.56,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 44,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id2",
                  "value": 126.84,
                  "increment_type": "increment_type4",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 92,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id3",
                  "value": 126.85,
                  "increment_type": "increment_type5",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 91,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name3",
              "quantity": 89,
              "cycles": 147,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id4",
              "description": "description4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 176,
                "scheme_type": "scheme_type6",
                "price_brackets": [
                  {
                    "start_quantity": 33,
                    "price": 29,
                    "end_quantity": 41,
                    "overage_price": 55
                  },
                  {
                    "start_quantity": 34,
                    "price": 28,
                    "end_quantity": 42,
                    "overage_price": 56
                  }
                ],
                "minimum_price": 80,
                "percentage": 17.94
              },
              "discounts": [
                {
                  "id": "id5",
                  "value": 15.57,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 45,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id6",
                  "value": 15.58,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 46,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id3",
                  "value": 126.85,
                  "increment_type": "increment_type5",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 91,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id4",
                  "value": 126.86,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 90,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id5",
                  "value": 126.87,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 89,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name4",
              "quantity": 90,
              "cycles": 146,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id5",
              "description": "description5",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 175,
                "scheme_type": "scheme_type7",
                "price_brackets": [
                  {
                    "start_quantity": 34,
                    "price": 28,
                    "end_quantity": 42,
                    "overage_price": 56
                  },
                  {
                    "start_quantity": 35,
                    "price": 27,
                    "end_quantity": 43,
                    "overage_price": 57
                  },
                  {
                    "start_quantity": 36,
                    "price": 26,
                    "end_quantity": 44,
                    "overage_price": 58
                  }
                ],
                "minimum_price": 79,
                "percentage": 17.95
              },
              "discounts": [
                {
                  "id": "id6",
                  "value": 15.58,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 46,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id7",
                  "value": 15.59,
                  "discount_type": "discount_type5",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 47,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id8",
                  "value": 15.6,
                  "discount_type": "discount_type6",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 48,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id4",
                  "value": 126.86,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 90,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name5",
              "quantity": 91,
              "cycles": 145,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          ],
          "statement_descriptor": "statement_descriptor6",
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata8"
          },
          "setup": {
            "id": "id0",
            "description": "description0",
            "amount": 236,
            "status": "status8"
          },
          "gateway_affiliation_id": "gateway_affiliation_id2",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 184,
          "minimum_price": 214,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id7",
              "value": 45.69,
              "discount_type": "discount_type5",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 241,
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
                  "price": 57,
                  "scheme_type": "scheme_type5",
                  "price_brackets": [
                    {
                      "start_quantity": 152,
                      "price": 90,
                      "end_quantity": 160,
                      "overage_price": 174
                    },
                    {
                      "start_quantity": 153,
                      "price": 91,
                      "end_quantity": 161,
                      "overage_price": 175
                    },
                    {
                      "start_quantity": 154,
                      "price": 92,
                      "end_quantity": 162,
                      "overage_price": 176
                    }
                  ],
                  "minimum_price": 217,
                  "percentage": 83.13
                },
                "discounts": [
                  {},
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id2",
                    "value": 192.04,
                    "increment_type": "increment_type4",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 228,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name3",
                "quantity": 209,
                "cycles": 229,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "increments": [
            {
              "id": "id5",
              "value": 90.07,
              "increment_type": "increment_type7",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 185,
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
                  "price": 61,
                  "scheme_type": "scheme_type7",
                  "price_brackets": [
                    {
                      "start_quantity": 148,
                      "price": 86,
                      "end_quantity": 156,
                      "overage_price": 170
                    },
                    {
                      "start_quantity": 149,
                      "price": 87,
                      "end_quantity": 157,
                      "overage_price": 171
                    }
                  ],
                  "minimum_price": 221,
                  "percentage": 136.85
                },
                "discounts": [
                  {
                    "id": "id2",
                    "value": 125.14,
                    "discount_type": "discount_type0",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 250,
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
                "quantity": 39,
                "cycles": 197,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id4",
              "value": 90.06,
              "increment_type": "increment_type6",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 186,
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
                  "price": 60,
                  "scheme_type": "scheme_type8",
                  "price_brackets": [
                    {
                      "start_quantity": 149,
                      "price": 87,
                      "end_quantity": 157,
                      "overage_price": 171
                    },
                    {
                      "start_quantity": 150,
                      "price": 88,
                      "end_quantity": 158,
                      "overage_price": 172
                    },
                    {
                      "start_quantity": 151,
                      "price": 89,
                      "end_quantity": 159,
                      "overage_price": 173
                    }
                  ],
                  "minimum_price": 220,
                  "percentage": 136.86
                },
                "discounts": [
                  {
                    "id": "id1",
                    "value": 125.13,
                    "discount_type": "discount_type9",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 249,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id2",
                    "value": 125.14,
                    "discount_type": "discount_type0",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 250,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id3",
                    "value": 125.15,
                    "discount_type": "discount_type1",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 251,
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
                "quantity": 38,
                "cycles": 198,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "boleto_due_days": 156,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type4",
                "amount": 116,
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
                    "volume_percentage": 22,
                    "delay": 12,
                    "days": [
                      244,
                      245,
                      246
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval6",
                    "transfer_day": 188
                  },
                  "code": "code6",
                  "payment_mode": "payment_mode8"
                },
                "gateway_id": "gateway_id4",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee2"
                },
                "id": "id6"
              },
              {
                "type": "type3",
                "amount": 117,
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
                    "volume_percentage": 21,
                    "delay": 13,
                    "days": [
                      245
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval5",
                    "transfer_day": 187
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
              },
              {
                "type": "type2",
                "amount": 118,
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
                    "volume_percentage": 20,
                    "delay": 14,
                    "days": [
                      246,
                      247
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval4",
                    "transfer_day": 186
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
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 190,
              "type": "type6",
              "amount": 8
            },
            "fine": {
              "days": 100,
              "type": "type2",
              "amount": 174
            },
            "max_days_to_pay_past_due": 88
          },
          "manual_billing": false
        },
        "cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id0",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {
            "id": "id6",
            "code": "code4",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval4",
            "interval_count": 96,
            "billing_type": "billing_type0",
            "current_cycle": {},
            "payment_method": "payment_method6",
            "currency": "currency6",
            "installments": 8,
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
                  "key0": "metadata3",
                  "key1": "metadata4"
                },
                "line_1": "line_16",
                "line_2": "line_20",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata2",
                "key2": "metadata1"
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
              "fb_id": 0,
              "code": "code4",
              "document_type": "document_type4"
            },
            "card": {
              "id": "id0",
              "last_four_digits": "last_four_digits6",
              "brand": "brand4",
              "holder_name": "holder_name6",
              "exp_month": 98,
              "exp_year": 198,
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
                    "key0": "metadata3",
                    "key1": "metadata2",
                    "key2": "metadata1"
                  },
                  "line_1": "line_10",
                  "line_2": "line_24",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata7",
                  "key1": "metadata6"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code2",
                    "number": "number0",
                    "area_code": "area_code2"
                  },
                  "mobile_phone": {
                    "country_code": "country_code8",
                    "number": "number0",
                    "area_code": "area_code2"
                  }
                },
                "fb_id": 186,
                "code": "code8",
                "document_type": "document_type8"
              },
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata6",
                "key2": "metadata5"
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
                  "price": 125,
                  "scheme_type": "scheme_type5",
                  "price_brackets": [
                    {
                      "start_quantity": 84,
                      "price": 22,
                      "end_quantity": 92,
                      "overage_price": 106
                    },
                    {
                      "start_quantity": 85,
                      "price": 23,
                      "end_quantity": 93,
                      "overage_price": 107
                    }
                  ],
                  "minimum_price": 227,
                  "percentage": 154.13
                },
                "discounts": [
                  {
                    "id": "id4",
                    "value": 151.76,
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
                    "value": 151.77,
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
                  {
                    "id": "id2",
                    "value": 7.04,
                    "increment_type": "increment_type4",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 40,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id3",
                    "value": 7.05,
                    "increment_type": "increment_type5",
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
                    "value": 7.06,
                    "increment_type": "increment_type6",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 38,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description4",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name3",
                "quantity": 141,
                "cycles": 161,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            ],
            "statement_descriptor": "statement_descriptor6",
            "metadata": {
              "key0": "metadata3"
            },
            "setup": {
              "id": "id0",
              "description": "description0",
              "amount": 32,
              "status": "status2"
            },
            "gateway_affiliation_id": "gateway_affiliation_id2",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 236,
            "minimum_price": 94,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id7",
                "value": 181.89,
                "discount_type": "discount_type5",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 37,
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
                    "price": 251,
                    "scheme_type": "scheme_type5",
                    "price_brackets": [
                      {
                        "start_quantity": 204,
                        "price": 142,
                        "end_quantity": 212,
                        "overage_price": 226
                      }
                    ],
                    "minimum_price": 91,
                    "percentage": 219.33
                  },
                  "discounts": [
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id2",
                      "value": 72.24,
                      "increment_type": "increment_type4",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 80,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description2",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id3",
                      "value": 72.25,
                      "increment_type": "increment_type5",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 81,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description3",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name3",
                  "quantity": 5,
                  "cycles": 25,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id8",
                "value": 181.9,
                "discount_type": "discount_type6",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 38,
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
                    "price": 252,
                    "scheme_type": "scheme_type6",
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
                    "minimum_price": 92,
                    "percentage": 219.34
                  },
                  "discounts": [
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id3",
                      "value": 72.25,
                      "increment_type": "increment_type5",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 81,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description3",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id4",
                      "value": 72.26,
                      "increment_type": "increment_type6",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 82,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description4",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id5",
                      "value": 72.27,
                      "increment_type": "increment_type7",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 83,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description5",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name4",
                  "quantity": 6,
                  "cycles": 26,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "increments": [
              {
                "id": "id5",
                "value": 37.17,
                "increment_type": "increment_type7",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 99,
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
                    "price": 147,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 62,
                        "price": 0,
                        "end_quantity": 70,
                        "overage_price": 84
                      },
                      {
                        "start_quantity": 63,
                        "price": 255,
                        "end_quantity": 71,
                        "overage_price": 85
                      }
                    ],
                    "minimum_price": 51,
                    "percentage": 189.75
                  },
                  "discounts": [
                    {
                      "id": "id2",
                      "value": 72.24,
                      "discount_type": "discount_type0",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 80,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description2",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {},
                    {}
                  ],
                  "subscription": {},
                  "name": "name1",
                  "quantity": 125,
                  "cycles": 111,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id6",
                "value": 37.18,
                "increment_type": "increment_type8",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 98,
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
                    "scheme_type": "scheme_type6",
                    "price_brackets": [
                      {
                        "start_quantity": 61,
                        "price": 1,
                        "end_quantity": 69,
                        "overage_price": 83
                      }
                    ],
                    "minimum_price": 52,
                    "percentage": 189.74
                  },
                  "discounts": [
                    {
                      "id": "id3",
                      "value": 72.25,
                      "discount_type": "discount_type1",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 81,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description3",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id4",
                      "value": 72.26,
                      "discount_type": "discount_type2",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 82,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description4",
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
                  "name": "name2",
                  "quantity": 126,
                  "cycles": 110,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id7",
                "value": 37.19,
                "increment_type": "increment_type9",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 97,
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
                        "start_quantity": 60,
                        "price": 2,
                        "end_quantity": 68,
                        "overage_price": 82
                      },
                      {
                        "start_quantity": 61,
                        "price": 1,
                        "end_quantity": 69,
                        "overage_price": 83
                      },
                      {
                        "start_quantity": 62,
                        "price": 0,
                        "end_quantity": 70,
                        "overage_price": 84
                      }
                    ],
                    "minimum_price": 53,
                    "percentage": 189.73
                  },
                  "discounts": [
                    {
                      "id": "id4",
                      "value": 72.26,
                      "discount_type": "discount_type2",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 82,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description4",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id5",
                      "value": 72.27,
                      "discount_type": "discount_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 83,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description5",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id6",
                      "value": 72.28,
                      "discount_type": "discount_type4",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 84,
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
                  "quantity": 127,
                  "cycles": 109,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "boleto_due_days": 208,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type6",
                  "amount": 168,
                  "recipient": {
                    "id": "id8",
                    "name": "name8",
                    "email": "email8",
                    "document": "document2",
                    "description": "description8",
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
                      "type": "type6",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata3",
                        "key1": "metadata2"
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
                      "key0": "metadata5",
                      "key1": "metadata4",
                      "key2": "metadata3"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type2",
                      "volume_percentage": 226,
                      "delay": 64,
                      "days": [
                        40
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval6",
                      "transfer_day": 136
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
                "days": 138,
                "type": "type6",
                "amount": 212
              },
              "fine": {
                "days": 152,
                "type": "type8",
                "amount": 226
              },
              "max_days_to_pay_past_due": 140
            },
            "manual_billing": false
          },
          "status": "status2",
          "duration": 22,
          "created_at": "created_at8",
          "updated_at": "updated_at6",
          "cycle": 218
        },
        "shipping": {
          "amount": 166,
          "description": "description4",
          "recipient_name": "recipient_name2",
          "recipient_phone": "recipient_phone6",
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
                "key1": "metadata2",
                "key2": "metadata3"
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
              "fb_id": 214,
              "code": "code8",
              "document_type": "document_type8"
            },
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata2"
            },
            "line_1": "line_14",
            "line_2": "line_28",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "max_delivery_date": "2016-03-13T12:52:32.123Z",
          "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
          "type": "type4"
        },
        "metadata": {
          "key0": "metadata9",
          "key1": "metadata8",
          "key2": "metadata7"
        },
        "due_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "seen_at": "2016-03-13T12:52:32.123Z",
        "total_discount": 176,
        "total_increment": 248,
        "subscription_id": "subscription_id0"
      },
      "order": {
        "id": "id0",
        "code": "code8",
        "currency": "currency0",
        "items": [
          {
            "id": "id7",
            "amount": 149,
            "description": "description7",
            "quantity": 7,
            "category": "category5",
            "code": "code5"
          }
        ],
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
              "key0": "metadata3",
              "key1": "metadata2"
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
              "country_code": "country_code8",
              "number": "number0",
              "area_code": "area_code2"
            }
          },
          "fb_id": 122,
          "code": "code8",
          "document_type": "document_type8"
        },
        "status": "status2",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "charges": [
          {},
          {}
        ],
        "invoice_url": "invoice_url2",
        "shipping": {
          "amount": 188,
          "description": "description4",
          "recipient_name": "recipient_name2",
          "recipient_phone": "recipient_phone6",
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
              "fb_id": 236,
              "code": "code8",
              "document_type": "document_type8"
            },
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata2",
              "key2": "metadata3"
            },
            "line_1": "line_14",
            "line_2": "line_28",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "max_delivery_date": "2016-03-13T12:52:32.123Z",
          "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
          "type": "type4"
        },
        "metadata": {
          "key0": "metadata7"
        },
        "checkouts": [
          {
            "id": "id7",
            "amount": 99,
            "default_payment_method": "default_payment_method7",
            "success_url": "success_url9",
            "payment_url": "payment_url1",
            "gateway_affiliation_id": "gateway_affiliation_id3",
            "accepted_payment_methods": [
              "accepted_payment_methods0",
              "accepted_payment_methods1"
            ],
            "status": "status9",
            "skip_checkout_success_page": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "customer_editable": true,
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
                "key0": "metadata2",
                "key1": "metadata1"
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
              "fb_id": 131,
              "code": "code5",
              "document_type": "document_type5"
            },
            "billingaddress": {
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
                  "key0": "metadata6"
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
                "fb_id": 213,
                "code": "code3",
                "document_type": "document_type3"
              },
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata7",
                "key2": "metadata8"
              },
              "line_1": "line_19",
              "line_2": "line_23",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "credit_card": {
              "statementDescriptor": "statementDescriptor1",
              "installments": [
                {
                  "number": "number8",
                  "total": 56
                },
                {
                  "number": "number9",
                  "total": 57
                },
                {
                  "number": "number0",
                  "total": 58
                }
              ],
              "authentication": {
                "type": "type7",
                "threed_secure": {
                  "mpi": "mpi3",
                  "eci": "eci5",
                  "cavv": "cavv1",
                  "transaction_Id": "transaction_Id1",
                  "success_url": "success_url7"
                }
              }
            },
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions5"
            },
            "billing_address_editable": true,
            "shipping": {
              "amount": 197,
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
                  "fb_id": 245,
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
            "shippable": true,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency7",
            "debit_card": {
              "statement_descriptor": "statement_descriptor1",
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
            "bank_transfer": {
              "bank": [
                "bank2",
                "bank3"
              ]
            },
            "accepted_brands": [
              "accepted_brands3",
              "accepted_brands4"
            ],
            "pix": {
              "expires_at": "2016-03-13T12:52:32.123Z",
              "additional_information": [
                {
                  "Name": "Name4",
                  "Value": "Value2"
                },
                {
                  "Name": "Name5",
                  "Value": "Value3"
                }
              ]
            }
          },
          {
            "id": "id8",
            "amount": 100,
            "default_payment_method": "default_payment_method8",
            "success_url": "success_url0",
            "payment_url": "payment_url2",
            "gateway_affiliation_id": "gateway_affiliation_id4",
            "accepted_payment_methods": [
              "accepted_payment_methods1",
              "accepted_payment_methods2",
              "accepted_payment_methods3"
            ],
            "status": "status0",
            "skip_checkout_success_page": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "customer_editable": false,
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
                  "key1": "metadata6",
                  "key2": "metadata7"
                },
                "line_1": "line_18",
                "line_2": "line_22",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata1",
                "key1": "metadata0",
                "key2": "metadata9"
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
              "fb_id": 132,
              "code": "code6",
              "document_type": "document_type6"
            },
            "billingaddress": {
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
                  "key1": "metadata8"
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
                "fb_id": 214,
                "code": "code4",
                "document_type": "document_type4"
              },
              "metadata": {
                "key0": "metadata7"
              },
              "line_1": "line_10",
              "line_2": "line_24",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "credit_card": {
              "statementDescriptor": "statementDescriptor2",
              "installments": [
                {
                  "number": "number9",
                  "total": 57
                }
              ],
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
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions6"
            },
            "billing_address_editable": false,
            "shipping": {
              "amount": 198,
              "description": "description2",
              "recipient_name": "recipient_name0",
              "recipient_phone": "recipient_phone4",
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
                  "address": {},
                  "metadata": {
                    "key0": "metadata9",
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
                  "fb_id": 246,
                  "code": "code6",
                  "document_type": "document_type6"
                },
                "metadata": {
                  "key0": "metadata9"
                },
                "line_1": "line_12",
                "line_2": "line_26",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "max_delivery_date": "2016-03-13T12:52:32.123Z",
              "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
              "type": "type2"
            },
            "shippable": false,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency8",
            "debit_card": {
              "statement_descriptor": "statement_descriptor2",
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
            "bank_transfer": {
              "bank": [
                "bank3",
                "bank4",
                "bank5"
              ]
            },
            "accepted_brands": [
              "accepted_brands4",
              "accepted_brands5",
              "accepted_brands6"
            ],
            "pix": {
              "expires_at": "2016-03-13T12:52:32.123Z",
              "additional_information": [
                {
                  "Name": "Name5",
                  "Value": "Value3"
                },
                {
                  "Name": "Name6",
                  "Value": "Value4"
                },
                {
                  "Name": "Name7",
                  "Value": "Value5"
                }
              ]
            }
          },
          {
            "id": "id9",
            "amount": 101,
            "default_payment_method": "default_payment_method9",
            "success_url": "success_url1",
            "payment_url": "payment_url3",
            "gateway_affiliation_id": "gateway_affiliation_id5",
            "accepted_payment_methods": [
              "accepted_payment_methods2"
            ],
            "status": "status1",
            "skip_checkout_success_page": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "customer_editable": true,
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
                  "key0": "metadata6"
                },
                "line_1": "line_19",
                "line_2": "line_23",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata0"
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
              "fb_id": 133,
              "code": "code7",
              "document_type": "document_type7"
            },
            "billingaddress": {
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
                  "key0": "metadata8",
                  "key1": "metadata9",
                  "key2": "metadata0"
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
                "fb_id": 215,
                "code": "code5",
                "document_type": "document_type5"
              },
              "metadata": {
                "key0": "metadata8",
                "key1": "metadata9"
              },
              "line_1": "line_11",
              "line_2": "line_25",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "credit_card": {
              "statementDescriptor": "statementDescriptor3",
              "installments": [
                {
                  "number": "number0",
                  "total": 58
                },
                {
                  "number": "number1",
                  "total": 59
                }
              ],
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
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions7"
            },
            "billing_address_editable": true,
            "shipping": {
              "amount": 199,
              "description": "description3",
              "recipient_name": "recipient_name1",
              "recipient_phone": "recipient_phone5",
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
                  "address": {},
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata1",
                    "key2": "metadata2"
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
                  "fb_id": 247,
                  "code": "code7",
                  "document_type": "document_type7"
                },
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata1"
                },
                "line_1": "line_13",
                "line_2": "line_27",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "max_delivery_date": "2016-03-13T12:52:32.123Z",
              "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
              "type": "type3"
            },
            "shippable": true,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency9",
            "debit_card": {
              "statement_descriptor": "statement_descriptor3",
              "authentication": {
                "type": "type5",
                "threed_secure": {
                  "mpi": "mpi1",
                  "eci": "eci3",
                  "cavv": "cavv9",
                  "transaction_Id": "transaction_Id9",
                  "success_url": "success_url5"
                }
              }
            },
            "bank_transfer": {
              "bank": [
                "bank4"
              ]
            },
            "accepted_brands": [
              "accepted_brands5"
            ],
            "pix": {
              "expires_at": "2016-03-13T12:52:32.123Z",
              "additional_information": [
                {
                  "Name": "Name6",
                  "Value": "Value4"
                }
              ]
            }
          }
        ],
        "ip": "ip4",
        "session_id": "session_id2",
        "location": {
          "latitude": "latitude8",
          "longitude": "longitude8"
        },
        "device": {
          "platform": "platform0"
        },
        "closed": false
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
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "paid_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "canceled_amount": 232,
      "paid_amount": 214,
      "interest_and_fine_paid": 218,
      "recurrency_cycle": "recurrency_cycle0"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

