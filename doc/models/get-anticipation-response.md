
# Get Anticipation Response

Anticipation

## Structure

`GetAnticipationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Id | getId(): string | setId(string id): void |
| `requestedAmount` | `int` | Required | Requested amount | getRequestedAmount(): int | setRequestedAmount(int requestedAmount): void |
| `approvedAmount` | `int` | Required | Approved amount | getApprovedAmount(): int | setApprovedAmount(int approvedAmount): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `pgid` | `string` | Required | Anticipation id on the gateway | getPgid(): string | setPgid(string pgid): void |
| `createdAt` | `\DateTime` | Required | Creation date | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | Last update date | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `paymentDate` | `\DateTime` | Required | Payment date | getPaymentDate(): \DateTime | setPaymentDate(\DateTime paymentDate): void |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |
| `timeframe` | `string` | Required | Timeframe | getTimeframe(): string | setTimeframe(string timeframe): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "requested_amount": 246,
  "approved_amount": 212,
  "recipient": null,
  "pgid": "pgid4",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "payment_date": "2016-03-13T12:52:32.123Z",
  "status": "status8",
  "timeframe": "timeframe2"
}
```

