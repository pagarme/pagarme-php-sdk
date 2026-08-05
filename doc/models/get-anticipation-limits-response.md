
# Get Anticipation Limits Response

Anticipation limits

## Structure

`GetAnticipationLimitsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `max` | [`?GetAnticipationLimitResponse`](../../doc/models/get-anticipation-limit-response.md) | Optional | Max limit | getMax(): ?GetAnticipationLimitResponse | setMax(?GetAnticipationLimitResponse max): void |
| `min` | [`?GetAnticipationLimitResponse`](../../doc/models/get-anticipation-limit-response.md) | Optional | Min limit | getMin(): ?GetAnticipationLimitResponse | setMin(?GetAnticipationLimitResponse min): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetAnticipationLimitsResponseBuilder;

$getAnticipationLimitsResponse = GetAnticipationLimitsResponseBuilder::init()
    ->max(
        null
    )
    ->min(
        null
    )
    ->build();
```

