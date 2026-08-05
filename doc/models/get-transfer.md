
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
| `createdAt` | `DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `DateTime` | Required | - | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `fee` | `?int` | Optional | - | getFee(): ?int | setFee(?int fee): void |
| `fundingDate` | `?DateTime` | Optional | - | getFundingDate(): ?\DateTime | setFundingDate(?\DateTime fundingDate): void |
| `fundingEstimatedDate` | `?DateTime` | Optional | - | getFundingEstimatedDate(): ?\DateTime | setFundingEstimatedDate(?\DateTime fundingEstimatedDate): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `source` | [`GetTransferSourceResponse`](../../doc/models/get-transfer-source-response.md) | Required | - | getSource(): GetTransferSourceResponse | setSource(GetTransferSourceResponse source): void |
| `target` | [`GetTransferTargetResponse`](../../doc/models/get-transfer-target-response.md) | Required | - | getTarget(): GetTransferTargetResponse | setTarget(GetTransferTargetResponse target): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetTransferBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getTransfer = GetTransferBuilder::init(
    'id6',
    'gateway_id4',
    0,
    'status2',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    'type4',
    null,
    null
)
    ->metadata(
        [
            'key0' => 'metadata7',
            'key1' => 'metadata8',
            'key2' => 'metadata9'
        ]
    )
    ->fee(214)
    ->fundingDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->fundingEstimatedDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

