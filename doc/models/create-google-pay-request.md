
# Create Google Pay Request

The GooglePay Token Payment Request

## Structure

`CreateGooglePayRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `version` | `string` | Required | The token version | getVersion(): string | setVersion(string version): void |
| `data` | `string` | Required | The cryptography data | getData(): string | setData(string data): void |
| `header` | [`CreateGooglePayHeaderRequest`](../../doc/models/create-google-pay-header-request.md) | Required | The GooglePay header request | getHeader(): CreateGooglePayHeaderRequest | setHeader(CreateGooglePayHeaderRequest header): void |
| `signature` | `string` | Required | Detached PKCS #7 signature, Base64 encoded as string | getSignature(): string | setSignature(string signature): void |
| `merchantIdentifier` | `string` | Required | GooglePay Merchant identifier | getMerchantIdentifier(): string | setMerchantIdentifier(string merchantIdentifier): void |

## Example (as JSON)

```json
{
  "version": "version4",
  "data": "data0",
  "header": {
    "ephemeral_public_key": "ephemeral_public_key6"
  },
  "signature": "signature8",
  "merchant_identifier": "merchant_identifier4"
}
```

