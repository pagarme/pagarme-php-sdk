
# Get Payment Authentication Response

Payment Authentication response

## Structure

`GetPaymentAuthenticationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `threedSecure` | [`?GetThreeDSecureResponse`](../../doc/models/get-three-d-secure-response.md) | Optional | 3D-S payment authentication response | getThreedSecure(): ?GetThreeDSecureResponse | setThreedSecure(?GetThreeDSecureResponse threedSecure): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPaymentAuthenticationResponseBuilder;

$getPaymentAuthenticationResponse = GetPaymentAuthenticationResponseBuilder::init()
    ->type('type0')
    ->threedSecure(
        null
    )
    ->build();
```

