
# Get Balance Response

Balance

## Structure

`GetBalanceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `?string` | Optional | Currency | getCurrency(): ?string | setCurrency(?string currency): void |
| `availableAmount` | `?int` | Optional | Amount available for transferring | getAvailableAmount(): ?int | setAvailableAmount(?int availableAmount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `transferredAmount` | `?int` | Optional | - | getTransferredAmount(): ?int | setTransferredAmount(?int transferredAmount): void |
| `waitingFundsAmount` | `?int` | Optional | - | getWaitingFundsAmount(): ?int | setWaitingFundsAmount(?int waitingFundsAmount): void |

## Example (as JSON)

```json
{
  "currency": "currency2",
  "available_amount": 96,
  "recipient": {
    "id": "id8",
    "name": "name8",
    "email": "email8",
    "document": "document8",
    "description": "description2"
  },
  "transferred_amount": 142,
  "waiting_funds_amount": 174
}
```

