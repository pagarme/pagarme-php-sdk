
# Create Payment Origin Request

Request object for PaymentOrigin

## Structure

`CreatePaymentOriginRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brandId` | `?string` | Optional | - | getBrandId(): ?string | setBrandId(?string brandId): void |
| `chargeId` | `?string` | Optional | - | getChargeId(): ?string | setChargeId(?string chargeId): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentOriginRequestBuilder;

$createPaymentOriginRequest = CreatePaymentOriginRequestBuilder::init()
    ->brandId('brand_id8')
    ->chargeId('charge_id2')
    ->build();
```

