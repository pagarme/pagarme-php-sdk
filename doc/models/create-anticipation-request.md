
# Create Anticipation Request

Request for creating an anticipation

## Structure

`CreateAnticipationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Amount requested for the anticipation | getAmount(): int | setAmount(int amount): void |
| `timeframe` | `string` | Required | Timeframe | getTimeframe(): string | setTimeframe(string timeframe): void |
| `paymentDate` | `\DateTime` | Required | Payment date | getPaymentDate(): \DateTime | setPaymentDate(\DateTime paymentDate): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "timeframe": "timeframe2",
  "payment_date": "2016-03-13T12:52:32.123Z"
}
```

