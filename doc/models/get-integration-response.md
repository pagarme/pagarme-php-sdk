
# Get Integration Response

## Structure

`GetIntegrationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetIntegrationResponseBuilder;

$getIntegrationResponse = GetIntegrationResponseBuilder::init()
    ->code('code2')
    ->build();
```

