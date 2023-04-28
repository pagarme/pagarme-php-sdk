
# Create Subscription Request

Request for creating a subcription

## Structure

`CreateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Required | Customer | getCustomer(): CreateCustomerRequest | setCustomer(CreateCustomerRequest customer): void |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Card | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `code` | `string` | Required | Subscription code | getCode(): string | setCode(string code): void |
| `paymentMethod` | `string` | Required | Payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `billingType` | `string` | Required | Billing type | getBillingType(): string | setBillingType(string billingType): void |
| `statementDescriptor` | `string` | Required | Statement descriptor for credit card subscriptions | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `description` | `string` | Required | Subscription description | getDescription(): string | setDescription(string description): void |
| `currency` | `string` | Required | Currency | getCurrency(): string | setCurrency(string currency): void |
| `interval` | `string` | Required | Interval | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | Interval count | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `pricingScheme` | [`CreatePricingSchemeRequest`](../../doc/models/create-pricing-scheme-request.md) | Required | Subscription pricing scheme | getPricingScheme(): CreatePricingSchemeRequest | setPricingScheme(CreatePricingSchemeRequest pricingScheme): void |
| `items` | [`CreateSubscriptionItemRequest[]`](../../doc/models/create-subscription-item-request.md) | Required | Subscription items | getItems(): array | setItems(array items): void |
| `shipping` | [`CreateShippingRequest`](../../doc/models/create-shipping-request.md) | Required | Shipping | getShipping(): CreateShippingRequest | setShipping(CreateShippingRequest shipping): void |
| `discounts` | [`CreateDiscountRequest[]`](../../doc/models/create-discount-request.md) | Required | Discounts | getDiscounts(): array | setDiscounts(array discounts): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `setup` | [`?CreateSetupRequest`](../../doc/models/create-setup-request.md) | Optional | Setup data | getSetup(): ?CreateSetupRequest | setSetup(?CreateSetupRequest setup): void |
| `planId` | `?string` | Optional | Plan id | getPlanId(): ?string | setPlanId(?string planId): void |
| `customerId` | `?string` | Optional | Customer id | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `cardId` | `?string` | Optional | Card id | getCardId(): ?string | setCardId(?string cardId): void |
| `billingDay` | `?int` | Optional | Billing day | getBillingDay(): ?int | setBillingDay(?int billingDay): void |
| `installments` | `?int` | Optional | Number of installments | getInstallments(): ?int | setInstallments(?int installments): void |
| `startAt` | `?\DateTime` | Optional | Subscription start date | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `minimumPrice` | `?int` | Optional | Subscription minimum price | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `cycles` | `?int` | Optional | Number of cycles | getCycles(): ?int | setCycles(?int cycles): void |
| `cardToken` | `?string` | Optional | Card token | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `gatewayAffiliationId` | `?string` | Optional | Gateway Affiliation code | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `boletoDueDays` | `?int` | Optional | Days until boleto expires | getBoletoDueDays(): ?int | setBoletoDueDays(?int boletoDueDays): void |
| `increments` | [`CreateIncrementRequest[]`](../../doc/models/create-increment-request.md) | Required | Increments | getIncrements(): array | setIncrements(array increments): void |
| `period` | [`?CreatePeriodRequest`](../../doc/models/create-period-request.md) | Optional | - | getPeriod(): ?CreatePeriodRequest | setPeriod(?CreatePeriodRequest period): void |
| `submerchant` | [`?CreateSubMerchantRequest`](../../doc/models/create-sub-merchant-request.md) | Optional | SubMerchant | getSubmerchant(): ?CreateSubMerchantRequest | setSubmerchant(?CreateSubMerchantRequest submerchant): void |
| `split` | [`?CreateSubscriptionSplitRequest`](../../doc/models/create-subscription-split-request.md) | Optional | Subscription's split | getSplit(): ?CreateSubscriptionSplitRequest | setSplit(?CreateSubscriptionSplitRequest split): void |
| `boleto` | [`?CreateSubscriptionBoletoRequest`](../../doc/models/create-subscription-boleto-request.md) | Optional | Information about fines and interest on the "boleto" used from payment | getBoleto(): ?CreateSubscriptionBoletoRequest | setBoleto(?CreateSubscriptionBoletoRequest boleto): void |

## Example (as JSON)

```json
{
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
  "card": {
    "type": "credit",
    "number": "number6",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
    "cvv": "cvv4",
    "billing_address": {
      "street": "street8",
      "number": "number4",
      "zip_code": "zip_code2",
      "neighborhood": "neighborhood4",
      "city": "city2",
      "state": "state6",
      "country": "country2",
      "complement": "complement6",
      "metadata": {
        "key0": "metadata5",
        "key1": "metadata6"
      },
      "line_1": "line_18",
      "line_2": "line_26"
    },
    "brand": "brand0",
    "billing_address_id": "billing_address_id2",
    "metadata": {
      "key0": "metadata7"
    },
    "options": {
      "verify_card": false
    },
    "holder_document": "holder_document0",
    "private_label": false,
    "label": "label6",
    "id": "id6",
    "token": "token0"
  },
  "code": "code8",
  "payment_method": "payment_method0",
  "billing_type": "billing_type6",
  "statement_descriptor": "statement_descriptor0",
  "description": "description0",
  "currency": "currency0",
  "interval": "interval2",
  "interval_count": 82,
  "pricing_scheme": {
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
    "price": 166,
    "minimum_price": 6,
    "percentage": 251.76
  },
  "items": [
    {
      "description": "description7",
      "pricing_scheme": {
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
        "price": 149,
        "minimum_price": 53,
        "percentage": 25.89
      },
      "id": "id7",
      "plan_item_id": "plan_item_id7",
      "discounts": [
        {
          "value": 236.1,
          "discount_type": "discount_type6",
          "item_id": "item_id8",
          "cycles": 82,
          "description": "description8"
        }
      ],
      "name": "name7",
      "cycles": 109,
      "quantity": 127,
      "minimum_price": 117
    }
  ],
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
  "discounts": [
    {
      "value": 10.23,
      "discount_type": "discount_type9",
      "item_id": "item_id1",
      "cycles": 233,
      "description": "description1"
    }
  ],
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "increments": [
    {
      "value": 124.19,
      "increment_type": "increment_type9",
      "item_id": "item_id3",
      "cycles": 101,
      "description": "description3"
    }
  ],
  "setup": {
    "amount": 110,
    "description": "description4",
    "payment": {
      "payment_method": "payment_method8",
      "credit_card": {
        "installments": 228,
        "statement_descriptor": "statement_descriptor0",
        "card": {
          "number": "number2",
          "holder_name": "holder_name0",
          "exp_month": 134,
          "exp_year": 162,
          "cvv": "cvv2",
          "billing_address": {
            "street": "street6",
            "number": "number6",
            "zip_code": "zip_code0",
            "neighborhood": "neighborhood2",
            "city": "city6",
            "state": "state2",
            "country": "country0",
            "complement": "complement8",
            "metadata": {
              "key0": "metadata7",
              "key1": "metadata8"
            },
            "line_1": "line_10",
            "line_2": "line_24"
          },
          "brand": "brand8",
          "billing_address_id": "billing_address_id0",
          "metadata": {
            "key0": "metadata1"
          },
          "type": "type6",
          "options": {
            "verify_card": false
          },
          "holder_document": "holder_document8",
          "private_label": false,
          "label": "label4",
          "id": "id4",
          "token": "token2"
        },
        "card_id": "card_id6",
        "card_token": "card_token0",
        "recurrence": false,
        "capture": false,
        "extended_limit_enabled": false,
        "extended_limit_code": "extended_limit_code8",
        "merchant_category_code": 72,
        "authentication": {
          "type": "type8",
          "threed_secure": {
            "mpi": "mpi2",
            "cavv": "cavv4",
            "eci": "eci0",
            "transaction_id": "transaction_id8",
            "success_url": "success_url2",
            "ds_transaction_id": "ds_transaction_id8",
            "version": "version6"
          }
        },
        "contactless": {
          "type": "type0",
          "apple_pay": {
            "version": "version6",
            "data": "data0",
            "header": {
              "public_key_hash": "public_key_hash2",
              "ephemeral_public_key": "ephemeral_public_key4",
              "transaction_id": "transaction_id2"
            },
            "signature": "signature8",
            "merchant_identifier": "merchant_identifier4"
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
            "icc_data": "icc_data0",
            "card_sequence_number": "card_sequence_number6",
            "data": {
              "cipher": "cipher0",
              "dukpt": {
                "ksn": "ksn6"
              },
              "tags": [
                {
                  "tag": "tag5",
                  "lenght": "lenght3",
                  "value": "value3"
                },
                {
                  "tag": "tag6",
                  "lenght": "lenght4",
                  "value": "value4"
                }
              ]
            },
            "poi": {
              "system_name": "system_name2",
              "model": "model0",
              "provider": "provider6",
              "serial_number": "serial_number6",
              "version_number": "version_number2"
            }
          }
        },
        "auto_recovery": false,
        "operation_type": "operation_type4",
        "recurrency_cycle": "recurrency_cycle4"
      },
      "debit_card": {
        "statement_descriptor": "statement_descriptor6",
        "card": {
          "number": "number2",
          "holder_name": "holder_name6",
          "exp_month": 60,
          "exp_year": 236,
          "cvv": "cvv8",
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
          "brand": "brand4",
          "billing_address_id": "billing_address_id6",
          "metadata": {
            "key0": "metadata3",
            "key1": "metadata4",
            "key2": "metadata5"
          },
          "type": "type0",
          "options": {
            "verify_card": false
          },
          "holder_document": "holder_document6",
          "private_label": false,
          "label": "label0",
          "id": "id0",
          "token": "token6"
        },
        "card_id": "card_id2",
        "card_token": "card_token4",
        "recurrence": false,
        "authentication": {
          "type": "type2",
          "threed_secure": {
            "mpi": "mpi2",
            "cavv": "cavv0",
            "eci": "eci4",
            "transaction_id": "transaction_id2",
            "success_url": "success_url6",
            "ds_transaction_id": "ds_transaction_id2",
            "version": "version0"
          }
        },
        "token": {
          "type": "type0",
          "apple_pay": {
            "version": "version6",
            "data": "data0",
            "header": {
              "public_key_hash": "public_key_hash4",
              "ephemeral_public_key": "ephemeral_public_key6",
              "transaction_id": "transaction_id4"
            },
            "signature": "signature8",
            "merchant_identifier": "merchant_identifier4"
          },
          "google_pay": {
            "version": "version4",
            "data": "data8",
            "header": {
              "ephemeral_public_key": "ephemeral_public_key2"
            },
            "signature": "signature6",
            "merchant_identifier": "merchant_identifier2"
          },
          "emv": {
            "icc_data": "icc_data8",
            "card_sequence_number": "card_sequence_number4",
            "data": {
              "cipher": "cipher8",
              "dukpt": {
                "ksn": "ksn4"
              },
              "tags": [
                {
                  "tag": "tag3",
                  "lenght": "lenght1",
                  "value": "value1"
                },
                {
                  "tag": "tag4",
                  "lenght": "lenght2",
                  "value": "value2"
                },
                {
                  "tag": "tag5",
                  "lenght": "lenght3",
                  "value": "value3"
                }
              ]
            },
            "poi": {
              "system_name": "system_name0",
              "model": "model8",
              "provider": "provider8",
              "serial_number": "serial_number4",
              "version_number": "version_number0"
            }
          }
        }
      },
      "boleto": {
        "retries": 154,
        "bank": "bank0",
        "instructions": "instructions0",
        "due_at": "2016-03-13T12:52:32.123Z",
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
        "billing_address_id": "billing_address_id8",
        "nosso_numero": "nosso_numero2",
        "document_number": "document_number4",
        "statement_descriptor": "statement_descriptor2",
        "interest": {
          "days": 232,
          "type": "type2",
          "amount": 50
        },
        "fine": {
          "days": 58,
          "type": "type6",
          "amount": 132
        },
        "max_days_to_pay_past_due": 46
      },
      "currency": "currency2",
      "voucher": {
        "statement_descriptor": "statement_descriptor0",
        "card_id": "card_id4",
        "card_token": "card_token0",
        "Card": {
          "number": "number8",
          "holder_name": "holder_name6",
          "exp_month": 22,
          "exp_year": 62,
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
        "recurrency_cycle": "recurrency_cycle4"
      },
      "split": [
        {
          "type": "type0",
          "amount": 76,
          "recipient_id": "recipient_id0",
          "options": {
            "liable": false,
            "charge_processing_fee": false,
            "charge_remainder_fee": false
          },
          "split_rule_id": "split_rule_id2"
        },
        {
          "type": "type9",
          "amount": 77,
          "recipient_id": "recipient_id9",
          "options": {
            "liable": true,
            "charge_processing_fee": true,
            "charge_remainder_fee": true
          },
          "split_rule_id": "split_rule_id3"
        }
      ],
      "bank_transfer": {
        "bank": "bank8",
        "retries": 60
      },
      "gateway_affiliation_id": "gateway_affiliation_id8",
      "amount": 130,
      "checkout": {
        "accepted_payment_methods": [
          "accepted_payment_methods7",
          "accepted_payment_methods8",
          "accepted_payment_methods9"
        ],
        "accepted_multi_payment_methods": [
          {
            "key1": "val1",
            "key2": "val2"
          },
          {
            "key1": "val1",
            "key2": "val2"
          },
          {
            "key1": "val1",
            "key2": "val2"
          }
        ],
        "success_url": "success_url6",
        "default_payment_method": "default_payment_method4",
        "gateway_affiliation_id": "gateway_affiliation_id0",
        "credit_card": {
          "statement_descriptor": "statement_descriptor2",
          "installments": [
            {
              "number": 241,
              "total": 133
            }
          ],
          "authentication": {
            "type": "type4",
            "threed_secure": {
              "mpi": "mpi0",
              "cavv": "cavv8",
              "eci": "eci2",
              "transaction_id": "transaction_id0",
              "success_url": "success_url4",
              "ds_transaction_id": "ds_transaction_id0",
              "version": "version8"
            }
          },
          "capture": false
        },
        "debit_card": {
          "statement_descriptor": "statement_descriptor8",
          "authentication": {
            "type": "type0",
            "threed_secure": {
              "mpi": "mpi6",
              "cavv": "cavv4",
              "eci": "eci8",
              "transaction_id": "transaction_id6",
              "success_url": "success_url0",
              "ds_transaction_id": "ds_transaction_id6",
              "version": "version4"
            }
          }
        },
        "boleto": {
          "bank": "bank2",
          "instructions": "instructions2",
          "due_at": "2016-03-13T12:52:32.123Z"
        },
        "customer_editable": false,
        "expires_in": 252,
        "skip_checkout_success_page": false,
        "billing_address_editable": false,
        "billing_address": {
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
        "bank_transfer": {
          "bank": [
            "bank9",
            "bank0",
            "bank1"
          ],
          "retries": 190
        },
        "accepted_brands": [
          "accepted_brands0",
          "accepted_brands1",
          "accepted_brands2"
        ],
        "pix": {
          "expires_at": "2016-03-13T12:52:32.123Z",
          "expires_in": 228,
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
      "customer_id": "customer_id0",
      "customer": {
        "name": "name2",
        "email": "email4",
        "document": "document4",
        "type": "type8",
        "address": {
          "street": "street8",
          "number": "number6",
          "zip_code": "zip_code2",
          "neighborhood": "neighborhood4",
          "city": "city8",
          "state": "state4",
          "country": "country2",
          "complement": "complement4",
          "metadata": {
            "key0": "metadata1",
            "key1": "metadata0",
            "key2": "metadata9"
          },
          "line_1": "line_12",
          "line_2": "line_26"
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
            "country_code": "country_code4",
            "number": "number6",
            "area_code": "area_code6"
          }
        },
        "code": "code0",
        "gender": "gender4",
        "document_type": "document_type0"
      },
      "metadata": {
        "key0": "metadata9",
        "key1": "metadata8",
        "key2": "metadata7"
      },
      "cash": {
        "description": "description2",
        "confirm": false
      },
      "private_label": {
        "installments": 166,
        "statement_descriptor": "statement_descriptor2",
        "card": {
          "number": "number4",
          "holder_name": "holder_name2",
          "exp_month": 60,
          "exp_year": 100,
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
        "card_id": "card_id8",
        "card_token": "card_token2",
        "recurrence": false,
        "capture": false,
        "extended_limit_enabled": false,
        "extended_limit_code": "extended_limit_code0",
        "recurrency_cycle": "recurrency_cycle6"
      },
      "pix": {
        "expires_at": "2016-03-13T12:52:32.123Z",
        "expires_in": 182,
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
  },
  "plan_id": "plan_id8",
  "customer_id": "customer_id8",
  "card_id": "card_id4",
  "billing_day": 34,
  "installments": 250,
  "start_at": "2016-03-13T12:52:32.123Z",
  "minimum_price": 176,
  "cycles": 168,
  "card_token": "card_token0",
  "gateway_affiliation_id": "gateway_affiliation_id4",
  "quantity": 68,
  "boleto_due_days": 194,
  "period": {
    "end_at": "2016-03-13T12:52:32.123Z"
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
  },
  "split": {
    "enabled": false,
    "rules": [
      {
        "type": "type4",
        "amount": 246,
        "recipient_id": "recipient_id4",
        "options": {
          "liable": false,
          "charge_processing_fee": false,
          "charge_remainder_fee": false
        },
        "split_rule_id": "split_rule_id8"
      },
      {
        "type": "type3",
        "amount": 245,
        "recipient_id": "recipient_id3",
        "options": {
          "liable": true,
          "charge_processing_fee": true,
          "charge_remainder_fee": true
        },
        "split_rule_id": "split_rule_id9"
      }
    ]
  },
  "boleto": {
    "interest": {
      "days": 160,
      "type": "type0",
      "amount": 234
    },
    "fine": {
      "days": 130,
      "type": "type8",
      "amount": 52
    },
    "max_days_to_pay_past_due": 118
  }
}
```

