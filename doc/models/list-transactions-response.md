
# List Transactions Response

Response object for listing transactions

## Structure

`ListTransactionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetTransactionResponse[])`](../../doc/models/get-transaction-response.md) | Optional | The transaction objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": null,
  "paging": null
}
```

