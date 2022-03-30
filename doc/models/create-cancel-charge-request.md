
# Create Cancel Charge Request

Request for canceling a charge.

## Structure

`CreateCancelChargeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | The amount that will be canceled. | getAmount(): ?int | setAmount(?int amount): void |
| `splitRules` | [`?(CreateCancelChargeSplitRulesRequest[])`](../../doc/models/create-cancel-charge-split-rules-request.md) | Optional | The split rules request | getSplitRules(): ?array | setSplitRules(?array splitRules): void |
| `split` | [`?(CreateSplitRequest[])`](../../doc/models/create-split-request.md) | Optional | Splits | getSplit(): ?array | setSplit(?array split): void |
| `operationReference` | `string` | Required | - | getOperationReference(): string | setOperationReference(string operationReference): void |

## Example (as JSON)

```json
{
  "amount": null,
  "split_rules": null,
  "split": null,
  "operation_reference": "operation_reference0"
}
```

