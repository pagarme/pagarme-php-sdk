
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
  "name": null,
  "email": null,
  "document": null,
  "type": null,
  "address": null,
  "metadata": null,
  "phones": null,
  "code": null,
  "gender": null,
  "document_type": null
}
```

