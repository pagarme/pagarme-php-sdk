
# Get Withdraw Source Response

## Structure

`GetWithdrawSourceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceId` | `?string` | Optional | - | getSourceId(): ?string | setSourceId(?string sourceId): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetWithdrawSourceResponseBuilder;

$getWithdrawSourceResponse = GetWithdrawSourceResponseBuilder::init()
    ->sourceId('source_id6')
    ->type('type8')
    ->build();
```

