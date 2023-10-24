
# Get Split Response

Split response

## Structure

`GetSplitResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | Type | getType(): ?string | setType(?string type): void |
| `amount` | `?int` | Optional | Amount | getAmount(): ?int | setAmount(?int amount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `gatewayId` | `?string` | Optional | The split rule gateway id | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `options` | [`?GetSplitOptionsResponse`](../../doc/models/get-split-options-response.md) | Optional | - | getOptions(): ?GetSplitOptionsResponse | setOptions(?GetSplitOptionsResponse options): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |

## Example (as JSON)

```json
{
  "type": "type0",
  "amount": 252,
  "recipient": {
    "id": "id8",
    "name": "name8",
    "email": "email8",
    "document": "document8",
    "description": "description2"
  },
  "gateway_id": "gateway_id0",
  "options": {
    "liable": false,
    "charge_processing_fee": false,
    "charge_remainder_fee": "charge_remainder_fee0"
  }
}
```

