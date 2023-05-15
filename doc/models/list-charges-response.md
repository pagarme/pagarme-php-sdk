
# List Charges Response

Response object for listing charges

## Structure

`ListChargesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetChargeResponse[])`](../../doc/models/get-charge-response.md) | Optional | The charge objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "gateway_id": "gateway_id5",
      "amount": 121,
      "status": "status7"
    },
    {
      "id": "id6",
      "code": "code4",
      "gateway_id": "gateway_id6",
      "amount": 122,
      "status": "status8"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

