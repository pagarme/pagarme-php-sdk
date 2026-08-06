
# Get Device Response

Response object for geetting an order device

## Structure

`GetDeviceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `platform` | `?string` | Optional | Device's platform name | getPlatform(): ?string | setPlatform(?string platform): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetDeviceResponseBuilder;

$getDeviceResponse = GetDeviceResponseBuilder::init()
    ->platform('platform0')
    ->build();
```

