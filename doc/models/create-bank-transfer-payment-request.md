
# Create Bank Transfer Payment Request

Request for creating a bank transfer payment

## Structure

`CreateBankTransferPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bank` | `string` | Required | Bank | getBank(): string | setBank(string bank): void |
| `retries` | `int` | Required | Number of retries | getRetries(): int | setRetries(int retries): void |

## Example (as JSON)

```json
{
  "bank": "bank8",
  "retries": 230
}
```

