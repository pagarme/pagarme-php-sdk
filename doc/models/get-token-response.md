
# Get Token Response

Token data

## Structure

`GetTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `expiresAt` | `?string` | Optional | - | getExpiresAt(): ?string | setExpiresAt(?string expiresAt): void |
| `card` | [`?GetCardTokenResponse`](../../doc/models/get-card-token-response.md) | Optional | - | getCard(): ?GetCardTokenResponse | setCard(?GetCardTokenResponse card): void |

## Example (as JSON)

```json
{
  "id": "id8",
  "type": "type2",
  "created_at": "2016-03-13T12:52:32.123Z",
  "expires_at": "expires_at2",
  "card": {
    "last_four_digits": "last_four_digits2",
    "holder_name": "holder_name2",
    "holder_document": "holder_document0",
    "exp_month": 228,
    "exp_year": 68
  }
}
```

