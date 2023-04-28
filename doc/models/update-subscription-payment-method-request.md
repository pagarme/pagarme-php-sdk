
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
| `boleto` | [`?CreateSubscriptionBoletoRequest`](../../doc/models/create-subscription-boleto-request.md) | Optional | Information about fines and interest on the "boleto" used from payment | getBoleto(): ?CreateSubscriptionBoletoRequest | setBoleto(?CreateSubscriptionBoletoRequest boleto): void |

## Example (as JSON)

```json
{
  "payment_method": "payment_method0",
  "card_id": "card_id4",
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
  "card_token": "card_token0",
  "boleto": {
    "interest": {
      "days": 160,
      "type": "type0",
      "amount": 234
    },
    "fine": {
      "days": 130,
      "type": "type8",
      "amount": 52
    },
    "max_days_to_pay_past_due": 118
  }
}
```

