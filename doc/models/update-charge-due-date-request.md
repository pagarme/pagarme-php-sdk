
# Update Charge Due Date Request

Request for updating a charge due date

## Structure

`UpdateChargeDueDateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dueAt` | `?DateTime` | Optional | The charge's new due date | getDueAt(): ?\DateTime | setDueAt(?\DateTime dueAt): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateChargeDueDateRequestBuilder;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

$updateChargeDueDateRequest = UpdateChargeDueDateRequestBuilder::init()
    ->dueAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

