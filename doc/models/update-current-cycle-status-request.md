
# Update Current Cycle Status Request

## Structure

`UpdateCurrentCycleStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateCurrentCycleStatusRequestBuilder;

$updateCurrentCycleStatusRequest = UpdateCurrentCycleStatusRequestBuilder::init(
    'status0'
)->build();
```

