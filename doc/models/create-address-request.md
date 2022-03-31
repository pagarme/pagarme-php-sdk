
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
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `line1` | `string` | Required | Line 1 for address | getLine1(): string | setLine1(string line1): void |
| `line2` | `string` | Required | Line 2 for address | getLine2(): string | setLine2(string line2): void |

## Example (as JSON)

```json
{
  "street": "street0",
  "number": "number2",
  "zip_code": "zip_code4",
  "neighborhood": "neighborhood6",
  "city": "city0",
  "state": "state4",
  "country": "country4",
  "complement": "complement4",
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "line_1": "line_16",
  "line_2": "line_28"
}
```

