
# List Transactions Response

Response object for listing transactions

## Structure

`ListTransactionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetTransactionResponse[])`](../../doc/models/get-transaction-response.md) | Optional | The transaction objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "gateway_id": "gateway_id8",
      "amount": 40,
      "status": "status6",
      "success": false,
      "created_at": "2016-03-13T12:52:32.123Z",
      "qr_code": "qr_code0",
      "qr_code_url": "qr_code_url6",
      "expires_at": "2016-03-13T12:52:32.123Z",
      "additional_information": [
        {
          "Name": "Name0",
          "Value": "Value2"
        },
        {
          "Name": "Name0",
          "Value": "Value2"
        }
      ],
      "end_to_end_id": "end_to_end_id6"
    },
    {
      "gateway_id": "gateway_id8",
      "amount": 40,
      "status": "status6",
      "success": false,
      "created_at": "2016-03-13T12:52:32.123Z",
      "qr_code": "qr_code0",
      "qr_code_url": "qr_code_url6",
      "expires_at": "2016-03-13T12:52:32.123Z",
      "additional_information": [
        {
          "Name": "Name0",
          "Value": "Value2"
        },
        {
          "Name": "Name0",
          "Value": "Value2"
        }
      ],
      "end_to_end_id": "end_to_end_id6"
    },
    {
      "gateway_id": "gateway_id8",
      "amount": 40,
      "status": "status6",
      "success": false,
      "created_at": "2016-03-13T12:52:32.123Z",
      "qr_code": "qr_code0",
      "qr_code_url": "qr_code_url6",
      "expires_at": "2016-03-13T12:52:32.123Z",
      "additional_information": [
        {
          "Name": "Name0",
          "Value": "Value2"
        },
        {
          "Name": "Name0",
          "Value": "Value2"
        }
      ],
      "end_to_end_id": "end_to_end_id6"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

