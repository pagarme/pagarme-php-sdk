
# Create Split Request

Split

## Structure

`CreateSplitRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | Split type | getType(): string | setType(string type): void |
| `amount` | `int` | Required | Amount | getAmount(): int | setAmount(int amount): void |
| `recipientId` | `string` | Required | Recipient id | getRecipientId(): string | setRecipientId(string recipientId): void |
| `options` | [`?CreateSplitOptionsRequest`](/doc/models/create-split-options-request.md) | Optional | The split options request | getOptions(): ?CreateSplitOptionsRequest | setOptions(?CreateSplitOptionsRequest options): void |

## Example (as JSON)

```json
{
  "type": "type0",
  "amount": 46,
  "recipient_id": "recipient_id0",
  "options": null
}
```

