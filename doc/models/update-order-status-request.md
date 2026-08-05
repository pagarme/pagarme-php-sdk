
# Update Order Status Request

## Structure

`UpdateOrderStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | Order status | getStatus(): string | setStatus(string status): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateOrderStatusRequestBuilder;

$updateOrderStatusRequest = UpdateOrderStatusRequestBuilder::init(
    'status8'
)->build();
```

