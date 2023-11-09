
# Update Charge Card Request

Request for updating card data

## Structure

`UpdateChargeCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `updateSubscription` | `bool` | Required | Indicates if the subscriptions using this card must also be updated | getUpdateSubscription(): bool | setUpdateSubscription(bool updateSubscription): void |
| `cardId` | `string` | Required | Card id | getCardId(): string | setCardId(string cardId): void |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Card data | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `recurrence` | `bool` | Required | Indicates a recurrence | getRecurrence(): bool | setRecurrence(bool recurrence): void |

## Example (as JSON)

```json
{
  "update_subscription": false,
  "card_id": "card_id2",
  "card": {
    "type": "credit",
    "number": "number6",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
    "cvv": "cvv4"
  },
  "recurrence": false
}
```

