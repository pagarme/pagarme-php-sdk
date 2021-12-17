
# Create Card Token Request

Card token data

## Structure

`CreateCardTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `string` | Required | Credit card number | getNumber(): string | setNumber(string number): void |
| `holderName` | `string` | Required | Holder name, as written on the card | getHolderName(): string | setHolderName(string holderName): void |
| `expMonth` | `int` | Required | The expiration month | getExpMonth(): int | setExpMonth(int expMonth): void |
| `expYear` | `int` | Required | The expiration year, that can be informed with 2 or 4 digits | getExpYear(): int | setExpYear(int expYear): void |
| `cvv` | `string` | Required | The card's security code | getCvv(): string | setCvv(string cvv): void |
| `brand` | `string` | Required | Card brand | getBrand(): string | setBrand(string brand): void |
| `label` | `string` | Required | - | getLabel(): string | setLabel(string label): void |

## Example (as JSON)

```json
{
  "number": "number2",
  "holder_name": "holder_name4",
  "exp_month": 42,
  "exp_year": 254,
  "cvv": "cvv2",
  "brand": "brand4",
  "label": "label0"
}
```

