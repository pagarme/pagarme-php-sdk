
# Get Charge Response

Response object for getting a charge

## Structure

`GetChargeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `gatewayId` | `?string` | Optional | - | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `paymentMethod` | `?string` | Optional | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `dueAt` | `?\DateTime` | Optional | - | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `lastTransaction` | [`?GetTransactionResponse`](../../doc/models/get-transaction-response.md) | Optional | - | getLastTransaction(): ?GetTransactionResponse | setLastTransaction(?GetTransactionResponse lastTransaction): void |
| `invoice` | [`?GetInvoiceResponse`](../../doc/models/get-invoice-response.md) | Optional | - | getInvoice(): ?GetInvoiceResponse | setInvoice(?GetInvoiceResponse invoice): void |
| `order` | [`?GetOrderResponse`](../../doc/models/get-order-response.md) | Optional | - | getOrder(): ?GetOrderResponse | setOrder(?GetOrderResponse order): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `paidAt` | `?\DateTime` | Optional | - | getPaidAt(): ?\DateTime | setPaidAt(?\DateTime paidAt): void |
| `canceledAt` | `?\DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `canceledAmount` | `?int` | Optional | Canceled Amount | getCanceledAmount(): ?int | setCanceledAmount(?int canceledAmount): void |
| `paidAmount` | `?int` | Optional | Paid amount | getPaidAmount(): ?int | setPaidAmount(?int paidAmount): void |
| `interestAndFinePaid` | `?int` | Optional | interest and fine paid | getInterestAndFinePaid(): ?int | setInterestAndFinePaid(?int interestAndFinePaid): void |
| `recurrencyCycle` | `?string` | Optional | Defines whether the card has been used one or more times. | getRecurrencyCycle(): ?string | setRecurrencyCycle(?string recurrencyCycle): void |

## Example (as JSON)

```json
{
  "recurrency_cycle": "\"first\" or \"subsequent\"",
  "id": "id0",
  "code": "code8",
  "gateway_id": "gateway_id0",
  "amount": 46,
  "status": "status8",
  "currency": "currency0",
  "payment_method": "payment_method0",
  "due_at": "2016-03-13T12:52:32.123Z",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "last_transaction": {
    "gateway_id": "gateway_id8",
    "amount": 12,
    "status": "status4",
    "success": false,
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "attempt_count": 244,
    "max_attempts": 232,
    "splits": [
      {
        "type": "type6",
        "amount": 200,
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
            "volume_percentage": 6,
            "delay": 28,
            "days": [
              4,
              5
            ]
          },
          "transfer_settings": {
            "transfer_enabled": false,
            "transfer_interval": "transfer_interval0",
            "transfer_day": 172
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
      },
      {
        "type": "type5",
        "amount": 201,
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
            "volume_percentage": 7,
            "delay": 27,
            "days": [
              3
            ]
          },
          "transfer_settings": {
            "transfer_enabled": true,
            "transfer_interval": "transfer_interval1",
            "transfer_day": 173
          },
          "code": "code1",
          "payment_mode": "payment_mode3"
        },
        "gateway_id": "gateway_id5",
        "options": {
          "liable": true,
          "charge_processing_fee": true,
          "charge_remainder_fee": "charge_remainder_fee5"
        },
        "id": "id5"
      }
    ],
    "next_attempt": "2016-03-13T12:52:32.123Z",
    "transaction_type": "transaction",
    "id": "id2",
    "gateway_response": {
      "code": "code2",
      "errors": [
        {
          "message": "message9"
        },
        {
          "message": "message0"
        }
      ]
    },
    "antifraud_response": {
      "status": "status2",
      "return_code": "return_code0",
      "return_message": "return_message8",
      "provider_name": "provider_name8",
      "score": "score0"
    },
    "metadata": {
      "key0": "metadata9"
    },
    "split": [
      {
        "type": "type0",
        "amount": 214,
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
              "key0": "metadata9"
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
            "key0": "metadata9"
          },
          "automatic_anticipation_settings": {
            "enabled": false,
            "type": "type4",
            "volume_percentage": 180,
            "delay": 110,
            "days": [
              86,
              87,
              88
            ]
          },
          "transfer_settings": {
            "transfer_enabled": false,
            "transfer_interval": "transfer_interval2",
            "transfer_day": 90
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
      "days": 98,
      "type": "type2",
      "amount": 172
    },
    "fine": {
      "days": 192,
      "type": "type6",
      "amount": 10
    },
    "max_days_to_pay_past_due": 180
  },
  "invoice": {
    "id": "id6",
    "code": "code4",
    "url": "url0",
    "amount": 248,
    "status": "status2",
    "payment_method": "payment_method4",
    "created_at": "2016-03-13T12:52:32.123Z",
    "items": [
      {
        "amount": 67,
        "description": "description3",
        "pricing_scheme": {
          "price": 203,
          "scheme_type": "scheme_type5",
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
          "percentage": 250.63
        },
        "price_bracket": {
          "start_quantity": 41,
          "price": 21,
          "end_quantity": 49,
          "overage_price": 63
        },
        "quantity": 181,
        "name": "name3",
        "subscription_item_id": "subscription_item_id7"
      },
      {
        "amount": 68,
        "description": "description4",
        "pricing_scheme": {
          "price": 204,
          "scheme_type": "scheme_type4",
          "price_brackets": [
            {
              "start_quantity": 5,
              "price": 57,
              "end_quantity": 13,
              "overage_price": 27
            },
            {
              "start_quantity": 6,
              "price": 56,
              "end_quantity": 14,
              "overage_price": 28
            }
          ],
          "minimum_price": 108,
          "percentage": 250.62
        },
        "price_bracket": {
          "start_quantity": 42,
          "price": 20,
          "end_quantity": 50,
          "overage_price": 64
        },
        "quantity": 182,
        "name": "name4",
        "subscription_item_id": "subscription_item_id8"
      }
    ],
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
      "fb_id": 120,
      "code": "code2",
      "document_type": "document_type2"
    },
    "charge": {
      "id": "id2",
      "code": "code0",
      "gateway_id": "gateway_id8",
      "amount": 26,
      "status": "status4",
      "currency": "currency2",
      "payment_method": "payment_method8",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": {
        "gateway_id": "gateway_id4",
        "amount": 84,
        "status": "status6",
        "success": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "attempt_count": 60,
        "max_attempts": 48,
        "splits": [
          {
            "type": "type6",
            "amount": 16,
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
                "type": "type8",
                "volume_percentage": 122,
                "delay": 168,
                "days": [
                  144
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval6",
                "transfer_day": 32
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
            "amount": 17,
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
                "type": "type7",
                "volume_percentage": 121,
                "delay": 169,
                "days": [
                  145,
                  146
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval5",
                "transfer_day": 31
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
            "amount": 18,
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
                  "key0": "metadata1"
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
                "key0": "metadata7"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type6",
                "volume_percentage": 120,
                "delay": 170,
                "days": [
                  146,
                  147,
                  148
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval4",
                "transfer_day": 30
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
          "key1": "metadata4"
        },
        "split": [
          {
            "type": "type2",
            "amount": 30,
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
                "key1": "metadata4"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type8",
                "volume_percentage": 148,
                "delay": 182,
                "days": [
                  158
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval0",
                "transfer_day": 18
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
            "amount": 31,
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
                "key0": "metadata4",
                "key1": "metadata3",
                "key2": "metadata2"
              },
              "automatic_anticipation_settings": {
                "enabled": true,
                "type": "type9",
                "volume_percentage": 149,
                "delay": 183,
                "days": [
                  159,
                  160
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval1",
                "transfer_day": 19
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
          "days": 246,
          "type": "type6",
          "amount": 64
        },
        "fine": {
          "days": 8,
          "type": "type6",
          "amount": 82
        },
        "max_days_to_pay_past_due": 252
      },
      "invoice": {},
      "order": {
        "id": "id4",
        "code": "code2",
        "currency": "currency6",
        "items": [
          {
            "id": "id1",
            "amount": 229,
            "description": "description1",
            "quantity": 87,
            "category": "category9",
            "code": "code9"
          },
          {
            "id": "id2",
            "amount": 230,
            "description": "description2",
            "quantity": 88,
            "category": "category0",
            "code": "code0"
          },
          {
            "id": "id3",
            "amount": 231,
            "description": "description3",
            "quantity": 89,
            "category": "category1",
            "code": "code1"
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
          "fb_id": 214,
          "code": "code4",
          "document_type": "document_type4"
        },
        "status": "status4",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "charges": [
          {}
        ],
        "invoice_url": "invoice_url6",
        "shipping": {
          "amount": 12,
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
              "email": "email2",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document8",
              "type": "type6",
              "fb_access_token": "fb_access_token8",
              "address": {},
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
              "fb_id": 60,
              "code": "code2",
              "document_type": "document_type2"
            },
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata0",
              "key2": "metadata9"
            },
            "line_1": "line_18",
            "line_2": "line_22",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "max_delivery_date": "2016-03-13T12:52:32.123Z",
          "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
          "type": "type2"
        },
        "metadata": {
          "key0": "metadata9",
          "key1": "metadata0"
        },
        "checkouts": [
          {
            "id": "id1",
            "amount": 179,
            "default_payment_method": "default_payment_method1",
            "success_url": "success_url3",
            "payment_url": "payment_url5",
            "gateway_affiliation_id": "gateway_affiliation_id7",
            "accepted_payment_methods": [
              "accepted_payment_methods4"
            ],
            "status": "status3",
            "skip_checkout_success_page": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "customer_editable": true,
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
                  "country_code": "country_code3",
                  "number": "number9",
                  "area_code": "area_code3"
                }
              },
              "fb_id": 211,
              "code": "code9",
              "document_type": "document_type9"
            },
            "billingaddress": {
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
                "fb_id": 37,
                "code": "code7",
                "document_type": "document_type7"
              },
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata9"
              },
              "line_1": "line_13",
              "line_2": "line_27",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "credit_card": {
              "statementDescriptor": "statementDescriptor5",
              "installments": [
                {
                  "number": "number2",
                  "total": 136
                },
                {
                  "number": "number3",
                  "total": 137
                }
              ],
              "authentication": {
                "type": "type9",
                "threed_secure": {
                  "mpi": "mpi3",
                  "eci": "eci9",
                  "cavv": "cavv5",
                  "transaction_Id": "transaction_Id5",
                  "success_url": "success_url1"
                }
              }
            },
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions9"
            },
            "billing_address_editable": true,
            "shipping": {
              "amount": 21,
              "description": "description5",
              "recipient_name": "recipient_name3",
              "recipient_phone": "recipient_phone7",
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
                  "fb_id": 69,
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
              "max_delivery_date": "2016-03-13T12:52:32.123Z",
              "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
              "type": "type5"
            },
            "shippable": true,
            "closed_at": "2016-03-13T12:52:32.123Z",
            "expires_at": "2016-03-13T12:52:32.123Z",
            "currency": "currency1",
            "debit_card": {
              "statement_descriptor": "statement_descriptor5",
              "authentication": {
                "type": "type3",
                "threed_secure": {
                  "mpi": "mpi7",
                  "eci": "eci5",
                  "cavv": "cavv9",
                  "transaction_Id": "transaction_Id9",
                  "success_url": "success_url7"
                }
              }
            },
            "bank_transfer": {
              "bank": [
                "bank8"
              ]
            },
            "accepted_brands": [
              "accepted_brands7"
            ],
            "pix": {
              "expires_at": "2016-03-13T12:52:32.123Z",
              "additional_information": [
                {
                  "Name": "Name8",
                  "Value": "Value6"
                }
              ]
            }
          },
          {
            "id": "id2",
            "amount": 180,
            "default_payment_method": "default_payment_method2",
            "success_url": "success_url4",
            "payment_url": "payment_url6",
            "gateway_affiliation_id": "gateway_affiliation_id8",
            "accepted_payment_methods": [
              "accepted_payment_methods5",
              "accepted_payment_methods6"
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
                  "country_code": "country_code4",
                  "number": "number8",
                  "area_code": "area_code4"
                }
              },
              "fb_id": 212,
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
                "fb_id": 38,
                "code": "code8",
                "document_type": "document_type8"
              },
              "metadata": {
                "key0": "metadata9",
                "key1": "metadata8",
                "key2": "metadata7"
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
                  "total": 137
                },
                {
                  "number": "number4",
                  "total": 138
                },
                {
                  "number": "number5",
                  "total": 139
                }
              ],
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
            "boleto": {
              "due_at": "2016-03-13T12:52:32.123Z",
              "instructions": "instructions0"
            },
            "billing_address_editable": false,
            "shipping": {
              "amount": 22,
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
                  "fb_id": 70,
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
                "type": "type2",
                "threed_secure": {
                  "mpi": "mpi8",
                  "eci": "eci4",
                  "cavv": "cavv0",
                  "transaction_Id": "transaction_Id0",
                  "success_url": "success_url6"
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
              "accepted_brands9"
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
                }
              ]
            }
          }
        ],
        "ip": "ip8",
        "session_id": "session_id4",
        "location": {
          "latitude": "latitude8",
          "longitude": "longitude2"
        },
        "device": {
          "platform": "platform6"
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
      "metadata": {
        "key0": "metadata9",
        "key1": "metadata8"
      },
      "paid_at": "2016-03-13T12:52:32.123Z",
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "canceled_amount": 136,
      "paid_amount": 118,
      "interest_and_fine_paid": 122,
      "recurrency_cycle": "recurrency_cycle6"
    },
    "installments": 48,
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
    "subscription": {
      "id": "id8",
      "code": "code6",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval6",
      "interval_count": 180,
      "billing_type": "billing_type2",
      "current_cycle": {
        "start_at": "2016-03-13T12:52:32.123Z",
        "end_at": "2016-03-13T12:52:32.123Z",
        "id": "id6",
        "billing_at": "2016-03-13T12:52:32.123Z",
        "subscription": {},
        "status": "status8",
        "duration": 164,
        "created_at": "created_at4",
        "updated_at": "updated_at2",
        "cycle": 104
      },
      "payment_method": "payment_method8",
      "currency": "currency8",
      "installments": 92,
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
        "fb_id": 84,
        "code": "code6",
        "document_type": "document_type6"
      },
      "card": {
        "id": "id2",
        "last_four_digits": "last_four_digits8",
        "brand": "brand6",
        "holder_name": "holder_name8",
        "exp_month": 14,
        "exp_year": 26,
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
          "fb_id": 14,
          "code": "code0",
          "document_type": "document_type0"
        },
        "metadata": {
          "key0": "metadata9",
          "key1": "metadata8"
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
            "price": 41,
            "scheme_type": "scheme_type7",
            "price_brackets": [
              {
                "start_quantity": 168,
                "price": 150,
                "end_quantity": 176,
                "overage_price": 190
              },
              {
                "start_quantity": 169,
                "price": 149,
                "end_quantity": 177,
                "overage_price": 191
              },
              {
                "start_quantity": 170,
                "price": 148,
                "end_quantity": 178,
                "overage_price": 192
              }
            ],
            "minimum_price": 201,
            "percentage": 34.65
          },
          "discounts": [
            {
              "id": "id6",
              "value": 32.28,
              "discount_type": "discount_type4",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 180,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description6",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id7",
              "value": 32.29,
              "discount_type": "discount_type5",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 181,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description7",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id8",
              "value": 32.3,
              "discount_type": "discount_type6",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 182,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id4",
              "value": 143.56,
              "increment_type": "increment_type6",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 212,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name5",
          "quantity": 225,
          "cycles": 245,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        {
          "id": "id6",
          "description": "description6",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 40,
            "scheme_type": "scheme_type8",
            "price_brackets": [
              {
                "start_quantity": 169,
                "price": 149,
                "end_quantity": 177,
                "overage_price": 191
              }
            ],
            "minimum_price": 200,
            "percentage": 34.66
          },
          "discounts": [
            {
              "id": "id7",
              "value": 32.29,
              "discount_type": "discount_type5",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 181,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description7",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id5",
              "value": 143.57,
              "increment_type": "increment_type7",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 211,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description5",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id6",
              "value": 143.58,
              "increment_type": "increment_type8",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 210,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description6",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name6",
          "quantity": 226,
          "cycles": 246,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
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
        "amount": 116,
        "status": "status4"
      },
      "gateway_affiliation_id": "gateway_affiliation_id4",
      "next_billing_at": "2016-03-13T12:52:32.123Z",
      "billing_day": 64,
      "minimum_price": 178,
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "discounts": [
        {
          "id": "id9",
          "value": 62.41,
          "discount_type": "discount_type7",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 121,
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
              "price": 79,
              "scheme_type": "scheme_type7",
              "price_brackets": [
                {
                  "start_quantity": 32,
                  "price": 226,
                  "end_quantity": 40,
                  "overage_price": 54
                },
                {
                  "start_quantity": 33,
                  "price": 227,
                  "end_quantity": 41,
                  "overage_price": 55
                }
              ],
              "minimum_price": 175,
              "percentage": 99.85
            },
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id4",
                "value": 208.76,
                "increment_type": "increment_type6",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 164,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id5",
                "value": 208.77,
                "increment_type": "increment_type7",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 165,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 208.78,
                "increment_type": "increment_type8",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 166,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name5",
            "quantity": 89,
            "cycles": 109,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id0",
          "value": 62.42,
          "discount_type": "discount_type8",
          "status": "status2",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 122,
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
              "price": 80,
              "scheme_type": "scheme_type8",
              "price_brackets": [
                {
                  "start_quantity": 33,
                  "price": 227,
                  "end_quantity": 41,
                  "overage_price": 55
                },
                {
                  "start_quantity": 34,
                  "price": 228,
                  "end_quantity": 42,
                  "overage_price": 56
                },
                {
                  "start_quantity": 35,
                  "price": 229,
                  "end_quantity": 43,
                  "overage_price": 57
                }
              ],
              "minimum_price": 176,
              "percentage": 99.86
            },
            "discounts": [
              {},
              {},
              {}
            ],
            "increments": [
              {
                "id": "id5",
                "value": 208.77,
                "increment_type": "increment_type7",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 165,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name6",
            "quantity": 90,
            "cycles": 110,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
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
          "subscription_item": {
            "id": "id7",
            "description": "description7",
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 81,
              "scheme_type": "scheme_type9",
              "price_brackets": [
                {
                  "start_quantity": 34,
                  "price": 228,
                  "end_quantity": 42,
                  "overage_price": 56
                }
              ],
              "minimum_price": 177,
              "percentage": 99.87
            },
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id6",
                "value": 208.78,
                "increment_type": "increment_type8",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 166,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id7",
                "value": 208.79,
                "increment_type": "increment_type9",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 167,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description7",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name7",
            "quantity": 91,
            "cycles": 111,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "increments": [
        {
          "id": "id7",
          "value": 173.69,
          "increment_type": "increment_type9",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 15,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description3",
          "subscription": {},
          "subscription_item": {
            "id": "id3",
            "description": "description3",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 231,
              "scheme_type": "scheme_type5",
              "price_brackets": [
                {
                  "start_quantity": 234,
                  "price": 84,
                  "end_quantity": 242,
                  "overage_price": 0
                }
              ],
              "minimum_price": 135,
              "percentage": 53.23
            },
            "discounts": [
              {
                "id": "id4",
                "value": 208.76,
                "discount_type": "discount_type2",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 164,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id5",
                "value": 208.77,
                "discount_type": "discount_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 165,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {},
              {}
            ],
            "subscription": {},
            "name": "name3",
            "quantity": 209,
            "cycles": 27,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "boleto_due_days": 36,
      "split": {
        "enabled": false,
        "rules": [
          {
            "type": "type2",
            "amount": 252,
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
                "type": "type6",
                "volume_percentage": 142,
                "delay": 148,
                "days": [
                  124,
                  125
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval4",
                "transfer_day": 52
              },
              "code": "code8",
              "payment_mode": "payment_mode4"
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
            "amount": 253,
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
                "volume_percentage": 141,
                "delay": 149,
                "days": [
                  125,
                  126,
                  127
                ]
              },
              "transfer_settings": {
                "transfer_enabled": true,
                "transfer_interval": "transfer_interval3",
                "transfer_day": 51
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
          "days": 54,
          "type": "type8",
          "amount": 128
        },
        "fine": {
          "days": 236,
          "type": "type0",
          "amount": 54
        },
        "max_days_to_pay_past_due": 224
      },
      "manual_billing": false
    },
    "cycle": {
      "start_at": "2016-03-13T12:52:32.123Z",
      "end_at": "2016-03-13T12:52:32.123Z",
      "id": "id6",
      "billing_at": "2016-03-13T12:52:32.123Z",
      "subscription": {
        "id": "id8",
        "code": "code6",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval6",
        "interval_count": 128,
        "billing_type": "billing_type8",
        "current_cycle": {},
        "payment_method": "payment_method2",
        "currency": "currency8",
        "installments": 40,
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
          "fb_id": 32,
          "code": "code6",
          "document_type": "document_type6"
        },
        "card": {
          "id": "id8",
          "last_four_digits": "last_four_digits4",
          "brand": "brand2",
          "holder_name": "holder_name4",
          "exp_month": 18,
          "exp_year": 22,
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
            "fb_id": 150,
            "code": "code0",
            "document_type": "document_type0"
          },
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata6",
            "key2": "metadata7"
          },
          "type": "type2",
          "holder_document": "holder_document8",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "first_six_digits": "first_six_digits8",
          "label": "label8"
        },
        "items": [
          {
            "id": "id5",
            "description": "description5",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 195,
              "scheme_type": "scheme_type3",
              "price_brackets": [
                {
                  "start_quantity": 14,
                  "price": 48,
                  "end_quantity": 22,
                  "overage_price": 36
                }
              ],
              "minimum_price": 99,
              "percentage": 109.91
            },
            "discounts": [
              {
                "id": "id6",
                "value": 152.08,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 128,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id7",
                "value": 152.09,
                "discount_type": "discount_type5",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 129,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description7",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {
                "id": "id4",
                "value": 7.36,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 8,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id5",
                "value": 7.37,
                "increment_type": "increment_type3",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 7,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 7.38,
                "increment_type": "increment_type2",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 6,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name5",
            "quantity": 173,
            "cycles": 63,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor8",
        "metadata": {
          "key0": "metadata5"
        },
        "setup": {
          "id": "id2",
          "description": "description8",
          "amount": 64,
          "status": "status6"
        },
        "gateway_affiliation_id": "gateway_affiliation_id4",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 244,
        "minimum_price": 130,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {
            "id": "id9",
            "value": 182.21,
            "discount_type": "discount_type7",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 69,
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
                "price": 229,
                "scheme_type": "scheme_type7",
                "price_brackets": [
                  {
                    "start_quantity": 236,
                    "price": 82,
                    "end_quantity": 244,
                    "overage_price": 2
                  }
                ],
                "minimum_price": 133,
                "percentage": 219.65
              },
              "discounts": [
                {}
              ],
              "increments": [
                {
                  "id": "id4",
                  "value": 72.56,
                  "increment_type": "increment_type6",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 144,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description4",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id5",
                  "value": 72.57,
                  "increment_type": "increment_type7",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 143,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name5",
              "quantity": 37,
              "cycles": 57,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id0",
            "value": 182.22,
            "discount_type": "discount_type8",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 70,
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
                "price": 228,
                "scheme_type": "scheme_type8",
                "price_brackets": [
                  {
                    "start_quantity": 237,
                    "price": 81,
                    "end_quantity": 245,
                    "overage_price": 3
                  },
                  {
                    "start_quantity": 238,
                    "price": 80,
                    "end_quantity": 246,
                    "overage_price": 4
                  }
                ],
                "minimum_price": 132,
                "percentage": 219.66
              },
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {
                  "id": "id5",
                  "value": 72.57,
                  "increment_type": "increment_type7",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 143,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description5",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id6",
                  "value": 72.58,
                  "increment_type": "increment_type8",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 142,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description6",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id7",
                  "value": 72.59,
                  "increment_type": "increment_type9",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 141,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                }
              ],
              "subscription": {},
              "name": "name6",
              "quantity": 38,
              "cycles": 58,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "increments": [
          {
            "id": "id1",
            "value": 38.83,
            "increment_type": "increment_type3",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 189,
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
                "price": 57,
                "scheme_type": "scheme_type1",
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
                  }
                ],
                "minimum_price": 39,
                "percentage": 188.09
              },
              "discounts": [
                {
                  "id": "id8",
                  "value": 73.9,
                  "discount_type": "discount_type6",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 246,
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
              "quantity": 35,
              "cycles": 201,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id0",
            "value": 38.82,
            "increment_type": "increment_type2",
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 190,
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
                "price": 56,
                "scheme_type": "scheme_type2",
                "price_brackets": [
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
                  },
                  {
                    "start_quantity": 155,
                    "price": 93,
                    "end_quantity": 163,
                    "overage_price": 177
                  }
                ],
                "minimum_price": 40,
                "percentage": 188.1
              },
              "discounts": [
                {
                  "id": "id7",
                  "value": 73.89,
                  "discount_type": "discount_type5",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 245,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description7",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id8",
                  "value": 73.9,
                  "discount_type": "discount_type6",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 246,
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "description": "description8",
                  "subscription": {},
                  "subscription_item": {}
                },
                {
                  "id": "id9",
                  "value": 73.91,
                  "discount_type": "discount_type7",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 247,
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
              "quantity": 34,
              "cycles": 202,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "boleto_due_days": 240,
        "split": {
          "enabled": false,
          "rules": [
            {
              "type": "type2",
              "amount": 200,
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
                  "volume_percentage": 6,
                  "delay": 28,
                  "days": [
                    4
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval4",
                  "transfer_day": 172
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
            "days": 106,
            "type": "type2",
            "amount": 180
          },
          "fine": {
            "days": 72,
            "type": "type0",
            "amount": 254
          },
          "max_days_to_pay_past_due": 172
        },
        "manual_billing": false
      },
      "status": "status8",
      "duration": 218,
      "created_at": "created_at4",
      "updated_at": "updated_at2",
      "cycle": 158
    },
    "shipping": {
      "amount": 106,
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
          "type": "type4",
          "fb_access_token": "fb_access_token0",
          "address": {},
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
          "fb_id": 154,
          "code": "code4",
          "document_type": "document_type4"
        },
        "metadata": {
          "key0": "metadata3"
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
      "key0": "metadata7",
      "key1": "metadata8",
      "key2": "metadata9"
    },
    "due_at": "2016-03-13T12:52:32.123Z",
    "canceled_at": "2016-03-13T12:52:32.123Z",
    "billing_at": "2016-03-13T12:52:32.123Z",
    "seen_at": "2016-03-13T12:52:32.123Z",
    "total_discount": 116,
    "total_increment": 188,
    "subscription_id": "subscription_id6"
  },
  "order": {
    "id": "id6",
    "code": "code4",
    "currency": "currency6",
    "items": [
      {
        "id": "id3",
        "amount": 45,
        "description": "description3",
        "quantity": 159,
        "category": "category1",
        "code": "code1"
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
          "country_code": "country_code2",
          "number": "number4",
          "area_code": "area_code8"
        }
      },
      "fb_id": 18,
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
        "gateway_id": "gateway_id8",
        "amount": 234,
        "status": "status4",
        "currency": "currency2",
        "payment_method": "payment_method8",
        "due_at": "2016-03-13T12:52:32.123Z",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "last_transaction": {
          "gateway_id": "gateway_id4",
          "amount": 36,
          "status": "status6",
          "success": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "attempt_count": 12,
          "max_attempts": 0,
          "splits": [
            {
              "type": "type4",
              "amount": 224,
              "recipient": {
                "id": "id8",
                "name": "name8",
                "email": "email8",
                "document": "document8",
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
                  "key0": "metadata5",
                  "key1": "metadata6"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type8",
                  "volume_percentage": 170,
                  "delay": 120,
                  "days": [
                    96,
                    97
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval6",
                  "transfer_day": 80
                },
                "code": "code6",
                "payment_mode": "payment_mode2"
              },
              "gateway_id": "gateway_id4",
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
          "id": "id4",
          "gateway_response": {
            "code": "code4",
            "errors": [
              {
                "message": "message1"
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
            "key1": "metadata4",
            "key2": "metadata3"
          },
          "split": [
            {
              "type": "type2",
              "amount": 238,
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
                  "volume_percentage": 100,
                  "delay": 134,
                  "days": [
                    110,
                    111
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval0",
                  "transfer_day": 226
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
              "amount": 239,
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
                  "volume_percentage": 101,
                  "delay": 135,
                  "days": [
                    111,
                    112,
                    113
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval1",
                  "transfer_day": 227
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
              "amount": 240,
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
                  "volume_percentage": 102,
                  "delay": 136,
                  "days": [
                    112
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval2",
                  "transfer_day": 228
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
          "interest": {
            "days": 198,
            "type": "type6",
            "amount": 16
          },
          "fine": {
            "days": 216,
            "type": "type6",
            "amount": 34
          },
          "max_days_to_pay_past_due": 204
        },
        "invoice": {
          "id": "id6",
          "code": "code4",
          "url": "url0",
          "amount": 180,
          "status": "status2",
          "payment_method": "payment_method4",
          "created_at": "2016-03-13T12:52:32.123Z",
          "items": [
            {
              "amount": 239,
              "description": "description3",
              "pricing_scheme": {
                "price": 119,
                "scheme_type": "scheme_type5",
                "price_brackets": [
                  {
                    "start_quantity": 90,
                    "price": 228,
                    "end_quantity": 98,
                    "overage_price": 112
                  }
                ],
                "minimum_price": 23,
                "percentage": 23.63
              },
              "price_bracket": {
                "start_quantity": 213,
                "price": 105,
                "end_quantity": 221,
                "overage_price": 235
              },
              "quantity": 97,
              "name": "name3",
              "subscription_item_id": "subscription_item_id7"
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
                "country_code": "country_code2",
                "number": "number0",
                "area_code": "area_code2"
              }
            },
            "fb_id": 212,
            "code": "code4",
            "document_type": "document_type4"
          },
          "charge": {},
          "installments": 220,
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
            "id": "id8",
            "code": "code6",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval6",
            "interval_count": 8,
            "billing_type": "billing_type8",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id6",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status8",
              "duration": 248,
              "created_at": "created_at4",
              "updated_at": "updated_at2",
              "cycle": 188
            },
            "payment_method": "payment_method2",
            "currency": "currency8",
            "installments": 176,
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
              "fb_id": 168,
              "code": "code6",
              "document_type": "document_type6"
            },
            "card": {
              "id": "id2",
              "last_four_digits": "last_four_digits8",
              "brand": "brand6",
              "holder_name": "holder_name8",
              "exp_month": 186,
              "exp_year": 110,
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
                "fb_id": 98,
                "code": "code0",
                "document_type": "document_type0"
              },
              "metadata": {
                "key0": "metadata1"
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
                  "price": 213,
                  "scheme_type": "scheme_type7",
                  "price_brackets": [
                    {
                      "start_quantity": 252,
                      "price": 66,
                      "end_quantity": 4,
                      "overage_price": 18
                    }
                  ],
                  "minimum_price": 117,
                  "percentage": 63.65
                },
                "discounts": [
                  {
                    "id": "id6",
                    "value": 61.28,
                    "discount_type": "discount_type4",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 8,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description6",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id4",
                    "value": 172.56,
                    "increment_type": "increment_type6",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 128,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description6",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id5",
                    "value": 172.57,
                    "increment_type": "increment_type7",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 127,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description5",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name5",
                "quantity": 53,
                "cycles": 73,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              {
                "id": "id6",
                "description": "description6",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 212,
                  "scheme_type": "scheme_type8",
                  "price_brackets": [
                    {
                      "start_quantity": 253,
                      "price": 65,
                      "end_quantity": 5,
                      "overage_price": 19
                    },
                    {
                      "start_quantity": 254,
                      "price": 64,
                      "end_quantity": 6,
                      "overage_price": 20
                    }
                  ],
                  "minimum_price": 116,
                  "percentage": 63.66
                },
                "discounts": [
                  {
                    "id": "id7",
                    "value": 61.29,
                    "discount_type": "discount_type5",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 9,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id8",
                    "value": 61.3,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 10,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id5",
                    "value": 172.57,
                    "increment_type": "increment_type7",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 127,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description5",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id6",
                    "value": 172.58,
                    "increment_type": "increment_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 126,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description4",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id7",
                    "value": 172.59,
                    "increment_type": "increment_type9",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 125,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description3",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name6",
                "quantity": 54,
                "cycles": 74,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              {
                "id": "id7",
                "description": "description7",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 211,
                  "scheme_type": "scheme_type9",
                  "price_brackets": [
                    {
                      "start_quantity": 254,
                      "price": 64,
                      "end_quantity": 6,
                      "overage_price": 20
                    },
                    {
                      "start_quantity": 255,
                      "price": 63,
                      "end_quantity": 7,
                      "overage_price": 21
                    },
                    {
                      "start_quantity": 0,
                      "price": 62,
                      "end_quantity": 8,
                      "overage_price": 22
                    }
                  ],
                  "minimum_price": 115,
                  "percentage": 63.67
                },
                "discounts": [
                  {
                    "id": "id8",
                    "value": 61.3,
                    "discount_type": "discount_type6",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 10,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description8",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id9",
                    "value": 61.31,
                    "discount_type": "discount_type7",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 11,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description9",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id0",
                    "value": 61.32,
                    "discount_type": "discount_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 12,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description0",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id6",
                    "value": 172.58,
                    "increment_type": "increment_type8",
                    "status": "status2",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 126,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description4",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name7",
                "quantity": 55,
                "cycles": 75,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            ],
            "statement_descriptor": "statement_descriptor8",
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata4"
            },
            "setup": {
              "id": "id2",
              "description": "description2",
              "amount": 200,
              "status": "status4"
            },
            "gateway_affiliation_id": "gateway_affiliation_id4",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 148,
            "minimum_price": 250,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id9",
                "value": 91.41,
                "discount_type": "discount_type7",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 205,
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
                    "price": 93,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 116,
                        "price": 54,
                        "end_quantity": 124,
                        "overage_price": 138
                      },
                      {
                        "start_quantity": 117,
                        "price": 55,
                        "end_quantity": 125,
                        "overage_price": 139
                      },
                      {
                        "start_quantity": 118,
                        "price": 56,
                        "end_quantity": 126,
                        "overage_price": 140
                      }
                    ],
                    "minimum_price": 253,
                    "percentage": 128.85
                  },
                  "discounts": [
                    {},
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id4",
                      "value": 237.76,
                      "increment_type": "increment_type6",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 8,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description4",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name5",
                  "quantity": 173,
                  "cycles": 193,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "increments": [
              {
                "id": "id3",
                "value": 44.35,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 149,
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
                    "price": 97,
                    "scheme_type": "scheme_type9",
                    "price_brackets": [
                      {
                        "start_quantity": 112,
                        "price": 50,
                        "end_quantity": 120,
                        "overage_price": 134
                      },
                      {
                        "start_quantity": 113,
                        "price": 51,
                        "end_quantity": 121,
                        "overage_price": 135
                      }
                    ],
                    "minimum_price": 255,
                    "percentage": 182.57
                  },
                  "discounts": [
                    {
                      "id": "id0",
                      "value": 79.42,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 30,
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
                  "name": "name9",
                  "quantity": 75,
                  "cycles": 161,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id2",
                "value": 44.34,
                "increment_type": "increment_type4",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 150,
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
                    "price": 96,
                    "scheme_type": "scheme_type0",
                    "price_brackets": [
                      {
                        "start_quantity": 113,
                        "price": 51,
                        "end_quantity": 121,
                        "overage_price": 135
                      },
                      {
                        "start_quantity": 114,
                        "price": 52,
                        "end_quantity": 122,
                        "overage_price": 136
                      },
                      {
                        "start_quantity": 115,
                        "price": 53,
                        "end_quantity": 123,
                        "overage_price": 137
                      }
                    ],
                    "minimum_price": 0,
                    "percentage": 182.58
                  },
                  "discounts": [
                    {
                      "id": "id9",
                      "value": 79.41,
                      "discount_type": "discount_type7",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 29,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id0",
                      "value": 79.42,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 30,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id1",
                      "value": 79.43,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 31,
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
                  "quantity": 74,
                  "cycles": 162,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "boleto_due_days": 120,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type2",
                  "amount": 80,
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
                        "key0": "metadata5"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata3"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type6",
                      "volume_percentage": 58,
                      "delay": 232,
                      "days": [
                        208,
                        209,
                        210
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval4",
                      "transfer_day": 224
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
                  "amount": 81,
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
                        "key0": "metadata6",
                        "key1": "metadata5",
                        "key2": "metadata4"
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
                      "key0": "metadata2",
                      "key1": "metadata3",
                      "key2": "metadata4"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type5",
                      "volume_percentage": 57,
                      "delay": 233,
                      "days": [
                        209
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval3",
                      "transfer_day": 223
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
                },
                {
                  "type": "type0",
                  "amount": 82,
                  "recipient": {
                    "id": "id2",
                    "name": "name2",
                    "email": "email4",
                    "document": "document4",
                    "description": "description8",
                    "type": "type8",
                    "status": "status6",
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
                        "key0": "metadata7",
                        "key1": "metadata6"
                      },
                      "pix_key": "pix_key6"
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
                      "key0": "metadata1",
                      "key1": "metadata2"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type4",
                      "volume_percentage": 56,
                      "delay": 234,
                      "days": [
                        210,
                        211
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval2",
                      "transfer_day": 222
                    },
                    "code": "code0",
                    "payment_mode": "payment_mode4"
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
                "days": 226,
                "type": "type8",
                "amount": 44
              },
              "fine": {
                "days": 64,
                "type": "type0",
                "amount": 138
              },
              "max_days_to_pay_past_due": 52
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
              "interval_count": 208,
              "billing_type": "billing_type4",
              "current_cycle": {},
              "payment_method": "payment_method8",
              "currency": "currency8",
              "installments": 120,
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
                "fb_id": 48,
                "code": "code6",
                "document_type": "document_type6"
              },
              "card": {
                "id": "id4",
                "last_four_digits": "last_four_digits0",
                "brand": "brand8",
                "holder_name": "holder_name0",
                "exp_month": 98,
                "exp_year": 198,
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
                  "fb_id": 186,
                  "code": "code2",
                  "document_type": "document_type2"
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
                    "price": 19,
                    "scheme_type": "scheme_type9",
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
                    "percentage": 226.87
                  },
                  "discounts": [
                    {
                      "id": "id0",
                      "value": 35.12,
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
                      "value": 35.13,
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
                      "value": 35.14,
                      "discount_type": "discount_type0",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 210,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description2",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {
                      "id": "id2",
                      "value": 100.64,
                      "increment_type": "increment_type4",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 152,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description8",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name9",
                  "quantity": 253,
                  "cycles": 239,
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
                    "scheme_type": "scheme_type8",
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
                    "percentage": 226.86
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 35.13,
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
                    {
                      "id": "id1",
                      "value": 100.63,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 153,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id0",
                      "value": 100.62,
                      "increment_type": "increment_type2",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 154,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name0",
                  "quantity": 254,
                  "cycles": 238,
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
                "amount": 112,
                "status": "status2"
              },
              "gateway_affiliation_id": "gateway_affiliation_id8",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 164,
              "minimum_price": 50,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id3",
                  "value": 65.25,
                  "discount_type": "discount_type1",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 149,
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
                        }
                      ],
                      "minimum_price": 53,
                      "percentage": 102.69
                    },
                    "discounts": [
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id8",
                        "value": 211.6,
                        "increment_type": "increment_type0",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 64,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description8",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id9",
                        "value": 211.61,
                        "increment_type": "increment_type1",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 63,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id0",
                        "value": 211.62,
                        "increment_type": "increment_type2",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 62,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name9",
                    "quantity": 117,
                    "cycles": 137,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id4",
                  "value": 65.26,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 150,
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
                      "price": 148,
                      "scheme_type": "scheme_type2",
                      "price_brackets": [
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
                        },
                        {
                          "start_quantity": 63,
                          "price": 255,
                          "end_quantity": 71,
                          "overage_price": 85
                        }
                      ],
                      "minimum_price": 52,
                      "percentage": 102.7
                    },
                    "discounts": [
                      {},
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id9",
                        "value": 211.61,
                        "increment_type": "increment_type1",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 63,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name0",
                    "quantity": 118,
                    "cycles": 138,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id5",
                  "value": 65.27,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 151,
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
                      "scheme_type": "scheme_type3",
                      "price_brackets": [
                        {
                          "start_quantity": 62,
                          "price": 0,
                          "end_quantity": 70,
                          "overage_price": 84
                        }
                      ],
                      "minimum_price": 51,
                      "percentage": 102.71
                    },
                    "discounts": [
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id0",
                        "value": 211.62,
                        "increment_type": "increment_type2",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 62,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description0",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id1",
                        "value": 211.63,
                        "increment_type": "increment_type3",
                        "status": "status7",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 61,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description1",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name1",
                    "quantity": 119,
                    "cycles": 139,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "increments": [
                {
                  "id": "id5",
                  "value": 69.17,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 227,
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
                      "price": 19,
                      "scheme_type": "scheme_type7",
                      "price_brackets": [
                        {
                          "start_quantity": 190,
                          "price": 128,
                          "end_quantity": 198,
                          "overage_price": 212
                        }
                      ],
                      "minimum_price": 77,
                      "percentage": 157.75
                    },
                    "discounts": [
                      {
                        "id": "id2",
                        "value": 104.24,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 208,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description2",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id3",
                        "value": 104.25,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 209,
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
                    "quantity": 253,
                    "cycles": 239,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "boleto_due_days": 64,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type2",
                    "amount": 116,
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
                        "volume_percentage": 202,
                        "delay": 88,
                        "days": [
                          64,
                          65
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval4",
                        "transfer_day": 112
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
                    "type": "type3",
                    "amount": 117,
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
                        "volume_percentage": 201,
                        "delay": 89,
                        "days": [
                          65,
                          66,
                          67
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval3",
                        "transfer_day": 111
                      },
                      "code": "code9",
                      "payment_mode": "payment_mode5"
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
                  "days": 30,
                  "type": "type2",
                  "amount": 104
                },
                "fine": {
                  "days": 12,
                  "type": "type0",
                  "amount": 170
                },
                "max_days_to_pay_past_due": 248
              },
              "manual_billing": false
            },
            "status": "status8",
            "duration": 134,
            "created_at": "created_at4",
            "updated_at": "updated_at2",
            "cycle": 74
          },
          "shipping": {
            "amount": 22,
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
                "fb_id": 70,
                "code": "code4",
                "document_type": "document_type4"
              },
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata2",
                "key2": "metadata1"
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
            "key0": "metadata7"
          },
          "due_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "seen_at": "2016-03-13T12:52:32.123Z",
          "total_discount": 32,
          "total_increment": 104,
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
            "line_1": "line_12",
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
          "fb_id": 10,
          "code": "code0",
          "document_type": "document_type0"
        },
        "metadata": {
          "key0": "metadata1"
        },
        "paid_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "canceled_amount": 88,
        "paid_amount": 186,
        "interest_and_fine_paid": 74,
        "recurrency_cycle": "recurrency_cycle6"
      },
      {
        "id": "id3",
        "code": "code1",
        "gateway_id": "gateway_id7",
        "amount": 235,
        "status": "status5",
        "currency": "currency3",
        "payment_method": "payment_method7",
        "due_at": "2016-03-13T12:52:32.123Z",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "last_transaction": {
          "gateway_id": "gateway_id5",
          "amount": 37,
          "status": "status7",
          "success": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "attempt_count": 13,
          "max_attempts": 1,
          "splits": [
            {
              "type": "type3",
              "amount": 225,
              "recipient": {
                "id": "id9",
                "name": "name9",
                "email": "email7",
                "document": "document7",
                "description": "description9",
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
                  "type": "type7",
                  "status": "status9",
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
                    "gateway": "gateway3",
                    "status": "status5",
                    "pgid": "pgid9",
                    "created_at": "created_at1",
                    "updated_at": "updated_at9"
                  }
                ],
                "metadata": {
                  "key0": "metadata4"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type7",
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
                  "transfer_interval": "transfer_interval5",
                  "transfer_day": 79
                },
                "code": "code7",
                "payment_mode": "payment_mode3"
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
              "amount": 226,
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
                  "type": "type8",
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
                  "volume_percentage": 168,
                  "delay": 122,
                  "days": [
                    98
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval4",
                  "transfer_day": 78
                },
                "code": "code8",
                "payment_mode": "payment_mode4"
              },
              "gateway_id": "gateway_id2",
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
          "id": "id5",
          "gateway_response": {
            "code": "code5",
            "errors": [
              {
                "message": "message2"
              },
              {
                "message": "message3"
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
            "key0": "metadata4"
          },
          "split": [
            {
              "type": "type3",
              "amount": 239,
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
                  "volume_percentage": 101,
                  "delay": 135,
                  "days": [
                    111,
                    112,
                    113
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval1",
                  "transfer_day": 227
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
            "days": 199,
            "type": "type5",
            "amount": 17
          },
          "fine": {
            "days": 217,
            "type": "type7",
            "amount": 35
          },
          "max_days_to_pay_past_due": 205
        },
        "invoice": {
          "id": "id7",
          "code": "code5",
          "url": "url1",
          "amount": 181,
          "status": "status1",
          "payment_method": "payment_method3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "items": [
            {
              "amount": 240,
              "description": "description4",
              "pricing_scheme": {
                "price": 120,
                "scheme_type": "scheme_type4",
                "price_brackets": [
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
                  },
                  {
                    "start_quantity": 91,
                    "price": 227,
                    "end_quantity": 99,
                    "overage_price": 113
                  }
                ],
                "minimum_price": 24,
                "percentage": 23.62
              },
              "price_bracket": {
                "start_quantity": 214,
                "price": 104,
                "end_quantity": 222,
                "overage_price": 236
              },
              "quantity": 98,
              "name": "name4",
              "subscription_item_id": "subscription_item_id8"
            },
            {
              "amount": 241,
              "description": "description5",
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
                  }
                ],
                "minimum_price": 25,
                "percentage": 23.61
              },
              "price_bracket": {
                "start_quantity": 215,
                "price": 103,
                "end_quantity": 223,
                "overage_price": 237
              },
              "quantity": 99,
              "name": "name5",
              "subscription_item_id": "subscription_item_id9"
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
                "key0": "metadata0",
                "key1": "metadata9"
              },
              "line_1": "line_17",
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
            "fb_id": 213,
            "code": "code5",
            "document_type": "document_type5"
          },
          "charge": {},
          "installments": 221,
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
          "subscription": {
            "id": "id7",
            "code": "code5",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval5",
            "interval_count": 7,
            "billing_type": "billing_type9",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id5",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status7",
              "duration": 247,
              "created_at": "created_at3",
              "updated_at": "updated_at1",
              "cycle": 187
            },
            "payment_method": "payment_method3",
            "currency": "currency7",
            "installments": 175,
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
                  "key1": "metadata9"
                },
                "line_1": "line_17",
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
                  "country_code": "country_code9",
                  "number": "number1",
                  "area_code": "area_code1"
                }
              },
              "fb_id": 167,
              "code": "code5",
              "document_type": "document_type5"
            },
            "card": {
              "id": "id1",
              "last_four_digits": "last_four_digits7",
              "brand": "brand5",
              "holder_name": "holder_name7",
              "exp_month": 187,
              "exp_year": 109,
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
                "fb_id": 97,
                "code": "code9",
                "document_type": "document_type9"
              },
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3"
              },
              "type": "type9",
              "holder_document": "holder_document5",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits1",
              "label": "label1"
            },
            "items": [
              {
                "id": "id4",
                "description": "description4",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 214,
                  "scheme_type": "scheme_type6",
                  "price_brackets": [
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
                    },
                    {
                      "start_quantity": 253,
                      "price": 65,
                      "end_quantity": 5,
                      "overage_price": 19
                    }
                  ],
                  "minimum_price": 118,
                  "percentage": 63.64
                },
                "discounts": [
                  {
                    "id": "id5",
                    "value": 61.27,
                    "discount_type": "discount_type3",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 7,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description5",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id6",
                    "value": 61.28,
                    "discount_type": "discount_type4",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 8,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description6",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id7",
                    "value": 61.29,
                    "discount_type": "discount_type5",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 9,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id3",
                    "value": 172.55,
                    "increment_type": "increment_type5",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 129,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description7",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name4",
                "quantity": 52,
                "cycles": 72,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              {
                "id": "id5",
                "description": "description5",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "pricing_scheme": {
                  "price": 213,
                  "scheme_type": "scheme_type7",
                  "price_brackets": [
                    {
                      "start_quantity": 252,
                      "price": 66,
                      "end_quantity": 4,
                      "overage_price": 18
                    }
                  ],
                  "minimum_price": 117,
                  "percentage": 63.65
                },
                "discounts": [
                  {
                    "id": "id6",
                    "value": 61.28,
                    "discount_type": "discount_type4",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 8,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description6",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "increments": [
                  {
                    "id": "id4",
                    "value": 172.56,
                    "increment_type": "increment_type6",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 128,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description6",
                    "subscription": {},
                    "subscription_item": {}
                  },
                  {
                    "id": "id5",
                    "value": 172.57,
                    "increment_type": "increment_type7",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": 127,
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "description": "description5",
                    "subscription": {},
                    "subscription_item": {}
                  }
                ],
                "subscription": {},
                "name": "name5",
                "quantity": 53,
                "cycles": 73,
                "deleted_at": "2016-03-13T12:52:32.123Z"
              }
            ],
            "statement_descriptor": "statement_descriptor7",
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata3",
              "key2": "metadata2"
            },
            "setup": {
              "id": "id1",
              "description": "description1",
              "amount": 199,
              "status": "status3"
            },
            "gateway_affiliation_id": "gateway_affiliation_id3",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 147,
            "minimum_price": 251,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id8",
                "value": 91.4,
                "discount_type": "discount_type6",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 204,
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
                    "price": 94,
                    "scheme_type": "scheme_type6",
                    "price_brackets": [
                      {
                        "start_quantity": 115,
                        "price": 53,
                        "end_quantity": 123,
                        "overage_price": 137
                      },
                      {
                        "start_quantity": 116,
                        "price": 54,
                        "end_quantity": 124,
                        "overage_price": 138
                      }
                    ],
                    "minimum_price": 254,
                    "percentage": 128.84
                  },
                  "discounts": [
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id3",
                      "value": 237.75,
                      "increment_type": "increment_type5",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 9,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description3",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id4",
                      "value": 237.76,
                      "increment_type": "increment_type6",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 8,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description4",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id5",
                      "value": 237.77,
                      "increment_type": "increment_type7",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 7,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description5",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name4",
                  "quantity": 172,
                  "cycles": 192,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id9",
                "value": 91.41,
                "discount_type": "discount_type7",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 205,
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
                    "price": 93,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 116,
                        "price": 54,
                        "end_quantity": 124,
                        "overage_price": 138
                      },
                      {
                        "start_quantity": 117,
                        "price": 55,
                        "end_quantity": 125,
                        "overage_price": 139
                      },
                      {
                        "start_quantity": 118,
                        "price": 56,
                        "end_quantity": 126,
                        "overage_price": 140
                      }
                    ],
                    "minimum_price": 253,
                    "percentage": 128.85
                  },
                  "discounts": [
                    {},
                    {},
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id4",
                      "value": 237.76,
                      "increment_type": "increment_type6",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 8,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description4",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name5",
                  "quantity": 173,
                  "cycles": 193,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              },
              {
                "id": "id0",
                "value": 91.42,
                "discount_type": "discount_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 206,
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
                    "price": 92,
                    "scheme_type": "scheme_type8",
                    "price_brackets": [
                      {
                        "start_quantity": 117,
                        "price": 55,
                        "end_quantity": 125,
                        "overage_price": 139
                      }
                    ],
                    "minimum_price": 252,
                    "percentage": 128.86
                  },
                  "discounts": [
                    {}
                  ],
                  "increments": [
                    {
                      "id": "id5",
                      "value": 237.77,
                      "increment_type": "increment_type7",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 7,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description5",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id6",
                      "value": 237.78,
                      "increment_type": "increment_type8",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 6,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description6",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name6",
                  "quantity": 174,
                  "cycles": 194,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "increments": [
              {
                "id": "id4",
                "value": 44.36,
                "increment_type": "increment_type6",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 148,
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
                    "price": 98,
                    "scheme_type": "scheme_type8",
                    "price_brackets": [
                      {
                        "start_quantity": 111,
                        "price": 49,
                        "end_quantity": 119,
                        "overage_price": 133
                      }
                    ],
                    "minimum_price": 254,
                    "percentage": 182.56
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 79.43,
                      "discount_type": "discount_type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 31,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id2",
                      "value": 79.44,
                      "discount_type": "discount_type0",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 32,
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
                  "name": "name0",
                  "quantity": 76,
                  "cycles": 160,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              }
            ],
            "boleto_due_days": 119,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type3",
                  "amount": 79,
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
                      "volume_percentage": 59,
                      "delay": 231,
                      "days": [
                        207,
                        208
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval5",
                      "transfer_day": 225
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
                  "amount": 80,
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
                        "key0": "metadata5"
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
                      }
                    ],
                    "metadata": {
                      "key0": "metadata3"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type6",
                      "volume_percentage": 58,
                      "delay": 232,
                      "days": [
                        208,
                        209,
                        210
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval4",
                      "transfer_day": 224
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
                "days": 227,
                "type": "type7",
                "amount": 45
              },
              "fine": {
                "days": 63,
                "type": "type1",
                "amount": 137
              },
              "max_days_to_pay_past_due": 51
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
              "interval": "interval9",
              "interval_count": 209,
              "billing_type": "billing_type3",
              "current_cycle": {},
              "payment_method": "payment_method7",
              "currency": "currency7",
              "installments": 121,
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
                "fb_id": 47,
                "code": "code5",
                "document_type": "document_type5"
              },
              "card": {
                "id": "id3",
                "last_four_digits": "last_four_digits9",
                "brand": "brand7",
                "holder_name": "holder_name9",
                "exp_month": 99,
                "exp_year": 197,
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
                      "key0": "metadata6"
                    },
                    "line_1": "line_17",
                    "line_2": "line_27",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata0"
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
                  "fb_id": 185,
                  "code": "code1",
                  "document_type": "document_type1"
                },
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata1"
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
                    "price": 20,
                    "scheme_type": "scheme_type8",
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
                    "percentage": 226.86
                  },
                  "discounts": [
                    {
                      "id": "id1",
                      "value": 35.13,
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
                    {
                      "id": "id1",
                      "value": 100.63,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 153,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description9",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id0",
                      "value": 100.62,
                      "increment_type": "increment_type2",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 154,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name0",
                  "quantity": 254,
                  "cycles": 238,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                {
                  "id": "id1",
                  "description": "description1",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 21,
                    "scheme_type": "scheme_type7",
                    "price_brackets": [
                      {
                        "start_quantity": 188,
                        "price": 130,
                        "end_quantity": 196,
                        "overage_price": 210
                      }
                    ],
                    "minimum_price": 181,
                    "percentage": 226.85
                  },
                  "discounts": [
                    {
                      "id": "id2",
                      "value": 35.14,
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
                      "value": 35.15,
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
                    {
                      "id": "id0",
                      "value": 100.62,
                      "increment_type": "increment_type2",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 154,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description0",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id9",
                      "value": 100.61,
                      "increment_type": "increment_type1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 155,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id8",
                      "value": 100.6,
                      "increment_type": "increment_type0",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 156,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description2",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name1",
                  "quantity": 255,
                  "cycles": 237,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                {
                  "id": "id2",
                  "description": "description2",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 22,
                    "scheme_type": "scheme_type6",
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
                    "percentage": 226.84
                  },
                  "discounts": [
                    {
                      "id": "id3",
                      "value": 35.15,
                      "discount_type": "discount_type1",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 211,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description3",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id4",
                      "value": 35.16,
                      "discount_type": "discount_type2",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 212,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description4",
                      "subscription": {},
                      "subscription_item": {}
                    },
                    {
                      "id": "id5",
                      "value": 35.17,
                      "discount_type": "discount_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 213,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description5",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "increments": [
                    {
                      "id": "id9",
                      "value": 100.61,
                      "increment_type": "increment_type1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": 155,
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "description": "description1",
                      "subscription": {},
                      "subscription_item": {}
                    }
                  ],
                  "subscription": {},
                  "name": "name2",
                  "quantity": 0,
                  "cycles": 236,
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                }
              ],
              "statement_descriptor": "statement_descriptor3",
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata1"
              },
              "setup": {
                "id": "id7",
                "description": "description3",
                "amount": 111,
                "status": "status1"
              },
              "gateway_affiliation_id": "gateway_affiliation_id9",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 163,
              "minimum_price": 49,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {
                  "id": "id4",
                  "value": 65.26,
                  "discount_type": "discount_type2",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 150,
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
                      "price": 148,
                      "scheme_type": "scheme_type2",
                      "price_brackets": [
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
                        },
                        {
                          "start_quantity": 63,
                          "price": 255,
                          "end_quantity": 71,
                          "overage_price": 85
                        }
                      ],
                      "minimum_price": 52,
                      "percentage": 102.7
                    },
                    "discounts": [
                      {},
                      {},
                      {}
                    ],
                    "increments": [
                      {
                        "id": "id9",
                        "value": 211.61,
                        "increment_type": "increment_type1",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 63,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description9",
                        "subscription": {},
                        "subscription_item": {}
                      }
                    ],
                    "subscription": {},
                    "name": "name0",
                    "quantity": 118,
                    "cycles": 138,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "increments": [
                {
                  "id": "id4",
                  "value": 69.16,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 228,
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
                      "price": 18,
                      "scheme_type": "scheme_type8",
                      "price_brackets": [
                        {
                          "start_quantity": 191,
                          "price": 129,
                          "end_quantity": 199,
                          "overage_price": 213
                        },
                        {
                          "start_quantity": 192,
                          "price": 130,
                          "end_quantity": 200,
                          "overage_price": 214
                        }
                      ],
                      "minimum_price": 78,
                      "percentage": 157.76
                    },
                    "discounts": [
                      {
                        "id": "id1",
                        "value": 104.23,
                        "discount_type": "discount_type9",
                        "status": "status3",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 207,
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
                    "quantity": 252,
                    "cycles": 240,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id5",
                  "value": 69.17,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 227,
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
                      "price": 19,
                      "scheme_type": "scheme_type7",
                      "price_brackets": [
                        {
                          "start_quantity": 190,
                          "price": 128,
                          "end_quantity": 198,
                          "overage_price": 212
                        }
                      ],
                      "minimum_price": 77,
                      "percentage": 157.75
                    },
                    "discounts": [
                      {
                        "id": "id2",
                        "value": 104.24,
                        "discount_type": "discount_type0",
                        "status": "status4",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 208,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description2",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id3",
                        "value": 104.25,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 209,
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
                    "quantity": 253,
                    "cycles": 239,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                },
                {
                  "id": "id6",
                  "value": 69.18,
                  "increment_type": "increment_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": 226,
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
                      "price": 20,
                      "scheme_type": "scheme_type6",
                      "price_brackets": [
                        {
                          "start_quantity": 189,
                          "price": 127,
                          "end_quantity": 197,
                          "overage_price": 211
                        },
                        {
                          "start_quantity": 190,
                          "price": 128,
                          "end_quantity": 198,
                          "overage_price": 212
                        },
                        {
                          "start_quantity": 191,
                          "price": 129,
                          "end_quantity": 199,
                          "overage_price": 213
                        }
                      ],
                      "minimum_price": 76,
                      "percentage": 157.74
                    },
                    "discounts": [
                      {
                        "id": "id3",
                        "value": 104.25,
                        "discount_type": "discount_type1",
                        "status": "status5",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 209,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description3",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id4",
                        "value": 104.26,
                        "discount_type": "discount_type2",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 210,
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "description": "description4",
                        "subscription": {},
                        "subscription_item": {}
                      },
                      {
                        "id": "id5",
                        "value": 104.27,
                        "discount_type": "discount_type3",
                        "status": "status7",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "cycles": 211,
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
                    "quantity": 254,
                    "cycles": 238,
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  }
                }
              ],
              "boleto_due_days": 65,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type3",
                    "amount": 117,
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
                        "volume_percentage": 201,
                        "delay": 89,
                        "days": [
                          65,
                          66,
                          67
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval3",
                        "transfer_day": 111
                      },
                      "code": "code9",
                      "payment_mode": "payment_mode5"
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
                    "type": "type4",
                    "amount": 118,
                    "recipient": {
                      "id": "id2",
                      "name": "name2",
                      "email": "email4",
                      "document": "document4",
                      "description": "description8",
                      "type": "type8",
                      "status": "status6",
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
                          "key0": "metadata7",
                          "key1": "metadata6",
                          "key2": "metadata5"
                        },
                        "pix_key": "pix_key6"
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
                        "key0": "metadata1",
                        "key1": "metadata2",
                        "key2": "metadata3"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type4",
                        "volume_percentage": 200,
                        "delay": 90,
                        "days": [
                          66
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval2",
                        "transfer_day": 110
                      },
                      "code": "code0",
                      "payment_mode": "payment_mode4"
                    },
                    "gateway_id": "gateway_id4",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee4"
                    },
                    "id": "id6"
                  },
                  {
                    "type": "type5",
                    "amount": 119,
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
                        "volume_percentage": 199,
                        "delay": 91,
                        "days": [
                          67,
                          68
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval1",
                        "transfer_day": 109
                      },
                      "code": "code1",
                      "payment_mode": "payment_mode3"
                    },
                    "gateway_id": "gateway_id5",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee5"
                    },
                    "id": "id5"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 31,
                  "type": "type3",
                  "amount": 105
                },
                "fine": {
                  "days": 13,
                  "type": "type9",
                  "amount": 169
                },
                "max_days_to_pay_past_due": 247
              },
              "manual_billing": true
            },
            "status": "status9",
            "duration": 135,
            "created_at": "created_at5",
            "updated_at": "updated_at3",
            "cycle": 75
          },
          "shipping": {
            "amount": 23,
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
                "fb_id": 71,
                "code": "code5",
                "document_type": "document_type5"
              },
              "metadata": {
                "key0": "metadata2"
              },
              "line_1": "line_11",
              "line_2": "line_25",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "max_delivery_date": "2016-03-13T12:52:32.123Z",
            "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
            "type": "type9"
          },
          "metadata": {
            "key0": "metadata6",
            "key1": "metadata7",
            "key2": "metadata8"
          },
          "due_at": "2016-03-13T12:52:32.123Z",
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "seen_at": "2016-03-13T12:52:32.123Z",
          "total_discount": 33,
          "total_increment": 105,
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
            "line_1": "line_13",
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
          "fb_id": 11,
          "code": "code1",
          "document_type": "document_type1"
        },
        "metadata": {
          "key0": "metadata0",
          "key1": "metadata1",
          "key2": "metadata2"
        },
        "paid_at": "2016-03-13T12:52:32.123Z",
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "canceled_amount": 89,
        "paid_amount": 185,
        "interest_and_fine_paid": 75,
        "recurrency_cycle": "recurrency_cycle7"
      }
    ],
    "invoice_url": "invoice_url8",
    "shipping": {
      "amount": 84,
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
          "fb_id": 132,
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
    "metadata": {
      "key0": "metadata3"
    },
    "checkouts": [
      {
        "id": "id3",
        "amount": 251,
        "default_payment_method": "default_payment_method3",
        "success_url": "success_url5",
        "payment_url": "payment_url7",
        "gateway_affiliation_id": "gateway_affiliation_id9",
        "accepted_payment_methods": [
          "accepted_payment_methods6",
          "accepted_payment_methods7"
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
              "key0": "metadata0",
              "key1": "metadata1"
            },
            "line_1": "line_13",
            "line_2": "line_27",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata6",
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
          "fb_id": 27,
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
              "key0": "metadata2"
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
            "fb_id": 109,
            "code": "code9",
            "document_type": "document_type9"
          },
          "metadata": {
            "key0": "metadata2",
            "key1": "metadata3",
            "key2": "metadata4"
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
              "total": 208
            },
            {
              "number": "number5",
              "total": 209
            },
            {
              "number": "number6",
              "total": 210
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
          "amount": 93,
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
              "fb_id": 141,
              "code": "code1",
              "document_type": "document_type1"
            },
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata5",
              "key2": "metadata6"
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
            "bank8",
            "bank9"
          ]
        },
        "accepted_brands": [
          "accepted_brands9",
          "accepted_brands0"
        ],
        "pix": {
          "expires_at": "2016-03-13T12:52:32.123Z",
          "additional_information": [
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
      },
      {
        "id": "id4",
        "amount": 252,
        "default_payment_method": "default_payment_method4",
        "success_url": "success_url6",
        "payment_url": "payment_url8",
        "gateway_affiliation_id": "gateway_affiliation_id0",
        "accepted_payment_methods": [
          "accepted_payment_methods7",
          "accepted_payment_methods8",
          "accepted_payment_methods9"
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
              "key1": "metadata2",
              "key2": "metadata3"
            },
            "line_1": "line_14",
            "line_2": "line_28",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata4",
            "key2": "metadata3"
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
          "fb_id": 28,
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
            "fb_id": 110,
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
        "credit_card": {
          "statementDescriptor": "statementDescriptor8",
          "installments": [
            {
              "number": "number5",
              "total": 209
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
          "amount": 94,
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
              "fb_id": 142,
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
            "bank0",
            "bank1"
          ]
        },
        "accepted_brands": [
          "accepted_brands0",
          "accepted_brands1",
          "accepted_brands2"
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
            },
            {
              "Name": "Name3",
              "Value": "Value1"
            }
          ]
        }
      },
      {
        "id": "id5",
        "amount": 253,
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
              "key0": "metadata2"
            },
            "line_1": "line_15",
            "line_2": "line_29",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata4"
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
          "fb_id": 29,
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
            "fb_id": 111,
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
        "credit_card": {
          "statementDescriptor": "statementDescriptor9",
          "installments": [
            {
              "number": "number6",
              "total": 210
            },
            {
              "number": "number7",
              "total": 211
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
          "amount": 95,
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
              "fb_id": 143,
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
            "bank0"
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
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "paid_at": "2016-03-13T12:52:32.123Z",
  "canceled_at": "2016-03-13T12:52:32.123Z",
  "canceled_amount": 64,
  "paid_amount": 210,
  "interest_and_fine_paid": 50
}
```

