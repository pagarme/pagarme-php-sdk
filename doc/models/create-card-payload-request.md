
# Create Card Payload Request

## Structure

`CreateCardPayloadRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `googlePay` | [`?CreateGooglePayRequest`](../../doc/models/create-google-pay-request.md) | Optional | - | getGooglePay(): ?CreateGooglePayRequest | setGooglePay(?CreateGooglePayRequest googlePay): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateCardPayloadRequestBuilder;

$createCardPayloadRequest = CreateCardPayloadRequestBuilder::init()
    ->type('type2')
    ->googlePay(
        null
    )
    ->build();
```

