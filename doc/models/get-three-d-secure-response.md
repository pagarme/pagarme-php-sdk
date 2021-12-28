
# Get Three D Secure Response

3D-S payment authentication response

## Structure

`GetThreeDSecureResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mpi` | `string` | Required | MPI Vendor | getMpi(): string | setMpi(string mpi): void |
| `eci` | `string` | Required | Electronic Commerce Indicator (ECI) (Opcional) | getEci(): string | setEci(string eci): void |
| `cavv` | `string` | Required | Online payment cryptogram, definido pelo 3-D Secure. | getCavv(): string | setCavv(string cavv): void |
| `transactionId` | `string` | Required | Identificador da transação (XID) | getTransactionId(): string | setTransactionId(string transactionId): void |
| `successUrl` | `string` | Required | Url de redirecionamento de sucessso | getSuccessUrl(): string | setSuccessUrl(string successUrl): void |

## Example (as JSON)

```json
{
  "mpi": "mpi2",
  "eci": "eci0",
  "cavv": "cavv4",
  "transaction_Id": "transaction_Id4",
  "success_url": "success_url2"
}
```

