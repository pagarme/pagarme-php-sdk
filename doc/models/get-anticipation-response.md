
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetAnticipationResponseBuilder;

$getAnticipationResponse = GetAnticipationResponseBuilder::init()
    ->id('id6')
    ->requestedAmount(186)
    ->approvedAmount(240)
    ->recipient(
        null
    )
    ->pgid('pgid2')
    ->build();
```

