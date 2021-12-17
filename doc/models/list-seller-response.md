
# List Seller Response

## Structure

`ListSellerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetSellerResponse[]`](/doc/models/get-seller-response.md) | Required | The order object | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](/doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "name": "name5",
      "code": "code3",
      "document": "document9",
      "description": "description5",
      "Status": "Status3",
      "CreatedAt": "CreatedAt3",
      "UpdatedAt": "UpdatedAt1",
      "Address": {
        "id": "id3",
        "street": "street3",
        "number": "number1",
        "complement": "complement9",
        "zip_code": "zip_code7",
        "neighborhood": "neighborhood9",
        "city": "city3",
        "state": "state9",
        "country": "country7",
        "status": "status5",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": null,
        "metadata": {
          "key0": "metadata4",
          "key1": "metadata5",
          "key2": "metadata6"
        },
        "line_1": "line_17",
        "line_2": "line_21",
        "deleted_at": null
      },
      "Metadata": {
        "key0": "Metadata7",
        "key1": "Metadata8"
      },
      "DeletedAt": null
    },
    {
      "id": "id6",
      "name": "name6",
      "code": "code4",
      "document": "document0",
      "description": "description6",
      "Status": "Status4",
      "CreatedAt": "CreatedAt4",
      "UpdatedAt": "UpdatedAt2",
      "Address": {
        "id": "id4",
        "street": "street4",
        "number": "number2",
        "complement": "complement0",
        "zip_code": "zip_code8",
        "neighborhood": "neighborhood0",
        "city": "city4",
        "state": "state0",
        "country": "country8",
        "status": "status6",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": null,
        "metadata": {
          "key0": "metadata5"
        },
        "line_1": "line_18",
        "line_2": "line_22",
        "deleted_at": null
      },
      "Metadata": {
        "key0": "Metadata8",
        "key1": "Metadata9",
        "key2": "Metadata0"
      },
      "DeletedAt": null
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

