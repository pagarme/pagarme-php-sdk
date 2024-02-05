
# Create Register Information Address Request

Register Information Address

## Structure

`CreateRegisterInformationAddressRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `string` | Required | - | getStreet(): string | setStreet(string street): void |
| `complementary` | `string` | Required | - | getComplementary(): string | setComplementary(string complementary): void |
| `streetNumber` | `string` | Required | - | getStreetNumber(): string | setStreetNumber(string streetNumber): void |
| `neighborhood` | `string` | Required | - | getNeighborhood(): string | setNeighborhood(string neighborhood): void |
| `city` | `string` | Required | - | getCity(): string | setCity(string city): void |
| `state` | `string` | Required | - | getState(): string | setState(string state): void |
| `zipCode` | `string` | Required | - | getZipCode(): string | setZipCode(string zipCode): void |
| `referencePoint` | `string` | Required | - | getReferencePoint(): string | setReferencePoint(string referencePoint): void |

## Example (as JSON)

```json
{
  "street": "street8",
  "complementary": "complementary0",
  "street_number": "street_number8",
  "neighborhood": "neighborhood4",
  "city": "city8",
  "state": "state4",
  "zip_code": "zip_code2",
  "reference_point": "reference_point2"
}
```

