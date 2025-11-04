
# Create Card Payload Request

## Structure

`CreateCardPayloadRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `googlePay` | [`?CreateGooglePayRequest`](../../doc/models/create-google-pay-request.md) | Optional | - | getGooglePay(): ?CreateGooglePayRequest | setGooglePay(?CreateGooglePayRequest googlePay): void |
| `applePay` | [`?CreateApplePayRequest`](../../doc/models/create-apple-pay-request.md) | Optional | - | getApplePay(): ?CreateApplePayRequest | setApplePay(?CreateApplePayRequest applePay): void |

## Example (as JSON)

```json
{
  "type": "type6",
  "google_pay": {
    "version": "version4",
    "data": "data8",
    "intermediate_signing_key": {
      "signed_key": "signed_key0",
      "signatures": [
        "signatures2",
        "signatures3",
        "signatures4"
      ]
    },
    "signature": "signature6",
    "signed_message": "signed_message4"
  },
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
}
```

