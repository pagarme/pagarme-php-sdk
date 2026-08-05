
# Create Antifraud Request

## Structure

`CreateAntifraudRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `clearsale` | [`CreateClearSaleRequest`](../../doc/models/create-clear-sale-request.md) | Required | - | getClearsale(): CreateClearSaleRequest | setClearsale(CreateClearSaleRequest clearsale): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateAntifraudRequestBuilder;

$createAntifraudRequest = CreateAntifraudRequestBuilder::init(
    'type0',
    null
)->build();
```

