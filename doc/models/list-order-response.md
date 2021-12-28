
# List Order Response

Response object for listing order objects

## Structure

`ListOrderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetOrderResponse[]`](/doc/models/get-order-response.md) | Required | The order object | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](/doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "currency": "currency5",
      "items": [
        {
          "id": "id2",
          "amount": 180,
          "description": "description2",
          "quantity": 38,
          "GetSellerResponse": null,
          "category": "category0",
          "code": "code0"
        },
        {
          "id": "id3",
          "amount": 181,
          "description": "description3",
          "quantity": 39,
          "GetSellerResponse": null,
          "category": "category1",
          "code": "code1"
        }
      ],
      "customer": null,
      "status": "status7",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "charges": [
        {
          "id": "id1",
          "code": "code9",
          "gateway_id": "gateway_id1",
          "amount": 113,
          "status": "status3",
          "currency": "currency1",
          "payment_method": "payment_method1",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": null,
          "invoice": null,
          "order": null,
          "customer": null,
          "metadata": {
            "key0": "metadata8",
            "key1": "metadata7"
          },
          "paid_at": null,
          "canceled_at": null,
          "canceled_amount": 223,
          "paid_amount": 205
        },
        {
          "id": "id2",
          "code": "code0",
          "gateway_id": "gateway_id2",
          "amount": 114,
          "status": "status4",
          "currency": "currency2",
          "payment_method": "payment_method2",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": null,
          "invoice": null,
          "order": null,
          "customer": null,
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata6",
            "key2": "metadata5"
          },
          "paid_at": null,
          "canceled_at": null,
          "canceled_amount": 224,
          "paid_amount": 206
        },
        {
          "id": "id3",
          "code": "code1",
          "gateway_id": "gateway_id3",
          "amount": 115,
          "status": "status5",
          "currency": "currency3",
          "payment_method": "payment_method3",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": null,
          "invoice": null,
          "order": null,
          "customer": null,
          "metadata": {
            "key0": "metadata6"
          },
          "paid_at": null,
          "canceled_at": null,
          "canceled_amount": 225,
          "paid_amount": 207
        }
      ],
      "invoice_url": "invoice_url7",
      "shipping": {
        "amount": 219,
        "description": "description9",
        "recipient_name": "recipient_name7",
        "recipient_phone": "recipient_phone1",
        "address": {
          "id": "id5",
          "street": "street5",
          "number": "number3",
          "complement": "complement1",
          "zip_code": "zip_code9",
          "neighborhood": "neighborhood1",
          "city": "city5",
          "state": "state1",
          "country": "country9",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": null,
          "metadata": {
            "key0": "metadata6"
          },
          "line_1": "line_19",
          "line_2": "line_23",
          "deleted_at": null
        },
        "max_delivery_date": null,
        "estimated_delivery_date": null,
        "type": "type9"
      },
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "checkouts": null,
      "ip": null,
      "session_id": null,
      "location": null,
      "device": null,
      "closed": true
    },
    {
      "id": "id6",
      "code": "code4",
      "currency": "currency6",
      "items": [
        {
          "id": "id3",
          "amount": 181,
          "description": "description3",
          "quantity": 39,
          "GetSellerResponse": null,
          "category": "category1",
          "code": "code1"
        },
        {
          "id": "id4",
          "amount": 182,
          "description": "description4",
          "quantity": 40,
          "GetSellerResponse": null,
          "category": "category2",
          "code": "code2"
        },
        {
          "id": "id5",
          "amount": 183,
          "description": "description5",
          "quantity": 41,
          "GetSellerResponse": null,
          "category": "category3",
          "code": "code3"
        }
      ],
      "customer": null,
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "charges": [
        {
          "id": "id2",
          "code": "code0",
          "gateway_id": "gateway_id2",
          "amount": 114,
          "status": "status4",
          "currency": "currency2",
          "payment_method": "payment_method2",
          "due_at": "2016-03-13T12:52:32.123Z",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "last_transaction": null,
          "invoice": null,
          "order": null,
          "customer": null,
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata6",
            "key2": "metadata5"
          },
          "paid_at": null,
          "canceled_at": null,
          "canceled_amount": 224,
          "paid_amount": 206
        }
      ],
      "invoice_url": "invoice_url8",
      "shipping": {
        "amount": 220,
        "description": "description0",
        "recipient_name": "recipient_name8",
        "recipient_phone": "recipient_phone2",
        "address": {
          "id": "id6",
          "street": "street6",
          "number": "number4",
          "complement": "complement2",
          "zip_code": "zip_code0",
          "neighborhood": "neighborhood2",
          "city": "city6",
          "state": "state2",
          "country": "country0",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": null,
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata8"
          },
          "line_1": "line_10",
          "line_2": "line_24",
          "deleted_at": null
        },
        "max_delivery_date": null,
        "estimated_delivery_date": null,
        "type": "type0"
      },
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "checkouts": null,
      "ip": null,
      "session_id": null,
      "location": null,
      "device": null,
      "closed": false
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

