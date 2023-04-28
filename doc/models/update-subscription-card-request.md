
# Update Subscription Card Request

Request for updating the card from a subscription

## Structure

`UpdateSubscriptionCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Credit card data | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `cardId` | `string` | Required | Credit card id | getCardId(): string | setCardId(string cardId): void |

## Example (as JSON)

```json
{
  "card": {
    "type": "credit",
    "number": "number6",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
    "cvv": "cvv4",
    "billing_address": {
      "street": "street8",
      "number": "number4",
      "zip_code": "zip_code2",
      "neighborhood": "neighborhood4",
      "city": "city2",
      "state": "state6",
      "country": "country2",
      "complement": "complement6",
      "metadata": {
        "key0": "metadata5",
        "key1": "metadata6"
      },
      "line_1": "line_18",
      "line_2": "line_26"
    },
    "brand": "brand0",
    "billing_address_id": "billing_address_id2",
    "metadata": {
      "key0": "metadata7"
    },
    "options": {
      "verify_card": false
    },
    "holder_document": "holder_document0",
    "private_label": false,
    "label": "label6",
    "id": "id6",
    "token": "token0"
  },
  "card_id": "card_id4"
}
```

