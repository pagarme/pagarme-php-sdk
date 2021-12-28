
# Update Seller Request

## Structure

`UpdateSellerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Seller name | getName(): string | setName(string name): void |
| `code` | `string` | Required | Seller code | getCode(): string | setCode(string code): void |
| `description` | `string` | Required | Seller description | getDescription(): string | setDescription(string description): void |
| `document` | `string` | Required | Seller document CPF or CNPJ | getDocument(): string | setDocument(string document): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `address` | [`CreateAddressRequest`](/doc/models/create-address-request.md) | Required | - | getAddress(): CreateAddressRequest | setAddress(CreateAddressRequest address): void |
| `metadata` | `array` | Required | - | getMetadata(): array | setMetadata(array metadata): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "code": "code8",
  "description": "description0",
  "document": "document6",
  "status": "status8",
  "type": "type0",
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
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  }
}
```

