
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

## Example (as JSON)

```json
{
  "street": "street6",
  "number": "number6",
  "zip_code": "zip_code0",
  "neighborhood": "neighborhood2",
  "city": "city6",
  "state": "state8",
  "country": "country0",
  "complement": "complement8",
  "metadata": {
    "key0": "metadata7"
  },
  "line_1": "line_10",
  "line_2": "line_24"
}
```

