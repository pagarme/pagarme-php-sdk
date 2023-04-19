
# Create Card Payment Contactless Request

The card payment contactless request

## Structure

`CreateCardPaymentContactlessRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | The authentication type | getType(): string | setType(string type): void |
| `applePay` | [`?CreateApplePayRequest`](../../doc/models/create-apple-pay-request.md) | Optional | The ApplePay encrypted request | getApplePay(): ?CreateApplePayRequest | setApplePay(?CreateApplePayRequest applePay): void |
| `googlePay` | [`?CreateGooglePayRequest`](../../doc/models/create-google-pay-request.md) | Optional | The GooglePay encrypted request | getGooglePay(): ?CreateGooglePayRequest | setGooglePay(?CreateGooglePayRequest googlePay): void |
| `emv` | [`?CreateEmvDecryptRequest`](../../doc/models/create-emv-decrypt-request.md) | Optional | The Emv encrypted request | getEmv(): ?CreateEmvDecryptRequest | setEmv(?CreateEmvDecryptRequest emv): void |

## Example (as JSON)

```json
{
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
```

