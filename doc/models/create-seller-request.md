
# Create Seller Request

## Structure

`CreateSellerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Name | getName(): string | setName(string name): void |
| `code` | `?string` | Optional | Seller's code identification | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | Description | getDescription(): ?string | setDescription(?string description): void |
| `document` | `?string` | Optional | Document number (individual / company) | getDocument(): ?string | setDocument(?string document): void |
| `address` | [`?CreateAddressRequest`](/doc/models/create-address-request.md) | Optional | Address | getAddress(): ?CreateAddressRequest | setAddress(?CreateAddressRequest address): void |
| `type` | `?string` | Optional | Person type (individual / company) | getType(): ?string | setType(?string type): void |
| `metadata` | `array` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "code": null,
  "description": null,
  "document": null,
  "address": null,
  "type": null,
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  }
}
```

