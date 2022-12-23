
# Get Balance Response

Balance

## Structure

`GetBalanceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `?string` | Required | Currency | getCurrency(): ?string | setCurrency(?string currency): void |
| `availableAmount` | `?int` | Required | Amount available for transferring | getAvailableAmount(): ?int | setAvailableAmount(?int availableAmount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `transferredAmount` | `?int` | Required | - | getTransferredAmount(): ?int | setTransferredAmount(?int transferredAmount): void |
| `waitingFundsAmount` | `?int` | Required | - | getWaitingFundsAmount(): ?int | setWaitingFundsAmount(?int waitingFundsAmount): void |

## Example (as JSON)

```json
{
  "currency": "currency0",
  "available_amount": 182,
  "recipient": null,
  "transferred_amount": 228,
  "waiting_funds_amount": 252
}
```

