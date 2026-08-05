
# Get Transaction Report File Response

## Structure

`GetTransactionReportFileResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `date` | `?DateTime` | Optional | - | getDate(): ?\DateTime | setDate(?\DateTime date): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetTransactionReportFileResponseBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$getTransactionReportFileResponse = GetTransactionReportFileResponseBuilder::init()
    ->name('name0')
    ->date(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

