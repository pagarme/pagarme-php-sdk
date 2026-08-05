
# Get Transfer Source Response

## Structure

`GetTransferSourceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceId` | `?string` | Optional | - | getSourceId(): ?string | setSourceId(?string sourceId): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetTransferSourceResponseBuilder;

$getTransferSourceResponse = GetTransferSourceResponseBuilder::init()
    ->sourceId('source_id8')
    ->type('type4')
    ->build();
```

