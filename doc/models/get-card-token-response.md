
# Get Card Token Response

Card token data

## Structure

`GetCardTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lastFourDigits` | `?string` | Optional | - | getLastFourDigits(): ?string | setLastFourDigits(?string lastFourDigits): void |
| `holderName` | `?string` | Optional | - | getHolderName(): ?string | setHolderName(?string holderName): void |
| `holderDocument` | `?string` | Optional | - | getHolderDocument(): ?string | setHolderDocument(?string holderDocument): void |
| `expMonth` | `?int` | Optional | - | getExpMonth(): ?int | setExpMonth(?int expMonth): void |
| `expYear` | `?int` | Optional | - | getExpYear(): ?int | setExpYear(?int expYear): void |
| `brand` | `?string` | Optional | - | getBrand(): ?string | setBrand(?string brand): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `label` | `?string` | Optional | - | getLabel(): ?string | setLabel(?string label): void |

## Example (as JSON)

```json
{
  "last_four_digits": "last_four_digits8",
  "holder_name": "holder_name8",
  "holder_document": "holder_document6",
  "exp_month": 168,
  "exp_year": 128
}
```

