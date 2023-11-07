
# Create Credit Card Payment Request

The settings for creating a credit card payment

## Structure

`CreateCreditCardPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installments` | `?int` | Optional | Number of installments<br>**Default**: `1` | getInstallments(): ?int | setInstallments(?int installments): void |
| `statementDescriptor` | `?string` | Optional | The text that will be shown on the credit card's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `card` | [`?CreateCardRequest`](../../doc/models/create-card-request.md) | Optional | Credit card data | getCard(): ?CreateCardRequest | setCard(?CreateCardRequest card): void |
| `cardId` | `?string` | Optional | The credit card id | getCardId(): ?string | setCardId(?string cardId): void |
| `cardToken` | `?string` | Optional | - | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `recurrence` | `?bool` | Optional | Indicates a recurrence | getRecurrence(): ?bool | setRecurrence(?bool recurrence): void |
| `capture` | `?bool` | Optional | Indicates if the operation should be only authorization or auth and capture.<br>**Default**: `true` | getCapture(): ?bool | setCapture(?bool capture): void |
| `extendedLimitEnabled` | `?bool` | Optional | Indicates whether the extended label (private label) is enabled | getExtendedLimitEnabled(): ?bool | setExtendedLimitEnabled(?bool extendedLimitEnabled): void |
| `extendedLimitCode` | `?string` | Optional | Extended Limit Code | getExtendedLimitCode(): ?string | setExtendedLimitCode(?string extendedLimitCode): void |
| `merchantCategoryCode` | `?int` | Optional | Customer business segment code | getMerchantCategoryCode(): ?int | setMerchantCategoryCode(?int merchantCategoryCode): void |
| `authentication` | [`?CreatePaymentAuthenticationRequest`](../../doc/models/create-payment-authentication-request.md) | Optional | The payment authentication request | getAuthentication(): ?CreatePaymentAuthenticationRequest | setAuthentication(?CreatePaymentAuthenticationRequest authentication): void |
| `contactless` | [`?CreateCardPaymentContactlessRequest`](../../doc/models/create-card-payment-contactless-request.md) | Optional | The Credit card payment contactless request | getContactless(): ?CreateCardPaymentContactlessRequest | setContactless(?CreateCardPaymentContactlessRequest contactless): void |
| `autoRecovery` | `?bool` | Optional | Indicates whether a particular payment will enter the offline retry flow | getAutoRecovery(): ?bool | setAutoRecovery(?bool autoRecovery): void |
| `operationType` | `?string` | Optional | AuthOnly, AuthAndCapture, PreAuth | getOperationType(): ?string | setOperationType(?string operationType): void |
| `recurrencyCycle` | `?string` | Optional | Defines whether the card has been used one or more times. | getRecurrencyCycle(): ?string | setRecurrencyCycle(?string recurrencyCycle): void |
| `payload` | [`?CreateCardPayloadRequest`](../../doc/models/create-card-payload-request.md) | Optional | - | getPayload(): ?CreateCardPayloadRequest | setPayload(?CreateCardPayloadRequest payload): void |

## Example (as JSON)

```json
{
  "installments": 1,
  "capture": true,
  "recurrency_cycle": "\"first\" or \"subsequent\"",
  "statement_descriptor": "statement_descriptor0",
  "card": {
    "number": "number6",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
    "cvv": "cvv4"
  },
  "card_id": "card_id6",
  "card_token": "card_token0"
}
```

