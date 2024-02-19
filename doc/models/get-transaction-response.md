
# Get Transaction Response

Generic response object for getting a transaction.

## Structure

`GetTransactionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `gatewayId` | `?string` | Optional | Gateway transaction id | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `amount` | `?int` | Optional | Amount in cents | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | Transaction status | getStatus(): ?string | setStatus(?string status): void |
| `success` | `?bool` | Optional | Indicates if the transaction ocurred successfuly | getSuccess(): ?bool | setSuccess(?bool success): void |
| `createdAt` | `?DateTime` | Optional | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Last update date | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `attemptCount` | `?int` | Optional | Number of attempts tried | getAttemptCount(): ?int | setAttemptCount(?int attemptCount): void |
| `maxAttempts` | `?int` | Optional | Max attempts | getMaxAttempts(): ?int | setMaxAttempts(?int maxAttempts): void |
| `splits` | [`?(GetSplitResponse[])`](../../doc/models/get-split-response.md) | Optional | Splits | getSplits(): ?array | setSplits(?array splits): void |
| `nextAttempt` | `?DateTime` | Optional | Date and time of the next attempt | getNextAttempt(): ?\DateTime | setNextAttempt(?\DateTime nextAttempt): void |
| `transactionType` | `?string` | Optional | - | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `id` | `?string` | Optional | Código da transação | getId(): ?string | setId(?string id): void |
| `gatewayResponse` | [`?GetGatewayResponseResponse`](../../doc/models/get-gateway-response-response.md) | Optional | The Gateway Response | getGatewayResponse(): ?GetGatewayResponseResponse | setGatewayResponse(?GetGatewayResponseResponse gatewayResponse): void |
| `antifraudResponse` | [`?GetAntifraudResponse`](../../doc/models/get-antifraud-response.md) | Optional | - | getAntifraudResponse(): ?GetAntifraudResponse | setAntifraudResponse(?GetAntifraudResponse antifraudResponse): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `split` | [`?(GetSplitResponse[])`](../../doc/models/get-split-response.md) | Optional | - | getSplit(): ?array | setSplit(?array split): void |
| `interest` | [`?GetInterestResponse`](../../doc/models/get-interest-response.md) | Optional | - | getInterest(): ?GetInterestResponse | setInterest(?GetInterestResponse interest): void |
| `fine` | [`?GetFineResponse`](../../doc/models/get-fine-response.md) | Optional | - | getFine(): ?GetFineResponse | setFine(?GetFineResponse fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example (as JSON)

```json
{
  "gateway_id": "gateway_id8",
  "amount": 40,
  "status": "status6",
  "success": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "qr_code": "qr_code0",
  "qr_code_url": "qr_code_url6",
  "expires_at": "2016-03-13T12:52:32.123Z",
  "additional_information": [
    {
      "Name": "Name0",
      "Value": "Value2"
    },
    {
      "Name": "Name0",
      "Value": "Value2"
    }
  ],
  "end_to_end_id": "end_to_end_id6"
}
```

