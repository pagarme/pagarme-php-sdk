
# Create Interest Request

Interest Request

## Structure

`CreateInterestRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `days` | `int` | Required | Days | getDays(): int | setDays(int days): void |
| `type` | `string` | Required | Type | getType(): string | setType(string type): void |
| `amount` | `int` | Required | Amount | getAmount(): int | setAmount(int amount): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateInterestRequestBuilder;

$createInterestRequest = CreateInterestRequestBuilder::init(
    0,
    '"percentage" or "flat"',
    0
)->build();
```

