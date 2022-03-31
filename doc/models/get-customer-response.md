
# Get Customer Response

Response object for getting a customer

## Structure

`GetCustomerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `delinquent` | `bool` | Required | - | getDelinquent(): bool | setDelinquent(bool delinquent): void |
| `createdAt` | `\DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | - | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `document` | `string` | Required | - | getDocument(): string | setDocument(string document): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `fbAccessToken` | `string` | Required | - | getFbAccessToken(): string | setFbAccessToken(string fbAccessToken): void |
| `address` | [`GetAddressResponse`](../../doc/models/get-address-response.md) | Required | - | getAddress(): GetAddressResponse | setAddress(GetAddressResponse address): void |
| `metadata` | `array<string,string>` | Required | - | getMetadata(): array | setMetadata(array metadata): void |
| `phones` | [`GetPhonesResponse`](../../doc/models/get-phones-response.md) | Required | - | getPhones(): GetPhonesResponse | setPhones(GetPhonesResponse phones): void |
| `fbId` | `?int` | Optional | - | getFbId(): ?int | setFbId(?int fbId): void |
| `code` | `string` | Required | Código de referência do cliente no sistema da loja. Max: 52 caracteres | getCode(): string | setCode(string code): void |
| `documentType` | `string` | Required | - | getDocumentType(): string | setDocumentType(string documentType): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "name": "name0",
  "email": "email6",
  "delinquent": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "document": "document6",
  "type": "type0",
  "fb_access_token": "fb_access_token4",
  "address": {
    "id": "id6",
    "street": "street6",
    "number": "number4",
    "complement": "complement2",
    "zip_code": "zip_code0",
    "neighborhood": "neighborhood2",
    "city": "city6",
    "state": "state2",
    "country": "country0",
    "status": "status8",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "customer": null,
    "metadata": {
      "key0": "metadata3",
      "key1": "metadata2",
      "key2": "metadata1"
    },
    "line_1": "line_10",
    "line_2": "line_24",
    "deleted_at": null
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "phones": {
    "home_phone": {
      "country_code": null,
      "number": null,
      "area_code": null
    },
    "mobile_phone": {
      "country_code": null,
      "number": null,
      "area_code": null
    }
  },
  "fb_id": null,
  "code": "code8",
  "document_type": "document_type8"
}
```

