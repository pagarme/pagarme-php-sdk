
# Get Balance Operation Response

Generic response object for getting a BalanceOperation.

## Structure

`GetBalanceOperationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `balanceAmount` | `?string` | Optional | - | getBalanceAmount(): ?string | setBalanceAmount(?string balanceAmount): void |
| `balanceOldAmount` | `?string` | Optional | - | getBalanceOldAmount(): ?string | setBalanceOldAmount(?string balanceOldAmount): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `fee` | `?string` | Optional | - | getFee(): ?string | setFee(?string fee): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `movementObject` | [`?GetMovementObjectBaseResponse`](../../doc/models/get-movement-object-base-response.md) | Optional | - | getMovementObject(): ?GetMovementObjectBaseResponse | setMovementObject(?GetMovementObjectBaseResponse movementObject): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "status": "status2",
  "balance_amount": "balance_amount0",
  "balance_old_amount": "balance_old_amount8",
  "type": "type0"
}
```

