
# Update Charge Payment Method Request

Request for updating the payment method of a charge

## Structure

`UpdateChargePaymentMethodRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `updateSubscription` | `bool` | Required | Indicates if the payment method from the subscription must also be updated | getUpdateSubscription(): bool | setUpdateSubscription(bool updateSubscription): void |
| `paymentMethod` | `string` | Required | The new payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `creditCard` | [`CreateCreditCardPaymentRequest`](../../doc/models/create-credit-card-payment-request.md) | Required | Credit card data | getCreditCard(): CreateCreditCardPaymentRequest | setCreditCard(CreateCreditCardPaymentRequest creditCard): void |
| `debitCard` | [`CreateDebitCardPaymentRequest`](../../doc/models/create-debit-card-payment-request.md) | Required | Debit card data | getDebitCard(): CreateDebitCardPaymentRequest | setDebitCard(CreateDebitCardPaymentRequest debitCard): void |
| `boleto` | [`CreateBoletoPaymentRequest`](../../doc/models/create-boleto-payment-request.md) | Required | Boleto data | getBoleto(): CreateBoletoPaymentRequest | setBoleto(CreateBoletoPaymentRequest boleto): void |
| `voucher` | [`CreateVoucherPaymentRequest`](../../doc/models/create-voucher-payment-request.md) | Required | Voucher data | getVoucher(): CreateVoucherPaymentRequest | setVoucher(CreateVoucherPaymentRequest voucher): void |
| `cash` | [`CreateCashPaymentRequest`](../../doc/models/create-cash-payment-request.md) | Required | Cash data | getCash(): CreateCashPaymentRequest | setCash(CreateCashPaymentRequest cash): void |
| `bankTransfer` | [`CreateBankTransferPaymentRequest`](../../doc/models/create-bank-transfer-payment-request.md) | Required | Bank Transfer data | getBankTransfer(): CreateBankTransferPaymentRequest | setBankTransfer(CreateBankTransferPaymentRequest bankTransfer): void |
| `privateLabel` | [`CreatePrivateLabelPaymentRequest`](../../doc/models/create-private-label-payment-request.md) | Required | - | getPrivateLabel(): CreatePrivateLabelPaymentRequest | setPrivateLabel(CreatePrivateLabelPaymentRequest privateLabel): void |

## Example (as JSON)

```json
{
  "update_subscription": false,
  "payment_method": "payment_method0",
  "credit_card": {
    "installments": 1,
    "capture": true,
    "recurrency_cycle": "\"first\" or \"subsequent\"",
    "statement_descriptor": "statement_descriptor8",
    "card": {
      "number": "number0",
      "holder_name": "holder_name8",
      "exp_month": 54,
      "exp_year": 242,
      "cvv": "cvv0",
      "billing_address": {
        "street": "street6",
        "number": "number6",
        "zip_code": "zip_code0",
        "neighborhood": "neighborhood2",
        "city": "city4",
        "state": "state8",
        "country": "country0",
        "complement": "complement8",
        "metadata": {
          "key0": "metadata7"
        },
        "line_1": "line_10",
        "line_2": "line_24"
      },
      "brand": "brand6",
      "billing_address_id": "billing_address_id8",
      "metadata": {
        "key0": "metadata1"
      },
      "type": "type8",
      "options": {
        "verify_card": false
      },
      "holder_document": "holder_document4",
      "private_label": false,
      "label": "label2",
      "id": "id2",
      "token": "token4"
    },
    "card_id": "card_id4",
    "card_token": "card_token2",
    "recurrence": false,
    "extended_limit_enabled": false,
    "extended_limit_code": "extended_limit_code6",
    "merchant_category_code": 152,
    "authentication": {
      "type": "type0",
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
    "contactless": {
      "type": "type8",
      "apple_pay": {
        "version": "version4",
        "data": "data8",
        "header": {
          "public_key_hash": "public_key_hash6",
          "ephemeral_public_key": "ephemeral_public_key8",
          "transaction_id": "transaction_id6"
        },
        "signature": "signature6",
        "merchant_identifier": "merchant_identifier2"
      },
      "google_pay": {
        "version": "version6",
        "data": "data0",
        "header": {
          "ephemeral_public_key": "ephemeral_public_key6"
        },
        "signature": "signature8",
        "merchant_identifier": "merchant_identifier4"
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
            }
          ]
        },
        "poi": {
          "system_name": "system_name0",
          "model": "model8",
          "provider": "provider8",
          "serial_number": "serial_number6",
          "version_number": "version_number0"
        }
      }
    },
    "auto_recovery": false,
    "operation_type": "operation_type2"
  },
  "debit_card": {
    "statement_descriptor": "statement_descriptor4",
    "card": {
      "number": "number0",
      "holder_name": "holder_name8",
      "exp_month": 104,
      "exp_year": 192,
      "cvv": "cvv0",
      "billing_address": {
        "street": "street6",
        "number": "number6",
        "zip_code": "zip_code0",
        "neighborhood": "neighborhood2",
        "city": "city4",
        "state": "state8",
        "country": "country0",
        "complement": "complement8",
        "metadata": {
          "key0": "metadata7",
          "key1": "metadata8"
        },
        "line_1": "line_10",
        "line_2": "line_24"
      },
      "brand": "brand6",
      "billing_address_id": "billing_address_id8",
      "metadata": {
        "key0": "metadata1",
        "key1": "metadata2",
        "key2": "metadata3"
      },
      "type": "type8",
      "options": {
        "verify_card": false
      },
      "holder_document": "holder_document4",
      "private_label": false,
      "label": "label2",
      "id": "id2",
      "token": "token4"
    },
    "card_id": "card_id0",
    "card_token": "card_token6",
    "recurrence": false,
    "authentication": {
      "type": "type6",
      "threed_secure": {
        "mpi": "mpi0",
        "cavv": "cavv2",
        "eci": "eci2",
        "transaction_id": "transaction_id0",
        "success_url": "success_url4",
        "ds_transaction_id": "ds_transaction_id0",
        "version": "version2"
      }
    },
    "token": {
      "type": "type8",
      "apple_pay": {
        "version": "version4",
        "data": "data8",
        "header": {
          "public_key_hash": "public_key_hash6",
          "ephemeral_public_key": "ephemeral_public_key8",
          "transaction_id": "transaction_id6"
        },
        "signature": "signature6",
        "merchant_identifier": "merchant_identifier2"
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
        "card_sequence_number": "card_sequence_number2",
        "data": {
          "cipher": "cipher6",
          "dukpt": {
            "ksn": "ksn2"
          },
          "tags": [
            {
              "tag": "tag1",
              "lenght": "lenght9",
              "value": "value9"
            },
            {
              "tag": "tag2",
              "lenght": "lenght0",
              "value": "value0"
            }
          ]
        },
        "poi": {
          "system_name": "system_name2",
          "model": "model0",
          "provider": "provider6",
          "serial_number": "serial_number4",
          "version_number": "version_number8"
        }
      }
    }
  },
  "boleto": {
    "retries": 226,
    "bank": "bank8",
    "instructions": "instructions2",
    "due_at": "2016-03-13T12:52:32.123Z",
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
        "key0": "metadata5"
      },
      "line_1": "line_18",
      "line_2": "line_26"
    },
    "billing_address_id": "billing_address_id6",
    "nosso_numero": "nosso_numero0",
    "document_number": "document_number6",
    "statement_descriptor": "statement_descriptor0",
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
  },
  "voucher": {
    "recurrency_cycle": "\"first\" or \"subsequent\"",
    "statement_descriptor": "statement_descriptor2",
    "card_id": "card_id8",
    "card_token": "card_token8",
    "Card": {
      "number": "number0",
      "holder_name": "holder_name8",
      "exp_month": 198,
      "exp_year": 238,
      "cvv": "cvv0",
      "billing_address": {
        "street": "street4",
        "number": "number2",
        "zip_code": "zip_code8",
        "neighborhood": "neighborhood0",
        "city": "city4",
        "state": "state0",
        "country": "country8",
        "complement": "complement0",
        "metadata": {
          "key0": "metadata5",
          "key1": "metadata4",
          "key2": "metadata3"
        },
        "line_1": "line_18",
        "line_2": "line_22"
      },
      "brand": "brand6",
      "billing_address_id": "billing_address_id8",
      "metadata": {
        "key0": "metadata7"
      },
      "type": "type2",
      "options": {
        "verify_card": false
      },
      "holder_document": "holder_document6",
      "private_label": false,
      "label": "label2",
      "id": "id2",
      "token": "token6"
    }
  },
  "cash": {
    "description": "description0",
    "confirm": false
  },
  "bank_transfer": {
    "bank": "bank0",
    "retries": 236
  },
  "private_label": {
    "installments": 1,
    "capture": true,
    "recurrency_cycle": "\"first\" or \"subsequent\"",
    "statement_descriptor": "statement_descriptor0",
    "card": {
      "number": "number2",
      "holder_name": "holder_name0",
      "exp_month": 116,
      "exp_year": 180,
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
          "key1": "metadata8",
          "key2": "metadata9"
        },
        "line_1": "line_10",
        "line_2": "line_24"
      },
      "brand": "brand8",
      "billing_address_id": "billing_address_id0",
      "metadata": {
        "key0": "metadata1",
        "key1": "metadata0"
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
    "extended_limit_enabled": false,
    "extended_limit_code": "extended_limit_code8"
  }
}
```

