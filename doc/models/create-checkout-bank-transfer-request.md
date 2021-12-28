
# Create Checkout Bank Transfer Request

Checkout bank transfer payment request

## Structure

`CreateCheckoutBankTransferRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bank` | `string[]` | Required | Bank | getBank(): array | setBank(array bank): void |
| `retries` | `int` | Required | Number of retries for processing | getRetries(): int | setRetries(int retries): void |

## Example (as JSON)

```json
{
  "bank": [
    "bank7"
  ],
  "retries": 230
}
```

