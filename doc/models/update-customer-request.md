
# Update Customer Request

Request for updating a customer

## Structure

`UpdateCustomerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Name | getName(): ?string | setName(?string name): void |
| `email` | `?string` | Optional | Email | getEmail(): ?string | setEmail(?string email): void |
| `document` | `?string` | Optional | Document number | getDocument(): ?string | setDocument(?string document): void |
| `type` | `?string` | Optional | Person type | getType(): ?string | setType(?string type): void |
| `address` | [`?CreateAddressRequest`](../../doc/models/create-address-request.md) | Optional | Address | getAddress(): ?CreateAddressRequest | setAddress(?CreateAddressRequest address): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `phones` | [`?CreatePhonesRequest`](../../doc/models/create-phones-request.md) | Optional | - | getPhones(): ?CreatePhonesRequest | setPhones(?CreatePhonesRequest phones): void |
| `code` | `?string` | Optional | Código de referência do cliente no sistema da loja. Max: 52 caracteres | getCode(): ?string | setCode(?string code): void |
| `gender` | `?string` | Optional | Gênero do cliente | getGender(): ?string | setGender(?string gender): void |
| `documentType` | `?string` | Optional | - | getDocumentType(): ?string | setDocumentType(?string documentType): void |

## Example (as JSON)

```json
{
  "name": "name8",
  "email": "email8",
  "document": "document2",
  "type": "type2",
  "address": {
    "street": "street6",
    "number": "number4",
    "zip_code": "zip_code0",
    "neighborhood": "neighborhood2",
    "city": "city6",
    "state": "state2",
    "country": "country0",
    "complement": "complement2",
    "metadata": {
      "key0": "metadata3",
      "key1": "metadata2",
      "key2": "metadata1"
    },
    "line_1": "line_10",
    "line_2": "line_24"
  }
}
```

