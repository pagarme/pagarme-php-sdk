
# Get Order Response

Response object for getting an Order

## Structure

`GetOrderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `items` | [`?(GetOrderItemResponse[])`](../../doc/models/get-order-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `charges` | [`?(GetChargeResponse[])`](../../doc/models/get-charge-response.md) | Optional | - | getCharges(): ?array | setCharges(?array charges): void |
| `invoiceUrl` | `?string` | Optional | - | getInvoiceUrl(): ?string | setInvoiceUrl(?string invoiceUrl): void |
| `shipping` | [`?GetShippingResponse`](../../doc/models/get-shipping-response.md) | Optional | - | getShipping(): ?GetShippingResponse | setShipping(?GetShippingResponse shipping): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `checkouts` | [`?(GetCheckoutPaymentResponse[])`](../../doc/models/get-checkout-payment-response.md) | Optional | Checkout Payment Settings Response | getCheckouts(): ?array | setCheckouts(?array checkouts): void |
| `ip` | `?string` | Optional | Ip address | getIp(): ?string | setIp(?string ip): void |
| `sessionId` | `?string` | Optional | Session id | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `location` | [`?GetLocationResponse`](../../doc/models/get-location-response.md) | Optional | Location | getLocation(): ?GetLocationResponse | setLocation(?GetLocationResponse location): void |
| `device` | [`?GetDeviceResponse`](../../doc/models/get-device-response.md) | Optional | Device's informations | getDevice(): ?GetDeviceResponse | setDevice(?GetDeviceResponse device): void |
| `closed` | `?bool` | Optional | Indicates whether the order is closed | getClosed(): ?bool | setClosed(?bool closed): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": "code8",
  "currency": "currency0",
  "items": [
    {
      "id": "id7",
      "amount": 13,
      "description": "description7",
      "quantity": 127,
      "category": "category5",
      "code": "code5"
    },
    {
      "id": "id8",
      "amount": 14,
      "description": "description8",
      "quantity": 128,
      "category": "category6",
      "code": "code6"
    }
  ],
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
    "fb_id": 174,
    "code": "code8",
    "document_type": "document_type8"
  },
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "charges": [
    {
      "id": "id8",
      "code": "code6",
      "gateway_id": "gateway_id2",
      "amount": 42,
      "status": "status0",
      "currency": "currency2",
      "payment_method": "payment_method2",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": {
        "gateway_id": "gateway_id0",
        "amount": 100,
        "status": "status2",
        "success": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "attempt_count": 76,
        "max_attempts": 64,
        "splits": [
          {
            "type": "type8",
            "amount": 32,
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
                "volume_percentage": 106,
                "delay": 184,
                "days": [
                  160,
                  161
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval0",
                "transfer_day": 16
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
        ],
        "next_attempt": "2016-03-13T12:52:32.123Z",
        "transaction_type": "transaction",
        "id": "id0",
        "gateway_response": {
          "code": "code0",
          "errors": [
            {
              "message": "message7"
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
          "key0": "metadata7",
          "key1": "metadata6"
        },
        "split": [
          {
            "type": "type8",
            "amount": 46,
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
                  "key0": "metadata1",
                  "key1": "metadata0",
                  "key2": "metadata9"
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
                "key0": "metadata7",
                "key1": "metadata6"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type4",
                "volume_percentage": 92,
                "delay": 198,
                "days": [
                  174,
                  175
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval4",
                "transfer_day": 2
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
            "amount": 47,
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
                "volume_percentage": 91,
                "delay": 199,
                "days": [
                  175,
                  176,
                  177
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval3",
                "transfer_day": 1
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
            "amount": 48,
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
                  "key1": "metadata8"
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
                "key0": "metadata9",
                "key1": "metadata8",
                "key2": "metadata7"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type6",
                "volume_percentage": 90,
                "delay": 200,
                "days": [
                  176
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval2",
                "transfer_day": 0
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
        "interest": {
          "days": 10,
          "type": "type0",
          "amount": 84
        },
        "fine": {
          "days": 24,
          "type": "type2",
          "amount": 98
        },
        "max_days_to_pay_past_due": 12
      },
      "invoice": {
        "id": "id2",
        "code": "code0",
        "url": "url6",
        "amount": 12,
        "status": "status6",
        "payment_method": "payment_method8",
        "created_at": "2016-03-13T12:52:32.123Z",
        "items": [
          {
            "amount": 47,
            "description": "description9",
            "pricing_scheme": {
              "price": 183,
              "scheme_type": "scheme_type9",
              "price_brackets": [
                {
                  "start_quantity": 26,
                  "price": 36,
                  "end_quantity": 34,
                  "overage_price": 48
                }
              ],
              "minimum_price": 87,
              "percentage": 248.27
            },
            "price_bracket": {
              "start_quantity": 21,
              "price": 41,
              "end_quantity": 29,
              "overage_price": 43
            },
            "quantity": 161,
            "name": "name9",
            "subscription_item_id": "subscription_item_id3"
          }
        ],
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
          "fb_id": 140,
          "code": "code6",
          "document_type": "document_type6"
        },
        "charge": {},
        "installments": 28,
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
        "subscription": {
          "id": "id2",
          "code": "code0",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval0",
          "interval_count": 200,
          "billing_type": "billing_type6",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id0",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status2",
            "duration": 184,
            "created_at": "created_at8",
            "updated_at": "updated_at6",
            "cycle": 124
          },
          "payment_method": "payment_method2",
          "currency": "currency2",
          "installments": 112,
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
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 104,
            "code": "code0",
            "document_type": "document_type0"
          },
          "card": {
            "id": "id6",
            "last_four_digits": "last_four_digits2",
            "brand": "brand0",
            "holder_name": "holder_name2",
            "exp_month": 250,
            "exp_year": 46,
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
                  "country_code": "country_code8",
                  "number": "number0",
                  "area_code": "area_code2"
                }
              },
              "fb_id": 34,
              "code": "code4",
              "document_type": "document_type4"
            },
            "metadata": {
              "key0": "metadata3"
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
                "price": 21,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 188,
                    "price": 130,
                    "end_quantity": 196,
                    "overage_price": 210
                  }
                ],
                "minimum_price": 181,
                "percentage": 32.29
              },
              "discounts": [
                {
                  "id": "id0",
                  "value": 29.92,
                  "discount_type": "discount_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 200,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id8",
                  "value": 141.2,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 192,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id9",
                  "value": 141.21,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 191,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name9",
              "quantity": 245,
              "cycles": 9,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id0",
              "description": "description0",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 20,
                "scheme_type": "scheme_type2",
                "price_brackets": [
                  {
                    "start_quantity": 189,
                    "price": 129,
                    "end_quantity": 197,
                    "overage_price": 211
                  },
                  {
                    "start_quantity": 190,
                    "price": 128,
                    "end_quantity": 198,
                    "overage_price": 212
                  }
                ],
                "minimum_price": 180,
                "percentage": 32.3
              },
              "discounts": [
                {
                  "id": "id1",
                  "value": 29.93,
                  "discount_type": "discount_type9",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 201,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id2",
                  "value": 29.94,
                  "discount_type": "discount_type0",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 202,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description2",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id9",
                  "value": 141.21,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 191,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id0",
                  "value": 141.22,
                  "increment_type": "increment_type2",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 190,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id1",
                  "value": 141.23,
                  "increment_type": "increment_type3",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 189,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name0",
              "quantity": 246,
              "cycles": 10,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id1",
              "description": "description1",
              "status": "status3",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 19,
                "scheme_type": "scheme_type3",
                "price_brackets": [
                  {
                    "start_quantity": 190,
                    "price": 128,
                    "end_quantity": 198,
                    "overage_price": 212
                  },
                  {
                    "start_quantity": 191,
                    "price": 127,
                    "end_quantity": 199,
                    "overage_price": 213
                  },
                  {
                    "start_quantity": 192,
                    "price": 126,
                    "end_quantity": 200,
                    "overage_price": 214
                  }
                ],
                "minimum_price": 179,
                "percentage": 32.31
              },
              "discounts": [
                {
                  "id": "id2",
                  "value": 29.94,
                  "discount_type": "discount_type0",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 202,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description2",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id3",
                  "value": 29.95,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 203,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description3",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id4",
                  "value": 29.96,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 204,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id0",
                  "value": 141.22,
                  "increment_type": "increment_type2",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 190,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name1",
              "quantity": 247,
              "cycles": 11,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          ],
          "statement_descriptor": "statement_descriptor2",
          "metadata": {
            "key0": "metadata9",
            "key1": "metadata8"
          },
          "setup": {
            "id": "id6",
            "description": "description6",
            "amount": 136,
            "status": "status8"
          },
          "gateway_affiliation_id": "gateway_affiliation_id8",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 84,
          "minimum_price": 198,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id3",
              "value": 60.05,
              "discount_type": "discount_type1",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 141,
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
                  "price": 99,
                  "scheme_type": "scheme_type1",
                  "price_brackets": [
                    {
                      "start_quantity": 52,
                      "price": 246,
                      "end_quantity": 60,
                      "overage_price": 74
                    },
                    {
                      "start_quantity": 53,
                      "price": 247,
                      "end_quantity": 61,
                      "overage_price": 75
                    },
                    {
                      "start_quantity": 54,
                      "price": 248,
                      "end_quantity": 62,
                      "overage_price": 76
                    }
                  ],
                  "minimum_price": 195,
                  "percentage": 97.49
                },
                "discounts": [
                  {},
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id8",
                    "value": 206.4,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 184,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name9",
                "quantity": 109,
                "cycles": 129,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "increments": [
            {
              "id": "id1",
              "value": 171.33,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 251,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {
                "id": "id7",
                "description": "description7",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 251,
                  "scheme_type": "scheme_type1",
                  "price_brackets": [
                    {
                      "start_quantity": 214,
                      "price": 104,
                      "end_quantity": 222,
                      "overage_price": 236
                    },
                    {
                      "start_quantity": 215,
                      "price": 103,
                      "end_quantity": 223,
                      "overage_price": 237
                    },
                    {
                      "start_quantity": 216,
                      "price": 102,
                      "end_quantity": 224,
                      "overage_price": 238
                    }
                  ],
                  "minimum_price": 155,
                  "percentage": 55.59
                },
                "discounts": [
                  {
                    "id": "id8",
                    "value": 206.4,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 184,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id9",
                    "value": 206.41,
                    "discount_type": "discount_type7",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 185,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id0",
                    "value": 206.42,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 186,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {}
                ],
                "subscription": {},
                "name": "name7",
                "quantity": 229,
                "cycles": 7,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id2",
              "value": 171.34,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 250,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {
                "id": "id8",
                "description": "description8",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 252,
                  "scheme_type": "scheme_type0",
                  "price_brackets": [
                    {
                      "start_quantity": 213,
                      "price": 105,
                      "end_quantity": 221,
                      "overage_price": 235
                    },
                    {
                      "start_quantity": 214,
                      "price": 104,
                      "end_quantity": 222,
                      "overage_price": 236
                    }
                  ],
                  "minimum_price": 156,
                  "percentage": 55.58
                },
                "discounts": [
                  {
                    "id": "id9",
                    "value": 206.41,
                    "discount_type": "discount_type7",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 185,
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
                "subscription": {},
                "name": "name8",
                "quantity": 230,
                "cycles": 6,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "boleto_due_days": 56,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type8",
                "amount": 16,
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
                    "volume_percentage": 122,
                    "delay": 168,
                    "days": [
                      144,
                      145,
                      146
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 32
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
                "amount": 17,
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
                    "volume_percentage": 121,
                    "delay": 169,
                    "days": [
                      145
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 31
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
                "amount": 18,
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
                    "volume_percentage": 120,
                    "delay": 170,
                    "days": [
                      146,
                      147
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval8",
                    "transfer_day": 30
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
              "days": 34,
              "type": "type2",
              "amount": 108
            },
            "fine": {
              "days": 0,
              "type": "type6",
              "amount": 74
            },
            "max_days_to_pay_past_due": 244
          },
          "manual_billing": false
        },
        "cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id2",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {
            "id": "id2",
            "code": "code0",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval0",
            "interval_count": 148,
            "billing_type": "billing_type4",
            "current_cycle": {},
            "payment_method": "payment_method8",
            "currency": "currency2",
            "installments": 60,
            "status": "status6",
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
              "fb_id": 52,
              "code": "code0",
              "document_type": "document_type0"
            },
            "card": {
              "id": "id4",
              "last_four_digits": "last_four_digits0",
              "brand": "brand8",
              "holder_name": "holder_name0",
              "exp_month": 38,
              "exp_year": 2,
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
                    "country_code": "country_code2",
                    "number": "number4",
                    "area_code": "area_code8"
                  },
                  "mobile_phone": {
                    "country_code": "country_code2",
                    "number": "number0",
                    "area_code": "area_code2"
                  }
                },
                "fb_id": 170,
                "code": "code4",
                "document_type": "document_type4"
              },
              "metadata": {
                "key0": "metadata9"
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
                  "price": 215,
                  "scheme_type": "scheme_type9",
                  "price_brackets": [
                    {
                      "start_quantity": 250,
                      "price": 68,
                      "end_quantity": 2,
                      "overage_price": 16
                    },
                    {
                      "start_quantity": 251,
                      "price": 67,
                      "end_quantity": 3,
                      "overage_price": 17
                    },
                    {
                      "start_quantity": 252,
                      "price": 66,
                      "end_quantity": 4,
                      "overage_price": 18
                    }
                  ],
                  "minimum_price": 119,
                  "percentage": 112.27
                },
                "discounts": [
                  {
                    "id": "id0",
                    "value": 149.72,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 148,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id1",
                    "value": 149.73,
                    "discount_type": "discount_type9",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 149,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id2",
                    "value": 149.74,
                    "discount_type": "discount_type0",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 150,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id8",
                    "value": 5.0,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 244,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name9",
                "quantity": 193,
                "cycles": 43,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              {
                "id": "id0",
                "description": "description0",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 216,
                  "scheme_type": "scheme_type8",
                  "price_brackets": [
                    {
                      "start_quantity": 249,
                      "price": 69,
                      "end_quantity": 1,
                      "overage_price": 15
                    },
                    {
                      "start_quantity": 250,
                      "price": 68,
                      "end_quantity": 2,
                      "overage_price": 16
                    }
                  ],
                  "minimum_price": 120,
                  "percentage": 112.26
                },
                "discounts": [
                  {
                    "id": "id1",
                    "value": 149.73,
                    "discount_type": "discount_type9",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 149,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id9",
                    "value": 5.01,
                    "increment_type": "increment_type9",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 243,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id0",
                    "value": 5.02,
                    "increment_type": "increment_type8",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 242,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name0",
                "quantity": 194,
                "cycles": 42,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            ],
            "statement_descriptor": "statement_descriptor2",
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata2",
              "key2": "metadata3"
            },
            "setup": {
              "id": "id6",
              "description": "description4",
              "amount": 84,
              "status": "status2"
            },
            "gateway_affiliation_id": "gateway_affiliation_id8",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 224,
            "minimum_price": 110,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id3",
                "value": 179.85,
                "discount_type": "discount_type1",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 89,
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
                    "price": 209,
                    "scheme_type": "scheme_type1",
                    "price_brackets": [
                      {
                        "start_quantity": 0,
                        "price": 62,
                        "end_quantity": 8,
                        "overage_price": 22
                      },
                      {
                        "start_quantity": 1,
                        "price": 61,
                        "end_quantity": 9,
                        "overage_price": 23
                      }
                    ],
                    "minimum_price": 113,
                    "percentage": 217.29
                  },
                  "discounts": [
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id8",
                      "value": 70.2,
                      "increment_type": "increment_type0",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 124,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description8",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id9",
                      "value": 70.21,
                      "increment_type": "increment_type1",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 123,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id0",
                      "value": 70.22,
                      "increment_type": "increment_type2",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 122,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name9",
                  "quantity": 57,
                  "cycles": 77,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id4",
                "value": 179.86,
                "discount_type": "discount_type2",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 90,
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
                    "price": 208,
                    "scheme_type": "scheme_type2",
                    "price_brackets": [
                      {
                        "start_quantity": 1,
                        "price": 61,
                        "end_quantity": 9,
                        "overage_price": 23
                      },
                      {
                        "start_quantity": 2,
                        "price": 60,
                        "end_quantity": 10,
                        "overage_price": 24
                      },
                      {
                        "start_quantity": 3,
                        "price": 59,
                        "end_quantity": 11,
                        "overage_price": 25
                      }
                    ],
                    "minimum_price": 112,
                    "percentage": 217.3
                  },
                  "discounts": [
                    {},
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id9",
                      "value": 70.21,
                      "increment_type": "increment_type1",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 123,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name0",
                  "quantity": 58,
                  "cycles": 78,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id5",
                "value": 179.87,
                "discount_type": "discount_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 91,
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
                    "price": 207,
                    "scheme_type": "scheme_type3",
                    "price_brackets": [
                      {
                        "start_quantity": 2,
                        "price": 60,
                        "end_quantity": 10,
                        "overage_price": 24
                      }
                    ],
                    "minimum_price": 111,
                    "percentage": 217.31
                  },
                  "discounts": [
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id0",
                      "value": 70.22,
                      "increment_type": "increment_type2",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 122,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id1",
                      "value": 70.23,
                      "increment_type": "increment_type3",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 121,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name1",
                  "quantity": 59,
                  "cycles": 79,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "increments": [
              {
                "id": "id5",
                "value": 36.47,
                "increment_type": "increment_type7",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 169,
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
                    "price": 77,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 132,
                        "price": 70,
                        "end_quantity": 140,
                        "overage_price": 154
                      }
                    ],
                    "minimum_price": 19,
                    "percentage": 190.45
                  },
                  "discounts": [
                    {
                      "id": "id2",
                      "value": 71.54,
                      "discount_type": "discount_type0",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 10,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description2",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id3",
                      "value": 71.55,
                      "discount_type": "discount_type1",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 11,
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
                  "name": "name1",
                  "quantity": 55,
                  "cycles": 181,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "boleto_due_days": 4,
            "split": {
              "enabled": false,
              "rules": [
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
                        "key0": "metadata1"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata7"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type0",
                      "volume_percentage": 26,
                      "delay": 8,
                      "days": [
                        240,
                        241,
                        242
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval8",
                      "transfer_day": 192
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
                  "amount": 221,
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
                        "key1": "metadata9"
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
                      "volume_percentage": 27,
                      "delay": 7,
                      "days": [
                        239,
                        240
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval9",
                      "transfer_day": 193
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
                "days": 86,
                "type": "type8",
                "amount": 160
              },
              "fine": {
                "days": 52,
                "type": "type6",
                "amount": 234
              },
              "max_days_to_pay_past_due": 192
            },
            "manual_billing": false
          },
          "status": "status4",
          "duration": 198,
          "created_at": "created_at0",
          "updated_at": "updated_at8",
          "cycle": 138
        },
        "shipping": {
          "amount": 86,
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
              "email": "email4",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document6",
              "type": "type8",
              "fb_access_token": "fb_access_token6",
              "address": {},
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
              "fb_id": 134,
              "code": "code0",
              "document_type": "document_type0"
            },
            "metadata": {
              "key0": "metadata9",
              "key1": "metadata8"
            },
            "line_1": "line_16",
            "line_2": "line_20",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "max_delivery_date": "2016-03-13T12:52:32.123Z",
          "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
          "type": "type4"
        },
        "metadata": {
          "key0": "metadata1"
        },
        "due_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "seen_at": "2016-03-13T12:52:32.123Z",
        "total_discount": 96,
        "total_increment": 168,
        "subscription_id": "subscription_id2"
      },
      "order": {
        "id": "id8",
        "code": "code6",
        "currency": "currency8",
        "items": [
          {
            "id": "id5",
            "amount": 213,
            "description": "description5",
            "quantity": 71,
            "category": "category3",
            "code": "code3"
          },
          {
            "id": "id6",
            "amount": 214,
            "description": "description6",
            "quantity": 72,
            "category": "category4",
            "code": "code4"
          }
        ],
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
            "key1": "metadata6"
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
          "fb_id": 186,
          "code": "code6",
          "document_type": "document_type6"
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
          "amount": 252,
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
              "fb_id": 44,
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
        "metadata": {
          "key0": "metadata5",
          "key1": "metadata4",
          "key2": "metadata3"
        },
        "checkouts": [
          {
            "id": "id5",
            "amount": 163,
            "default_payment_method": "default_payment_method5",
            "success_url": "success_url7",
            "payment_url": "payment_url9",
            "gateway_affiliation_id": "gateway_affiliation_id1",
            "accepted_payment_methods": [
              "accepted_payment_methods8",
              "accepted_payment_methods9",
              "accepted_payment_methods0"
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
              "fb_id": 195,
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
                  "key0": "metadata4",
                  "key1": "metadata5"
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
                "key0": "metadata4"
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
                  "total": 120
                }
              ],
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
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions3"
            },
            "billing_address_editable": true,
            "shipping": {
              "amount": 5,
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
                  "fb_id": 53,
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
            "shippable": true,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency5",
            "debit_card": {
              "statement_descriptor": "statement_descriptor9",
              "authentication": {
                "type": "type1",
                "threed_secure": {
                  "mpi": "mpi7",
                  "eci": "eci9",
                  "cavv": "cavv5",
                  "transaction_Id": "transaction_Id5",
                  "success_url": "success_url1"
                }
              }
            },
            "bank_transfer": {
              "bank": [
                "bank0",
                "bank1",
                "bank2"
              ]
            },
            "accepted_brands": [
              "accepted_brands1",
              "accepted_brands2",
              "accepted_brands3"
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
                },
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
          "latitude": "latitude6",
          "longitude": "longitude6"
        },
        "device": {
          "platform": "platform8"
        },
        "closed": false
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
        "fb_id": 86,
        "code": "code0",
        "document_type": "document_type0"
      },
      "metadata": {
        "key0": "metadata5"
      },
      "paid_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "canceled_amount": 152,
      "paid_amount": 122,
      "interest_and_fine_paid": 138,
      "recurrency_cycle": "recurrency_cycle2"
    },
    {
      "id": "id9",
      "code": "code7",
      "gateway_id": "gateway_id1",
      "amount": 43,
      "status": "status9",
      "currency": "currency1",
      "payment_method": "payment_method1",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": {
        "gateway_id": "gateway_id1",
        "amount": 101,
        "status": "status3",
        "success": true,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "attempt_count": 77,
        "max_attempts": 65,
        "splits": [
          {
            "type": "type7",
            "amount": 33,
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
                "volume_percentage": 105,
                "delay": 185,
                "days": [
                  161,
                  162,
                  163
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval9",
                "transfer_day": 15
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
            "amount": 34,
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
                "volume_percentage": 104,
                "delay": 186,
                "days": [
                  162
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval8",
                "transfer_day": 14
              },
              "code": "code4",
              "payment_mode": "payment_mode0"
            },
            "gateway_id": "gateway_id6",
            "options": {
              "liable": false,
              "charge_processing_fee": false,
              "charge_remainder_fee": "charge_remainder_fee6"
            },
            "id": "id4"
          }
        ],
        "next_attempt": "2016-03-13T12:52:32.123Z",
        "transaction_type": "transaction",
        "id": "id1",
        "gateway_response": {
          "code": "code1",
          "errors": [
            {
              "message": "message8"
            },
            {
              "message": "message9"
            }
          ]
        },
        "antifraud_response": {
          "status": "status1",
          "return_code": "return_code9",
          "return_message": "return_message7",
          "provider_name": "provider_name7",
          "score": "score9"
        },
        "metadata": {
          "key0": "metadata8"
        },
        "split": [
          {
            "type": "type9",
            "amount": 47,
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
                "volume_percentage": 91,
                "delay": 199,
                "days": [
                  175,
                  176,
                  177
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval3",
                "transfer_day": 1
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
          "days": 9,
          "type": "type1",
          "amount": 83
        },
        "fine": {
          "days": 25,
          "type": "type3",
          "amount": 99
        },
        "max_days_to_pay_past_due": 13
      },
      "invoice": {
        "id": "id3",
        "code": "code1",
        "url": "url7",
        "amount": 11,
        "status": "status5",
        "payment_method": "payment_method7",
        "created_at": "2016-03-13T12:52:32.123Z",
        "items": [
          {
            "amount": 48,
            "description": "description0",
            "pricing_scheme": {
              "price": 184,
              "scheme_type": "scheme_type8",
              "price_brackets": [
                {
                  "start_quantity": 25,
                  "price": 37,
                  "end_quantity": 33,
                  "overage_price": 47
                },
                {
                  "start_quantity": 26,
                  "price": 36,
                  "end_quantity": 34,
                  "overage_price": 48
                },
                {
                  "start_quantity": 27,
                  "price": 35,
                  "end_quantity": 35,
                  "overage_price": 49
                }
              ],
              "minimum_price": 88,
              "percentage": 248.26
            },
            "price_bracket": {
              "start_quantity": 22,
              "price": 40,
              "end_quantity": 30,
              "overage_price": 44
            },
            "quantity": 162,
            "name": "name0",
            "subscription_item_id": "subscription_item_id4"
          },
          {
            "amount": 49,
            "description": "description1",
            "pricing_scheme": {
              "price": 185,
              "scheme_type": "scheme_type7",
              "price_brackets": [
                {
                  "start_quantity": 24,
                  "price": 38,
                  "end_quantity": 32,
                  "overage_price": 46
                },
                {
                  "start_quantity": 25,
                  "price": 37,
                  "end_quantity": 33,
                  "overage_price": 47
                }
              ],
              "minimum_price": 89,
              "percentage": 248.25
            },
            "price_bracket": {
              "start_quantity": 23,
              "price": 39,
              "end_quantity": 31,
              "overage_price": 45
            },
            "quantity": 163,
            "name": "name1",
            "subscription_item_id": "subscription_item_id5"
          }
        ],
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
          "fb_id": 139,
          "code": "code5",
          "document_type": "document_type5"
        },
        "charge": {},
        "installments": 29,
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
        "subscription": {
          "id": "id1",
          "code": "code9",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval9",
          "interval_count": 199,
          "billing_type": "billing_type5",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id9",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status1",
            "duration": 183,
            "created_at": "created_at7",
            "updated_at": "updated_at5",
            "cycle": 123
          },
          "payment_method": "payment_method1",
          "currency": "currency1",
          "installments": 111,
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
                "key0": "metadata2",
                "key1": "metadata1",
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
            "fb_id": 103,
            "code": "code9",
            "document_type": "document_type9"
          },
          "card": {
            "id": "id5",
            "last_four_digits": "last_four_digits1",
            "brand": "brand9",
            "holder_name": "holder_name1",
            "exp_month": 251,
            "exp_year": 45,
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
                  "key0": "metadata8"
                },
                "line_1": "line_15",
                "line_2": "line_29",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata8"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code7",
                  "number": "number5",
                  "area_code": "area_code7"
                },
                "mobile_phone": {
                  "country_code": "country_code7",
                  "number": "number9",
                  "area_code": "area_code3"
                }
              },
              "fb_id": 33,
              "code": "code3",
              "document_type": "document_type3"
            },
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata1"
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
                "price": 22,
                "scheme_type": "scheme_type0",
                "price_brackets": [
                  {
                    "start_quantity": 187,
                    "price": 131,
                    "end_quantity": 195,
                    "overage_price": 209
                  },
                  {
                    "start_quantity": 188,
                    "price": 130,
                    "end_quantity": 196,
                    "overage_price": 210
                  },
                  {
                    "start_quantity": 189,
                    "price": 129,
                    "end_quantity": 197,
                    "overage_price": 211
                  }
                ],
                "minimum_price": 182,
                "percentage": 32.28
              },
              "discounts": [
                {
                  "id": "id9",
                  "value": 29.91,
                  "discount_type": "discount_type7",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 199,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id0",
                  "value": 29.92,
                  "discount_type": "discount_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 200,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id1",
                  "value": 29.93,
                  "discount_type": "discount_type9",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 201,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id7",
                  "value": 141.19,
                  "increment_type": "increment_type9",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 193,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name8",
              "quantity": 244,
              "cycles": 8,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            {
              "id": "id9",
              "description": "description9",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 21,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 188,
                    "price": 130,
                    "end_quantity": 196,
                    "overage_price": 210
                  }
                ],
                "minimum_price": 181,
                "percentage": 32.29
              },
              "discounts": [
                {
                  "id": "id0",
                  "value": 29.92,
                  "discount_type": "discount_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 200,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id8",
                  "value": 141.2,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 192,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id9",
                  "value": 141.21,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 191,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name9",
              "quantity": 245,
              "cycles": 9,
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
            "amount": 135,
            "status": "status7"
          },
          "gateway_affiliation_id": "gateway_affiliation_id7",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 83,
          "minimum_price": 197,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id2",
              "value": 60.04,
              "discount_type": "discount_type0",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 140,
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
                  "price": 98,
                  "scheme_type": "scheme_type0",
                  "price_brackets": [
                    {
                      "start_quantity": 51,
                      "price": 245,
                      "end_quantity": 59,
                      "overage_price": 73
                    },
                    {
                      "start_quantity": 52,
                      "price": 246,
                      "end_quantity": 60,
                      "overage_price": 74
                    }
                  ],
                  "minimum_price": 194,
                  "percentage": 97.48
                },
                "discounts": [
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id7",
                    "value": 206.39,
                    "increment_type": "increment_type9",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 183,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id8",
                    "value": 206.4,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 184,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id9",
                    "value": 206.41,
                    "increment_type": "increment_type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 185,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name8",
                "quantity": 108,
                "cycles": 128,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id3",
              "value": 60.05,
              "discount_type": "discount_type1",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 141,
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
                  "price": 99,
                  "scheme_type": "scheme_type1",
                  "price_brackets": [
                    {
                      "start_quantity": 52,
                      "price": 246,
                      "end_quantity": 60,
                      "overage_price": 74
                    },
                    {
                      "start_quantity": 53,
                      "price": 247,
                      "end_quantity": 61,
                      "overage_price": 75
                    },
                    {
                      "start_quantity": 54,
                      "price": 248,
                      "end_quantity": 62,
                      "overage_price": 76
                    }
                  ],
                  "minimum_price": 195,
                  "percentage": 97.49
                },
                "discounts": [
                  {},
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id8",
                    "value": 206.4,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 184,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name9",
                "quantity": 109,
                "cycles": 129,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id4",
              "value": 60.06,
              "discount_type": "discount_type2",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 142,
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
                  "price": 100,
                  "scheme_type": "scheme_type2",
                  "price_brackets": [
                    {
                      "start_quantity": 53,
                      "price": 247,
                      "end_quantity": 61,
                      "overage_price": 75
                    }
                  ],
                  "minimum_price": 196,
                  "percentage": 97.5
                },
                "discounts": [
                  {}
                ],
                "increments": [
                  {
                    "id": "id9",
                    "value": 206.41,
                    "increment_type": "increment_type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 185,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id0",
                    "value": 206.42,
                    "increment_type": "increment_type2",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 186,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name0",
                "quantity": 110,
                "cycles": 130,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "increments": [
            {
              "id": "id0",
              "value": 171.32,
              "increment_type": "increment_type2",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 252,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description0",
              "subscription": {},
              "subscription_item": {
                "id": "id6",
                "description": "description6",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 250,
                  "scheme_type": "scheme_type2",
                  "price_brackets": [
                    {
                      "start_quantity": 215,
                      "price": 103,
                      "end_quantity": 223,
                      "overage_price": 237
                    }
                  ],
                  "minimum_price": 154,
                  "percentage": 55.6
                },
                "discounts": [
                  {
                    "id": "id7",
                    "value": 206.39,
                    "discount_type": "discount_type5",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 183,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id8",
                    "value": 206.4,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 184,
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
                "quantity": 228,
                "cycles": 8,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "boleto_due_days": 55,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type9",
                "amount": 15,
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
                    "volume_percentage": 123,
                    "delay": 167,
                    "days": [
                      143,
                      144
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval1",
                    "transfer_day": 33
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
                "amount": 16,
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
                    "volume_percentage": 122,
                    "delay": 168,
                    "days": [
                      144,
                      145,
                      146
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 32
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
              "days": 35,
              "type": "type1",
              "amount": 109
            },
            "fine": {
              "days": 255,
              "type": "type7",
              "amount": 73
            },
            "max_days_to_pay_past_due": 243
          },
          "manual_billing": true
        },
        "cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id3",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {
            "id": "id1",
            "code": "code9",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval9",
            "interval_count": 147,
            "billing_type": "billing_type5",
            "current_cycle": {},
            "payment_method": "payment_method9",
            "currency": "currency1",
            "installments": 59,
            "status": "status7",
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
              "fb_id": 51,
              "code": "code9",
              "document_type": "document_type9"
            },
            "card": {
              "id": "id5",
              "last_four_digits": "last_four_digits1",
              "brand": "brand9",
              "holder_name": "holder_name1",
              "exp_month": 37,
              "exp_year": 3,
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
                    "key0": "metadata8"
                  },
                  "line_1": "line_15",
                  "line_2": "line_29",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata8"
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
                "fb_id": 169,
                "code": "code3",
                "document_type": "document_type3"
              },
              "metadata": {
                "key0": "metadata8",
                "key1": "metadata9",
                "key2": "metadata0"
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
                  "price": 214,
                  "scheme_type": "scheme_type0",
                  "price_brackets": [
                    {
                      "start_quantity": 251,
                      "price": 67,
                      "end_quantity": 3,
                      "overage_price": 17
                    }
                  ],
                  "minimum_price": 118,
                  "percentage": 112.28
                },
                "discounts": [
                  {
                    "id": "id9",
                    "value": 149.71,
                    "discount_type": "discount_type7",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 147,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id0",
                    "value": 149.72,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 148,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id7",
                    "value": 4.99,
                    "increment_type": "increment_type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 245,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description3",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id8",
                    "value": 5.0,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 244,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description2",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id9",
                    "value": 5.01,
                    "increment_type": "increment_type9",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 243,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description1",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name8",
                "quantity": 192,
                "cycles": 44,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            ],
            "statement_descriptor": "statement_descriptor1",
            "metadata": {
              "key0": "metadata2"
            },
            "setup": {
              "id": "id5",
              "description": "description5",
              "amount": 83,
              "status": "status3"
            },
            "gateway_affiliation_id": "gateway_affiliation_id7",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 225,
            "minimum_price": 111,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id2",
                "value": 179.84,
                "discount_type": "discount_type0",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 88,
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
                    "price": 210,
                    "scheme_type": "scheme_type0",
                    "price_brackets": [
                      {
                        "start_quantity": 255,
                        "price": 63,
                        "end_quantity": 7,
                        "overage_price": 21
                      }
                    ],
                    "minimum_price": 114,
                    "percentage": 217.28
                  },
                  "discounts": [
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id7",
                      "value": 70.19,
                      "increment_type": "increment_type9",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 125,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description7",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id8",
                      "value": 70.2,
                      "increment_type": "increment_type0",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 124,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description8",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name8",
                  "quantity": 56,
                  "cycles": 76,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id3",
                "value": 179.85,
                "discount_type": "discount_type1",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 89,
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
                    "price": 209,
                    "scheme_type": "scheme_type1",
                    "price_brackets": [
                      {
                        "start_quantity": 0,
                        "price": 62,
                        "end_quantity": 8,
                        "overage_price": 22
                      },
                      {
                        "start_quantity": 1,
                        "price": 61,
                        "end_quantity": 9,
                        "overage_price": 23
                      }
                    ],
                    "minimum_price": 113,
                    "percentage": 217.29
                  },
                  "discounts": [
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id8",
                      "value": 70.2,
                      "increment_type": "increment_type0",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 124,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description8",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id9",
                      "value": 70.21,
                      "increment_type": "increment_type1",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 123,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id0",
                      "value": 70.22,
                      "increment_type": "increment_type2",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 122,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name9",
                  "quantity": 57,
                  "cycles": 77,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "increments": [
              {
                "id": "id4",
                "value": 36.46,
                "increment_type": "increment_type6",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 170,
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
                    "price": 76,
                    "scheme_type": "scheme_type8",
                    "price_brackets": [
                      {
                        "start_quantity": 133,
                        "price": 71,
                        "end_quantity": 141,
                        "overage_price": 155
                      },
                      {
                        "start_quantity": 134,
                        "price": 72,
                        "end_quantity": 142,
                        "overage_price": 156
                      }
                    ],
                    "minimum_price": 20,
                    "percentage": 190.46
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 71.53,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 9,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
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
                  "quantity": 54,
                  "cycles": 182,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id3",
                "value": 36.45,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 171,
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
                    "price": 75,
                    "scheme_type": "scheme_type9",
                    "price_brackets": [
                      {
                        "start_quantity": 134,
                        "price": 72,
                        "end_quantity": 142,
                        "overage_price": 156
                      },
                      {
                        "start_quantity": 135,
                        "price": 73,
                        "end_quantity": 143,
                        "overage_price": 157
                      },
                      {
                        "start_quantity": 136,
                        "price": 74,
                        "end_quantity": 144,
                        "overage_price": 158
                      }
                    ],
                    "minimum_price": 21,
                    "percentage": 190.47
                  },
                  "discounts": [
                    {
                      "id": "id0",
                      "value": 71.52,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 8,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id1",
                      "value": 71.53,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 9,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id2",
                      "value": 71.54,
                      "discount_type": "discount_type0",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 10,
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
                  "quantity": 53,
                  "cycles": 183,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "boleto_due_days": 3,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type9",
                  "amount": 219,
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
                        "key1": "metadata1",
                        "key2": "metadata0"
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
                      "volume_percentage": 25,
                      "delay": 9,
                      "days": [
                        241
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval7",
                      "transfer_day": 191
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
                "days": 87,
                "type": "type9",
                "amount": 161
              },
              "fine": {
                "days": 53,
                "type": "type7",
                "amount": 235
              },
              "max_days_to_pay_past_due": 191
            },
            "manual_billing": true
          },
          "status": "status5",
          "duration": 199,
          "created_at": "created_at1",
          "updated_at": "updated_at9",
          "cycle": 139
        },
        "shipping": {
          "amount": 87,
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
              "email": "email3",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document7",
              "type": "type7",
              "fb_access_token": "fb_access_token7",
              "address": {},
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
              "fb_id": 135,
              "code": "code1",
              "document_type": "document_type1"
            },
            "metadata": {
              "key0": "metadata0"
            },
            "line_1": "line_17",
            "line_2": "line_21",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "max_delivery_date": "2016-03-13T12:52:32.123Z",
          "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
          "type": "type3"
        },
        "metadata": {
          "key0": "metadata0",
          "key1": "metadata1",
          "key2": "metadata2"
        },
        "due_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "seen_at": "2016-03-13T12:52:32.123Z",
        "total_discount": 97,
        "total_increment": 169,
        "subscription_id": "subscription_id3"
      },
      "order": {
        "id": "id7",
        "code": "code5",
        "currency": "currency7",
        "items": [
          {
            "id": "id4",
            "amount": 212,
            "description": "description4",
            "quantity": 70,
            "category": "category2",
            "code": "code2"
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
            "key0": "metadata6",
            "key1": "metadata7",
            "key2": "metadata8"
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
          "fb_id": 185,
          "code": "code5",
          "document_type": "document_type5"
        },
        "status": "status9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "charges": [
          {},
          {}
        ],
        "invoice_url": "invoice_url9",
        "shipping": {
          "amount": 251,
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
                "key0": "metadata2"
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
              "fb_id": 43,
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
          "key0": "metadata4"
        },
        "checkouts": [
          {
            "id": "id4",
            "amount": 162,
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
                "fb_id": 20,
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
                  "total": 119
                },
                {
                  "number": "number6",
                  "total": 120
                },
                {
                  "number": "number7",
                  "total": 121
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
              "amount": 4,
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
                  "fb_id": 52,
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
          },
          {
            "id": "id5",
            "amount": 163,
            "default_payment_method": "default_payment_method5",
            "success_url": "success_url7",
            "payment_url": "payment_url9",
            "gateway_affiliation_id": "gateway_affiliation_id1",
            "accepted_payment_methods": [
              "accepted_payment_methods8",
              "accepted_payment_methods9",
              "accepted_payment_methods0"
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
              "fb_id": 195,
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
                  "key0": "metadata4",
                  "key1": "metadata5"
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
                "key0": "metadata4"
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
                  "total": 120
                }
              ],
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
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions3"
            },
            "billing_address_editable": true,
            "shipping": {
              "amount": 5,
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
                  "fb_id": 53,
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
            "shippable": true,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency5",
            "debit_card": {
              "statement_descriptor": "statement_descriptor9",
              "authentication": {
                "type": "type1",
                "threed_secure": {
                  "mpi": "mpi7",
                  "eci": "eci9",
                  "cavv": "cavv5",
                  "transaction_Id": "transaction_Id5",
                  "success_url": "success_url1"
                }
              }
            },
            "bank_transfer": {
              "bank": [
                "bank0",
                "bank1",
                "bank2"
              ]
            },
            "accepted_brands": [
              "accepted_brands1",
              "accepted_brands2",
              "accepted_brands3"
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
                },
                {
                  "Name": "Name4",
                  "Value": "Value2"
                }
              ]
            }
          },
          {
            "id": "id6",
            "amount": 164,
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
              "fb_id": 196,
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
                "fb_id": 22,
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
                  "total": 121
                },
                {
                  "number": "number8",
                  "total": 122
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
              "amount": 6,
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
                  "fb_id": 54,
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
          }
        ],
        "ip": "ip1",
        "session_id": "session_id9",
        "location": {
          "latitude": "latitude5",
          "longitude": "longitude5"
        },
        "device": {
          "platform": "platform7"
        },
        "closed": true
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
        "fb_id": 85,
        "code": "code9",
        "document_type": "document_type9"
      },
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata5",
        "key2": "metadata6"
      },
      "paid_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "canceled_amount": 153,
      "paid_amount": 121,
      "interest_and_fine_paid": 139,
      "recurrency_cycle": "recurrency_cycle3"
    }
  ],
  "invoice_url": "invoice_url2",
  "shipping": {
    "amount": 52,
    "description": "description6",
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
        "email": "email6",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document4",
        "type": "type0",
        "fb_access_token": "fb_access_token4",
        "address": {},
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
        "fb_id": 100,
        "code": "code8",
        "document_type": "document_type8"
      },
      "metadata": {
        "key0": "metadata7"
      },
      "line_1": "line_14",
      "line_2": "line_28",
      "deleted_at": "2016-03-13T12:52:32.123Z"
    },
    "max_delivery_date": "2016-03-13T12:52:32.123Z",
    "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
    "type": "type6"
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "checkouts": [
    {
      "id": "id7",
      "amount": 219,
      "default_payment_method": "default_payment_method7",
      "success_url": "success_url9",
      "payment_url": "payment_url1",
      "gateway_affiliation_id": "gateway_affiliation_id3",
      "accepted_payment_methods": [
        "accepted_payment_methods0",
        "accepted_payment_methods1",
        "accepted_payment_methods2"
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
            "key0": "metadata6",
            "key1": "metadata5",
            "key2": "metadata4"
          },
          "line_1": "line_17",
          "line_2": "line_21",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata4",
          "key1": "metadata3"
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
        "fb_id": 251,
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
            "key1": "metadata3"
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
          "fb_id": 77,
          "code": "code3",
          "document_type": "document_type3"
        },
        "metadata": {
          "key0": "metadata4"
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
            "total": 176
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
        "amount": 61,
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
              "key1": "metadata9"
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
            "fb_id": 109,
            "code": "code5",
            "document_type": "document_type5"
          },
          "metadata": {
            "key0": "metadata8"
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
          "bank2",
          "bank3"
        ]
      },
      "accepted_brands": [
        "accepted_brands3",
        "accepted_brands4",
        "accepted_brands5"
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
          },
          {
            "Name": "Name6",
            "Value": "Value4"
          }
        ]
      }
    }
  ],
  "ip": "ip4",
  "session_id": "session_id8",
  "location": {
    "latitude": "latitude2",
    "longitude": "longitude8"
  },
  "device": {
    "platform": "platform0"
  },
  "closed": false
}
```

