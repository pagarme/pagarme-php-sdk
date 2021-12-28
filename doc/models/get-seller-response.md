
# Get Seller Response

## Structure

`GetSellerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Identification | getId(): string | setId(string id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `code` | `string` | Required | - | getCode(): string | setCode(string code): void |
| `document` | `string` | Required | - | getDocument(): string | setDocument(string document): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |
| `createdAt` | `string` | Required | Creation date | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | Updated date | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `address` | [`GetAddressResponse`](/doc/models/get-address-response.md) | Required | Address | getAddress(): GetAddressResponse | setAddress(GetAddressResponse address): void |
| `metadata` | `array` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `deletedAt` | `?string` | Optional | Deleted date | getDeletedAt(): ?string | setDeletedAt(?string deletedAt): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "name": "name0",
  "code": "code8",
  "document": "document6",
  "description": "description0",
  "Status": "Status8",
  "CreatedAt": "CreatedAt2",
  "UpdatedAt": "UpdatedAt6",
  "Address": {
    "id": "id8",
    "street": "street8",
    "number": "number6",
    "complement": "complement4",
    "zip_code": "zip_code2",
    "neighborhood": "neighborhood4",
    "city": "city8",
    "state": "state4",
    "country": "country2",
    "status": "status0",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "customer": null,
    "metadata": {
      "key0": "metadata5",
      "key1": "metadata4"
    },
    "line_1": "line_12",
    "line_2": "line_26",
    "deleted_at": null
  },
  "Metadata": {
    "key0": "Metadata2",
    "key1": "Metadata3"
  },
  "DeletedAt": null
}
```

