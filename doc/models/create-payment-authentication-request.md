
# Create Payment Authentication Request

The payment authentication request

## Structure

`CreatePaymentAuthenticationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | The Authentication type | getType(): string | setType(string type): void |
| `threedSecure` | [`CreateThreeDSecureRequest`](../../doc/models/create-three-d-secure-request.md) | Required | The 3D-S authentication object | getThreedSecure(): CreateThreeDSecureRequest | setThreedSecure(CreateThreeDSecureRequest threedSecure): void |

## Example (as JSON)

```json
{
  "type": "type8",
  "threed_secure": {
    "mpi": "mpi0",
    "cavv": "cavv8",
    "eci": "eci2",
    "transaction_id": "transaction_id0",
    "success_url": "success_url4",
    "ds_transaction_id": "ds_transaction_id0"
  }
}
```

