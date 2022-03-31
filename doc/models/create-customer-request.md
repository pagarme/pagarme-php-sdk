
# Create Customer Request

Request for creating a new customer

## Structure

`CreateCustomerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Name | getName(): string | setName(string name): void |
| `email` | `string` | Required | Email | getEmail(): string | setEmail(string email): void |
| `document` | `string` | Required | Document number. Only numbers, no special characters. | getDocument(): string | setDocument(string document): void |
| `type` | `string` | Required | Person type. Can be either 'individual' or 'company' | getType(): string | setType(string type): void |
| `address` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | The customer's address | getAddress(): CreateAddressRequest | setAddress(CreateAddressRequest address): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `phones` | [`CreatePhonesRequest`](../../doc/models/create-phones-request.md) | Required | - | getPhones(): CreatePhonesRequest | setPhones(CreatePhonesRequest phones): void |
| `code` | `string` | Required | Customer code | getCode(): string | setCode(string code): void |
| `gender` | `?string` | Optional | Customer Gender | getGender(): ?string | setGender(?string gender): void |
| `documentType` | `?string` | Optional | - | getDocumentType(): ?string | setDocumentType(?string documentType): void |

## Example (as JSON)

```json
{
  "name": "{\n    \"name\": \"Tony Stark\"\n}",
  "email": null,
  "document": null,
  "type": null,
  "address": null,
  "metadata": null,
  "phones": null,
  "code": null
}
```

