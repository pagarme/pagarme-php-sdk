
# Create Card Payload Request

## Structure

`CreateCardPayloadRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `googlePay` | [`?CreateGooglePayRequest`](../../doc/models/create-google-pay-request.md) | Optional | - | getGooglePay(): ?CreateGooglePayRequest | setGooglePay(?CreateGooglePayRequest googlePay): void |

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
  }
}
```

