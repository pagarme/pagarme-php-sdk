
# List Charges Response

Response object for listing charges

## Structure

`ListChargesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetChargeResponse[]`](../../doc/models/get-charge-response.md) | Required | The charge objects | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](../../doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "gateway_id": "gateway_id5",
      "amount": 121,
      "status": "status7",
      "currency": "currency5",
      "payment_method": "payment_method5",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": null,
      "invoice": null,
      "order": null,
      "customer": null,
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "paid_at": null,
      "canceled_at": null,
      "canceled_amount": 231,
      "paid_amount": 213,
      "interest_and_fine_paid": null,
      "recurrency_cycle": null
    },
    {
      "id": "id6",
      "code": "code4",
      "gateway_id": "gateway_id6",
      "amount": 122,
      "status": "status8",
      "currency": "currency6",
      "payment_method": "payment_method6",
      "due_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "last_transaction": null,
      "invoice": null,
      "order": null,
      "customer": null,
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "paid_at": null,
      "canceled_at": null,
      "canceled_amount": 232,
      "paid_amount": 214,
      "interest_and_fine_paid": null,
      "recurrency_cycle": null
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

