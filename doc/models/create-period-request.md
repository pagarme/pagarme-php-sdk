
# Create Period Request

## Structure

`CreatePeriodRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endAt` | `?DateTime` | Optional | - | getEndAt(): ?\DateTime | setEndAt(?\DateTime endAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePeriodRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$createPeriodRequest = CreatePeriodRequestBuilder::init()
    ->endAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

