
# Create Device Request

Request for creating a device

## Structure

`CreateDeviceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `platform` | `?string` | Optional | Device's platform | getPlatform(): ?string | setPlatform(?string platform): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateDeviceRequestBuilder;

$createDeviceRequest = CreateDeviceRequestBuilder::init()
    ->platform('platform2')
    ->build();
```

