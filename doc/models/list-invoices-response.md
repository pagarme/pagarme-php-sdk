
# List Invoices Response

Response object for listing invoices

## Structure

`ListInvoicesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetInvoiceResponse[])`](../../doc/models/get-invoice-response.md) | Optional | The Invoice objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "url": "url9",
      "amount": 121,
      "status": "status7",
      "payment_method": "payment_method5",
      "created_at": "2016-03-13T12:52:32.123Z",
      "items": [
        {
          "amount": 180,
          "description": "description2",
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
          "price_bracket": {
            "start_quantity": 154,
            "price": 92,
            "end_quantity": 162,
            "overage_price": 176
          },
          "quantity": 38,
          "name": "name2",
          "subscription_item_id": "subscription_item_id6"
        },
        {
          "amount": 181,
          "description": "description3",
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
          "price_bracket": {
            "start_quantity": 155,
            "price": 93,
            "end_quantity": 163,
            "overage_price": 177
          },
          "quantity": 39,
          "name": "name3",
          "subscription_item_id": "subscription_item_id7"
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
      "charge": {
        "id": "id7",
        "code": "code5",
        "gateway_id": "gateway_id3",
        "amount": 251,
        "status": "status9",
        "currency": "currency7",
        "payment_method": "payment_method3",
        "due_at": "2016-03-13T12:52:32.123Z",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "last_transaction": {
          "gateway_id": "gateway_id9",
          "amount": 53,
          "status": "status1",
          "success": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "attempt_count": 29,
          "max_attempts": 17,
          "splits": [
            {
              "type": "type1",
              "amount": 241,
              "recipient": {
                "id": "id3",
                "name": "name3",
                "email": "email3",
                "document": "document7",
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
                    "key0": "metadata8",
                    "key1": "metadata7",
                    "key2": "metadata6"
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
                  "key1": "metadata9"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type3",
                  "volume_percentage": 153,
                  "delay": 137,
                  "days": [
                    113,
                    114
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval1",
                  "transfer_day": 63
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
          "next_attempt": "2016-03-13T12:52:32.123Z",
          "transaction_type": "transaction",
          "id": "id9",
          "gateway_response": {
            "code": "code9",
            "errors": [
              {
                "message": "message6"
              }
            ]
          },
          "antifraud_response": {
            "status": "status9",
            "return_code": "return_code7",
            "return_message": "return_message5",
            "provider_name": "provider_name5",
            "score": "score7"
          },
          "metadata": {
            "key0": "metadata0",
            "key1": "metadata9",
            "key2": "metadata8"
          },
          "split": [
            {
              "type": "type7",
              "amount": 255,
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
                  "volume_percentage": 117,
                  "delay": 151,
                  "days": [
                    127,
                    128
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval5",
                  "transfer_day": 243
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
              "amount": 0,
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
                  "volume_percentage": 118,
                  "delay": 152,
                  "days": [
                    128,
                    129,
                    130
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval6",
                  "transfer_day": 244
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
              "amount": 1,
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
                    "key1": "metadata1"
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
                  "key1": "metadata7"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type5",
                  "volume_percentage": 119,
                  "delay": 153,
                  "days": [
                    129
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval7",
                  "transfer_day": 245
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
            }
          ],
          "interest": {
            "days": 215,
            "type": "type1",
            "amount": 33
          },
          "fine": {
            "days": 233,
            "type": "type1",
            "amount": 51
          },
          "max_days_to_pay_past_due": 221
        },
        "invoice": {},
        "order": {
          "id": "id9",
          "code": "code7",
          "currency": "currency1",
          "items": [
            {
              "id": "id6",
              "amount": 4,
              "description": "description6",
              "quantity": 118,
              "category": "category4",
              "code": "code4"
            },
            {
              "id": "id7",
              "amount": 5,
              "description": "description7",
              "quantity": 119,
              "category": "category5",
              "code": "code5"
            }
          ],
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
                "key0": "metadata4"
              },
              "line_1": "line_19",
              "line_2": "line_25",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata2"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code3",
                "number": "number9",
                "area_code": "area_code3"
              },
              "mobile_phone": {
                "country_code": "country_code7",
                "number": "number5",
                "area_code": "area_code7"
              }
            },
            "fb_id": 183,
            "code": "code9",
            "document_type": "document_type9"
          },
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "charges": [
            {},
            {}
          ],
          "invoice_url": "invoice_url1",
          "shipping": {
            "amount": 43,
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
                "email": "email7",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document3",
                "type": "type9",
                "fb_access_token": "fb_access_token3",
                "address": {},
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
                    "country_code": "country_code1",
                    "number": "number1",
                    "area_code": "area_code1"
                  }
                },
                "fb_id": 91,
                "code": "code7",
                "document_type": "document_type7"
              },
              "metadata": {
                "key0": "metadata6"
              },
              "line_1": "line_13",
              "line_2": "line_27",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "max_delivery_date": "2016-03-13T12:52:32.123Z",
            "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
            "type": "type7"
          },
          "metadata": {
            "key0": "metadata4",
            "key1": "metadata5",
            "key2": "metadata6"
          },
          "checkouts": [
            {
              "id": "id6",
              "amount": 210,
              "default_payment_method": "default_payment_method6",
              "success_url": "success_url8",
              "payment_url": "payment_url0",
              "gateway_affiliation_id": "gateway_affiliation_id2",
              "accepted_payment_methods": [
                "accepted_payment_methods9",
                "accepted_payment_methods0",
                "accepted_payment_methods1"
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
                    "key0": "metadata7",
                    "key1": "metadata6",
                    "key2": "metadata5"
                  },
                  "line_1": "line_16",
                  "line_2": "line_20",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata2"
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
                "fb_id": 242,
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
                  "fb_id": 68,
                  "code": "code2",
                  "document_type": "document_type2"
                },
                "metadata": {
                  "key0": "metadata5"
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
                    "total": 167
                  }
                ],
                "authentication": {
                  "type": "type4",
                  "threed_secure": {
                    "mpi": "mpi8",
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
                "amount": 52,
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
                    "fb_id": 100,
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
                  "type": "type8",
                  "threed_secure": {
                    "mpi": "mpi2",
                    "eci": "eci0",
                    "cavv": "cavv4",
                    "transaction_Id": "transaction_Id4",
                    "success_url": "success_url2"
                  }
                }
              },
              "bank_transfer": {
                "bank": [
                  "bank3",
                  "bank4"
                ]
              },
              "accepted_brands": [
                "accepted_brands2",
                "accepted_brands3",
                "accepted_brands4"
              ],
              "pix": {
                "expires_at": "2016-03-13T12:52:32.123Z",
                "additional_information": [
                  {
                    "Name": "Name3",
                    "Value": "Value1"
                  },
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
          "session_id": "session_id9",
          "location": {
            "latitude": "latitude3",
            "longitude": "longitude7"
          },
          "device": {
            "platform": "platform1"
          },
          "closed": true
        },
        "customer": {
          "id": "id7",
          "name": "name7",
          "email": "email9",
          "delinquent": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document1",
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
              "country_code": "country_code1",
              "number": "number3",
              "area_code": "area_code9"
            }
          },
          "fb_id": 27,
          "code": "code5",
          "document_type": "document_type5"
        },
        "metadata": {
          "key0": "metadata4"
        },
        "paid_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "canceled_amount": 105,
        "paid_amount": 87,
        "interest_and_fine_paid": 91,
        "recurrency_cycle": "recurrency_cycle1"
      },
      "installments": 161,
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
              {
                "id": "id7",
                "value": 158.09,
                "increment_type": "increment_type9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 39,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
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
              {
                "id": "id8",
                "value": 158.1,
                "increment_type": "increment_type0",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 38,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id9",
                "value": 158.11,
                "increment_type": "increment_type1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 37,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              }
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
                {
                  "id": "id7",
                  "value": 223.29,
                  "increment_type": "increment_type9",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 175,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id8",
                  "value": 223.3,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 174,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id9",
                  "value": 223.31,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 173,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                }
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
                {
                  "id": "id8",
                  "value": 223.3,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 174,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                }
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
                {
                  "id": "id9",
                  "value": 223.31,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 173,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id0",
                  "value": 223.32,
                  "increment_type": "increment_type2",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 172,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                }
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
            "subscription_item": {
              "id": "id6",
              "description": "description4",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 8,
                "scheme_type": "scheme_type2",
                "price_brackets": [
                  {
                    "start_quantity": 201,
                    "price": 139,
                    "end_quantity": 209,
                    "overage_price": 223
                  }
                ],
                "minimum_price": 88,
                "percentage": 168.1
              },
              "discounts": [
                {
                  "id": "id7",
                  "value": 93.89,
                  "discount_type": "discount_type5",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 197,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id8",
                  "value": 93.9,
                  "discount_type": "discount_type6",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 198,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {},
                {}
              ],
              "subscription": {},
              "name": "name6",
              "quantity": 242,
              "cycles": 250,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
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
          "interval_count": 149,
          "billing_type": "billing_type5",
          "current_cycle": {},
          "payment_method": "payment_method1",
          "currency": "currency1",
          "installments": 61,
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
                "key0": "metadata8"
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
                "country_code": "country_code3",
                "number": "number9",
                "area_code": "area_code3"
              }
            },
            "fb_id": 53,
            "code": "code9",
            "document_type": "document_type9"
          },
          "card": {
            "id": "id5",
            "last_four_digits": "last_four_digits1",
            "brand": "brand9",
            "holder_name": "holder_name1",
            "exp_month": 45,
            "exp_year": 251,
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
                  "key1": "metadata7"
                },
                "line_1": "line_15",
                "line_2": "line_29",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata1",
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
                  "number": "number5",
                  "area_code": "area_code7"
                }
              },
              "fb_id": 239,
              "code": "code3",
              "document_type": "document_type3"
            },
            "metadata": {
              "key0": "metadata2"
            },
            "type": "type5",
            "holder_document": "holder_document9",
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
                "price": 72,
                "scheme_type": "scheme_type0",
                "price_brackets": [
                  {
                    "start_quantity": 137,
                    "price": 75,
                    "end_quantity": 145,
                    "overage_price": 159
                  }
                ],
                "minimum_price": 24,
                "percentage": 185.38
              },
              "discounts": [
                {
                  "id": "id9",
                  "value": 183.01,
                  "discount_type": "discount_type7",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 149,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id7",
                  "value": 38.29,
                  "increment_type": "increment_type9",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 13,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id8",
                  "value": 38.3,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 14,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name8",
              "quantity": 194,
              "cycles": 214,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id9",
              "description": "description9",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 71,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 138,
                    "price": 76,
                    "end_quantity": 146,
                    "overage_price": 160
                  },
                  {
                    "start_quantity": 139,
                    "price": 77,
                    "end_quantity": 147,
                    "overage_price": 161
                  }
                ],
                "minimum_price": 25,
                "percentage": 185.39
              },
              "discounts": [
                {
                  "id": "id0",
                  "value": 183.02,
                  "discount_type": "discount_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 150,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id1",
                  "value": 183.03,
                  "discount_type": "discount_type9",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 151,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id8",
                  "value": 38.3,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 14,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id9",
                  "value": 38.31,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 15,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id0",
                  "value": 38.32,
                  "increment_type": "increment_type2",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 16,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name9",
              "quantity": 195,
              "cycles": 215,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id0",
              "description": "description0",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 70,
                "scheme_type": "scheme_type2",
                "price_brackets": [
                  {
                    "start_quantity": 139,
                    "price": 77,
                    "end_quantity": 147,
                    "overage_price": 161
                  },
                  {
                    "start_quantity": 140,
                    "price": 78,
                    "end_quantity": 148,
                    "overage_price": 162
                  },
                  {
                    "start_quantity": 141,
                    "price": 79,
                    "end_quantity": 149,
                    "overage_price": 163
                  }
                ],
                "minimum_price": 26,
                "percentage": 185.4
              },
              "discounts": [
                {
                  "id": "id1",
                  "value": 183.03,
                  "discount_type": "discount_type9",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 151,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id2",
                  "value": 183.04,
                  "discount_type": "discount_type0",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 152,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description2",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id3",
                  "value": 183.05,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 153,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description3",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id9",
                  "value": 38.31,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 15,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name0",
              "quantity": 196,
              "cycles": 216,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          ],
          "statement_descriptor": "statement_descriptor1",
          "metadata": {
            "key0": "metadata8",
            "key1": "metadata7",
            "key2": "metadata6"
          },
          "setup": {
            "id": "id5",
            "description": "description5",
            "amount": 85,
            "status": "status7"
          },
          "gateway_affiliation_id": "gateway_affiliation_id7",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 33,
          "minimum_price": 147,
          "canceled_at": "2016-03-13T12:52:32.123Z",
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
              "subscription_item": {
                "id": "id8",
                "description": "description8",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 48,
                  "scheme_type": "scheme_type0",
                  "price_brackets": [
                    {
                      "start_quantity": 1,
                      "price": 195,
                      "end_quantity": 9,
                      "overage_price": 23
                    },
                    {
                      "start_quantity": 2,
                      "price": 196,
                      "end_quantity": 10,
                      "overage_price": 24
                    },
                    {
                      "start_quantity": 3,
                      "price": 197,
                      "end_quantity": 11,
                      "overage_price": 25
                    }
                  ],
                  "minimum_price": 144,
                  "percentage": 250.58
                },
                "discounts": [
                  {},
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id7",
                    "value": 103.49,
                    "increment_type": "increment_type9",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 133,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name8",
                "quantity": 58,
                "cycles": 78,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
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
              "subscription_item": {
                "id": "id6",
                "description": "description6",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 200,
                  "scheme_type": "scheme_type2",
                  "price_brackets": [
                    {
                      "start_quantity": 9,
                      "price": 53,
                      "end_quantity": 17,
                      "overage_price": 31
                    },
                    {
                      "start_quantity": 10,
                      "price": 52,
                      "end_quantity": 18,
                      "overage_price": 32
                    },
                    {
                      "start_quantity": 11,
                      "price": 51,
                      "end_quantity": 19,
                      "overage_price": 33
                    }
                  ],
                  "minimum_price": 104,
                  "percentage": 158.5
                },
                "discounts": [
                  {
                    "id": "id7",
                    "value": 103.49,
                    "discount_type": "discount_type5",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 133,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id8",
                    "value": 103.5,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 134,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id9",
                    "value": 103.51,
                    "discount_type": "discount_type7",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 135,
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
                "quantity": 178,
                "cycles": 58,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
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
              "subscription_item": {
                "id": "id7",
                "description": "description7",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 201,
                  "scheme_type": "scheme_type1",
                  "price_brackets": [
                    {
                      "start_quantity": 8,
                      "price": 54,
                      "end_quantity": 16,
                      "overage_price": 30
                    },
                    {
                      "start_quantity": 9,
                      "price": 53,
                      "end_quantity": 17,
                      "overage_price": 31
                    }
                  ],
                  "minimum_price": 105,
                  "percentage": 158.49
                },
                "discounts": [
                  {
                    "id": "id8",
                    "value": 103.5,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 134,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {},
                  {}
                ],
                "subscription": {},
                "name": "name7",
                "quantity": 179,
                "cycles": 57,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "boleto_due_days": 5,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type1",
                "amount": 221,
                "recipient": {
                  "id": "id3",
                  "name": "name3",
                  "email": "email3",
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
                    "type": "type7",
                    "volume_percentage": 173,
                    "delay": 117,
                    "days": [
                      93,
                      94,
                      95
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval1",
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
                "amount": 222,
                "recipient": {
                  "id": "id4",
                  "name": "name4",
                  "email": "email2",
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
                      "key0": "metadata7",
                      "key1": "metadata6"
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
                    "key0": "metadata1",
                    "key1": "metadata0",
                    "key2": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type8",
                    "volume_percentage": 172,
                    "delay": 118,
                    "days": [
                      94
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 82
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
                "amount": 223,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
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
                      "key0": "metadata6",
                      "key1": "metadata5",
                      "key2": "metadata4"
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
                    "key0": "metadata2",
                    "key1": "metadata1"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type9",
                    "volume_percentage": 171,
                    "delay": 119,
                    "days": [
                      95,
                      96
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 81
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
              "days": 85,
              "type": "type1",
              "amount": 97
            },
            "fine": {
              "days": 205,
              "type": "type3",
              "amount": 23
            },
            "max_days_to_pay_past_due": 193
          },
          "manual_billing": true
        },
        "status": "status7",
        "duration": 75,
        "created_at": "created_at3",
        "updated_at": "updated_at1",
        "cycle": 15
      },
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
      "due_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "billing_at": "2016-03-13T12:52:32.123Z",
      "seen_at": "2016-03-13T12:52:32.123Z",
      "total_discount": 229,
      "total_increment": 45,
      "subscription_id": "subscription_id5"
    },
    {
      "id": "id6",
      "code": "code4",
      "url": "url0",
      "amount": 122,
      "status": "status8",
      "payment_method": "payment_method6",
      "created_at": "2016-03-13T12:52:32.123Z",
      "items": [
        {
          "amount": 181,
          "description": "description3",
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
          "price_bracket": {
            "start_quantity": 155,
            "price": 93,
            "end_quantity": 163,
            "overage_price": 177
          },
          "quantity": 39,
          "name": "name3",
          "subscription_item_id": "subscription_item_id7"
        },
        {
          "amount": 182,
          "description": "description4",
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
          "price_bracket": {
            "start_quantity": 156,
            "price": 94,
            "end_quantity": 164,
            "overage_price": 178
          },
          "quantity": 40,
          "name": "name4",
          "subscription_item_id": "subscription_item_id8"
        },
        {
          "amount": 183,
          "description": "description5",
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
          "price_bracket": {
            "start_quantity": 157,
            "price": 95,
            "end_quantity": 165,
            "overage_price": 179
          },
          "quantity": 41,
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
            "number": "number6",
            "area_code": "area_code8"
          }
        },
        "fb_id": 154,
        "code": "code4",
        "document_type": "document_type4"
      },
      "charge": {
        "id": "id8",
        "code": "code6",
        "gateway_id": "gateway_id2",
        "amount": 252,
        "status": "status0",
        "currency": "currency8",
        "payment_method": "payment_method2",
        "due_at": "2016-03-13T12:52:32.123Z",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "last_transaction": {
          "gateway_id": "gateway_id0",
          "amount": 54,
          "status": "status2",
          "success": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "attempt_count": 30,
          "max_attempts": 18,
          "splits": [
            {
              "type": "type2",
              "amount": 242,
              "recipient": {
                "id": "id4",
                "name": "name4",
                "email": "email2",
                "document": "document8",
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
                    "key0": "metadata7"
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
                  "key0": "metadata1"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type2",
                  "volume_percentage": 152,
                  "delay": 138,
                  "days": [
                    114,
                    115,
                    116
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval0",
                  "transfer_day": 62
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
              "amount": 243,
              "recipient": {
                "id": "id5",
                "name": "name5",
                "email": "email1",
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
                    "key0": "metadata6",
                    "key1": "metadata5"
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
                  "key0": "metadata2",
                  "key1": "metadata1",
                  "key2": "metadata0"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type1",
                  "volume_percentage": 151,
                  "delay": 139,
                  "days": [
                    115
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval9",
                  "transfer_day": 61
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
          "next_attempt": "2016-03-13T12:52:32.123Z",
          "transaction_type": "transaction",
          "id": "id0",
          "gateway_response": {
            "code": "code0",
            "errors": [
              {
                "message": "message7"
              },
              {
                "message": "message8"
              }
            ]
          },
          "antifraud_response": {
            "status": "status0",
            "return_code": "return_code8",
            "return_message": "return_message6",
            "provider_name": "provider_name6",
            "score": "score8"
          },
          "metadata": {
            "key0": "metadata9"
          },
          "split": [
            {
              "type": "type8",
              "amount": 0,
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
                  "volume_percentage": 118,
                  "delay": 152,
                  "days": [
                    128,
                    129,
                    130
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval6",
                  "transfer_day": 244
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
          "interest": {
            "days": 216,
            "type": "type0",
            "amount": 34
          },
          "fine": {
            "days": 234,
            "type": "type2",
            "amount": 52
          },
          "max_days_to_pay_past_due": 222
        },
        "invoice": {},
        "order": {
          "id": "id8",
          "code": "code6",
          "currency": "currency2",
          "items": [
            {
              "id": "id5",
              "amount": 3,
              "description": "description5",
              "quantity": 117,
              "category": "category3",
              "code": "code3"
            }
          ],
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
              "line_1": "line_18",
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
                "country_code": "country_code6",
                "number": "number6",
                "area_code": "area_code6"
              }
            },
            "fb_id": 184,
            "code": "code0",
            "document_type": "document_type0"
          },
          "status": "status0",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "charges": [
            {},
            {},
            {}
          ],
          "invoice_url": "invoice_url0",
          "shipping": {
            "amount": 42,
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
                "email": "email8",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document2",
                "type": "type8",
                "fb_access_token": "fb_access_token2",
                "address": {},
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
                "fb_id": 90,
                "code": "code6",
                "document_type": "document_type6"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata4"
              },
              "line_1": "line_12",
              "line_2": "line_26",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "max_delivery_date": "2016-03-13T12:52:32.123Z",
            "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
            "type": "type8"
          },
          "metadata": {
            "key0": "metadata5"
          },
          "checkouts": [
            {
              "id": "id5",
              "amount": 209,
              "default_payment_method": "default_payment_method5",
              "success_url": "success_url7",
              "payment_url": "payment_url9",
              "gateway_affiliation_id": "gateway_affiliation_id1",
              "accepted_payment_methods": [
                "accepted_payment_methods8",
                "accepted_payment_methods9"
              ],
              "status": "status7",
              "skip_checkout_success_page": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "customer_editable": true,
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
                    "key1": "metadata7"
                  },
                  "line_1": "line_15",
                  "line_2": "line_29",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata2",
                  "key1": "metadata1",
                  "key2": "metadata0"
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
                "fb_id": 241,
                "code": "code3",
                "document_type": "document_type3"
              },
              "billingaddress": {
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
                  "fb_id": 67,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "metadata": {
                  "key0": "metadata6",
                  "key1": "metadata5",
                  "key2": "metadata4"
                },
                "line_1": "line_17",
                "line_2": "line_21",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "credit_card": {
                "statementDescriptor": "statementDescriptor9",
                "installments": [
                  {
                    "number": "number6",
                    "total": 166
                  },
                  {
                    "number": "number7",
                    "total": 167
                  },
                  {
                    "number": "number8",
                    "total": 168
                  }
                ],
                "authentication": {
                  "type": "type5",
                  "threed_secure": {
                    "mpi": "mpi9",
                    "eci": "eci3",
                    "cavv": "cavv9",
                    "transaction_Id": "transaction_Id1",
                    "success_url": "success_url5"
                  }
                }
              },
              "boleto": {
                "due_at": "2016-03-13T12:52:32.123Z",
                "instructions": "instructions3"
              },
              "billing_address_editable": true,
              "shipping": {
                "amount": 51,
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
                    "fb_id": 99,
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
                "max_delivery_date": "2016-03-13T12:52:32.123Z",
                "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
                "type": "type9"
              },
              "shippable": true,
              "closed_at": "2016-03-13T12:52:32.123Z",
              "expires_at": "2016-03-13T12:52:32.123Z",
              "currency": "currency5",
              "debit_card": {
                "statement_descriptor": "statement_descriptor9",
                "authentication": {
                  "type": "type9",
                  "threed_secure": {
                    "mpi": "mpi1",
                    "eci": "eci1",
                    "cavv": "cavv3",
                    "transaction_Id": "transaction_Id3",
                    "success_url": "success_url3"
                  }
                }
              },
              "bank_transfer": {
                "bank": [
                  "bank4",
                  "bank5",
                  "bank6"
                ]
              },
              "accepted_brands": [
                "accepted_brands1",
                "accepted_brands2"
              ],
              "pix": {
                "expires_at": "2016-03-13T12:52:32.123Z",
                "additional_information": [
                  {
                    "Name": "Name2",
                    "Value": "Value0"
                  },
                  {
                    "Name": "Name3",
                    "Value": "Value1"
                  }
                ]
              }
            },
            {
              "id": "id6",
              "amount": 210,
              "default_payment_method": "default_payment_method6",
              "success_url": "success_url8",
              "payment_url": "payment_url0",
              "gateway_affiliation_id": "gateway_affiliation_id2",
              "accepted_payment_methods": [
                "accepted_payment_methods9",
                "accepted_payment_methods0",
                "accepted_payment_methods1"
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
                    "key0": "metadata7",
                    "key1": "metadata6",
                    "key2": "metadata5"
                  },
                  "line_1": "line_16",
                  "line_2": "line_20",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata2"
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
                "fb_id": 242,
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
                  "fb_id": 68,
                  "code": "code2",
                  "document_type": "document_type2"
                },
                "metadata": {
                  "key0": "metadata5"
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
                    "total": 167
                  }
                ],
                "authentication": {
                  "type": "type4",
                  "threed_secure": {
                    "mpi": "mpi8",
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
                "amount": 52,
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
                    "fb_id": 100,
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
                  "type": "type8",
                  "threed_secure": {
                    "mpi": "mpi2",
                    "eci": "eci0",
                    "cavv": "cavv4",
                    "transaction_Id": "transaction_Id4",
                    "success_url": "success_url2"
                  }
                }
              },
              "bank_transfer": {
                "bank": [
                  "bank3",
                  "bank4"
                ]
              },
              "accepted_brands": [
                "accepted_brands2",
                "accepted_brands3",
                "accepted_brands4"
              ],
              "pix": {
                "expires_at": "2016-03-13T12:52:32.123Z",
                "additional_information": [
                  {
                    "Name": "Name3",
                    "Value": "Value1"
                  },
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
              "id": "id7",
              "amount": 211,
              "default_payment_method": "default_payment_method7",
              "success_url": "success_url9",
              "payment_url": "payment_url1",
              "gateway_affiliation_id": "gateway_affiliation_id3",
              "accepted_payment_methods": [
                "accepted_payment_methods0"
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
                "email": "email9",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document1",
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
                    "key0": "metadata6"
                  },
                  "line_1": "line_17",
                  "line_2": "line_21",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4"
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
                "fb_id": 243,
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
                  "fb_id": 69,
                  "code": "code3",
                  "document_type": "document_type3"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata3"
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
                    "total": 168
                  },
                  {
                    "number": "number9",
                    "total": 169
                  }
                ],
                "authentication": {
                  "type": "type3",
                  "threed_secure": {
                    "mpi": "mpi7",
                    "eci": "eci5",
                    "cavv": "cavv1",
                    "transaction_Id": "transaction_Id9",
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
                "amount": 53,
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
                    "fb_id": 101,
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
                  "type": "type7",
                  "threed_secure": {
                    "mpi": "mpi3",
                    "eci": "eci9",
                    "cavv": "cavv5",
                    "transaction_Id": "transaction_Id5",
                    "success_url": "success_url1"
                  }
                }
              },
              "bank_transfer": {
                "bank": [
                  "bank2"
                ]
              },
              "accepted_brands": [
                "accepted_brands3"
              ],
              "pix": {
                "expires_at": "2016-03-13T12:52:32.123Z",
                "additional_information": [
                  {
                    "Name": "Name4",
                    "Value": "Value2"
                  }
                ]
              }
            }
          ],
          "ip": "ip2",
          "session_id": "session_id0",
          "location": {
            "latitude": "latitude4",
            "longitude": "longitude6"
          },
          "device": {
            "platform": "platform2"
          },
          "closed": false
        },
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
          "fb_id": 28,
          "code": "code6",
          "document_type": "document_type6"
        },
        "metadata": {
          "key0": "metadata5",
          "key1": "metadata4",
          "key2": "metadata3"
        },
        "paid_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "canceled_amount": 106,
        "paid_amount": 88,
        "interest_and_fine_paid": 92,
        "recurrency_cycle": "recurrency_cycle2"
      },
      "installments": 162,
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
              {
                "id": "id8",
                "value": 158.1,
                "increment_type": "increment_type0",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 38,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id9",
                "value": 158.11,
                "increment_type": "increment_type1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 37,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              }
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
              {
                "id": "id9",
                "value": 158.11,
                "increment_type": "increment_type1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 37,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id0",
                "value": 158.12,
                "increment_type": "increment_type2",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 36,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 158.13,
                "increment_type": "increment_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 35,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description9",
                "subscription": {},
                "subscription_item": {}
              }
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
              {
                "id": "id0",
                "value": 158.12,
                "increment_type": "increment_type2",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 36,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              }
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
                {
                  "id": "id8",
                  "value": 223.3,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 174,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                }
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
            "subscription_item": {
              "id": "id5",
              "description": "description5",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 7,
                "scheme_type": "scheme_type3",
                "price_brackets": [
                  {
                    "start_quantity": 202,
                    "price": 140,
                    "end_quantity": 210,
                    "overage_price": 224
                  },
                  {
                    "start_quantity": 203,
                    "price": 141,
                    "end_quantity": 211,
                    "overage_price": 225
                  }
                ],
                "minimum_price": 89,
                "percentage": 168.11
              },
              "discounts": [
                {
                  "id": "id6",
                  "value": 93.88,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 196,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
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
              "name": "name5",
              "quantity": 241,
              "cycles": 251,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
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
            "subscription_item": {
              "id": "id4",
              "description": "description6",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 6,
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
                "percentage": 168.12
              },
              "discounts": [
                {
                  "id": "id5",
                  "value": 93.87,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 195,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id6",
                  "value": 93.88,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 196,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id7",
                  "value": 93.89,
                  "discount_type": "discount_type5",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 197,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {}
              ],
              "subscription": {},
              "name": "name4",
              "quantity": 240,
              "cycles": 252,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
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
          "interval_count": 150,
          "billing_type": "billing_type6",
          "current_cycle": {},
          "payment_method": "payment_method2",
          "currency": "currency2",
          "installments": 62,
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
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 54,
            "code": "code0",
            "document_type": "document_type0"
          },
          "card": {
            "id": "id6",
            "last_four_digits": "last_four_digits2",
            "brand": "brand0",
            "holder_name": "holder_name2",
            "exp_month": 44,
            "exp_year": 252,
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street8",
              "number": "number4",
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
                  "key0": "metadata7",
                  "key1": "metadata6",
                  "key2": "metadata5"
                },
                "line_1": "line_16",
                "line_2": "line_20",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata2"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code8",
                  "number": "number6",
                  "area_code": "area_code8"
                },
                "mobile_phone": {
                  "country_code": "country_code2",
                  "number": "number4",
                  "area_code": "area_code8"
                }
              },
              "fb_id": 240,
              "code": "code4",
              "document_type": "document_type4"
            },
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata2",
              "key2": "metadata1"
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
                "price": 71,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 138,
                    "price": 76,
                    "end_quantity": 146,
                    "overage_price": 160
                  },
                  {
                    "start_quantity": 139,
                    "price": 77,
                    "end_quantity": 147,
                    "overage_price": 161
                  }
                ],
                "minimum_price": 25,
                "percentage": 185.39
              },
              "discounts": [
                {
                  "id": "id0",
                  "value": 183.02,
                  "discount_type": "discount_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 150,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id1",
                  "value": 183.03,
                  "discount_type": "discount_type9",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 151,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id8",
                  "value": 38.3,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 14,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id9",
                  "value": 38.31,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 15,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id0",
                  "value": 38.32,
                  "increment_type": "increment_type2",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 16,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name9",
              "quantity": 195,
              "cycles": 215,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          ],
          "statement_descriptor": "statement_descriptor2",
          "metadata": {
            "key0": "metadata7"
          },
          "setup": {
            "id": "id6",
            "description": "description6",
            "amount": 86,
            "status": "status8"
          },
          "gateway_affiliation_id": "gateway_affiliation_id8",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 34,
          "minimum_price": 148,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
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
              "subscription_item": {
                "id": "id9",
                "description": "description9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 49,
                  "scheme_type": "scheme_type1",
                  "price_brackets": [
                    {
                      "start_quantity": 2,
                      "price": 196,
                      "end_quantity": 10,
                      "overage_price": 24
                    }
                  ],
                  "minimum_price": 145,
                  "percentage": 250.59
                },
                "discounts": [
                  {}
                ],
                "increments": [
                  {
                    "id": "id8",
                    "value": 103.5,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 134,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id9",
                    "value": 103.51,
                    "increment_type": "increment_type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 135,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name9",
                "quantity": 59,
                "cycles": 79,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id4",
              "value": 213.16,
              "discount_type": "discount_type2",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 92,
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
                  "price": 50,
                  "scheme_type": "scheme_type2",
                  "price_brackets": [
                    {
                      "start_quantity": 3,
                      "price": 197,
                      "end_quantity": 11,
                      "overage_price": 25
                    },
                    {
                      "start_quantity": 4,
                      "price": 198,
                      "end_quantity": 12,
                      "overage_price": 26
                    }
                  ],
                  "minimum_price": 146,
                  "percentage": 250.6
                },
                "discounts": [
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id9",
                    "value": 103.51,
                    "increment_type": "increment_type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 135,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id0",
                    "value": 103.52,
                    "increment_type": "increment_type2",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 136,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id1",
                    "value": 103.53,
                    "increment_type": "increment_type3",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 137,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name0",
                "quantity": 60,
                "cycles": 80,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "increments": [
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
              "subscription_item": {
                "id": "id7",
                "description": "description7",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 201,
                  "scheme_type": "scheme_type1",
                  "price_brackets": [
                    {
                      "start_quantity": 8,
                      "price": 54,
                      "end_quantity": 16,
                      "overage_price": 30
                    },
                    {
                      "start_quantity": 9,
                      "price": 53,
                      "end_quantity": 17,
                      "overage_price": 31
                    }
                  ],
                  "minimum_price": 105,
                  "percentage": 158.49
                },
                "discounts": [
                  {
                    "id": "id8",
                    "value": 103.5,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 134,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {},
                  {}
                ],
                "subscription": {},
                "name": "name7",
                "quantity": 179,
                "cycles": 57,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id2",
              "value": 68.44,
              "increment_type": "increment_type4",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 44,
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
                  "price": 202,
                  "scheme_type": "scheme_type0",
                  "price_brackets": [
                    {
                      "start_quantity": 7,
                      "price": 55,
                      "end_quantity": 15,
                      "overage_price": 29
                    }
                  ],
                  "minimum_price": 106,
                  "percentage": 158.48
                },
                "discounts": [
                  {
                    "id": "id9",
                    "value": 103.51,
                    "discount_type": "discount_type7",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 135,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id0",
                    "value": 103.52,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 136,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
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
                "name": "name8",
                "quantity": 180,
                "cycles": 56,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id3",
              "value": 68.45,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 43,
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
                  "price": 203,
                  "scheme_type": "scheme_type9",
                  "price_brackets": [
                    {
                      "start_quantity": 6,
                      "price": 56,
                      "end_quantity": 14,
                      "overage_price": 28
                    },
                    {
                      "start_quantity": 7,
                      "price": 55,
                      "end_quantity": 15,
                      "overage_price": 29
                    },
                    {
                      "start_quantity": 8,
                      "price": 54,
                      "end_quantity": 16,
                      "overage_price": 30
                    }
                  ],
                  "minimum_price": 107,
                  "percentage": 158.47
                },
                "discounts": [
                  {
                    "id": "id0",
                    "value": 103.52,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 136,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id1",
                    "value": 103.53,
                    "discount_type": "discount_type9",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 137,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id2",
                    "value": 103.54,
                    "discount_type": "discount_type0",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 138,
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
                "quantity": 181,
                "cycles": 55,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "boleto_due_days": 6,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type2",
                "amount": 222,
                "recipient": {
                  "id": "id4",
                  "name": "name4",
                  "email": "email2",
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
                      "key0": "metadata7",
                      "key1": "metadata6"
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
                    "key0": "metadata1",
                    "key1": "metadata0",
                    "key2": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type8",
                    "volume_percentage": 172,
                    "delay": 118,
                    "days": [
                      94
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 82
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
              "days": 84,
              "type": "type2",
              "amount": 98
            },
            "fine": {
              "days": 206,
              "type": "type4",
              "amount": 24
            },
            "max_days_to_pay_past_due": 194
          },
          "manual_billing": false
        },
        "status": "status8",
        "duration": 76,
        "created_at": "created_at4",
        "updated_at": "updated_at2",
        "cycle": 16
      },
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
      "due_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "billing_at": "2016-03-13T12:52:32.123Z",
      "seen_at": "2016-03-13T12:52:32.123Z",
      "total_discount": 230,
      "total_increment": 46,
      "subscription_id": "subscription_id6"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

