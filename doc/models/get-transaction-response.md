
# Get Transaction Response

Generic response object for getting a transaction.

## Structure

`GetTransactionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `gatewayId` | `?string` | Required | Gateway transaction id | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `amount` | `?int` | Required | Amount in cents | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Required | Transaction status | getStatus(): ?string | setStatus(?string status): void |
| `success` | `?bool` | Required | Indicates if the transaction ocurred successfuly | getSuccess(): ?bool | setSuccess(?bool success): void |
| `createdAt` | `?\DateTime` | Required | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Required | Last update date | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `attemptCount` | `?int` | Required | Number of attempts tried | getAttemptCount(): ?int | setAttemptCount(?int attemptCount): void |
| `maxAttempts` | `?int` | Required | Max attempts | getMaxAttempts(): ?int | setMaxAttempts(?int maxAttempts): void |
| `splits` | [`?(GetSplitResponse[])`](../../doc/models/get-split-response.md) | Required | Splits | getSplits(): ?array | setSplits(?array splits): void |
| `nextAttempt` | `?\DateTime` | Optional | Date and time of the next attempt | getNextAttempt(): ?\DateTime | setNextAttempt(?\DateTime nextAttempt): void |
| `transactionType` | `?string` | Optional | - | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `id` | `?string` | Required | Código da transação | getId(): ?string | setId(?string id): void |
| `gatewayResponse` | [`?GetGatewayResponseResponse`](../../doc/models/get-gateway-response-response.md) | Required | The Gateway Response | getGatewayResponse(): ?GetGatewayResponseResponse | setGatewayResponse(?GetGatewayResponseResponse gatewayResponse): void |
| `antifraudResponse` | [`?GetAntifraudResponse`](../../doc/models/get-antifraud-response.md) | Required | - | getAntifraudResponse(): ?GetAntifraudResponse | setAntifraudResponse(?GetAntifraudResponse antifraudResponse): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `split` | [`?(GetSplitResponse[])`](../../doc/models/get-split-response.md) | Required | - | getSplit(): ?array | setSplit(?array split): void |
| `interest` | [`?GetInterestResponse`](../../doc/models/get-interest-response.md) | Optional | - | getInterest(): ?GetInterestResponse | setInterest(?GetInterestResponse interest): void |
| `fine` | [`?GetFineResponse`](../../doc/models/get-fine-response.md) | Optional | - | getFine(): ?GetFineResponse | setFine(?GetFineResponse fine): void |
| `maxDaysToPayPastDue` | `?int` | Optional | - | getMaxDaysToPayPastDue(): ?int | setMaxDaysToPayPastDue(?int maxDaysToPayPastDue): void |

## Example (as JSON)

```json
{
  "gateway_id": "gateway_id0",
  "amount": 46,
  "status": "status8",
  "success": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "attempt_count": 70,
  "max_attempts": 174,
  "splits": [
    {
      "type": "type4",
      "amount": 62,
      "recipient": null,
      "gateway_id": "gateway_id4",
      "options": null,
      "id": "id6"
    },
    {
      "type": "type3",
      "amount": 63,
      "recipient": null,
      "gateway_id": "gateway_id3",
      "options": null,
      "id": "id7"
    }
  ],
  "next_attempt": null,
  "transaction_type": null,
  "id": "id0",
  "gateway_response": {
    "code": "code6",
    "errors": [
      {
        "message": "message3"
      },
      {
        "message": "message4"
      },
      {
        "message": "message5"
      }
    ]
  },
  "antifraud_response": {
    "status": "status0",
    "return_code": "return_code8",
    "return_message": "return_message4",
    "provider_name": "provider_name4",
    "score": "score8"
  },
  "metadata": null,
  "split": [
    {
      "type": "type6",
      "amount": 28,
      "recipient": null,
      "gateway_id": "gateway_id6",
      "options": null,
      "id": "id4"
    },
    {
      "type": "type5",
      "amount": 27,
      "recipient": null,
      "gateway_id": "gateway_id5",
      "options": null,
      "id": "id5"
    },
    {
      "type": "type4",
      "amount": 26,
      "recipient": null,
      "gateway_id": "gateway_id4",
      "options": null,
      "id": "id6"
    }
  ],
  "interest": null,
  "fine": null,
  "max_days_to_pay_past_due": null
}
```

