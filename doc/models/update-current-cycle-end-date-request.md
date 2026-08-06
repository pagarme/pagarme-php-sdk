
# Update Current Cycle End Date Request

Request to update the end date of the current subscription cycle

## Structure

`UpdateCurrentCycleEndDateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endAt` | `?DateTime` | Optional | Current cycle end date | getEndAt(): ?\DateTime | setEndAt(?\DateTime endAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateCurrentCycleEndDateRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$updateCurrentCycleEndDateRequest = UpdateCurrentCycleEndDateRequestBuilder::init()
    ->endAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

