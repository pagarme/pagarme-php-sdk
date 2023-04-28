
# List Plans Response

Response object for listing plans

## Structure

`ListPlansResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(GetPlanResponse[])`](../../doc/models/get-plan-response.md) | Optional | The plan objects | getData(): ?array | setData(?array data): void |
| `paging` | [`?PagingResponse`](../../doc/models/paging-response.md) | Optional | Paging object | getPaging(): ?PagingResponse | setPaging(?PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "name": "name5",
      "description": "description5",
      "url": "url9",
      "statement_descriptor": "statement_descriptor5",
      "interval": "interval3",
      "interval_count": 249,
      "billing_type": "billing_type9",
      "payment_methods": [
        "payment_methods0",
        "payment_methods1",
        "payment_methods2"
      ],
      "installments": [
        30,
        31,
        32
      ],
      "status": "status7",
      "currency": "currency5",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "items": [
        {
          "id": "id2",
          "name": "name2",
          "status": "status4",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 28,
            "scheme_type": "scheme_type4",
            "price_brackets": [
              {
                "start_quantity": 237,
                "price": 175,
                "end_quantity": 245,
                "overage_price": 3
              },
              {
                "start_quantity": 238,
                "price": 176,
                "end_quantity": 246,
                "overage_price": 4
              },
              {
                "start_quantity": 239,
                "price": 177,
                "end_quantity": 247,
                "overage_price": 5
              }
            ],
            "minimum_price": 124,
            "percentage": 132.62
          },
          "description": "description2",
          "plan": {},
          "quantity": 38,
          "cycles": 58,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        {
          "id": "id3",
          "name": "name3",
          "status": "status5",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 29,
            "scheme_type": "scheme_type5",
            "price_brackets": [
              {
                "start_quantity": 238,
                "price": 176,
                "end_quantity": 246,
                "overage_price": 4
              }
            ],
            "minimum_price": 125,
            "percentage": 132.63
          },
          "description": "description3",
          "plan": {},
          "quantity": 39,
          "cycles": 59,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      ],
      "billing_days": [
        250,
        251
      ],
      "shippable": true,
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "trial_period_days": 221,
      "minimum_price": 247,
      "deleted_at": "2016-03-13T12:52:32.123Z"
    },
    {
      "id": "id6",
      "name": "name6",
      "description": "description6",
      "url": "url0",
      "statement_descriptor": "statement_descriptor6",
      "interval": "interval4",
      "interval_count": 250,
      "billing_type": "billing_type0",
      "payment_methods": [
        "payment_methods1"
      ],
      "installments": [
        31
      ],
      "status": "status8",
      "currency": "currency6",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "items": [
        {
          "id": "id3",
          "name": "name3",
          "status": "status5",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 29,
            "scheme_type": "scheme_type5",
            "price_brackets": [
              {
                "start_quantity": 238,
                "price": 176,
                "end_quantity": 246,
                "overage_price": 4
              }
            ],
            "minimum_price": 125,
            "percentage": 132.63
          },
          "description": "description3",
          "plan": {},
          "quantity": 39,
          "cycles": 59,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        {
          "id": "id4",
          "name": "name4",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 30,
            "scheme_type": "scheme_type6",
            "price_brackets": [
              {
                "start_quantity": 239,
                "price": 177,
                "end_quantity": 247,
                "overage_price": 5
              },
              {
                "start_quantity": 240,
                "price": 178,
                "end_quantity": 248,
                "overage_price": 6
              }
            ],
            "minimum_price": 126,
            "percentage": 132.64
          },
          "description": "description4",
          "plan": {},
          "quantity": 40,
          "cycles": 60,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        {
          "id": "id5",
          "name": "name5",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 31,
            "scheme_type": "scheme_type7",
            "price_brackets": [
              {
                "start_quantity": 240,
                "price": 178,
                "end_quantity": 248,
                "overage_price": 6
              },
              {
                "start_quantity": 241,
                "price": 179,
                "end_quantity": 249,
                "overage_price": 7
              },
              {
                "start_quantity": 242,
                "price": 180,
                "end_quantity": 250,
                "overage_price": 8
              }
            ],
            "minimum_price": 127,
            "percentage": 132.65
          },
          "description": "description5",
          "plan": {},
          "quantity": 41,
          "cycles": 61,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      ],
      "billing_days": [
        251,
        252,
        253
      ],
      "shippable": false,
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "trial_period_days": 222,
      "minimum_price": 248,
      "deleted_at": "2016-03-13T12:52:32.123Z"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

