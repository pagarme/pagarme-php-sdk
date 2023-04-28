
# Create Order Request

Request for creating an order

## Structure

`CreateOrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`CreateOrderItemRequest[]`](../../doc/models/create-order-item-request.md) | Required | Items | getItems(): array | setItems(array items): void |
| `customer` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Required | Customer | getCustomer(): CreateCustomerRequest | setCustomer(CreateCustomerRequest customer): void |
| `payments` | [`CreatePaymentRequest[]`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayments(): array | setPayments(array payments): void |
| `code` | `string` | Required | The order code | getCode(): string | setCode(string code): void |
| `customerId` | `?string` | Optional | The customer id | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `shipping` | [`?CreateShippingRequest`](../../doc/models/create-shipping-request.md) | Optional | Shipping data | getShipping(): ?CreateShippingRequest | setShipping(?CreateShippingRequest shipping): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `antifraudEnabled` | `?bool` | Optional | Defines whether the order will go through anti-fraud | getAntifraudEnabled(): ?bool | setAntifraudEnabled(?bool antifraudEnabled): void |
| `ip` | `?string` | Optional | Ip address | getIp(): ?string | setIp(?string ip): void |
| `sessionId` | `?string` | Optional | Session id | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `location` | [`?CreateLocationRequest`](../../doc/models/create-location-request.md) | Optional | Request's location | getLocation(): ?CreateLocationRequest | setLocation(?CreateLocationRequest location): void |
| `device` | [`?CreateDeviceRequest`](../../doc/models/create-device-request.md) | Optional | Device's informations | getDevice(): ?CreateDeviceRequest | setDevice(?CreateDeviceRequest device): void |
| `closed` | `bool` | Required | **Default**: `true` | getClosed(): bool | setClosed(bool closed): void |
| `currency` | `?string` | Optional | Currency | getCurrency(): ?string | setCurrency(?string currency): void |
| `antifraud` | [`?CreateAntifraudRequest`](../../doc/models/create-antifraud-request.md) | Optional | - | getAntifraud(): ?CreateAntifraudRequest | setAntifraud(?CreateAntifraudRequest antifraud): void |
| `submerchant` | [`?CreateSubMerchantRequest`](../../doc/models/create-sub-merchant-request.md) | Optional | SubMerchant | getSubmerchant(): ?CreateSubMerchantRequest | setSubmerchant(?CreateSubMerchantRequest submerchant): void |

## Example (as JSON)

```json
{
  "items": [
    {
      "amount": 13,
      "description": "description7",
      "quantity": 127,
      "category": "category5",
      "code": "code5"
    }
  ],
  "customer": {
    "name": "{\n    \"name\": \"Tony Stark\"\n}",
    "email": "email6",
    "document": "document6",
    "type": "type0",
    "address": {
      "street": "street6",
      "number": "number4",
      "zip_code": "zip_code0",
      "neighborhood": "neighborhood2",
      "city": "city6",
      "state": "state2",
      "country": "country0",
      "complement": "complement2",
      "metadata": {
        "key0": "metadata3"
      },
      "line_1": "line_10",
      "line_2": "line_24"
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
    "code": "code8",
    "gender": "gender6",
    "document_type": "document_type8"
  },
  "payments": [
    {
      "payment_method": "payment_method4",
      "credit_card": {
        "installments": 176,
        "statement_descriptor": "statement_descriptor4",
        "card": {
          "number": "number4",
          "holder_name": "holder_name4",
          "exp_month": 186,
          "exp_year": 110,
          "cvv": "cvv6",
          "billing_address": {
            "street": "street0",
            "number": "number2",
            "zip_code": "zip_code4",
            "neighborhood": "neighborhood6",
            "city": "city0",
            "state": "state4",
            "country": "country4",
            "complement": "complement4",
            "metadata": {
              "key0": "metadata3"
            },
            "line_1": "line_16",
            "line_2": "line_28"
          },
          "brand": "brand2",
          "billing_address_id": "billing_address_id4",
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata6",
            "key2": "metadata7"
          },
          "type": "type2",
          "options": {
            "verify_card": false
          },
          "holder_document": "holder_document8",
          "private_label": false,
          "label": "label8",
          "id": "id8",
          "token": "token8"
        },
        "card_id": "card_id0",
        "card_token": "card_token6",
        "recurrence": false,
        "capture": false,
        "extended_limit_enabled": false,
        "extended_limit_code": "extended_limit_code2",
        "merchant_category_code": 20,
        "authentication": {
          "type": "type6",
          "threed_secure": {
            "mpi": "mpi6",
            "cavv": "cavv4",
            "eci": "eci8",
            "transaction_id": "transaction_id6",
            "success_url": "success_url0",
            "ds_transaction_id": "ds_transaction_id6",
            "version": "version4"
          }
        },
        "contactless": {
          "type": "type4",
          "apple_pay": {
            "version": "version0",
            "data": "data4",
            "header": {
              "public_key_hash": "public_key_hash0",
              "ephemeral_public_key": "ephemeral_public_key2",
              "transaction_id": "transaction_id0"
            },
            "signature": "signature2",
            "merchant_identifier": "merchant_identifier8"
          },
          "google_pay": {
            "version": "version2",
            "data": "data6",
            "header": {
              "ephemeral_public_key": "ephemeral_public_key0"
            },
            "signature": "signature4",
            "merchant_identifier": "merchant_identifier0"
          },
          "emv": {
            "icc_data": "icc_data4",
            "card_sequence_number": "card_sequence_number0",
            "data": {
              "cipher": "cipher4",
              "dukpt": {
                "ksn": "ksn0"
              },
              "tags": [
                {
                  "tag": "tag9",
                  "lenght": "lenght7",
                  "value": "value7"
                },
                {
                  "tag": "tag0",
                  "lenght": "lenght8",
                  "value": "value8"
                },
                {
                  "tag": "tag1",
                  "lenght": "lenght9",
                  "value": "value9"
                }
              ]
            },
            "poi": {
              "system_name": "system_name6",
              "model": "model4",
              "provider": "provider2",
              "serial_number": "serial_number0",
              "version_number": "version_number4"
            }
          }
        },
        "auto_recovery": false,
        "operation_type": "operation_type8",
        "recurrency_cycle": "recurrency_cycle8"
      },
      "debit_card": {
        "statement_descriptor": "statement_descriptor0",
        "card": {
          "number": "number8",
          "holder_name": "holder_name0",
          "exp_month": 112,
          "exp_year": 184,
          "cvv": "cvv8",
          "billing_address": {
            "street": "street4",
            "number": "number8",
            "zip_code": "zip_code8",
            "neighborhood": "neighborhood0",
            "city": "city6",
            "state": "state0",
            "country": "country8",
            "complement": "complement0",
            "metadata": {
              "key0": "metadata9",
              "key1": "metadata0",
              "key2": "metadata1"
            },
            "line_1": "line_12",
            "line_2": "line_22"
          },
          "brand": "brand8",
          "billing_address_id": "billing_address_id0",
          "metadata": {
            "key0": "metadata9",
            "key1": "metadata0"
          },
          "type": "type6",
          "options": {
            "verify_card": false
          },
          "holder_document": "holder_document2",
          "private_label": false,
          "label": "label4",
          "id": "id4",
          "token": "token2"
        },
        "card_id": "card_id4",
        "card_token": "card_token0",
        "recurrence": false,
        "authentication": {
          "type": "type2",
          "threed_secure": {
            "mpi": "mpi8",
            "cavv": "cavv0",
            "eci": "eci4",
            "transaction_id": "transaction_id2",
            "success_url": "success_url6",
            "ds_transaction_id": "ds_transaction_id2",
            "version": "version0"
          }
        },
        "token": {
          "type": "type4",
          "apple_pay": {
            "version": "version0",
            "data": "data4",
            "header": {
              "public_key_hash": "public_key_hash0",
              "ephemeral_public_key": "ephemeral_public_key2",
              "transaction_id": "transaction_id0"
            },
            "signature": "signature2",
            "merchant_identifier": "merchant_identifier8"
          },
          "google_pay": {
            "version": "version8",
            "data": "data2",
            "header": {
              "ephemeral_public_key": "ephemeral_public_key4"
            },
            "signature": "signature0",
            "merchant_identifier": "merchant_identifier6"
          },
          "emv": {
            "icc_data": "icc_data2",
            "card_sequence_number": "card_sequence_number8",
            "data": {
              "cipher": "cipher2",
              "dukpt": {
                "ksn": "ksn8"
              },
              "tags": [
                {
                  "tag": "tag7",
                  "lenght": "lenght5",
                  "value": "value5"
                },
                {
                  "tag": "tag8",
                  "lenght": "lenght6",
                  "value": "value6"
                },
                {
                  "tag": "tag9",
                  "lenght": "lenght7",
                  "value": "value7"
                }
              ]
            },
            "poi": {
              "system_name": "system_name4",
              "model": "model2",
              "provider": "provider4",
              "serial_number": "serial_number2",
              "version_number": "version_number6"
            }
          }
        }
      },
      "boleto": {
        "retries": 102,
        "bank": "bank4",
        "instructions": "instructions6",
        "due_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street2",
          "number": "number0",
          "zip_code": "zip_code6",
          "neighborhood": "neighborhood8",
          "city": "city8",
          "state": "state2",
          "country": "country6",
          "complement": "complement2",
          "metadata": {
            "key0": "metadata1"
          },
          "line_1": "line_14",
          "line_2": "line_20"
        },
        "billing_address_id": "billing_address_id2",
        "nosso_numero": "nosso_numero6",
        "document_number": "document_number0",
        "statement_descriptor": "statement_descriptor6",
        "interest": {
          "days": 28,
          "type": "type4",
          "amount": 102
        },
        "fine": {
          "days": 10,
          "type": "type8",
          "amount": 84
        },
        "max_days_to_pay_past_due": 250
      },
      "currency": "currency6",
      "voucher": {
        "statement_descriptor": "statement_descriptor6",
        "card_id": "card_id2",
        "card_token": "card_token4",
        "Card": {
          "number": "number4",
          "holder_name": "holder_name2",
          "exp_month": 74,
          "exp_year": 114,
          "cvv": "cvv4",
          "billing_address": {
            "street": "street8",
            "number": "number6",
            "zip_code": "zip_code2",
            "neighborhood": "neighborhood4",
            "city": "city8",
            "state": "state4",
            "country": "country2",
            "complement": "complement4",
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata4",
              "key2": "metadata3"
            },
            "line_1": "line_12",
            "line_2": "line_26"
          },
          "brand": "brand0",
          "billing_address_id": "billing_address_id2",
          "metadata": {
            "key0": "metadata3",
            "key1": "metadata2",
            "key2": "metadata1"
          },
          "type": "type6",
          "options": {
            "verify_card": false
          },
          "holder_document": "holder_document0",
          "private_label": false,
          "label": "label6",
          "id": "id6",
          "token": "token0"
        },
        "recurrency_cycle": "recurrency_cycle0"
      },
      "split": [
        {
          "type": "type6",
          "amount": 24,
          "recipient_id": "recipient_id6",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": false
          },
          "split_rule_id": "split_rule_id6"
        },
        {
          "type": "type5",
          "amount": 25,
          "recipient_id": "recipient_id5",
          "options": {
            "liable": true,
            "charge_processing_fee": true,
            "charge_remainder_fee": true
          },
          "split_rule_id": "split_rule_id7"
        },
        {
          "type": "type4",
          "amount": 26,
          "recipient_id": "recipient_id4",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": false
          },
          "split_rule_id": "split_rule_id8"
        }
      ],
      "bank_transfer": {
        "bank": "bank4",
        "retries": 112
      },
      "gateway_affiliation_id": "gateway_affiliation_id2",
      "amount": 78,
      "checkout": {
        "accepted_payment_methods": [
          "accepted_payment_methods1"
        ],
        "accepted_multi_payment_methods": [
          {
            "key1": "val1",
            "key2": "val2"
          }
        ],
        "success_url": "success_url0",
        "default_payment_method": "default_payment_method8",
        "gateway_affiliation_id": "gateway_affiliation_id4",
        "credit_card": {
          "statement_descriptor": "statement_descriptor6",
          "installments": [
            {
              "number": 189,
              "total": 81
            },
            {
              "number": 190,
              "total": 82
            }
          ],
          "authentication": {
            "type": "type8",
            "threed_secure": {
              "mpi": "mpi4",
              "cavv": "cavv2",
              "eci": "eci6",
              "transaction_id": "transaction_id4",
              "success_url": "success_url8",
              "ds_transaction_id": "ds_transaction_id4",
              "version": "version2"
            }
          },
          "capture": false
        },
        "debit_card": {
          "statement_descriptor": "statement_descriptor2",
          "authentication": {
            "type": "type6",
            "threed_secure": {
              "mpi": "mpi0",
              "cavv": "cavv8",
              "eci": "eci2",
              "transaction_id": "transaction_id0",
              "success_url": "success_url4",
              "ds_transaction_id": "ds_transaction_id0",
              "version": "version8"
            }
          }
        },
        "boleto": {
          "bank": "bank6",
          "instructions": "instructions6",
          "due_at": "2016-03-13T12:52:32.123Z"
        },
        "customer_editable": false,
        "expires_in": 200,
        "skip_checkout_success_page": false,
        "billing_address_editable": false,
        "billing_address": {
          "street": "street0",
          "number": "number8",
          "zip_code": "zip_code4",
          "neighborhood": "neighborhood6",
          "city": "city0",
          "state": "state6",
          "country": "country4",
          "complement": "complement6",
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata6",
            "key2": "metadata5"
          },
          "line_1": "line_14",
          "line_2": "line_28"
        },
        "bank_transfer": {
          "bank": [
            "bank3"
          ],
          "retries": 138
        },
        "accepted_brands": [
          "accepted_brands4"
        ],
        "pix": {
          "expires_at": "2016-03-13T12:52:32.123Z",
          "expires_in": 176,
          "additional_information": [
            {
              "Name": "Name5",
              "Value": "Value3"
            }
          ]
        }
      },
      "customer_id": "customer_id4",
      "customer": {
        "name": "name6",
        "email": "email0",
        "document": "document0",
        "type": "type4",
        "address": {
          "street": "street2",
          "number": "number0",
          "zip_code": "zip_code6",
          "neighborhood": "neighborhood8",
          "city": "city2",
          "state": "state8",
          "country": "country6",
          "complement": "complement8",
          "metadata": {
            "key0": "metadata9"
          },
          "line_1": "line_14",
          "line_2": "line_20"
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
        "code": "code4",
        "gender": "gender0",
        "document_type": "document_type4"
      },
      "metadata": {
        "key0": "metadata7",
        "key1": "metadata8"
      },
      "cash": {
        "description": "description6",
        "confirm": false
      },
      "private_label": {
        "installments": 114,
        "statement_descriptor": "statement_descriptor6",
        "card": {
          "number": "number8",
          "holder_name": "holder_name6",
          "exp_month": 248,
          "exp_year": 48,
          "cvv": "cvv8",
          "billing_address": {
            "street": "street2",
            "number": "number0",
            "zip_code": "zip_code6",
            "neighborhood": "neighborhood8",
            "city": "city2",
            "state": "state8",
            "country": "country6",
            "complement": "complement8",
            "metadata": {
              "key0": "metadata9",
              "key1": "metadata8"
            },
            "line_1": "line_14",
            "line_2": "line_20"
          },
          "brand": "brand4",
          "billing_address_id": "billing_address_id6",
          "metadata": {
            "key0": "metadata7"
          },
          "type": "type0",
          "options": {
            "verify_card": false
          },
          "holder_document": "holder_document4",
          "private_label": false,
          "label": "label0",
          "id": "id0",
          "token": "token4"
        },
        "card_id": "card_id2",
        "card_token": "card_token6",
        "recurrence": false,
        "capture": false,
        "extended_limit_enabled": false,
        "extended_limit_code": "extended_limit_code4",
        "recurrency_cycle": "recurrency_cycle0"
      },
      "pix": {
        "expires_at": "2016-03-13T12:52:32.123Z",
        "expires_in": 126,
        "additional_information": [
          {
            "Name": "Name3",
            "Value": "Value1"
          }
        ]
      }
    }
  ],
  "code": "code8",
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "closed": true,
  "customer_id": "customer_id8",
  "shipping": {
    "amount": 52,
    "description": "description6",
    "recipient_name": "recipient_name2",
    "recipient_phone": "recipient_phone6",
    "address_id": "address_id6",
    "address": {
      "street": "street0",
      "number": "number8",
      "zip_code": "zip_code4",
      "neighborhood": "neighborhood6",
      "city": "city0",
      "state": "state6",
      "country": "country4",
      "complement": "complement6",
      "metadata": {
        "key0": "metadata7"
      },
      "line_1": "line_14",
      "line_2": "line_28"
    },
    "max_delivery_date": "2016-03-13T12:52:32.123Z",
    "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
    "type": "type6"
  },
  "antifraud_enabled": false,
  "ip": "ip4",
  "session_id": "session_id8",
  "location": {
    "latitude": "latitude2",
    "longitude": "longitude8"
  },
  "device": {
    "platform": "platform0"
  },
  "currency": "currency0",
  "antifraud": {
    "type": "type6",
    "clearsale": {
      "custom_sla": 20
    }
  },
  "submerchant": {
    "payment_facilitator_code": "payment_facilitator_code0",
    "code": "code4",
    "name": "name6",
    "merchant_category_code": "merchant_category_code6",
    "document": "document0",
    "type": "type4",
    "phone": {
      "country_code": "country_code6",
      "number": "number8",
      "area_code": "area_code4"
    },
    "address": {
      "street": "street2",
      "number": "number0",
      "zip_code": "zip_code6",
      "neighborhood": "neighborhood8",
      "city": "city2",
      "state": "state8",
      "country": "country6",
      "complement": "complement8",
      "metadata": {
        "key0": "metadata7",
        "key1": "metadata6",
        "key2": "metadata5"
      },
      "line_1": "line_16",
      "line_2": "line_20"
    }
  }
}
```

