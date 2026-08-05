
# Create Cancel Charge Split Rules Request

Creates a refund with split rules

## Structure

`CreateCancelChargeSplitRulesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The split rule gateway id | getId(): string | setId(string id): void |
| `amount` | `int` | Required | The split rule amount | getAmount(): int | setAmount(int amount): void |
| `type` | `string` | Required | The amount type (flat ou percentage) | getType(): string | setType(string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCancelChargeSplitRulesRequestBuilder;

$createCancelChargeSplitRulesRequest = CreateCancelChargeSplitRulesRequestBuilder::init(
    'id0',
    140,
    'type0'
)->build();
```

