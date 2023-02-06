
# Get Billing Address Response

Response object for getting a billing address

## Structure

`GetBillingAddressResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `?string` | Optional | - | getStreet(): ?string | setStreet(?string street): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `zipCode` | `?string` | Optional | - | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `neighborhood` | `?string` | Optional | - | getNeighborhood(): ?string | setNeighborhood(?string neighborhood): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |
| `complement` | `?string` | Optional | - | getComplement(): ?string | setComplement(?string complement): void |
| `line1` | `?string` | Optional | Line 1 for address | getLine1(): ?string | setLine1(?string line1): void |
| `line2` | `?string` | Optional | Line 2 for address | getLine2(): ?string | setLine2(?string line2): void |

## Example (as JSON)

```json
{
  "street": null,
  "number": null,
  "zip_code": null,
  "neighborhood": null,
  "city": null,
  "state": null,
  "country": null,
  "complement": null,
  "line_1": null,
  "line_2": null
}
```

