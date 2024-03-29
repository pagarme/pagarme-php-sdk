
# List Cycles Response

Response object for listing subscription cycles

## Structure

`ListCyclesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetPeriodResponse[])`](../../doc/models/get-period-response.md) | Optional | The subscription cycles objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "start_at": "2016-03-13T12:52:32.123Z",
      "end_at": "2016-03-13T12:52:32.123Z",
      "id": "id0",
      "billing_at": "2016-03-13T12:52:32.123Z",
      "subscription": {
        "id": "id4",
        "code": "code2",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval2",
        "interval_count": 234
      }
    },
    {
      "start_at": "2016-03-13T12:52:32.123Z",
      "end_at": "2016-03-13T12:52:32.123Z",
      "id": "id0",
      "billing_at": "2016-03-13T12:52:32.123Z",
      "subscription": {
        "id": "id4",
        "code": "code2",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval2",
        "interval_count": 234
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

