
# List Access Tokens Response

Response object for listing access tokens

## Structure

`ListAccessTokensResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetAccessTokenResponse[])`](../../doc/models/get-access-token-response.md) | Optional | The access token objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id0",
      "code": "code8",
      "status": "status2",
      "created_at": "2016-03-13T12:52:32.123Z",
      "customer": {
        "id": "id0",
        "name": "name0",
        "email": "email6",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z"
      }
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

