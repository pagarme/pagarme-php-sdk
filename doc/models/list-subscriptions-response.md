
# List Subscriptions Response

Response object for listing subscriptions

## Structure

`ListSubscriptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetSubscriptionResponse[])`](../../doc/models/get-subscription-response.md) | Optional | The subscription objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id0",
      "code": "code8",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval8",
      "interval_count": 108
    },
    {
      "id": "id0",
      "code": "code8",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval8",
      "interval_count": 108
    },
    {
      "id": "id0",
      "code": "code8",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval8",
      "interval_count": 108
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

