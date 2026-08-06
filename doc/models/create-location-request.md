
# Create Location Request

Request for creating a location

## Structure

`CreateLocationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `string` | Required | Latitude | getLatitude(): string | setLatitude(string latitude): void |
| `longitude` | `string` | Required | Longitude | getLongitude(): string | setLongitude(string longitude): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateLocationRequestBuilder;

$createLocationRequest = CreateLocationRequestBuilder::init(
    'latitude0',
    'longitude0'
)->build();
```

