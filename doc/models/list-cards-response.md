
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
      "exp_month": 125,
      "exp_year": 165,
      "status": "status7",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "billing_address": {
        "street": "street7",
        "number": "number5",
        "zip_code": "zip_code1",
        "neighborhood": "neighborhood3",
        "city": "city7",
        "state": "state3",
        "country": "country1",
        "complement": "complement3",
        "line_1": "line_11",
        "line_2": "line_25"
      },
      "customer": {
        "id": "id5",
        "name": "name5",
        "email": "email9",
        "delinquent": true,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document9",
        "type": "type5",
        "fb_access_token": "fb_access_token9",
        "address": {
          "id": "id1",
          "street": "street1",
          "number": "number9",
          "complement": "complement7",
          "zip_code": "zip_code5",
          "neighborhood": "neighborhood7",
          "city": "city1",
          "state": "state7",
          "country": "country5",
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {},
          "metadata": {
            "key0": "metadata2",
            "key1": "metadata3",
            "key2": "metadata4"
          },
          "line_1": "line_15",
          "line_2": "line_29",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata4",
          "key1": "metadata3",
          "key2": "metadata2"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code7",
            "number": "number5",
            "area_code": "area_code7"
          },
          "mobile_phone": {
            "country_code": "country_code7",
            "number": "number5",
            "area_code": "area_code7"
          }
        },
        "fb_id": 153,
        "code": "code3",
        "document_type": "document_type3"
      },
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "type": "type5",
      "holder_document": "holder_document9",
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "first_six_digits": "first_six_digits5",
      "label": "label5"
    },
    {
      "id": "id6",
      "last_four_digits": "last_four_digits2",
      "brand": "brand0",
      "holder_name": "holder_name2",
      "exp_month": 126,
      "exp_year": 166,
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "billing_address": {
        "street": "street8",
        "number": "number6",
        "zip_code": "zip_code2",
        "neighborhood": "neighborhood4",
        "city": "city8",
        "state": "state4",
        "country": "country2",
        "complement": "complement4",
        "line_1": "line_12",
        "line_2": "line_26"
      },
      "customer": {
        "id": "id6",
        "name": "name6",
        "email": "email0",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document0",
        "type": "type6",
        "fb_access_token": "fb_access_token0",
        "address": {
          "id": "id2",
          "street": "street2",
          "number": "number0",
          "complement": "complement8",
          "zip_code": "zip_code6",
          "neighborhood": "neighborhood8",
          "city": "city2",
          "state": "state8",
          "country": "country6",
          "status": "status4",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {},
          "metadata": {
            "key0": "metadata3"
          },
          "line_1": "line_16",
          "line_2": "line_20",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata3"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code8",
            "number": "number6",
            "area_code": "area_code8"
          },
          "mobile_phone": {
            "country_code": "country_code8",
            "number": "number6",
            "area_code": "area_code8"
          }
        },
        "fb_id": 154,
        "code": "code4",
        "document_type": "document_type4"
      },
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "type": "type6",
      "holder_document": "holder_document0",
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "first_six_digits": "first_six_digits6",
      "label": "label6"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

