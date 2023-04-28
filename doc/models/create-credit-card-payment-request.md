
# Create Credit Card Payment Request

The settings for creating a credit card payment

## Structure

`CreateCreditCardPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installments` | `?int` | Optional | Number of installments<br>**Default**: `1` | getInstallments(): ?int | setInstallments(?int installments): void |
| `statementDescriptor` | `?string` | Optional | The text that will be shown on the credit card's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `card` | [`?CreateCardRequest`](../../doc/models/create-card-request.md) | Optional | Credit card data | getCard(): ?CreateCardRequest | setCard(?CreateCardRequest card): void |
| `cardId` | `?string` | Optional | The credit card id | getCardId(): ?string | setCardId(?string cardId): void |
| `cardToken` | `?string` | Optional | - | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `recurrence` | `?bool` | Optional | Indicates a recurrence | getRecurrence(): ?bool | setRecurrence(?bool recurrence): void |
| `capture` | `?bool` | Optional | Indicates if the operation should be only authorization or auth and capture.<br>**Default**: `true` | getCapture(): ?bool | setCapture(?bool capture): void |
| `extendedLimitEnabled` | `?bool` | Optional | Indicates whether the extended label (private label) is enabled | getExtendedLimitEnabled(): ?bool | setExtendedLimitEnabled(?bool extendedLimitEnabled): void |
| `extendedLimitCode` | `?string` | Optional | Extended Limit Code | getExtendedLimitCode(): ?string | setExtendedLimitCode(?string extendedLimitCode): void |
| `merchantCategoryCode` | `?int` | Optional | Customer business segment code | getMerchantCategoryCode(): ?int | setMerchantCategoryCode(?int merchantCategoryCode): void |
| `authentication` | [`?CreatePaymentAuthenticationRequest`](../../doc/models/create-payment-authentication-request.md) | Optional | The payment authentication request | getAuthentication(): ?CreatePaymentAuthenticationRequest | setAuthentication(?CreatePaymentAuthenticationRequest authentication): void |
| `contactless` | [`?CreateCardPaymentContactlessRequest`](../../doc/models/create-card-payment-contactless-request.md) | Optional | The Credit card payment contactless request | getContactless(): ?CreateCardPaymentContactlessRequest | setContactless(?CreateCardPaymentContactlessRequest contactless): void |
| `autoRecovery` | `?bool` | Optional | Indicates whether a particular payment will enter the offline retry flow | getAutoRecovery(): ?bool | setAutoRecovery(?bool autoRecovery): void |
| `operationType` | `?string` | Optional | AuthOnly, AuthAndCapture, PreAuth | getOperationType(): ?string | setOperationType(?string operationType): void |
| `recurrencyCycle` | `?string` | Optional | Defines whether the card has been used one or more times. | getRecurrencyCycle(): ?string | setRecurrencyCycle(?string recurrencyCycle): void |

## Example (as JSON)

```json
{
  "installments": 1,
  "capture": true,
  "recurrency_cycle": "\"first\" or \"subsequent\"",
  "statement_descriptor": "statement_descriptor0",
  "card": {
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
    "type": "type4",
    "options": {
      "verify_card": false
    },
    "holder_document": "holder_document0",
    "private_label": false,
    "label": "label6",
    "id": "id6",
    "token": "token0"
  },
  "card_id": "card_id4",
  "card_token": "card_token0",
  "recurrence": false,
  "extended_limit_enabled": false,
  "extended_limit_code": "extended_limit_code8",
  "merchant_category_code": 162,
  "authentication": {
    "type": "type2",
    "threed_secure": {
      "mpi": "mpi6",
      "cavv": "cavv2",
      "eci": "eci6",
      "transaction_id": "transaction_id4",
      "success_url": "success_url8",
      "ds_transaction_id": "ds_transaction_id4",
      "version": "version2"
    }
  },
  "contactless": {
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
        "ephemeral_public_key": "ephemeral_public_key8"
      },
      "signature": "signature6",
      "merchant_identifier": "merchant_identifier2"
    },
    "emv": {
      "icc_data": "icc_data2",
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
        "model": "model2",
        "provider": "provider8",
        "serial_number": "serial_number6",
        "version_number": "version_number0"
      }
    }
  },
  "auto_recovery": false,
  "operation_type": "operation_type6"
}
```

