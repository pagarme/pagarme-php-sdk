
# List Cards Response

Response object for listing cards

## Structure

`ListCardsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetCardResponse[])`](../../doc/models/get-card-response.md) | Optional | The card objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "last_four_digits": "last_four_digits1",
      "brand": "brand9",
      "holder_name": "holder_name1",
      "exp_month": 125
    },
    {
      "id": "id6",
      "last_four_digits": "last_four_digits2",
      "brand": "brand0",
      "holder_name": "holder_name2",
      "exp_month": 126
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

