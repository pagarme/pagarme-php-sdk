
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
      "id": 23,
      "status": "status7",
      "amount": 121,
      "fee": 79,
      "anticipation_fee": 27
    },
    {
      "id": 24,
      "status": "status8",
      "amount": 122,
      "fee": 80,
      "anticipation_fee": 28
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

