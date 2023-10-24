
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
| `options` | [`?CreateSplitOptionsRequest`](../../doc/models/create-split-options-request.md) | Optional | The split options request | getOptions(): ?CreateSplitOptionsRequest | setOptions(?CreateSplitOptionsRequest options): void |
| `splitRuleId` | `?string` | Optional | Rule code used in cancellation. | getSplitRuleId(): ?string | setSplitRuleId(?string splitRuleId): void |

## Example (as JSON)

```json
{
  "type": "type6",
  "amount": 100,
  "recipient_id": "recipient_id6",
  "options": {
    "liable": false,
    "charge_processing_fee": false,
    "charge_remainder_fee": false
  },
  "split_rule_id": "split_rule_id8"
}
```

