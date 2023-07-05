
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
| `bankAccount` | [`?CreateBankAccountRefundingDTO`](../../doc/models/create-bank-account-refunding-dto.md) | Optional | - | getBankAccount(): ?CreateBankAccountRefundingDTO | setBankAccount(?CreateBankAccountRefundingDTO bankAccount): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "split_rules": [
    {
      "id": "id6",
      "Amount": 172,
      "type": "type4"
    },
    {
      "id": "id7",
      "Amount": 173,
      "type": "type3"
    },
    {
      "id": "id8",
      "Amount": 174,
      "type": "type2"
    }
  ],
  "split": [
    {
      "type": "type6",
      "amount": 28,
      "recipient_id": "recipient_id6",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": false
      },
      "split_rule_id": "split_rule_id6"
    },
    {
      "type": "type5",
      "amount": 27,
      "recipient_id": "recipient_id5",
      "options": {
        "liable": true,
        "charge_processing_fee": true,
        "charge_remainder_fee": true
      },
      "split_rule_id": "split_rule_id7"
    },
    {
      "type": "type4",
      "amount": 26,
      "recipient_id": "recipient_id4",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": false
      },
      "split_rule_id": "split_rule_id8"
    }
  ],
  "operation_reference": "operation_reference0",
  "bank_account": {
    "holder_name": "holder_name0",
    "holder_type": "holder_type6",
    "holder_document": "holder_document8",
    "bank": "bank2",
    "branch_number": "branch_number0",
    "branch_check_digit": "branch_check_digit0",
    "account_number": "account_number4",
    "account_check_digit": "account_check_digit0",
    "type": "type6"
  }
}
```

