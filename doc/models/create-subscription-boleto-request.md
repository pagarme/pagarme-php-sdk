
# Create Subscription Boleto Request

Information about fines and interest on the "boleto" used from payment

## Structure

`CreateSubscriptionBoletoRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `interest` | [`?CreateInterestRequest`](../../doc/models/create-interest-request.md) | Optional | - | getInterest(): ?CreateInterestRequest | setInterest(?CreateInterestRequest interest): void |
| `fine` | [`?CreateFineRequest`](../../doc/models/create-fine-request.md) | Optional | - | getFine(): ?CreateFineRequest | setFine(?CreateFineRequest fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example (as JSON)

```json
{
  "interest": {
    "days": 156,
    "type": "type0",
    "amount": 230
  },
  "fine": {
    "days": 138,
    "type": "type2",
    "amount": 212
  },
  "max_days_to_pay_past_due": 22
}
```

