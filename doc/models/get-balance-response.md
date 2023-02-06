
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
  "currency": null,
  "available_amount": null,
  "recipient": null,
  "transferred_amount": null,
  "waiting_funds_amount": null
}
```

