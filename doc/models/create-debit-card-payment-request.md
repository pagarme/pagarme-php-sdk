
# Create Debit Card Payment Request

The settings for creating a debit card payment

## Structure

`CreateDebitCardPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | The text that will be shown on the debit card's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `card` | [`?CreateCardRequest`](../../doc/models/create-card-request.md) | Optional | Debit card data | getCard(): ?CreateCardRequest | setCard(?CreateCardRequest card): void |
| `cardId` | `?string` | Optional | The debit card id | getCardId(): ?string | setCardId(?string cardId): void |
| `cardToken` | `?string` | Optional | The debit card token | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `recurrence` | `?bool` | Optional | Indicates a recurrence | getRecurrence(): ?bool | setRecurrence(?bool recurrence): void |
| `authentication` | [`?CreatePaymentAuthenticationRequest`](../../doc/models/create-payment-authentication-request.md) | Optional | The payment authentication request | getAuthentication(): ?CreatePaymentAuthenticationRequest | setAuthentication(?CreatePaymentAuthenticationRequest authentication): void |
| `token` | [`?CreateCardPaymentContactlessRequest`](../../doc/models/create-card-payment-contactless-request.md) | Optional | The Debit card payment token request | getToken(): ?CreateCardPaymentContactlessRequest | setToken(?CreateCardPaymentContactlessRequest token): void |
| `initiatedType` | `?string` | Optional | - | getInitiatedType(): ?string | setInitiatedType(?string initiatedType): void |
| `recurrenceModel` | `?string` | Optional | - | getRecurrenceModel(): ?string | setRecurrenceModel(?string recurrenceModel): void |
| `paymentOrigin` | [`?CreatePaymentOriginRequest`](../../doc/models/create-payment-origin-request.md) | Optional | - | getPaymentOrigin(): ?CreatePaymentOriginRequest | setPaymentOrigin(?CreatePaymentOriginRequest paymentOrigin): void |

## Example (as JSON)

```json
{
  "statement_descriptor": "statement_descriptor8",
  "card": {
    "number": "number6",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
    "cvv": "cvv4"
  },
  "card_id": "card_id4",
  "card_token": "card_token2",
  "recurrence": false
}
```

