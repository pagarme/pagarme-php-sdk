
# Create Address Request

Request for creating a new Address

## Structure

`CreateAddressRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `string` | Required | Street | getStreet(): string | setStreet(string street): void |
| `number` | `string` | Required | Number | getNumber(): string | setNumber(string number): void |
| `zipCode` | `string` | Required | The zip code containing only numbers. No special characters or spaces. | getZipCode(): string | setZipCode(string zipCode): void |
| `neighborhood` | `string` | Required | Neighborhood | getNeighborhood(): string | setNeighborhood(string neighborhood): void |
| `city` | `string` | Required | City | getCity(): string | setCity(string city): void |
| `state` | `string` | Required | State | getState(): string | setState(string state): void |
| `country` | `string` | Required | Country. Must be entered using ISO 3166-1 alpha-2 format. See https://pt.wikipedia.org/wiki/ISO_3166-1_alfa-2 | getCountry(): string | setCountry(string country): void |
| `complement` | `string` | Required | Complement | getComplement(): string | setComplement(string complement): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `line1` | `string` | Required | Line 1 for address | getLine1(): string | setLine1(string line1): void |
| `line2` | `string` | Required | Line 2 for address | getLine2(): string | setLine2(string line2): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateAddressRequestBuilder;

$createAddressRequest = CreateAddressRequestBuilder::init(
    'street6',
    'number6',
    'zip_code0',
    'neighborhood2',
    'city6',
    'state2',
    'country0',
    'complement8',
    'line_10',
    'line_24'
)
    ->metadata(
        [
            'key0' => 'metadata7'
        ]
    )
    ->build();
```

