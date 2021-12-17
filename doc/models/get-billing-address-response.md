
# Get Billing Address Response

Response object for getting a billing address

## Structure

`GetBillingAddressResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `string` | Required | - | getStreet(): string | setStreet(string street): void |
| `number` | `string` | Required | - | getNumber(): string | setNumber(string number): void |
| `zipCode` | `string` | Required | - | getZipCode(): string | setZipCode(string zipCode): void |
| `neighborhood` | `string` | Required | - | getNeighborhood(): string | setNeighborhood(string neighborhood): void |
| `city` | `string` | Required | - | getCity(): string | setCity(string city): void |
| `state` | `string` | Required | - | getState(): string | setState(string state): void |
| `country` | `string` | Required | - | getCountry(): string | setCountry(string country): void |
| `complement` | `string` | Required | - | getComplement(): string | setComplement(string complement): void |
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
  "line_1": "line_16",
  "line_2": "line_28"
}
```

