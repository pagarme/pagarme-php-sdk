
# Get Withdraw Response

## Structure

`GetWithdrawResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `gatewayId` | `?string` | Optional | - | getGatewayId(): ?string | setGatewayId(?string gatewayId): void |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `metadata` | `?(string[])` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `fee` | `?int` | Optional | - | getFee(): ?int | setFee(?int fee): void |
| `fundingDate` | `?DateTime` | Optional | - | getFundingDate(): ?\DateTime | setFundingDate(?\DateTime fundingDate): void |
| `fundingEstimatedDate` | `?DateTime` | Optional | - | getFundingEstimatedDate(): ?\DateTime | setFundingEstimatedDate(?\DateTime fundingEstimatedDate): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `source` | [`?GetWithdrawSourceResponse`](../../doc/models/get-withdraw-source-response.md) | Optional | - | getSource(): ?GetWithdrawSourceResponse | setSource(?GetWithdrawSourceResponse source): void |
| `target` | [`?GetWithdrawTargetResponse`](../../doc/models/get-withdraw-target-response.md) | Optional | - | getTarget(): ?GetWithdrawTargetResponse | setTarget(?GetWithdrawTargetResponse target): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetWithdrawResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getWithdrawResponse = GetWithdrawResponseBuilder::init()
    ->id('id0')
    ->gatewayId('gateway_id0')
    ->amount(166)
    ->status('status2')
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

