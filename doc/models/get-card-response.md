
# Get Card Response

Response object for getting a credit card

## Structure

`GetCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `lastFourDigits` | `string` | Required | - | getLastFourDigits(): string | setLastFourDigits(string lastFourDigits): void |
| `brand` | `string` | Required | - | getBrand(): string | setBrand(string brand): void |
| `holderName` | `string` | Required | - | getHolderName(): string | setHolderName(string holderName): void |
| `expMonth` | `int` | Required | - | getExpMonth(): int | setExpMonth(int expMonth): void |
| `expYear` | `int` | Required | - | getExpYear(): int | setExpYear(int expYear): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | - | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `billingAddress` | [`GetBillingAddressResponse`](../../doc/models/get-billing-address-response.md) | Required | - | getBillingAddress(): GetBillingAddressResponse | setBillingAddress(GetBillingAddressResponse billingAddress): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `array<string,string>` | Required | - | getMetadata(): array | setMetadata(array metadata): void |
| `type` | `string` | Required | Card type | getType(): string | setType(string type): void |
| `holderDocument` | `string` | Required | Document number for the card's holder | getHolderDocument(): string | setHolderDocument(string holderDocument): void |
| `deletedAt` | `?\DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `firstSixDigits` | `string` | Required | First six digits | getFirstSixDigits(): string | setFirstSixDigits(string firstSixDigits): void |
| `label` | `string` | Required | - | getLabel(): string | setLabel(string label): void |

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
  "customer": null,
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "type": "type0",
  "holder_document": "holder_document6",
  "deleted_at": null,
  "first_six_digits": "first_six_digits0",
  "label": "label0"
}
```

