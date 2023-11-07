
# Get Payment Authentication Response

Payment Authentication response

## Structure

`GetPaymentAuthenticationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `threedSecure` | [`?GetThreeDSecureResponse`](../../doc/models/get-three-d-secure-response.md) | Optional | 3D-S payment authentication response | getThreedSecure(): ?GetThreeDSecureResponse | setThreedSecure(?GetThreeDSecureResponse threedSecure): void |

## Example (as JSON)

```json
{
  "type": "type2",
  "threed_secure": {
    "mpi": "mpi0",
    "eci": "eci2",
    "cavv": "cavv8",
    "transaction_Id": "transaction_Id2",
    "success_url": "success_url4"
  }
}
```

