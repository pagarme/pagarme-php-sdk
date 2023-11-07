
# Create Capture Charge Request

Request for capturing a charge

## Structure

`CreateCaptureChargeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | Code for the charge. Sending this field will update the code send on the charge and order creation. | getCode(): string | setCode(string code): void |
| `amount` | `?int` | Optional | The amount that will be captured | getAmount(): ?int | setAmount(?int amount): void |
| `split` | [`?(CreateSplitRequest[])`](../../doc/models/create-split-request.md) | Optional | Splits | getSplit(): ?array | setSplit(?array split): void |
| `operationReference` | `string` | Required | - | getOperationReference(): string | setOperationReference(string operationReference): void |

## Example (as JSON)

```json
{
  "code": "code8",
  "amount": 96,
  "split": [
    {
      "type": "type2",
      "amount": 10,
      "recipient_id": "recipient_id2",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": false
      },
      "split_rule_id": "split_rule_id0"
    },
    {
      "type": "type2",
      "amount": 10,
      "recipient_id": "recipient_id2",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": false
      },
      "split_rule_id": "split_rule_id0"
    }
  ],
  "operation_reference": "operation_reference0"
}
```

