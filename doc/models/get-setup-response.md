
# Get Setup Response

Response object for getting the setup from a subscription

## Structure

`GetSetupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "description": "description0",
  "amount": 46,
  "status": "status8"
}
```

