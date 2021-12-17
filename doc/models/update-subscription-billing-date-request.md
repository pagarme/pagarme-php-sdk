
# Update Subscription Billing Date Request

Request for updating the due date from a subscription

## Structure

`UpdateSubscriptionBillingDateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nextBillingAt` | `\DateTime` | Required | The date when the next subscription billing must occur | getNextBillingAt(): \DateTime | setNextBillingAt(\DateTime nextBillingAt): void |

## Example (as JSON)

```json
{
  "next_billing_at": "2016-03-13T12:52:32.123Z"
}
```

