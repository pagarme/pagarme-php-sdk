
# Get Checkout Boleto Payment Response

## Structure

`GetCheckoutBoletoPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dueAt` | `\DateTime` | Required | Data de vencimento do boleto | getDueAt(): \DateTime | setDueAt(\DateTime dueAt): void |
| `instructions` | `string` | Required | Instruções do boleto | getInstructions(): string | setInstructions(string instructions): void |

## Example (as JSON)

```json
{
  "due_at": "2016-03-13T12:52:32.123Z",
  "instructions": "instructions2"
}
```

