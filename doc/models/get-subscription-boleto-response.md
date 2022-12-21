
# Get Subscription Boleto Response

Response object for getting a boleto

## Structure

`GetSubscriptionBoletoResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `interest` | [`?GetInterestResponse`](../../doc/models/get-interest-response.md) | Optional | Interest | getInterest(): ?GetInterestResponse | setInterest(?GetInterestResponse interest): void |
| `fine` | [`?GetFineResponse`](../../doc/models/get-fine-response.md) | Optional | Fine | getFine(): ?GetFineResponse | setFine(?GetFineResponse fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example (as JSON)

```json
{
  "interest": {
    "days": 2,
    "type": "percentage",
    "amount": 20
  },
  "fine": {
    "days": 2,
    "type": "flat",
    "amount": 10
  },
  "max_days_to_pay_past_due": 2
}
```

