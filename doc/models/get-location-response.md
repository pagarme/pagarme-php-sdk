
# Get Location Response

Response object for geetting an order location request

## Structure

`GetLocationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `?string` | Optional | Latitude | getLatitude(): ?string | setLatitude(?string latitude): void |
| `longitude` | `?string` | Optional | Longitude | getLongitude(): ?string | setLongitude(?string longitude): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetLocationResponseBuilder;

$getLocationResponse = GetLocationResponseBuilder::init()
    ->latitude('latitude2')
    ->longitude('longitude8')
    ->build();
```

