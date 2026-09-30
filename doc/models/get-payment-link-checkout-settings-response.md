
# Get Payment Link Checkout Settings Response

Checkout settings of a payment link

## Structure

`GetPaymentLinkCheckoutSettingsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptedBrands` | `?(string[])` | Optional | - | getAcceptedBrands(): ?array | setAcceptedBrands(?array acceptedBrands): void |
| `addressType` | `?string` | Optional | - | getAddressType(): ?string | setAddressType(?string addressType): void |
| `enabled` | `?bool` | Optional | - | getEnabled(): ?bool | setEnabled(?bool enabled): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentLinkCheckoutSettingsResponseBuilder;

$getPaymentLinkCheckoutSettingsResponse = GetPaymentLinkCheckoutSettingsResponseBuilder::init()
    ->addressType('address_type0')
    ->enabled(true)
    ->build();
```

