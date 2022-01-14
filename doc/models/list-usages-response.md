
# List Usages Response

Response model for listing the usages from a subscription item

## Structure

`ListUsagesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetUsageResponse[]`](/doc/models/get-usage-response.md) | Required | The usage objects | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](/doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "quantity": 235,
      "description": "description5",
      "used_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "status": "status7",
      "deleted_at": null,
      "subscription_item": {
        "id": "id1",
        "description": "description1",
        "status": "status3",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 43,
          "scheme_type": "scheme_type3",
          "price_brackets": [
            {
              "start_quantity": 166,
              "price": 104,
              "end_quantity": null,
              "overage_price": null
            },
            {
              "start_quantity": 167,
              "price": 105,
              "end_quantity": null,
              "overage_price": null
            }
          ],
          "minimum_price": null,
          "percentage": null
        },
        "discounts": [
          {
            "id": "id2",
            "value": 180.74,
            "discount_type": "discount_type0",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id3",
            "value": 180.75,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "increments": [
          {
            "id": "id0",
            "value": 36.02,
            "increment_type": "increment_type2",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id1",
            "value": 36.03,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id2",
            "value": 36.04,
            "increment_type": "increment_type4",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "subscription": {
          "id": "id7",
          "code": "code5",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval5",
          "interval_count": 85,
          "billing_type": "billing_type9",
          "current_cycle": null,
          "payment_method": "payment_method3",
          "currency": "currency7",
          "installments": 253,
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": null,
          "card": {
            "id": "id1",
            "last_four_digits": "last_four_digits7",
            "brand": "brand5",
            "holder_name": "holder_name7",
            "exp_month": 109,
            "exp_year": 187,
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street7",
              "number": "number5",
              "zip_code": "zip_code1",
              "neighborhood": "neighborhood3",
              "city": "city3",
              "state": "state7",
              "country": "country1",
              "complement": "complement7",
              "line_1": "line_19",
              "line_2": "line_25"
            },
            "customer": null,
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata3",
              "key2": "metadata4"
            },
            "type": "type9",
            "holder_document": "holder_document5",
            "deleted_at": null,
            "first_six_digits": "first_six_digits1",
            "label": "label1"
          },
          "items": [
            {
              "id": "id4",
              "description": "description4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 136,
                "scheme_type": "scheme_type6",
                "price_brackets": [
                  {
                    "start_quantity": 73,
                    "price": 245,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 74,
                    "price": 244,
                    "end_quantity": null,
                    "overage_price": null
                  }
                ],
                "minimum_price": null,
                "percentage": null
              },
              "discounts": [
                {
                  "id": "id5",
                  "value": 67.17,
                  "discount_type": "discount_type3",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id6",
                  "value": 67.18,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "increments": [
                {
                  "id": "id3",
                  "value": 178.45,
                  "increment_type": "increment_type5",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id4",
                  "value": 178.46,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id5",
                  "value": 178.47,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "subscription": {
                "id": "id0",
                "code": "code8",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval2",
                "interval_count": 172,
                "billing_type": "billing_type6",
                "current_cycle": null,
                "payment_method": "payment_method0",
                "currency": "currency0",
                "installments": 84,
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id6",
                  "last_four_digits": "last_four_digits2",
                  "brand": "brand0",
                  "holder_name": "holder_name2",
                  "exp_month": 62,
                  "exp_year": 234,
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "billing_address": {
                    "street": "street8",
                    "number": "number4",
                    "zip_code": "zip_code2",
                    "neighborhood": "neighborhood4",
                    "city": "city2",
                    "state": "state6",
                    "country": "country2",
                    "complement": "complement6",
                    "line_1": "line_18",
                    "line_2": "line_26"
                  },
                  "customer": null,
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8"
                  },
                  "type": "type4",
                  "holder_document": "holder_document0",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits6",
                  "label": "label6"
                },
                "items": {
                  "id": "id8",
                  "description": "description2",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 134,
                    "scheme_type": "scheme_type0",
                    "price_brackets": [
                      {
                        "start_quantity": 75,
                        "price": 13,
                        "end_quantity": null,
                        "overage_price": null
                      }
                    ],
                    "minimum_price": null,
                    "percentage": null
                  },
                  "discounts": [
                    {
                      "id": "id9",
                      "value": 187.31,
                      "discount_type": "discount_type7",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    },
                    {
                      "id": "id0",
                      "value": 187.32,
                      "discount_type": "discount_type8",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    }
                  ],
                  "increments": [
                    {
                      "id": "id1",
                      "value": 43.93,
                      "increment_type": "increment_type3",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    },
                    {
                      "id": "id0",
                      "value": 43.92,
                      "increment_type": "increment_type2",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    }
                  ],
                  "subscription": null,
                  "name": "name8",
                  "quantity": null,
                  "cycles": null,
                  "deleted_at": null
                },
                "statement_descriptor": "statement_descriptor0",
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata4"
                },
                "setup": {
                  "id": "id6",
                  "description": "description4",
                  "amount": 200,
                  "status": "status2"
                },
                "gateway_affiliation_id": "gateway_affiliation_id4",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id7",
                    "value": 97.69,
                    "increment_type": "increment_type9",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id8",
                    "value": 97.7,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id9",
                    "value": 97.71,
                    "increment_type": "increment_type1",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null,
                "split": {
                  "enabled": false,
                  "rules": [
                    {
                      "type": "type2",
                      "amount": 84,
                      "recipient": null,
                      "gateway_id": "gateway_id2",
                      "options": null,
                      "id": "id8"
                    },
                    {
                      "type": "type3",
                      "amount": 85,
                      "recipient": null,
                      "gateway_id": "gateway_id3",
                      "options": null,
                      "id": "id7"
                    }
                  ]
                }
              },
              "name": "name4",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            }
          ],
          "statement_descriptor": "statement_descriptor7",
          "metadata": {
            "key0": "metadata4"
          },
          "setup": {
            "id": "id1",
            "description": "description1",
            "amount": 21,
            "status": "status3"
          },
          "gateway_affiliation_id": "gateway_affiliation_id3",
          "next_billing_at": null,
          "billing_day": null,
          "minimum_price": null,
          "canceled_at": null,
          "discounts": null,
          "increments": [
            {
              "id": "id4",
              "value": 38.46,
              "increment_type": "increment_type6",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            },
            {
              "id": "id3",
              "value": 38.45,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            },
            {
              "id": "id2",
              "value": 38.44,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            }
          ],
          "boleto_due_days": null,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type3",
                "amount": 157,
                "recipient": null,
                "gateway_id": "gateway_id3",
                "options": null,
                "id": "id7"
              }
            ]
          }
        },
        "name": "name1",
        "quantity": null,
        "cycles": null,
        "deleted_at": null
      },
      "code": null,
      "group": null,
      "amount": null
    },
    {
      "id": "id6",
      "quantity": 236,
      "description": "description6",
      "used_at": "2016-03-13T12:52:32.123Z",
      "created_at": "2016-03-13T12:52:32.123Z",
      "status": "status8",
      "deleted_at": null,
      "subscription_item": {
        "id": "id2",
        "description": "description2",
        "status": "status4",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 42,
          "scheme_type": "scheme_type4",
          "price_brackets": [
            {
              "start_quantity": 167,
              "price": 105,
              "end_quantity": null,
              "overage_price": null
            },
            {
              "start_quantity": 168,
              "price": 106,
              "end_quantity": null,
              "overage_price": null
            },
            {
              "start_quantity": 169,
              "price": 107,
              "end_quantity": null,
              "overage_price": null
            }
          ],
          "minimum_price": null,
          "percentage": null
        },
        "discounts": [
          {
            "id": "id3",
            "value": 180.75,
            "discount_type": "discount_type1",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id4",
            "value": 180.76,
            "discount_type": "discount_type2",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          },
          {
            "id": "id5",
            "value": 180.77,
            "discount_type": "discount_type3",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "increments": [
          {
            "id": "id1",
            "value": 36.03,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": null,
            "deleted_at": null,
            "description": null,
            "subscription": null,
            "subscription_item": null
          }
        ],
        "subscription": {
          "id": "id8",
          "code": "code6",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval6",
          "interval_count": 86,
          "billing_type": "billing_type8",
          "current_cycle": null,
          "payment_method": "payment_method2",
          "currency": "currency8",
          "installments": 254,
          "status": "status0",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": null,
          "card": {
            "id": "id2",
            "last_four_digits": "last_four_digits8",
            "brand": "brand6",
            "holder_name": "holder_name8",
            "exp_month": 108,
            "exp_year": 188,
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street6",
              "number": "number6",
              "zip_code": "zip_code0",
              "neighborhood": "neighborhood2",
              "city": "city4",
              "state": "state8",
              "country": "country0",
              "complement": "complement8",
              "line_1": "line_10",
              "line_2": "line_24"
            },
            "customer": null,
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata2"
            },
            "type": "type8",
            "holder_document": "holder_document4",
            "deleted_at": null,
            "first_six_digits": "first_six_digits2",
            "label": "label2"
          },
          "items": [
            {
              "id": "id5",
              "description": "description5",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 135,
                "scheme_type": "scheme_type7",
                "price_brackets": [
                  {
                    "start_quantity": 74,
                    "price": 244,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 75,
                    "price": 243,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 76,
                    "price": 242,
                    "end_quantity": null,
                    "overage_price": null
                  }
                ],
                "minimum_price": null,
                "percentage": null
              },
              "discounts": [
                {
                  "id": "id6",
                  "value": 67.18,
                  "discount_type": "discount_type4",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id7",
                  "value": 67.19,
                  "discount_type": "discount_type5",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id8",
                  "value": 67.2,
                  "discount_type": "discount_type6",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "increments": [
                {
                  "id": "id4",
                  "value": 178.46,
                  "increment_type": "increment_type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "subscription": {
                "id": "id9",
                "code": "code7",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval3",
                "interval_count": 171,
                "billing_type": "billing_type7",
                "current_cycle": null,
                "payment_method": "payment_method1",
                "currency": "currency1",
                "installments": 83,
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id7",
                  "last_four_digits": "last_four_digits3",
                  "brand": "brand1",
                  "holder_name": "holder_name3",
                  "exp_month": 61,
                  "exp_year": 235,
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "billing_address": {
                    "street": "street9",
                    "number": "number3",
                    "zip_code": "zip_code3",
                    "neighborhood": "neighborhood5",
                    "city": "city1",
                    "state": "state5",
                    "country": "country3",
                    "complement": "complement5",
                    "line_1": "line_17",
                    "line_2": "line_27"
                  },
                  "customer": null,
                  "metadata": {
                    "key0": "metadata6"
                  },
                  "type": "type3",
                  "holder_document": "holder_document9",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits7",
                  "label": "label7"
                },
                "items": {
                  "id": "id7",
                  "description": "description3",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 133,
                    "scheme_type": "scheme_type1",
                    "price_brackets": [
                      {
                        "start_quantity": 76,
                        "price": 14,
                        "end_quantity": null,
                        "overage_price": null
                      },
                      {
                        "start_quantity": 77,
                        "price": 15,
                        "end_quantity": null,
                        "overage_price": null
                      }
                    ],
                    "minimum_price": null,
                    "percentage": null
                  },
                  "discounts": [
                    {
                      "id": "id8",
                      "value": 187.3,
                      "discount_type": "discount_type6",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    }
                  ],
                  "increments": [
                    {
                      "id": "id0",
                      "value": 43.92,
                      "increment_type": "increment_type2",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    },
                    {
                      "id": "id9",
                      "value": 43.91,
                      "increment_type": "increment_type1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    },
                    {
                      "id": "id8",
                      "value": 43.9,
                      "increment_type": "increment_type0",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    }
                  ],
                  "subscription": null,
                  "name": "name7",
                  "quantity": null,
                  "cycles": null,
                  "deleted_at": null
                },
                "statement_descriptor": "statement_descriptor9",
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata5",
                  "key2": "metadata6"
                },
                "setup": {
                  "id": "id7",
                  "description": "description3",
                  "amount": 199,
                  "status": "status1"
                },
                "gateway_affiliation_id": "gateway_affiliation_id5",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id8",
                    "value": 97.7,
                    "increment_type": "increment_type0",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null,
                "split": {
                  "enabled": true,
                  "rules": [
                    {
                      "type": "type3",
                      "amount": 85,
                      "recipient": null,
                      "gateway_id": "gateway_id3",
                      "options": null,
                      "id": "id7"
                    },
                    {
                      "type": "type4",
                      "amount": 86,
                      "recipient": null,
                      "gateway_id": "gateway_id4",
                      "options": null,
                      "id": "id6"
                    },
                    {
                      "type": "type5",
                      "amount": 87,
                      "recipient": null,
                      "gateway_id": "gateway_id5",
                      "options": null,
                      "id": "id5"
                    }
                  ]
                }
              },
              "name": "name5",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            {
              "id": "id6",
              "description": "description6",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 134,
                "scheme_type": "scheme_type8",
                "price_brackets": [
                  {
                    "start_quantity": 75,
                    "price": 243,
                    "end_quantity": null,
                    "overage_price": null
                  }
                ],
                "minimum_price": null,
                "percentage": null
              },
              "discounts": [
                {
                  "id": "id7",
                  "value": 67.19,
                  "discount_type": "discount_type5",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "increments": [
                {
                  "id": "id5",
                  "value": 178.47,
                  "increment_type": "increment_type7",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                },
                {
                  "id": "id6",
                  "value": 178.48,
                  "increment_type": "increment_type8",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "subscription": {
                "id": "id8",
                "code": "code6",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval4",
                "interval_count": 170,
                "billing_type": "billing_type8",
                "current_cycle": null,
                "payment_method": "payment_method2",
                "currency": "currency2",
                "installments": 82,
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id8",
                  "last_four_digits": "last_four_digits4",
                  "brand": "brand2",
                  "holder_name": "holder_name4",
                  "exp_month": 60,
                  "exp_year": 236,
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "billing_address": {
                    "street": "street0",
                    "number": "number2",
                    "zip_code": "zip_code4",
                    "neighborhood": "neighborhood6",
                    "city": "city0",
                    "state": "state4",
                    "country": "country4",
                    "complement": "complement4",
                    "line_1": "line_16",
                    "line_2": "line_28"
                  },
                  "customer": null,
                  "metadata": {
                    "key0": "metadata5",
                    "key1": "metadata6",
                    "key2": "metadata7"
                  },
                  "type": "type2",
                  "holder_document": "holder_document8",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits8",
                  "label": "label8"
                },
                "items": {
                  "id": "id6",
                  "description": "description4",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "pricing_scheme": {
                    "price": 132,
                    "scheme_type": "scheme_type2",
                    "price_brackets": [
                      {
                        "start_quantity": 77,
                        "price": 15,
                        "end_quantity": null,
                        "overage_price": null
                      },
                      {
                        "start_quantity": 78,
                        "price": 16,
                        "end_quantity": null,
                        "overage_price": null
                      },
                      {
                        "start_quantity": 79,
                        "price": 17,
                        "end_quantity": null,
                        "overage_price": null
                      }
                    ],
                    "minimum_price": null,
                    "percentage": null
                  },
                  "discounts": [
                    {
                      "id": "id7",
                      "value": 187.29,
                      "discount_type": "discount_type5",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    },
                    {
                      "id": "id8",
                      "value": 187.3,
                      "discount_type": "discount_type6",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    },
                    {
                      "id": "id9",
                      "value": 187.31,
                      "discount_type": "discount_type7",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    }
                  ],
                  "increments": [
                    {
                      "id": "id9",
                      "value": 43.91,
                      "increment_type": "increment_type1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "cycles": null,
                      "deleted_at": null,
                      "description": null,
                      "subscription": null,
                      "subscription_item": null
                    }
                  ],
                  "subscription": null,
                  "name": "name6",
                  "quantity": null,
                  "cycles": null,
                  "deleted_at": null
                },
                "statement_descriptor": "statement_descriptor8",
                "metadata": {
                  "key0": "metadata5"
                },
                "setup": {
                  "id": "id8",
                  "description": "description2",
                  "amount": 198,
                  "status": "status0"
                },
                "gateway_affiliation_id": "gateway_affiliation_id6",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id9",
                    "value": 97.71,
                    "increment_type": "increment_type1",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id0",
                    "value": 97.72,
                    "increment_type": "increment_type2",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null,
                "split": {
                  "enabled": false,
                  "rules": [
                    {
                      "type": "type4",
                      "amount": 86,
                      "recipient": null,
                      "gateway_id": "gateway_id4",
                      "options": null,
                      "id": "id6"
                    }
                  ]
                }
              },
              "name": "name6",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            }
          ],
          "statement_descriptor": "statement_descriptor8",
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata4",
            "key2": "metadata3"
          },
          "setup": {
            "id": "id2",
            "description": "description2",
            "amount": 22,
            "status": "status4"
          },
          "gateway_affiliation_id": "gateway_affiliation_id4",
          "next_billing_at": null,
          "billing_day": null,
          "minimum_price": null,
          "canceled_at": null,
          "discounts": null,
          "increments": [
            {
              "id": "id3",
              "value": 38.45,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            }
          ],
          "boleto_due_days": null,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type2",
                "amount": 158,
                "recipient": null,
                "gateway_id": "gateway_id2",
                "options": null,
                "id": "id8"
              },
              {
                "type": "type1",
                "amount": 159,
                "recipient": null,
                "gateway_id": "gateway_id1",
                "options": null,
                "id": "id9"
              }
            ]
          }
        },
        "name": "name2",
        "quantity": null,
        "cycles": null,
        "deleted_at": null
      },
      "code": null,
      "group": null,
      "amount": null
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

