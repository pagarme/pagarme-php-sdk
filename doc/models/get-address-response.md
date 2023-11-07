
# Get Address Response

Response object for getting an Address

## Structure

`GetAddressResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `street` | `?string` | Optional | - | getStreet(): ?string | setStreet(?string street): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `complement` | `?string` | Optional | - | getComplement(): ?string | setComplement(?string complement): void |
| `zipCode` | `?string` | Optional | - | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `neighborhood` | `?string` | Optional | - | getNeighborhood(): ?string | setNeighborhood(?string neighborhood): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `line1` | `?string` | Optional | Line 1 for address | getLine1(): ?string | setLine1(?string line1): void |
| `line2` | `?string` | Optional | Line 2 for address | getLine2(): ?string | setLine2(?string line2): void |
| `deletedAt` | `?DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "street": "street2",
  "number": "number0",
  "complement": "complement8",
  "zip_code": "zip_code6"
}
```

