
# Get Transfer Target Response

## Structure

`GetTransferTargetResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `targetId` | `?string` | Optional | - | getTargetId(): ?string | setTargetId(?string targetId): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetTransferTargetResponseBuilder;

$getTransferTargetResponse = GetTransferTargetResponseBuilder::init()
    ->targetId('target_id4')
    ->type('type6')
    ->build();
```

