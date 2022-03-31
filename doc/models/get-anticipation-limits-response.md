
# Get Anticipation Limits Response

Anticipation limits

## Structure

`GetAnticipationLimitsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `max` | [`GetAnticipationLimitResponse`](../../doc/models/get-anticipation-limit-response.md) | Required | Max limit | getMax(): GetAnticipationLimitResponse | setMax(GetAnticipationLimitResponse max): void |
| `min` | [`GetAnticipationLimitResponse`](../../doc/models/get-anticipation-limit-response.md) | Required | Min limit | getMin(): GetAnticipationLimitResponse | setMin(GetAnticipationLimitResponse min): void |

## Example (as JSON)

```json
{
  "max": {
    "amount": 140,
    "anticipation_fee": 234
  },
  "min": {
    "amount": 34,
    "anticipation_fee": 60
  }
}
```

