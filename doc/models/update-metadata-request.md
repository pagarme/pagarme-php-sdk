
# Update Metadata Request

Request for updating an metadata

## Structure

`UpdateMetadataRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateMetadataRequestBuilder;

$updateMetadataRequest = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata5',
        'key1' => 'metadata6',
        'key2' => 'metadata7'
    ]
)->build();
```

