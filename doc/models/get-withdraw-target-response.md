
# Get Withdraw Target Response

## Structure

`GetWithdrawTargetResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `targetId` | `?string` | Optional | - | getTargetId(): ?string | setTargetId(?string targetId): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetWithdrawTargetResponseBuilder;

$getWithdrawTargetResponse = GetWithdrawTargetResponseBuilder::init()
    ->targetId('target_id8')
    ->type('type8')
    ->build();
```

