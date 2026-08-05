
# Create Transaction Report File Request

## Structure

`CreateTransactionReportFileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `startAt` | `?DateTime` | Optional | - | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `endAt` | `?string` | Optional | - | getEndAt(): ?string | setEndAt(?string endAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateTransactionReportFileRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$createTransactionReportFileRequest = CreateTransactionReportFileRequestBuilder::init(
    'name2'
)
    ->startAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->endAt('end_at8')
    ->build();
```

