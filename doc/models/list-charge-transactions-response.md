
# List Charge Transactions Response

Response object for listing charge transactions

## Structure

`ListChargeTransactionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetTransactionResponse[])`](../../doc/models/get-transaction-response.md) | Optional | The charge transactions objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": null,
  "paging": null
}
```

