
# Get Interest Response

Interest Response

## Structure

`GetInterestResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `days` | `?int` | Optional | Days | getDays(): ?int | setDays(?int days): void |
| `type` | `?string` | Optional | Type | getType(): ?string | setType(?string type): void |
| `amount` | `?int` | Optional | Amount | getAmount(): ?int | setAmount(?int amount): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetInterestResponseBuilder;

$getInterestResponse = GetInterestResponseBuilder::init()
    ->days(82)
    ->type('"percentage" or "flat"')
    ->amount(156)
    ->build();
```

