
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetCardTokenResponseBuilder;

$getCardTokenResponse = GetCardTokenResponseBuilder::init()
    ->lastFourDigits('last_four_digits8')
    ->holderName('holder_name8')
    ->holderDocument('holder_document6')
    ->expMonth(232)
    ->expYear(64)
    ->build();
```

