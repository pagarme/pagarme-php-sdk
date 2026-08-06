
# Update Invoice Status Request

Invoice Update Status Request

## Structure

`UpdateInvoiceStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\UpdateInvoiceStatusRequestBuilder;

$updateInvoiceStatusRequest = UpdateInvoiceStatusRequestBuilder::init(
    'status2'
)->build();
```

