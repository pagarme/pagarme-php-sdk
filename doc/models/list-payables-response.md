
# List Payables Response

Response object for listing payable objects

## Structure

`ListPayablesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetPayableResponse[])`](../../doc/models/get-payable-response.md) | Optional | The payable object | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": 138,
      "status": "status2",
      "amount": 236,
      "fee": 194,
      "anticipation_fee": 142
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

