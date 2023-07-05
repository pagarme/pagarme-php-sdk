
# Get Movement Object Base Response

Generic response object for getting a MovementObjectBase.

## Structure

`GetMovementObjectBaseResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `object` | `?string` | Optional | - | getObject(): ?string | setObject(?string object): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `amount` | `?string` | Optional | - | getAmount(): ?string | setAmount(?string amount): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `chargeId` | `?string` | Optional | - | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `gatewayId` | `?string` | Optional | - | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |

## Example (as JSON)

```json
{
  "object": "MovementObject",
  "id": "id0",
  "status": "status8",
  "amount": "amount8",
  "created_at": "created_at2"
}
```

