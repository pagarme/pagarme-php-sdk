
# Create Google Pay Request

The GooglePay Token Payment Request

## Structure

`CreateGooglePayRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `version` | `?string` | Optional | Informação sobre a versão do token. Único valor aceito é EC_v2 | getVersion(): ?string | setVersion(?string version): void |
| `data` | `?string` | Optional | Dados de pagamento criptografados. Corresponde ao encryptedMessage do token Google. | getData(): ?string | setData(?string data): void |
| `intermediateSigningKey` | [`?CreateGooglePayIntermediateSigningKeyRequest`](../../doc/models/create-google-pay-intermediate-signing-key-request.md) | Optional | The GooglePay intermediate signing key request | getIntermediateSigningKey(): ?CreateGooglePayIntermediateSigningKeyRequest | setIntermediateSigningKey(?CreateGooglePayIntermediateSigningKeyRequest intermediateSigningKey): void |
| `signature` | `?string` | Optional | Assinatura dos dados de pagamento. Verifica se a origem da mensagem é o Google. Corresponde ao signature do token Google. | getSignature(): ?string | setSignature(?string signature): void |
| `signedMessage` | `?string` | Optional | - | getSignedMessage(): ?string | setSignedMessage(?string signedMessage): void |
| `merchantIdentifier` | `?string` | Optional | - | getMerchantIdentifier(): ?string | setMerchantIdentifier(?string merchantIdentifier): void |

## Example (as JSON)

```json
{
  "version": "version6",
  "data": "data0",
  "intermediate_signing_key": {
    "signed_key": "signed_key0",
    "signatures": [
      "signatures2",
      "signatures3",
      "signatures4"
    ]
  },
  "signature": "signature8",
  "signed_message": "signed_message6"
}
```

