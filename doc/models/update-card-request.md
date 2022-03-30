
# Update Card Request

Request for updating a card

## Structure

`UpdateCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `holderName` | `string` | Required | Holder name | getHolderName(): string | setHolderName(string holderName): void |
| `expMonth` | `int` | Required | Expiration month | getExpMonth(): int | setExpMonth(int expMonth): void |
| `expYear` | `int` | Required | Expiration year | getExpYear(): int | setExpYear(int expYear): void |
| `billingAddressId` | `string` | Required | Id of the address to be used as billing address | getBillingAddressId(): string | setBillingAddressId(string billingAddressId): void |
| `billingAddress` | [`CreateAddressRequest`](../../doc/models/create-address-request.md) | Required | Billing address | getBillingAddress(): CreateAddressRequest | setBillingAddress(CreateAddressRequest billingAddress): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `label` | `string` | Required | - | getLabel(): string | setLabel(string label): void |

## Example (as JSON)

```json
{
  "holder_name": "holder_name4",
  "exp_month": 42,
  "exp_year": 254,
  "billing_address_id": "billing_address_id6",
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
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "label": "label0"
}
```

