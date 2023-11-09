
# Get Three D Secure Response

3D-S payment authentication response

## Structure

`GetThreeDSecureResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mpi` | `?string` | Optional | MPI Vendor | getMpi(): ?string | setMpi(?string mpi): void |
| `eci` | `?string` | Optional | Electronic Commerce Indicator (ECI) (Opcional) | getEci(): ?string | setEci(?string eci): void |
| `cavv` | `?string` | Optional | Online payment cryptogram, definido pelo 3-D Secure. | getCavv(): ?string | setCavv(?string cavv): void |
| `transactionId` | `?string` | Optional | Identificador da transação (XID) | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `successUrl` | `?string` | Optional | Url de redirecionamento de sucessso | getSuccessUrl(): ?string | setSuccessUrl(?string successUrl): void |

## Example (as JSON)

```json
{
  "mpi": "mpi2",
  "eci": "eci4",
  "cavv": "cavv0",
  "transaction_Id": "transaction_Id0",
  "success_url": "success_url6"
}
```

