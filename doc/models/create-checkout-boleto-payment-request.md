
# Create Checkout Boleto Payment Request

## Structure

`CreateCheckoutBoletoPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bank` | `string` | Required | Bank identifier | getBank(): string | setBank(string bank): void |
| `instructions` | `string` | Required | Instructions | getInstructions(): string | setInstructions(string instructions): void |
| `dueAt` | `\DateTime` | Required | Due date | getDueAt(): \DateTime | setDueAt(\DateTime dueAt): void |

## Example (as JSON)

```json
{
  "bank": "bank8",
  "instructions": "instructions2",
  "due_at": "2016-03-13T12:52:32.123Z"
}
```

