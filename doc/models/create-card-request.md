
# Create Card Request

Card data

## Structure

`CreateCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `?string` | Optional | Credit card number | getNumber(): ?string | setNumber(?string number): void |
| `holderName` | `?string` | Optional | Holder name, as written on the card | getHolderName(): ?string | setHolderName(?string holderName): void |
| `expMonth` | `?int` | Optional | The expiration month | getExpMonth(): ?int | setExpMonth(?int expMonth): void |
| `expYear` | `?int` | Optional | The expiration year, that can be informed with 2 or 4 digits | getExpYear(): ?int | setExpYear(?int expYear): void |
| `cvv` | `?string` | Optional | The card's security code | getCvv(): ?string | setCvv(?string cvv): void |
| `billingAddress` | [`?CreateAddressRequest`](../../doc/models/create-address-request.md) | Optional | Card's billing address | getBillingAddress(): ?CreateAddressRequest | setBillingAddress(?CreateAddressRequest billingAddress): void |
| `brand` | `?string` | Optional | Card brand | getBrand(): ?string | setBrand(?string brand): void |
| `billingAddressId` | `?string` | Optional | The address id for the billing address | getBillingAddressId(): ?string | setBillingAddressId(?string billingAddressId): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `type` | `?string` | Optional | Card type<br>**Default**: `'credit'` | getType(): ?string | setType(?string type): void |
| `options` | [`?CreateCardOptionsRequest`](../../doc/models/create-card-options-request.md) | Optional | Options for creating the card | getOptions(): ?CreateCardOptionsRequest | setOptions(?CreateCardOptionsRequest options): void |
| `holderDocument` | `?string` | Optional | Document number for the card's holder | getHolderDocument(): ?string | setHolderDocument(?string holderDocument): void |
| `privateLabel` | `?bool` | Optional | Indicates whether it is a private label card | getPrivateLabel(): ?bool | setPrivateLabel(?bool privateLabel): void |
| `label` | `?string` | Optional | - | getLabel(): ?string | setLabel(?string label): void |
| `id` | `?string` | Optional | Identifier | getId(): ?string | setId(?string id): void |
| `token` | `?string` | Optional | token identifier | getToken(): ?string | setToken(?string token): void |

## Example (as JSON)

```json
{
  "type": "credit",
  "number": "number2",
  "holder_name": "holder_name4",
  "exp_month": 42,
  "exp_year": 254,
  "cvv": "cvv2",
  "billing_address": {
    "street": "street8",
    "number": "number4",
    "zip_code": "zip_code2",
    "neighborhood": "neighborhood4",
    "city": "city2",
    "state": "state6",
    "country": "country2",
    "complement": "complement6",
    "metadata": {
      "key0": "metadata5",
      "key1": "metadata6"
    },
    "line_1": "line_18",
    "line_2": "line_26"
  },
  "brand": "brand4",
  "billing_address_id": "billing_address_id6",
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "options": {
    "verify_card": false
  },
  "holder_document": "holder_document6",
  "private_label": false,
  "label": "label0",
  "id": "id0",
  "token": "token6"
}
```

