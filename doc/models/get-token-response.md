
# Get Token Response

Token data

## Structure

`GetTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `expiresAt` | `?string` | Optional | - | getExpiresAt(): ?string | setExpiresAt(?string expiresAt): void |
| `card` | [`?GetCardTokenResponse`](../../doc/models/get-card-token-response.md) | Optional | - | getCard(): ?GetCardTokenResponse | setCard(?GetCardTokenResponse card): void |

## Example (as JSON)

```json
{
  "id": null,
  "type": null,
  "created_at": null,
  "expires_at": null,
  "card": null
}
```

