
# Create Voucher Payment Request

The settings for creating a voucher payment

## Structure

`CreateVoucherPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | The text that will be shown on the voucher's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `cardId` | `?string` | Optional | Card id | getCardId(): ?string | setCardId(?string cardId): void |
| `cardToken` | `?string` | Optional | Card token | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `card` | [`?CreateCardRequest`](../../doc/models/create-card-request.md) | Optional | Card info | getCard(): ?CreateCardRequest | setCard(?CreateCardRequest card): void |
| `recurrencyCycle` | `?string` | Optional | Defines whether the card has been used one or more times. | getRecurrencyCycle(): ?string | setRecurrencyCycle(?string recurrencyCycle): void |

## Example (as JSON)

```json
{
  "statement_descriptor": null,
  "card_id": null,
  "card_token": null,
  "Card": null,
  "recurrency_cycle": null
}
```

