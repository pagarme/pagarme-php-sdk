
# Get Card Token Response

Card token data

## Structure

`GetCardTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lastFourDigits` | `string` | Required | - | getLastFourDigits(): string | setLastFourDigits(string lastFourDigits): void |
| `holderName` | `string` | Required | - | getHolderName(): string | setHolderName(string holderName): void |
| `holderDocument` | `string` | Required | - | getHolderDocument(): string | setHolderDocument(string holderDocument): void |
| `expMonth` | `string` | Required | - | getExpMonth(): string | setExpMonth(string expMonth): void |
| `expYear` | `string` | Required | - | getExpYear(): string | setExpYear(string expYear): void |
| `brand` | `string` | Required | - | getBrand(): string | setBrand(string brand): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `label` | `string` | Required | - | getLabel(): string | setLabel(string label): void |

## Example (as JSON)

```json
{
  "last_four_digits": "last_four_digits6",
  "holder_name": "holder_name4",
  "holder_document": "holder_document6",
  "exp_month": "exp_month6",
  "exp_year": "exp_year6",
  "brand": "brand4",
  "type": "type0",
  "label": "label0"
}
```

