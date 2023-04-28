
# Create Token Request

Token data

## Structure

`CreateTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | Token type<br>**Default**: `'card'` | getType(): string | setType(string type): void |
| `card` | [`CreateCardTokenRequest`](../../doc/models/create-card-token-request.md) | Required | Card data | getCard(): CreateCardTokenRequest | setCard(CreateCardTokenRequest card): void |

## Example (as JSON)

```json
{
  "type": "card",
  "card": {
    "number": "number6",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
    "cvv": "cvv4",
    "brand": "brand0",
    "label": "label6"
  }
}
```

