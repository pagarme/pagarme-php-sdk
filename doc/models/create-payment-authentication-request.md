
# Create Payment Authentication Request

The payment authentication request

## Structure

`CreatePaymentAuthenticationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | The Authentication type | getType(): string | setType(string type): void |
| `threedSecure` | [`CreateThreeDSecureRequest`](../../doc/models/create-three-d-secure-request.md) | Required | The 3D-S authentication object | getThreedSecure(): CreateThreeDSecureRequest | setThreedSecure(CreateThreeDSecureRequest threedSecure): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentAuthenticationRequestBuilder;

$createPaymentAuthenticationRequest = CreatePaymentAuthenticationRequestBuilder::init(
    'type6',
    null
)->build();
```

