
# Create Three D Secure Request

Creates a 3D-S authentication payment

## Structure

`CreateThreeDSecureRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mpi` | `string` | Required | The MPI Vendor (MerchantPlugin) | getMpi(): string | setMpi(string mpi): void |
| `cavv` | `?string` | Optional | The Cardholder Authentication Verification value | getCavv(): ?string | setCavv(?string cavv): void |
| `eci` | `?string` | Optional | The Electronic Commerce Indicator value | getEci(): ?string | setEci(?string eci): void |
| `transactionId` | `?string` | Optional | The TransactionId value (XID) | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `successUrl` | `?string` | Optional | The success URL after the authentication | getSuccessUrl(): ?string | setSuccessUrl(?string successUrl): void |
| `dsTransactionId` | `?string` | Optional | Directory Service Transaction Identifier | getDsTransactionId(): ?string | setDsTransactionId(?string dsTransactionId): void |
| `version` | `?string` | Optional | ThreeDSecure Version | getVersion(): ?string | setVersion(?string version): void |

## Example (as JSON)

```json
{
  "mpi": "mpi2",
  "cavv": null,
  "eci": null,
  "transaction_id": null,
  "success_url": null,
  "ds_transaction_id": null,
  "version": null
}
```

