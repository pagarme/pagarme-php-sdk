
# Update Subscription Payment Method Request

Request for updating a subscription's payment method

## Structure

`UpdateSubscriptionPaymentMethodRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentMethod` | `string` | Required | The new payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `cardId` | `string` | Required | Card id | getCardId(): string | setCardId(string cardId): void |
| `card` | [`CreateCardRequest`](../../doc/models/create-card-request.md) | Required | Card data | getCard(): CreateCardRequest | setCard(CreateCardRequest card): void |
| `cardToken` | `?string` | Optional | The Card Token | getCardToken(): ?string | setCardToken(?string cardToken): void |

## Example (as JSON)

```json
{
  "payment_method": null,
  "card_id": null,
  "card": {
    "number": null,
    "holder_name": null,
    "exp_month": null,
    "exp_year": null,
    "cvv": null,
    "billing_address": null,
    "brand": null,
    "billing_address_id": null,
    "metadata": null,
    "type": "credit",
    "options": null,
    "private_label": null,
    "label": null
  }
}
```

