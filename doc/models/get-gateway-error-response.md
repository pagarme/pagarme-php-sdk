
# Get Gateway Error Response

Gateway Response

## Structure

`GetGatewayErrorResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | The message error | getMessage(): ?string | setMessage(?string message): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetGatewayErrorResponseBuilder;

$getGatewayErrorResponse = GetGatewayErrorResponseBuilder::init()
    ->message('message2')
    ->build();
```

