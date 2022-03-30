
# Get Transfer

## Structure

`GetTransfer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `gatewayId` | `string` | Required | - | getGatewayId(): string | setGatewayId(string gatewayId): void |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | - | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `fee` | `?int` | Optional | - | getFee(): ?int | setFee(?int fee): void |
| `fundingDate` | `?\DateTime` | Optional | - | getFundingDate(): ?\DateTime | setFundingDate(?\DateTime fundingDate): void |
| `fundingEstimatedDate` | `?\DateTime` | Optional | - | getFundingEstimatedDate(): ?\DateTime | setFundingEstimatedDate(?\DateTime fundingEstimatedDate): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `source` | [`GetTransferSourceResponse`](../../doc/models/get-transfer-source-response.md) | Required | - | getSource(): GetTransferSourceResponse | setSource(GetTransferSourceResponse source): void |
| `target` | [`GetTransferTargetResponse`](../../doc/models/get-transfer-target-response.md) | Required | - | getTarget(): GetTransferTargetResponse | setTarget(GetTransferTargetResponse target): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "gateway_id": "gateway_id0",
  "amount": 46,
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "metadata": null,
  "fee": null,
  "funding_date": null,
  "funding_estimated_date": null,
  "type": "type0",
  "source": {
    "source_id": "source_id8",
    "type": "type6"
  },
  "target": {
    "target_id": "target_id2",
    "type": "type8"
  }
}
```

