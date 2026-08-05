
# List Withdrawals

## Structure

`ListWithdrawals`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetWithdrawResponse[]`](../../doc/models/get-withdraw-response.md) | Required | The Increments response | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](../../doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\ListWithdrawalsBuilder;

$listWithdrawals = ListWithdrawalsBuilder::init(
    [
        null
    ],
    null
)->build();
```

