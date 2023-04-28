
# Get Card Response

Response object for getting a credit card

## Structure

`GetCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `lastFourDigits` | `?string` | Optional | - | getLastFourDigits(): ?string | setLastFourDigits(?string lastFourDigits): void |
| `brand` | `?string` | Optional | - | getBrand(): ?string | setBrand(?string brand): void |
| `holderName` | `?string` | Optional | - | getHolderName(): ?string | setHolderName(?string holderName): void |
| `expMonth` | `?int` | Optional | - | getExpMonth(): ?int | setExpMonth(?int expMonth): void |
| `expYear` | `?int` | Optional | - | getExpYear(): ?int | setExpYear(?int expYear): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `billingAddress` | [`?GetBillingAddressResponse`](../../doc/models/get-billing-address-response.md) | Optional | - | getBillingAddress(): ?GetBillingAddressResponse | setBillingAddress(?GetBillingAddressResponse billingAddress): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `type` | `?string` | Optional | Card type | getType(): ?string | setType(?string type): void |
| `holderDocument` | `?string` | Optional | Document number for the card's holder | getHolderDocument(): ?string | setHolderDocument(?string holderDocument): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `firstSixDigits` | `?string` | Optional | First six digits | getFirstSixDigits(): ?string | setFirstSixDigits(?string firstSixDigits): void |
| `label` | `?string` | Optional | - | getLabel(): ?string | setLabel(?string label): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "last_four_digits": "last_four_digits6",
  "brand": "brand4",
  "holder_name": "holder_name4",
  "exp_month": 42,
  "exp_year": 254,
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "billing_address": {
    "street": "street8",
    "number": "number4",
    "zip_code": "zip_code2",
    "neighborhood": "neighborhood4",
    "city": "city2",
    "state": "state6",
    "country": "country2",
    "complement": "complement6",
    "line_1": "line_18",
    "line_2": "line_26"
  },
  "customer": {
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
      "customer": {},
      "metadata": {
        "key0": "metadata3"
      },
      "line_1": "line_10",
      "line_2": "line_24",
      "deleted_at": "2016-03-13T12:52:32.123Z"
    },
    "metadata": {
      "key0": "metadata3"
    },
    "phones": {
      "home_phone": {
        "country_code": "country_code2",
        "number": "number0",
        "area_code": "area_code2"
      },
      "mobile_phone": {
        "country_code": "country_code8",
        "number": "number4",
        "area_code": "area_code8"
      }
    },
    "fb_id": 174,
    "code": "code8",
    "document_type": "document_type8"
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "type": "type0",
  "holder_document": "holder_document6",
  "deleted_at": "2016-03-13T12:52:32.123Z",
  "first_six_digits": "first_six_digits0",
  "label": "label0"
}
```

