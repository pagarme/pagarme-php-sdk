
# List Usages Response

Response model for listing the usages from a subscription item

## Structure

`ListUsagesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetUsageResponse[])`](../../doc/models/get-usage-response.md) | Optional | The usage objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "quantity": 235,
      "description": "description5",
      "used_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "status": "status7",
      "deleted_at": "2016-03-13T12:52:32.123Z",
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
          {
            "id": "id0",
            "value": 36.02,
            "increment_type": "increment_type2",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 42,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description0",
            "subscription": {
              "id": "id4",
              "code": "code2",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval8",
              "interval_count": 24,
              "billing_type": "billing_type2",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id2",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status6",
                "duration": 8,
                "created_at": "created_at0",
                "updated_at": "updated_at2",
                "cycle": 204
              },
              "payment_method": "payment_method6",
              "currency": "currency6",
              "installments": 192,
              "status": "status4",
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
                    "key0": "metadata9",
                    "key1": "metadata8"
                  },
                  "line_1": "line_14",
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
                "fb_id": 232,
                "code": "code4",
                "document_type": "document_type4"
              },
              "card": {
                "id": "id2",
                "last_four_digits": "last_four_digits8",
                "brand": "brand6",
                "holder_name": "holder_name8",
                "exp_month": 170,
                "exp_year": 126,
                "status": "status6",
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
                      "country_code": "country_code6",
                      "number": "number6",
                      "area_code": "area_code6"
                    }
                  },
                  "fb_id": 114,
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
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor4",
              "metadata": {
                "key0": "metadata9",
                "key1": "metadata0"
              },
              "setup": {
                "id": "id8",
                "description": "description2",
                "amount": 40,
                "status": "status0"
              },
              "gateway_affiliation_id": "gateway_affiliation_id0",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 92,
              "minimum_price": 234,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id5",
                  "value": 53.17,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 221,
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
              "boleto_due_days": 136,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type8",
                    "amount": 232,
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
                        "volume_percentage": 86,
                        "delay": 204,
                        "days": [
                          180,
                          181
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 252
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
                    "amount": 233,
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
                        "volume_percentage": 85,
                        "delay": 205,
                        "days": [
                          181,
                          182,
                          183
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 251
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
                  "days": 102,
                  "type": "type4",
                  "amount": 176
                },
                "fine": {
                  "days": 172,
                  "type": "type8",
                  "amount": 98
                },
                "max_days_to_pay_past_due": 176
              },
              "manual_billing": false
            },
            "subscription_item": {}
          },
          {
            "id": "id1",
            "value": 36.03,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 43,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description1",
            "subscription": {
              "id": "id3",
              "code": "code1",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval9",
              "interval_count": 23,
              "billing_type": "billing_type3",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id1",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status7",
                "duration": 7,
                "created_at": "created_at9",
                "updated_at": "updated_at3",
                "cycle": 203
              },
              "payment_method": "payment_method7",
              "currency": "currency7",
              "installments": 191,
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
                    "key0": "metadata0"
                  },
                  "line_1": "line_13",
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
                "fb_id": 233,
                "code": "code5",
                "document_type": "document_type5"
              },
              "card": {
                "id": "id3",
                "last_four_digits": "last_four_digits9",
                "brand": "brand7",
                "holder_name": "holder_name9",
                "exp_month": 169,
                "exp_year": 127,
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
                      "key1": "metadata5",
                      "key2": "metadata4"
                    },
                    "line_1": "line_13",
                    "line_2": "line_27",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata1",
                    "key2": "metadata2"
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
                  "fb_id": 115,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "metadata": {
                  "key0": "metadata0"
                },
                "type": "type7",
                "holder_document": "holder_document3",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits3",
                "label": "label3"
              },
              "items": [
                {},
                {}
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
                "amount": 41,
                "status": "status1"
              },
              "gateway_affiliation_id": "gateway_affiliation_id9",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 93,
              "minimum_price": 235,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id4",
                  "value": 53.16,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 220,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id5",
                  "value": 53.17,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 221,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id6",
                  "value": 53.18,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 222,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {}
              ],
              "boleto_due_days": 135,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type9",
                    "amount": 233,
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
                        "volume_percentage": 85,
                        "delay": 205,
                        "days": [
                          181,
                          182,
                          183
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 251
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
                    "type": "type0",
                    "amount": 234,
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
                          "key0": "metadata3",
                          "key1": "metadata2",
                          "key2": "metadata1"
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
                        "key1": "metadata6",
                        "key2": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 84,
                        "delay": 206,
                        "days": [
                          182
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 250
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
                    "type": "type1",
                    "amount": 235,
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
                          "key1": "metadata3"
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
                        "key0": "metadata4",
                        "key1": "metadata5"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type7",
                        "volume_percentage": 83,
                        "delay": 207,
                        "days": [
                          183,
                          184
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval5",
                        "transfer_day": 249
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
                  "days": 101,
                  "type": "type3",
                  "amount": 175
                },
                "fine": {
                  "days": 173,
                  "type": "type9",
                  "amount": 99
                },
                "max_days_to_pay_past_due": 177
              },
              "manual_billing": true
            },
            "subscription_item": {}
          },
          {
            "id": "id2",
            "value": 36.04,
            "increment_type": "increment_type4",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 44,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {
              "id": "id2",
              "code": "code0",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval0",
              "interval_count": 22,
              "billing_type": "billing_type4",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id0",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status8",
                "duration": 6,
                "created_at": "created_at8",
                "updated_at": "updated_at4",
                "cycle": 202
              },
              "payment_method": "payment_method8",
              "currency": "currency8",
              "installments": 190,
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
                    "key1": "metadata0",
                    "key2": "metadata9"
                  },
                  "line_1": "line_12",
                  "line_2": "line_22",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata5",
                  "key1": "metadata6",
                  "key2": "metadata7"
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
                "fb_id": 234,
                "code": "code6",
                "document_type": "document_type6"
              },
              "card": {
                "id": "id4",
                "last_four_digits": "last_four_digits0",
                "brand": "brand8",
                "holder_name": "holder_name0",
                "exp_month": 168,
                "exp_year": 128,
                "status": "status4",
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
                      "key1": "metadata6"
                    },
                    "line_1": "line_14",
                    "line_2": "line_28",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata0"
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
                  "fb_id": 116,
                  "code": "code2",
                  "document_type": "document_type2"
                },
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata0",
                  "key2": "metadata1"
                },
                "type": "type6",
                "holder_document": "holder_document2",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits4",
                "label": "label4"
              },
              "items": [
                {}
              ],
              "statement_descriptor": "statement_descriptor2",
              "metadata": {
                "key0": "metadata1"
              },
              "setup": {
                "id": "id6",
                "description": "description4",
                "amount": 42,
                "status": "status2"
              },
              "gateway_affiliation_id": "gateway_affiliation_id8",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 94,
              "minimum_price": 236,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id3",
                  "value": 53.15,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 219,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description3",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id4",
                  "value": 53.16,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 220,
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
              "boleto_due_days": 134,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type0",
                    "amount": 234,
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
                          "key0": "metadata3",
                          "key1": "metadata2",
                          "key2": "metadata1"
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
                        "key1": "metadata6",
                        "key2": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 84,
                        "delay": 206,
                        "days": [
                          182
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 250
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
                  "days": 100,
                  "type": "type2",
                  "amount": 174
                },
                "fine": {
                  "days": 174,
                  "type": "type0",
                  "amount": 100
                },
                "max_days_to_pay_past_due": 178
              },
              "manual_billing": false
            },
            "subscription_item": {}
          }
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
            {
              "id": "id4",
              "value": 38.46,
              "increment_type": "increment_type6",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 226,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description6",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id3",
              "value": 38.45,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 227,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description7",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id2",
              "value": 38.44,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 228,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            }
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
      },
      "code": "code3",
      "group": "group3",
      "amount": 121
    },
    {
      "id": "id6",
      "quantity": 236,
      "description": "description6",
      "used_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "status": "status8",
      "deleted_at": "2016-03-13T12:52:32.123Z",
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
                },
                {
                  "id": "id1",
                  "value": 223.33,
                  "increment_type": "increment_type3",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 171,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id2",
                  "value": 223.34,
                  "increment_type": "increment_type4",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 170,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description2",
                  "subscription": {},
                  "subscription_item": {}
                }
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
          {
            "id": "id1",
            "value": 36.03,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 43,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description1",
            "subscription": {
              "id": "id3",
              "code": "code1",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval9",
              "interval_count": 23,
              "billing_type": "billing_type3",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id1",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status7",
                "duration": 7,
                "created_at": "created_at9",
                "updated_at": "updated_at3",
                "cycle": 203
              },
              "payment_method": "payment_method7",
              "currency": "currency7",
              "installments": 191,
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
                    "key0": "metadata0"
                  },
                  "line_1": "line_13",
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
                "fb_id": 233,
                "code": "code5",
                "document_type": "document_type5"
              },
              "card": {
                "id": "id3",
                "last_four_digits": "last_four_digits9",
                "brand": "brand7",
                "holder_name": "holder_name9",
                "exp_month": 169,
                "exp_year": 127,
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
                      "key1": "metadata5",
                      "key2": "metadata4"
                    },
                    "line_1": "line_13",
                    "line_2": "line_27",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata1",
                    "key2": "metadata2"
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
                  "fb_id": 115,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "metadata": {
                  "key0": "metadata0"
                },
                "type": "type7",
                "holder_document": "holder_document3",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits3",
                "label": "label3"
              },
              "items": [
                {},
                {}
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
                "amount": 41,
                "status": "status1"
              },
              "gateway_affiliation_id": "gateway_affiliation_id9",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 93,
              "minimum_price": 235,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id4",
                  "value": 53.16,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 220,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id5",
                  "value": 53.17,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 221,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id6",
                  "value": 53.18,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 222,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {}
              ],
              "boleto_due_days": 135,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type9",
                    "amount": 233,
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
                        "volume_percentage": 85,
                        "delay": 205,
                        "days": [
                          181,
                          182,
                          183
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 251
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
                    "type": "type0",
                    "amount": 234,
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
                          "key0": "metadata3",
                          "key1": "metadata2",
                          "key2": "metadata1"
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
                        "key1": "metadata6",
                        "key2": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 84,
                        "delay": 206,
                        "days": [
                          182
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 250
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
                    "type": "type1",
                    "amount": 235,
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
                          "key1": "metadata3"
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
                        "key0": "metadata4",
                        "key1": "metadata5"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type7",
                        "volume_percentage": 83,
                        "delay": 207,
                        "days": [
                          183,
                          184
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval5",
                        "transfer_day": 249
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
                  "days": 101,
                  "type": "type3",
                  "amount": 175
                },
                "fine": {
                  "days": 173,
                  "type": "type9",
                  "amount": 99
                },
                "max_days_to_pay_past_due": 177
              },
              "manual_billing": true
            },
            "subscription_item": {}
          }
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
            {
              "id": "id3",
              "value": 38.45,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 227,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description7",
              "subscription": {},
              "subscription_item": {}
            }
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
      },
      "code": "code4",
      "group": "group4",
      "amount": 122
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

