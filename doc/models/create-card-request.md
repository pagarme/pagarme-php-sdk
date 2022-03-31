
# Create Card Request

Card data

## Structure

`CreateCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `string` | Required | Credit card number | getNumber(): string | setNumber(string number): void |
| `holderName` | `string` | Required | Holder name, as written on the card | getHolderName(): string | setHolderName(string holderName): void |
| `expMonth` | `int` | Required | The expiration month | getExpMonth(): int | setExpMonth(int expMonth): void |
| `expYear` | `int` | Required | The expiration year, that can be informed with 2 or 4 digits | getExpYear(): int | setExpYear(int expYear): void |
| `cvv` | `string` | Required | The card's security code | getCvv(): string | setCvv(string cvv): void |
| `billingAddress` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Card's billing address | getBillingAddress(): CreateAddressRequest | setBillingAddress(CreateAddressRequest billingAddress): void |
| `brand` | `string` | Required | Card brand | getBrand(): string | setBrand(string brand): void |
| `billingAddressId` | `string` | Required | The address id for the billing address | getBillingAddressId(): string | setBillingAddressId(string billingAddressId): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `type` | `string` | Required | Card type<br>**Default**: `'credit'` | getType(): string | setType(string type): void |
| `options` | [`CreateCardOptionsRequest`](../../doc/models/create-card-options-request.md) | Required | Options for creating the card | getOptions(): CreateCardOptionsRequest | setOptions(CreateCardOptionsRequest options): void |
| `holderDocument` | `?string` | Optional | Document number for the card's holder | getHolderDocument(): ?string | setHolderDocument(?string holderDocument): void |
| `privateLabel` | `bool` | Required | Indicates whether it is a private label card | getPrivateLabel(): bool | setPrivateLabel(bool privateLabel): void |
| `label` | `string` | Required | - | getLabel(): string | setLabel(string label): void |
| `id` | `?string` | Optional | Identifier | getId(): ?string | setId(?string id): void |
| `token` | `?string` | Optional | token identifier | getToken(): ?string | setToken(?string token): void |

## Example (as JSON)

```json
{
  "number": null,
  "holder_name": null,
  "exp_month": null,
  "exp_year": null,
  "cvv": null,
  "billing_address": null,
  "brand": null,
  "billing_address_id": null,
  "metadata": null,
  "type": "credit",
  "options": null,
  "private_label": null,
  "label": null
}
```

