
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
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `billingAddress` | [`?GetBillingAddressResponse`](../../doc/models/get-billing-address-response.md) | Optional | - | getBillingAddress(): ?GetBillingAddressResponse | setBillingAddress(?GetBillingAddressResponse billingAddress): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `type` | `?string` | Optional | Card type | getType(): ?string | setType(?string type): void |
| `holderDocument` | `?string` | Optional | Document number for the card's holder | getHolderDocument(): ?string | setHolderDocument(?string holderDocument): void |
| `deletedAt` | `?DateTime` | Optional | - | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `firstSixDigits` | `?string` | Optional | First six digits | getFirstSixDigits(): ?string | setFirstSixDigits(?string firstSixDigits): void |
| `label` | `?string` | Optional | - | getLabel(): ?string | setLabel(?string label): void |

## Example (as JSON)

```json
{
  "id": "id4",
  "last_four_digits": "last_four_digits0",
  "brand": "brand8",
  "holder_name": "holder_name0",
  "exp_month": 52
}
```

