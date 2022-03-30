
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
  "apple_pay": null,
  "google_pay": null,
  "emv": null
}
```

