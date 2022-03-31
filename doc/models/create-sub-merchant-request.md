
# Create Sub Merchant Request

SubMerchant

## Structure

`CreateSubMerchantRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentFacilitatorCode` | `string` | Required | Payment Facilitator Code | getPaymentFacilitatorCode(): string | setPaymentFacilitatorCode(string paymentFacilitatorCode): void |
| `code` | `string` | Required | Code | getCode(): string | setCode(string code): void |
| `name` | `string` | Required | Name | getName(): string | setName(string name): void |
| `merchantCategoryCode` | `string` | Required | Merchant Category Code | getMerchantCategoryCode(): string | setMerchantCategoryCode(string merchantCategoryCode): void |
| `document` | `string` | Required | Document number. Only numbers, no special characters. | getDocument(): string | setDocument(string document): void |
| `type` | `string` | Required | Document type. Can be either 'individual' or 'company' | getType(): string | setType(string type): void |
| `phone` | [`CreatePhoneRequest`](../../doc/models/create-phone-request.md) | Required | Phone | getPhone(): CreatePhoneRequest | setPhone(CreatePhoneRequest phone): void |
| `address` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Address | getAddress(): CreateAddressRequest | setAddress(CreateAddressRequest address): void |

## Example (as JSON)

```json
{
  "payment_facilitator_code": "payment_facilitator_code6",
  "code": "code8",
  "name": "name0",
  "merchant_category_code": "merchant_category_code0",
  "document": "document6",
  "type": "type0",
  "phone": {
    "country_code": null,
    "number": null,
    "area_code": null
  },
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

