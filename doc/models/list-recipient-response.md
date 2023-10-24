
# List Recipient Response

Response for the listing recipient method

## Structure

`ListRecipientResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetRecipientResponse[])`](../../doc/models/get-recipient-response.md) | Optional | Recipients | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id0",
      "name": "name0",
      "email": "email6",
      "document": "document4",
      "description": "description0"
    },
    {
      "id": "id0",
      "name": "name0",
      "email": "email6",
      "document": "document4",
      "description": "description0"
    },
    {
      "id": "id0",
      "name": "name0",
      "email": "email6",
      "document": "document4",
      "description": "description0"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

