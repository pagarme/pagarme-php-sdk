
# Get Gateway Response Response

The Transaction Gateway Response

## Structure

`GetGatewayResponseResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | The error code | getCode(): ?string | setCode(?string code): void |
| `errors` | [`?(GetGatewayErrorResponse[])`](../../doc/models/get-gateway-error-response.md) | Optional | The gateway response errors list | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetGatewayResponseResponseBuilder;

$getGatewayResponseResponse = GetGatewayResponseResponseBuilder::init()
    ->code('code4')
    ->errors(
        [
            null
        ]
    )
    ->build();
```

