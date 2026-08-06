
# Get Anticipation Limit Response

Anticipation limit

## Structure

`GetAnticipationLimitResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | Amount | getAmount(): ?int | setAmount(?int amount): void |
| `anticipationFee` | `?int` | Optional | Anticipation fee | getAnticipationFee(): ?int | setAnticipationFee(?int anticipationFee): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetAnticipationLimitResponseBuilder;

$getAnticipationLimitResponse = GetAnticipationLimitResponseBuilder::init()
    ->amount(160)
    ->anticipationFee(190)
    ->build();
```

