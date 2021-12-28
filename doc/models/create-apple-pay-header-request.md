
# Create Apple Pay Header Request

The ApplePay header request

## Structure

`CreateApplePayHeaderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `publicKeyHash` | `?string` | Optional | SHA–256 hash, Base64 string codified | getPublicKeyHash(): ?string | setPublicKeyHash(?string publicKeyHash): void |
| `ephemeralPublicKey` | `string` | Required | X.509 encoded key bytes, Base64 encoded as a string | getEphemeralPublicKey(): string | setEphemeralPublicKey(string ephemeralPublicKey): void |
| `transactionId` | `?string` | Optional | Transaction identifier, generated on Device | getTransactionId(): ?string | setTransactionId(?string transactionId): void |

## Example (as JSON)

```json
{
  "public_key_hash": null,
  "ephemeral_public_key": "ephemeral_public_key0",
  "transaction_id": null
}
```

