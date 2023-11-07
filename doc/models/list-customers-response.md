
# List Customers Response

Response for listing the customers

## Structure

`ListCustomersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetCustomerResponse[])`](../../doc/models/get-customer-response.md) | Optional | The customer object | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id0",
      "name": "name0",
      "email": "email6",
      "delinquent": false,
      "created_at": "2016-03-13T12:52:32.123Z"
    },
    {
      "id": "id0",
      "name": "name0",
      "email": "email6",
      "delinquent": false,
      "created_at": "2016-03-13T12:52:32.123Z"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

