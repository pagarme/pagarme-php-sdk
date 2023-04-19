
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
  "update_subscription": null,
  "card_id": null,
  "card": {
    "type": "credit"
  },
  "recurrence": null
}
```

