
# Get Invoice Response

Response object for getting an invoice

## Structure

`GetInvoiceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `paymentMethod` | `?string` | Optional | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `items` | [`?(GetInvoiceItemResponse[])`](../../doc/models/get-invoice-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `charge` | [`?GetChargeResponse`](../../doc/models/get-charge-response.md) | Optional | - | getCharge(): ?GetChargeResponse | setCharge(?GetChargeResponse charge): void |
| `installments` | `?int` | Optional | - | getInstallments(): ?int | setInstallments(?int installments): void |
| `billingAddress` | [`?GetBillingAddressResponse`](../../doc/models/get-billing-address-response.md) | Optional | - | getBillingAddress(): ?GetBillingAddressResponse | setBillingAddress(?GetBillingAddressResponse billingAddress): void |
| `subscription` | [`?GetSubscriptionResponse`](../../doc/models/get-subscription-response.md) | Optional | - | getSubscription(): ?GetSubscriptionResponse | setSubscription(?GetSubscriptionResponse subscription): void |
| `cycle` | [`?GetPeriodResponse`](../../doc/models/get-period-response.md) | Optional | - | getCycle(): ?GetPeriodResponse | setCycle(?GetPeriodResponse cycle): void |
| `shipping` | [`?GetShippingResponse`](../../doc/models/get-shipping-response.md) | Optional | - | getShipping(): ?GetShippingResponse | setShipping(?GetShippingResponse shipping): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `dueAt` | `?\DateTime` | Optional | - | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `canceledAt` | `?\DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `billingAt` | `?\DateTime` | Optional | - | getBillingAt(): ?\DateTime | setBillingAt(?\DateTime billingAt): void |
| `seenAt` | `?\DateTime` | Optional | - | getSeenAt(): ?\DateTime | setSeenAt(?\DateTime seenAt): void |
| `totalDiscount` | `?int` | Optional | Total discounted value | getTotalDiscount(): ?int | setTotalDiscount(?int totalDiscount): void |
| `totalIncrement` | `?int` | Optional | Total discounted value | getTotalIncrement(): ?int | setTotalIncrement(?int totalIncrement): void |
| `subscriptionId` | `?string` | Optional | Subscription Id | getSubscriptionId(): ?string | setSubscriptionId(?string subscriptionId): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": "code8",
  "url": "url4",
  "amount": 46,
  "status": "status8",
  "payment_method": "payment_method0",
  "created_at": "2016-03-13T12:52:32.123Z",
  "items": [
    {
      "amount": 13,
      "description": "description7",
      "pricing_scheme": {
        "price": 149,
        "scheme_type": "scheme_type1",
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
        "percentage": 25.89
      },
      "price_bracket": {
        "start_quantity": 243,
        "price": 75,
        "end_quantity": 251,
        "overage_price": 9
      },
      "quantity": 127,
      "name": "name7",
      "subscription_item_id": "subscription_item_id1"
    },
    {
      "amount": 14,
      "description": "description8",
      "pricing_scheme": {
        "price": 150,
        "scheme_type": "scheme_type0",
        "price_brackets": [
          {
            "start_quantity": 59,
            "price": 3,
            "end_quantity": 67,
            "overage_price": 81
          },
          {
            "start_quantity": 60,
            "price": 2,
            "end_quantity": 68,
            "overage_price": 82
          }
        ],
        "minimum_price": 54,
        "percentage": 25.88
      },
      "price_bracket": {
        "start_quantity": 244,
        "price": 74,
        "end_quantity": 252,
        "overage_price": 10
      },
      "quantity": 128,
      "name": "name8",
      "subscription_item_id": "subscription_item_id2"
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
  "charge": {
    "id": "id8",
    "code": "code6",
    "gateway_id": "gateway_id2",
    "amount": 80,
    "status": "status0",
    "currency": "currency8",
    "payment_method": "payment_method8",
    "due_at": "2016-03-13T12:52:32.123Z",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "last_transaction": {
      "gateway_id": "gateway_id0",
      "amount": 138,
      "status": "status2",
      "success": false,
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "attempt_count": 114,
      "max_attempts": 102,
      "splits": [
        {
          "type": "type2",
          "amount": 70,
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
              "volume_percentage": 68,
              "delay": 222,
              "days": [
                198
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval0",
              "transfer_day": 234
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
          "amount": 71,
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
              "volume_percentage": 67,
              "delay": 223,
              "days": [
                199,
                200
              ]
            },
            "transfer_settings": {
              "transfer_enabled": true,
              "transfer_interval": "transfer_interval9",
              "transfer_day": 233
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
          "amount": 72,
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
              "key0": "metadata3"
            },
            "automatic_anticipation_settings": {
              "enabled": false,
              "type": "type0",
              "volume_percentage": 66,
              "delay": 224,
              "days": [
                200,
                201,
                202
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval8",
              "transfer_day": 232
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
          },
          {
            "message": "message9"
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
        "key0": "metadata1",
        "key1": "metadata2"
      },
      "split": [
        {
          "type": "type8",
          "amount": 84,
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
              "volume_percentage": 202,
              "delay": 236,
              "days": [
                212
              ]
            },
            "transfer_settings": {
              "transfer_enabled": false,
              "transfer_interval": "transfer_interval6",
              "transfer_day": 72
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
          "amount": 85,
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
              "volume_percentage": 203,
              "delay": 237,
              "days": [
                213,
                214
              ]
            },
            "transfer_settings": {
              "transfer_enabled": true,
              "transfer_interval": "transfer_interval7",
              "transfer_day": 73
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
        "days": 44,
        "type": "type0",
        "amount": 118
      },
      "fine": {
        "days": 62,
        "type": "type2",
        "amount": 136
      },
      "max_days_to_pay_past_due": 50
    },
    "invoice": {
      "id": "id2",
      "code": "code0",
      "url": "url6",
      "amount": 26,
      "status": "status4",
      "payment_method": "payment_method8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "items": [
        {
          "amount": 85,
          "description": "description9",
          "pricing_scheme": {
            "price": 67,
            "scheme_type": "scheme_type1",
            "price_brackets": [
              {
                "start_quantity": 142,
                "price": 176,
                "end_quantity": 150,
                "overage_price": 164
              }
            ],
            "minimum_price": 227,
            "percentage": 175.19
          },
          "price_bracket": {
            "start_quantity": 59,
            "price": 253,
            "end_quantity": 67,
            "overage_price": 81
          },
          "quantity": 199,
          "name": "name9",
          "subscription_item_id": "subscription_item_id3"
        },
        {
          "amount": 86,
          "description": "description0",
          "pricing_scheme": {
            "price": 66,
            "scheme_type": "scheme_type2",
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
            "percentage": 175.2
          },
          "price_bracket": {
            "start_quantity": 60,
            "price": 254,
            "end_quantity": 68,
            "overage_price": 82
          },
          "quantity": 200,
          "name": "name0",
          "subscription_item_id": "subscription_item_id4"
        },
        {
          "amount": 87,
          "description": "description1",
          "pricing_scheme": {
            "price": 65,
            "scheme_type": "scheme_type3",
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
            "percentage": 175.21
          },
          "price_bracket": {
            "start_quantity": 61,
            "price": 255,
            "end_quantity": 69,
            "overage_price": 83
          },
          "quantity": 201,
          "name": "name1",
          "subscription_item_id": "subscription_item_id5"
        }
      ],
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
      "charge": {},
      "installments": 66,
      "billing_address": {
        "street": "street4",
        "number": "number8",
        "zip_code": "zip_code8",
        "neighborhood": "neighborhood0",
        "city": "city4",
        "state": "state0",
        "country": "country8",
        "complement": "complement0",
        "line_1": "line_12",
        "line_2": "line_22"
      },
      "subscription": {
        "id": "id2",
        "code": "code0",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval0",
        "interval_count": 162,
        "billing_type": "billing_type4",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id0",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status2",
          "duration": 146,
          "created_at": "created_at8",
          "updated_at": "updated_at6",
          "cycle": 86
        },
        "payment_method": "payment_method8",
        "currency": "currency2",
        "installments": 74,
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
          "fb_id": 66,
          "code": "code0",
          "document_type": "document_type0"
        },
        "card": {
          "id": "id4",
          "last_four_digits": "last_four_digits0",
          "brand": "brand8",
          "holder_name": "holder_name0",
          "exp_month": 52,
          "exp_year": 244,
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
                "key0": "metadata9"
              },
              "line_1": "line_14",
              "line_2": "line_20",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata7"
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
            "fb_id": 184,
            "code": "code4",
            "document_type": "document_type4"
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
          {
            "id": "id9",
            "description": "description9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 229,
              "scheme_type": "scheme_type9",
              "price_brackets": [
                {
                  "start_quantity": 236,
                  "price": 82,
                  "end_quantity": 244,
                  "overage_price": 2
                }
              ],
              "minimum_price": 133,
              "percentage": 135.17
            },
            "discounts": [
              {
                "id": "id0",
                "value": 126.82,
                "discount_type": "discount_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 162,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 126.83,
                "discount_type": "discount_type9",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 163,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {
                "id": "id2",
                "value": 8.94,
                "increment_type": "increment_type6",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 106,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description8",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 8.93,
                "increment_type": "increment_type7",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 107,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description9",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id0",
                "value": 8.92,
                "increment_type": "increment_type8",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 108,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name9",
            "quantity": 207,
            "cycles": 29,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor2",
        "metadata": {
          "key0": "metadata1"
        },
        "setup": {
          "id": "id6",
          "description": "description4",
          "amount": 98,
          "status": "status2"
        },
        "gateway_affiliation_id": "gateway_affiliation_id8",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 210,
        "minimum_price": 96,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {
            "id": "id3",
            "value": 156.95,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 103,
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
                "price": 195,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 14,
                    "price": 48,
                    "end_quantity": 22,
                    "overage_price": 36
                  }
                ],
                "minimum_price": 99,
                "percentage": 194.39
              },
              "discounts": [
                {}
              ],
              "increments": [
                {
                  "id": "id8",
                  "value": 47.3,
                  "increment_type": "increment_type0",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 110,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id9",
                  "value": 47.31,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 109,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name9",
              "quantity": 71,
              "cycles": 91,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id4",
            "value": 156.96,
            "discount_type": "discount_type2",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 104,
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
                "price": 194,
                "scheme_type": "scheme_type2",
                "price_brackets": [
                  {
                    "start_quantity": 15,
                    "price": 47,
                    "end_quantity": 23,
                    "overage_price": 37
                  },
                  {
                    "start_quantity": 16,
                    "price": 46,
                    "end_quantity": 24,
                    "overage_price": 38
                  }
                ],
                "minimum_price": 98,
                "percentage": 194.4
              },
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {
                  "id": "id9",
                  "value": 47.31,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 109,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description9",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id0",
                  "value": 47.32,
                  "increment_type": "increment_type2",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 108,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description0",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id1",
                  "value": 47.33,
                  "increment_type": "increment_type3",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 107,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name0",
              "quantity": 72,
              "cycles": 92,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "increments": [
          {
            "id": "id5",
            "value": 13.57,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 155,
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
                "price": 165,
                "scheme_type": "scheme_type7",
                "price_brackets": [
                  {
                    "start_quantity": 118,
                    "price": 56,
                    "end_quantity": 126,
                    "overage_price": 140
                  },
                  {
                    "start_quantity": 119,
                    "price": 57,
                    "end_quantity": 127,
                    "overage_price": 141
                  }
                ],
                "minimum_price": 5,
                "percentage": 213.35
              },
              "discounts": [
                {
                  "id": "id2",
                  "value": 48.64,
                  "discount_type": "discount_type0",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 24,
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
              "quantity": 69,
              "cycles": 167,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id4",
            "value": 13.56,
            "increment_type": "increment_type4",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 156,
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
                "price": 166,
                "scheme_type": "scheme_type8",
                "price_brackets": [
                  {
                    "start_quantity": 119,
                    "price": 57,
                    "end_quantity": 127,
                    "overage_price": 141
                  },
                  {
                    "start_quantity": 120,
                    "price": 58,
                    "end_quantity": 128,
                    "overage_price": 142
                  },
                  {
                    "start_quantity": 121,
                    "price": 59,
                    "end_quantity": 129,
                    "overage_price": 143
                  }
                ],
                "minimum_price": 6,
                "percentage": 213.36
              },
              "discounts": [
                {
                  "id": "id1",
                  "value": 48.63,
                  "discount_type": "discount_type9",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 23,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description1",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id2",
                  "value": 48.64,
                  "discount_type": "discount_type0",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 24,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description2",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id3",
                  "value": 48.65,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 25,
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
              "quantity": 68,
              "cycles": 168,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "boleto_due_days": 18,
        "split": {
          "enabled": false,
          "rules": [
            {
              "type": "type8",
              "amount": 234,
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
                  "volume_percentage": 40,
                  "delay": 250,
                  "days": [
                    226
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval8",
                  "transfer_day": 206
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
            "days": 72,
            "type": "type8",
            "amount": 146
          },
          "fine": {
            "days": 54,
            "type": "type4",
            "amount": 128
          },
          "max_days_to_pay_past_due": 206
        },
        "manual_billing": false
      },
      "cycle": {
        "start_at": "2016-03-13T12:52:32.123Z",
        "end_at": "2016-03-13T12:52:32.123Z",
        "id": "id2",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "subscription": {
          "id": "id8",
          "code": "code6",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval6",
          "interval_count": 54,
          "billing_type": "billing_type8",
          "current_cycle": {},
          "payment_method": "payment_method2",
          "currency": "currency8",
          "installments": 222,
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
                "key1": "metadata0",
                "key2": "metadata9"
              },
              "line_1": "line_18",
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
            "fb_id": 214,
            "code": "code6",
            "document_type": "document_type6"
          },
          "card": {
            "id": "id2",
            "last_four_digits": "last_four_digits8",
            "brand": "brand6",
            "holder_name": "holder_name2",
            "exp_month": 140,
            "exp_year": 156,
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
              "fb_id": 16,
              "code": "code6",
              "document_type": "document_type6"
            },
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata2",
              "key2": "metadata3"
            },
            "type": "type8",
            "holder_document": "holder_document4",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits2",
            "label": "label2"
          },
          "items": [
            {
              "id": "id5",
              "description": "description5",
              "status": "status7",
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
                  }
                ],
                "minimum_price": 25,
                "percentage": 36.41
              },
              "discounts": [
                {
                  "id": "id6",
                  "value": 225.58,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 54,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id7",
                  "value": 225.59,
                  "discount_type": "discount_type5",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 55,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "increments": [
                {
                  "id": "id4",
                  "value": 80.86,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 82,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id5",
                  "value": 80.87,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 81,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id6",
                  "value": 80.88,
                  "increment_type": "increment_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 80,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name5",
              "quantity": 99,
              "cycles": 137,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          ],
          "statement_descriptor": "statement_descriptor8",
          "metadata": {
            "key0": "metadata5"
          },
          "setup": {
            "id": "id2",
            "description": "description2",
            "amount": 246,
            "status": "status6"
          },
          "gateway_affiliation_id": "gateway_affiliation_id4",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 62,
          "minimum_price": 204,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id9",
              "value": 255.71,
              "discount_type": "discount_type7",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 251,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {
                "id": "id5",
                "description": "description5",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 47,
                  "scheme_type": "scheme_type7",
                  "price_brackets": [
                    {
                      "start_quantity": 162,
                      "price": 156,
                      "end_quantity": 170,
                      "overage_price": 184
                    }
                  ],
                  "minimum_price": 207,
                  "percentage": 37.15
                },
                "discounts": [
                  {}
                ],
                "increments": [
                  {
                    "id": "id4",
                    "value": 146.06,
                    "increment_type": "increment_type6",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 218,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description4",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id5",
                    "value": 146.07,
                    "increment_type": "increment_type7",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 217,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description5",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name5",
                "quantity": 219,
                "cycles": 239,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id0",
              "value": 255.72,
              "discount_type": "discount_type8",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 252,
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
                  "price": 46,
                  "scheme_type": "scheme_type8",
                  "price_brackets": [
                    {
                      "start_quantity": 163,
                      "price": 155,
                      "end_quantity": 171,
                      "overage_price": 185
                    },
                    {
                      "start_quantity": 164,
                      "price": 154,
                      "end_quantity": 172,
                      "overage_price": 186
                    }
                  ],
                  "minimum_price": 206,
                  "percentage": 37.16
                },
                "discounts": [
                  {},
                  {}
                ],
                "increments": [
                  {
                    "id": "id5",
                    "value": 146.07,
                    "increment_type": "increment_type7",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 217,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description5",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id6",
                    "value": 146.08,
                    "increment_type": "increment_type8",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 216,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description6",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id7",
                    "value": 146.09,
                    "increment_type": "increment_type9",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 215,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name6",
                "quantity": 220,
                "cycles": 240,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "increments": [
            {
              "id": "id1",
              "value": 112.33,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 7,
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
                  "price": 239,
                  "scheme_type": "scheme_type1",
                  "price_brackets": [
                    {
                      "start_quantity": 226,
                      "price": 164,
                      "end_quantity": 234,
                      "overage_price": 248
                    },
                    {
                      "start_quantity": 227,
                      "price": 165,
                      "end_quantity": 235,
                      "overage_price": 249
                    }
                  ],
                  "minimum_price": 143,
                  "percentage": 114.59
                },
                "discounts": [
                  {
                    "id": "id8",
                    "value": 147.4,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 172,
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
                "quantity": 217,
                "cycles": 19,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            },
            {
              "id": "id0",
              "value": 112.32,
              "increment_type": "increment_type2",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 8,
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
                  "price": 238,
                  "scheme_type": "scheme_type2",
                  "price_brackets": [
                    {
                      "start_quantity": 227,
                      "price": 165,
                      "end_quantity": 235,
                      "overage_price": 249
                    },
                    {
                      "start_quantity": 228,
                      "price": 166,
                      "end_quantity": 236,
                      "overage_price": 250
                    },
                    {
                      "start_quantity": 229,
                      "price": 167,
                      "end_quantity": 237,
                      "overage_price": 251
                    }
                  ],
                  "minimum_price": 142,
                  "percentage": 114.6
                },
                "discounts": [
                  {
                    "id": "id7",
                    "value": 147.39,
                    "discount_type": "discount_type5",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 171,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id8",
                    "value": 147.4,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 172,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id9",
                    "value": 147.41,
                    "discount_type": "discount_type7",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 173,
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
                "quantity": 216,
                "cycles": 20,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            }
          ],
          "boleto_due_days": 166,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type2",
                "amount": 126,
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
                      "key1": "metadata4",
                      "key2": "metadata3"
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
                    }
                  ],
                  "metadata": {
                    "key0": "metadata3",
                    "key1": "metadata4",
                    "key2": "metadata5"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type6",
                    "volume_percentage": 12,
                    "delay": 22,
                    "days": [
                      254
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval4",
                    "transfer_day": 178
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
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 180,
              "type": "type2",
              "amount": 254
            },
            "fine": {
              "days": 110,
              "type": "type0",
              "amount": 184
            },
            "max_days_to_pay_past_due": 98
          },
          "manual_billing": false
        },
        "status": "status4",
        "duration": 236,
        "created_at": "created_at0",
        "updated_at": "updated_at8",
        "cycle": 176
      },
      "shipping": {
        "amount": 124,
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
            "fb_id": 172,
            "code": "code0",
            "document_type": "document_type0"
          },
          "metadata": {
            "key0": "metadata3",
            "key1": "metadata4"
          },
          "line_1": "line_16",
          "line_2": "line_20",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "max_delivery_date": "2016-03-13T12:52:32.123Z",
        "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
        "type": "type6"
      },
      "metadata": {
        "key0": "metadata9",
        "key1": "metadata8"
      },
      "due_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "billing_at": "2016-03-13T12:52:32.123Z",
      "seen_at": "2016-03-13T12:52:32.123Z",
      "total_discount": 134,
      "total_increment": 206,
      "subscription_id": "subscription_id2"
    },
    "order": {
      "id": "id8",
      "code": "code6",
      "currency": "currency2",
      "items": [
        {
          "id": "id5",
          "amount": 175,
          "description": "description5",
          "quantity": 33,
          "category": "category3",
          "code": "code3"
        },
        {
          "id": "id6",
          "amount": 176,
          "description": "description6",
          "quantity": 34,
          "category": "category4",
          "code": "code4"
        },
        {
          "id": "id7",
          "amount": 177,
          "description": "description7",
          "quantity": 35,
          "category": "category5",
          "code": "code5"
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
            "key1": "metadata4"
          },
          "line_1": "line_12",
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
        "fb_id": 12,
        "code": "code0",
        "document_type": "document_type0"
      },
      "status": "status0",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "charges": [
        {}
      ],
      "invoice_url": "invoice_url0",
      "shipping": {
        "amount": 214,
        "description": "description8",
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
            "type": "type2",
            "fb_access_token": "fb_access_token2",
            "address": {},
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
            "fb_id": 6,
            "code": "code6",
            "document_type": "document_type6"
          },
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata4",
            "key2": "metadata3"
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
        "key0": "metadata5",
        "key1": "metadata6"
      },
      "checkouts": [
        {
          "id": "id5",
          "amount": 125,
          "default_payment_method": "default_payment_method5",
          "success_url": "success_url7",
          "payment_url": "payment_url9",
          "gateway_affiliation_id": "gateway_affiliation_id1",
          "accepted_payment_methods": [
            "accepted_payment_methods8"
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
                "key0": "metadata8"
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
            "fb_id": 157,
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
                "key0": "metadata6",
                "key1": "metadata5",
                "key2": "metadata4"
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
              "fb_id": 239,
              "code": "code1",
              "document_type": "document_type1"
            },
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5"
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
                "total": 82
              },
              {
                "number": "number7",
                "total": 83
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
            "amount": 223,
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
                  "key1": "metadata7",
                  "key2": "metadata8"
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
                "fb_id": 15,
                "code": "code3",
                "document_type": "document_type3"
              },
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata7"
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
                "cavv": "cavv7",
                "transaction_Id": "transaction_Id3",
                "success_url": "success_url3"
              }
            }
          },
          "bank_transfer": {
            "bank": [
              "bank4"
            ]
          },
          "accepted_brands": [
            "accepted_brands1"
          ],
          "pix": {
            "expires_at": "2016-03-13T12:52:32.123Z",
            "additional_information": [
              {
                "Name": "Name2",
                "Value": "Value0"
              }
            ]
          }
        },
        {
          "id": "id6",
          "amount": 126,
          "default_payment_method": "default_payment_method6",
          "success_url": "success_url8",
          "payment_url": "payment_url0",
          "gateway_affiliation_id": "gateway_affiliation_id2",
          "accepted_payment_methods": [
            "accepted_payment_methods9",
            "accepted_payment_methods0"
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
                "key1": "metadata6"
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
            "fb_id": 158,
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
              "fb_id": 240,
              "code": "code2",
              "document_type": "document_type2"
            },
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata4",
              "key2": "metadata3"
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
                "total": 83
              },
              {
                "number": "number8",
                "total": 84
              },
              {
                "number": "number9",
                "total": 85
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
            "amount": 224,
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
                  "key0": "metadata7"
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
                "fb_id": 16,
                "code": "code4",
                "document_type": "document_type4"
              },
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata8",
                "key2": "metadata9"
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
                "cavv": "cavv6",
                "transaction_Id": "transaction_Id4",
                "success_url": "success_url2"
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
            "accepted_brands2",
            "accepted_brands3"
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
      "fb_id": 112,
      "code": "code6",
      "document_type": "document_type6"
    },
    "metadata": {
      "key0": "metadata5",
      "key1": "metadata4"
    },
    "paid_at": "2016-03-13T12:52:32.123Z",
    "canceled_at": "2016-03-13T12:52:32.123Z",
    "canceled_amount": 190,
    "paid_amount": 172,
    "interest_and_fine_paid": 176,
    "recurrency_cycle": "recurrency_cycle2"
  },
  "installments": 250,
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
  "cycle": {
    "start_at": "2016-03-13T12:52:32.123Z",
    "end_at": "2016-03-13T12:52:32.123Z",
    "id": "id0",
    "billing_at": "2016-03-13T12:52:32.123Z",
    "subscription": {
      "id": "id4",
      "code": "code2",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval2",
      "interval_count": 182,
      "billing_type": "billing_type2",
      "current_cycle": {},
      "payment_method": "payment_method6",
      "currency": "currency4",
      "installments": 94,
      "status": "status4",
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
            "key0": "metadata7",
            "key1": "metadata6",
            "key2": "metadata5"
          },
          "line_1": "line_14",
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
        "fb_id": 86,
        "code": "code2",
        "document_type": "document_type2"
      },
      "card": {
        "id": "id2",
        "last_four_digits": "last_four_digits8",
        "brand": "brand6",
        "holder_name": "holder_name8",
        "exp_month": 72,
        "exp_year": 224,
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
          "fb_id": 204,
          "code": "code6",
          "document_type": "document_type6"
        },
        "metadata": {
          "key0": "metadata1",
          "key1": "metadata2",
          "key2": "metadata3"
        },
        "type": "type8",
        "holder_document": "holder_document4",
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "first_six_digits": "first_six_digits2",
        "label": "label2"
      },
      "items": [
        {
          "id": "id1",
          "description": "description1",
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 249,
            "scheme_type": "scheme_type7",
            "price_brackets": [
              {
                "start_quantity": 216,
                "price": 102,
                "end_quantity": 224,
                "overage_price": 238
              }
            ],
            "minimum_price": 153,
            "percentage": 78.65
          },
          "discounts": [
            {
              "id": "id2",
              "value": 183.34,
              "discount_type": "discount_type0",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 182,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description2",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id3",
              "value": 183.35,
              "discount_type": "discount_type1",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 183,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id0",
              "value": 38.62,
              "increment_type": "increment_type2",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 210,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description0",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id1",
              "value": 38.63,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 209,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id2",
              "value": 38.64,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 208,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name1",
          "quantity": 227,
          "cycles": 9,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      ],
      "statement_descriptor": "statement_descriptor4",
      "metadata": {
        "key0": "metadata9"
      },
      "setup": {
        "id": "id8",
        "description": "description2",
        "amount": 118,
        "status": "status0"
      },
      "gateway_affiliation_id": "gateway_affiliation_id0",
      "next_billing_at": "2016-03-13T12:52:32.123Z",
      "billing_day": 190,
      "minimum_price": 76,
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "discounts": [
        {
          "id": "id5",
          "value": 213.47,
          "discount_type": "discount_type3",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 123,
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
              "price": 175,
              "scheme_type": "scheme_type3",
              "price_brackets": [
                {
                  "start_quantity": 34,
                  "price": 28,
                  "end_quantity": 42,
                  "overage_price": 56
                }
              ],
              "minimum_price": 79,
              "percentage": 250.91
            },
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id0",
                "value": 103.82,
                "increment_type": "increment_type2",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 90,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 103.83,
                "increment_type": "increment_type3",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 89,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name1",
            "quantity": 91,
            "cycles": 111,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id6",
          "value": 213.48,
          "discount_type": "discount_type4",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 124,
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
              "price": 174,
              "scheme_type": "scheme_type4",
              "price_brackets": [
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
              "minimum_price": 78,
              "percentage": 250.92
            },
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id1",
                "value": 103.83,
                "increment_type": "increment_type3",
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
                "value": 103.84,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 88,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id3",
                "value": 103.85,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 87,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name2",
            "quantity": 92,
            "cycles": 112,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "increments": [
        {
          "id": "id7",
          "value": 70.09,
          "increment_type": "increment_type9",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 135,
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
              "price": 111,
              "scheme_type": "scheme_type5",
              "price_brackets": [
                {
                  "start_quantity": 98,
                  "price": 36,
                  "end_quantity": 106,
                  "overage_price": 120
                },
                {
                  "start_quantity": 99,
                  "price": 37,
                  "end_quantity": 107,
                  "overage_price": 121
                }
              ],
              "minimum_price": 241,
              "percentage": 156.83
            },
            "discounts": [
              {
                "id": "id4",
                "value": 105.16,
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
              {},
              {},
              {}
            ],
            "subscription": {},
            "name": "name3",
            "quantity": 89,
            "cycles": 147,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id6",
          "value": 70.08,
          "increment_type": "increment_type8",
          "status": "status2",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 136,
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
              "price": 110,
              "scheme_type": "scheme_type6",
              "price_brackets": [
                {
                  "start_quantity": 99,
                  "price": 37,
                  "end_quantity": 107,
                  "overage_price": 121
                },
                {
                  "start_quantity": 100,
                  "price": 38,
                  "end_quantity": 108,
                  "overage_price": 122
                },
                {
                  "start_quantity": 101,
                  "price": 39,
                  "end_quantity": 109,
                  "overage_price": 123
                }
              ],
              "minimum_price": 242,
              "percentage": 156.84
            },
            "discounts": [
              {
                "id": "id3",
                "value": 105.15,
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
                "value": 105.16,
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
                "value": 105.17,
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
              {}
            ],
            "subscription": {},
            "name": "name2",
            "quantity": 88,
            "cycles": 148,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "boleto_due_days": 38,
      "split": {
        "enabled": false,
        "rules": [
          {
            "type": "type6",
            "amount": 254,
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
                "volume_percentage": 140,
                "delay": 150,
                "days": [
                  126
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval8",
                "transfer_day": 50
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
        ]
      },
      "boleto": {
        "interest": {
          "days": 52,
          "type": "type6",
          "amount": 126
        },
        "fine": {
          "days": 238,
          "type": "type4",
          "amount": 200
        },
        "max_days_to_pay_past_due": 226
      },
      "manual_billing": false
    },
    "status": "status2",
    "duration": 164,
    "created_at": "created_at8",
    "updated_at": "updated_at6",
    "cycle": 104
  },
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
  "due_at": "2016-03-13T12:52:32.123Z",
  "canceled_at": "2016-03-13T12:52:32.123Z",
  "billing_at": "2016-03-13T12:52:32.123Z",
  "seen_at": "2016-03-13T12:52:32.123Z",
  "total_discount": 62,
  "total_increment": 134,
  "subscription_id": "subscription_id0"
}
```

