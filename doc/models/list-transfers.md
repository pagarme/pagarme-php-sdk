
# List Transfers

## Structure

`ListTransfers`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetTransfer[]`](../../doc/models/get-transfer.md) | Required | The Increments response | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](../../doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListTransfersBuilder;

$listTransfers = ListTransfersBuilder::init(
    [
        null
    ],
    null
)->build();
```

