
# Get Address Response

Response object for getting an Address

## Structure

`GetAddressResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `street` | `string` | Required | - | getStreet(): string | setStreet(string street): void |
| `number` | `string` | Required | - | getNumber(): string | setNumber(string number): void |
| `complement` | `string` | Required | - | getComplement(): string | setComplement(string complement): void |
| `zipCode` | `string` | Required | - | getZipCode(): string | setZipCode(string zipCode): void |
| `neighborhood` | `string` | Required | - | getNeighborhood(): string | setNeighborhood(string neighborhood): void |
| `city` | `string` | Required | - | getCity(): string | setCity(string city): void |
| `state` | `string` | Required | - | getState(): string | setState(string state): void |
| `country` | `string` | Required | - | getCountry(): string | setCountry(string country): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | - | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `array<string,string>` | Required | - | getMetadata(): array | setMetadata(array metadata): void |
| `line1` | `string` | Required | Line 1 for address | getLine1(): string | setLine1(string line1): void |
| `line2` | `string` | Required | Line 2 for address | getLine2(): string | setLine2(string line2): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "street": "street0",
  "number": "number2",
  "complement": "complement4",
  "zip_code": "zip_code4",
  "neighborhood": "neighborhood6",
  "city": "city0",
  "state": "state4",
  "country": "country4",
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "customer": null,
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "line_1": "line_16",
  "line_2": "line_28",
  "deleted_at": null
}
```

