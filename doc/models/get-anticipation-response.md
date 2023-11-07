
# Get Anticipation Response

Anticipation

## Structure

`GetAnticipationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id | getId(): ?string | setId(?string id): void |
| `requestedAmount` | `?int` | Optional | Requested amount | getRequestedAmount(): ?int | setRequestedAmount(?int requestedAmount): void |
| `approvedAmount` | `?int` | Optional | Approved amount | getApprovedAmount(): ?int | setApprovedAmount(?int approvedAmount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `pgid` | `?string` | Optional | Anticipation id on the gateway | getPgid(): ?string | setPgid(?string pgid): void |
| `createdAt` | `?DateTime` | Optional | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Last update date | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `paymentDate` | `?DateTime` | Optional | Payment date | getPaymentDate(): ?\DateTime | setPaymentDate(?\DateTime paymentDate): void |
| `status` | `?string` | Optional | Status | getStatus(): ?string | setStatus(?string status): void |
| `timeframe` | `?string` | Optional | Timeframe | getTimeframe(): ?string | setTimeframe(?string timeframe): void |

## Example (as JSON)

```json
{
  "id": "id8",
  "requested_amount": 130,
  "approved_amount": 184,
  "recipient": {
    "id": "id8",
    "name": "name8",
    "email": "email8",
    "document": "document8",
    "description": "description2"
  },
  "pgid": "pgid4"
}
```

