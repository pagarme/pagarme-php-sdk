
# Get Register Information Address Response

Response object for getting an RegisterInformationAddress

## Structure

`GetRegisterInformationAddressResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `?string` | Optional | - | getStreet(): ?string | setStreet(?string street): void |
| `complementary` | `?string` | Optional | - | getComplementary(): ?string | setComplementary(?string complementary): void |
| `streetNumber` | `?string` | Optional | - | getStreetNumber(): ?string | setStreetNumber(?string streetNumber): void |
| `neighborhood` | `?string` | Optional | - | getNeighborhood(): ?string | setNeighborhood(?string neighborhood): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `zipCode` | `?string` | Optional | - | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `referencePoint` | `?string` | Optional | - | getReferencePoint(): ?string | setReferencePoint(?string referencePoint): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetRegisterInformationAddressResponseBuilder;

$getRegisterInformationAddressResponse = GetRegisterInformationAddressResponseBuilder::init()
    ->street('street4')
    ->complementary('complementary6')
    ->streetNumber('street_number4')
    ->neighborhood('neighborhood0')
    ->city('city4')
    ->build();
```

