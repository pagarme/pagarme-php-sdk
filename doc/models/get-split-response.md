
# Get Split Response

Split response

## Structure

`GetSplitResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | Type | getType(): string | setType(string type): void |
| `amount` | `int` | Required | Amount | getAmount(): int | setAmount(int amount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `gatewayId` | `string` | Required | The split rule gateway id | getGatewayId(): string | setGatewayId(string gatewayId): void |
| `options` | [`?GetSplitOptionsResponse`](../../doc/models/get-split-options-response.md) | Optional | - | getOptions(): ?GetSplitOptionsResponse | setOptions(?GetSplitOptionsResponse options): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |

## Example (as JSON)

```json
{
  "type": "type0",
  "amount": 46,
  "recipient": null,
  "gateway_id": "gateway_id0",
  "options": null,
  "id": "id0"
}
```

