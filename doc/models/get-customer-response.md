
# Get Customer Response

Response object for getting a customer

## Structure

`GetCustomerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `delinquent` | `?bool` | Optional | - | getDelinquent(): ?bool | setDelinquent(?bool delinquent): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `document` | `?string` | Optional | - | getDocument(): ?string | setDocument(?string document): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `fbAccessToken` | `?string` | Optional | - | getFbAccessToken(): ?string | setFbAccessToken(?string fbAccessToken): void |
| `address` | [`?GetAddressResponse`](../../doc/models/get-address-response.md) | Optional | - | getAddress(): ?GetAddressResponse | setAddress(?GetAddressResponse address): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `phones` | [`?GetPhonesResponse`](../../doc/models/get-phones-response.md) | Optional | - | getPhones(): ?GetPhonesResponse | setPhones(?GetPhonesResponse phones): void |
| `fbId` | `?int` | Optional | - | getFbId(): ?int | setFbId(?int fbId): void |
| `code` | `?string` | Optional | Código de referência do cliente no sistema da loja. Max: 52 caracteres | getCode(): ?string | setCode(?string code): void |
| `documentType` | `?string` | Optional | - | getDocumentType(): ?string | setDocumentType(?string documentType): void |

## Example (as JSON)

```json
{
  "id": "id4",
  "name": "name4",
  "email": "email2",
  "delinquent": false,
  "created_at": "2016-03-13T12:52:32.123Z"
}
```

