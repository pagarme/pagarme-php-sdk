
# List Subscriptions Response

Response object for listing subscriptions

## Structure

`ListSubscriptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetSubscriptionResponse[]`](/doc/models/get-subscription-response.md) | Required | The subscription objects | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](/doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "code": "code3",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval3",
      "interval_count": 249,
      "billing_type": "billing_type9",
      "current_cycle": null,
      "payment_method": "payment_method5",
      "currency": "currency5",
      "installments": 161,
      "status": "status7",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": null,
      "card": {
        "id": "id9",
        "last_four_digits": "last_four_digits5",
        "brand": "brand3",
        "holder_name": "holder_name5",
        "exp_month": 55,
        "exp_year": 95,
        "status": "status1",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street1",
          "number": "number9",
          "zip_code": "zip_code5",
          "neighborhood": "neighborhood7",
          "city": "city1",
          "state": "state7",
          "country": "country5",
          "complement": "complement7",
          "line_1": "line_15",
          "line_2": "line_29"
        },
        "customer": null,
        "metadata": {
          "key0": "metadata0",
          "key1": "metadata9",
          "key2": "metadata8"
        },
        "type": "type9",
        "holder_document": "holder_document3",
        "deleted_at": null,
        "first_six_digits": "first_six_digits9",
        "label": "label9"
      },
      "items": [
        {
          "id": "id2",
          "description": "description2",
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
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 238,
                "price": 176,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 239,
                "price": 177,
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
              "value": 130.25,
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
              "value": 130.26,
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
              "value": 130.27,
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
              "value": 241.53,
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
            "interval_count": 156,
            "billing_type": "billing_type2",
            "current_cycle": null,
            "payment_method": "payment_method8",
            "currency": "currency8",
            "installments": 68,
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id2",
              "last_four_digits": "last_four_digits8",
              "brand": "brand6",
              "holder_name": "holder_name8",
              "exp_month": 38,
              "exp_year": 2,
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street4",
                "number": "number8",
                "zip_code": "zip_code8",
                "neighborhood": "neighborhood0",
                "city": "city6",
                "state": "state0",
                "country": "country8",
                "complement": "complement0",
                "line_1": "line_12",
                "line_2": "line_22"
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
            "items": {
              "id": "id6",
              "description": "description6",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 170,
                "scheme_type": "scheme_type8",
                "price_brackets": [
                  {
                    "start_quantity": 39,
                    "price": 23,
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
                  "value": 197.39,
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
                  "value": 52.67,
                  "increment_type": "increment_type7",
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
                  "value": 52.68,
                  "increment_type": "increment_type8",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "subscription": {
                "id": "id2",
                "code": "code0",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval0",
                "interval_count": 214,
                "billing_type": "billing_type4",
                "current_cycle": null,
                "payment_method": "payment_method8",
                "currency": "currency2",
                "installments": 126,
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id4",
                  "last_four_digits": "last_four_digits0",
                  "brand": "brand8",
                  "holder_name": "holder_name0",
                  "exp_month": 104,
                  "exp_year": 192,
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "billing_address": {
                    "street": "street4",
                    "number": "number8",
                    "zip_code": "zip_code8",
                    "neighborhood": "neighborhood0",
                    "city": "city6",
                    "state": "state0",
                    "country": "country8",
                    "complement": "complement0",
                    "line_1": "line_12",
                    "line_2": "line_22"
                  },
                  "customer": null,
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata0"
                  },
                  "type": "type6",
                  "holder_document": "holder_document2",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits4",
                  "label": "label4"
                },
                "items": null,
                "statement_descriptor": "statement_descriptor2",
                "metadata": {
                  "key0": "metadata1",
                  "key1": "metadata2"
                },
                "setup": {
                  "id": "id6",
                  "description": "description4",
                  "amount": 150,
                  "status": "status2"
                },
                "gateway_affiliation_id": "gateway_affiliation_id8",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id5",
                    "value": 20.47,
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
                    "id": "id6",
                    "value": 20.48,
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
                    "id": "id7",
                    "value": 20.49,
                    "increment_type": "increment_type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  }
                ],
                "boleto_due_days": null
              },
              "name": "name6",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            "statement_descriptor": "statement_descriptor8",
            "metadata": {
              "key0": "metadata5",
              "key1": "metadata4",
              "key2": "metadata3"
            },
            "setup": {
              "id": "id2",
              "description": "description2",
              "amount": 92,
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
                "id": "id7",
                "value": 158.09,
                "increment_type": "increment_type9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              }
            ],
            "boleto_due_days": null
          },
          "name": "name2",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
        {
          "id": "id3",
          "description": "description3",
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
                "end_quantity": null,
                "overage_price": null
              }
            ],
            "minimum_price": null,
            "percentage": null
          },
          "discounts": [
            {
              "id": "id4",
              "value": 130.26,
              "discount_type": "discount_type2",
              "status": "status6",
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
              "id": "id2",
              "value": 241.54,
              "increment_type": "increment_type4",
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
              "value": 241.55,
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
          "subscription": {
            "id": "id9",
            "code": "code7",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval7",
            "interval_count": 157,
            "billing_type": "billing_type3",
            "current_cycle": null,
            "payment_method": "payment_method9",
            "currency": "currency9",
            "installments": 69,
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id3",
              "last_four_digits": "last_four_digits9",
              "brand": "brand7",
              "holder_name": "holder_name9",
              "exp_month": 37,
              "exp_year": 3,
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street5",
                "number": "number7",
                "zip_code": "zip_code9",
                "neighborhood": "neighborhood1",
                "city": "city5",
                "state": "state9",
                "country": "country9",
                "complement": "complement9",
                "line_1": "line_11",
                "line_2": "line_23"
              },
              "customer": null,
              "metadata": {
                "key0": "metadata0"
              },
              "type": "type7",
              "holder_document": "holder_document3",
              "deleted_at": null,
              "first_six_digits": "first_six_digits3",
              "label": "label3"
            },
            "items": {
              "id": "id7",
              "description": "description7",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 169,
                "scheme_type": "scheme_type9",
                "price_brackets": [
                  {
                    "start_quantity": 40,
                    "price": 22,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 41,
                    "price": 21,
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
                  "value": 197.4,
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
                  "value": 197.41,
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
                  "id": "id6",
                  "value": 52.68,
                  "increment_type": "increment_type8",
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
                  "value": 52.69,
                  "increment_type": "increment_type9",
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
                  "value": 52.7,
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
              "subscription": {
                "id": "id3",
                "code": "code1",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval9",
                "interval_count": 215,
                "billing_type": "billing_type3",
                "current_cycle": null,
                "payment_method": "payment_method7",
                "currency": "currency3",
                "installments": 127,
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id3",
                  "last_four_digits": "last_four_digits9",
                  "brand": "brand7",
                  "holder_name": "holder_name9",
                  "exp_month": 105,
                  "exp_year": 191,
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "billing_address": {
                    "street": "street5",
                    "number": "number7",
                    "zip_code": "zip_code9",
                    "neighborhood": "neighborhood1",
                    "city": "city5",
                    "state": "state9",
                    "country": "country9",
                    "complement": "complement9",
                    "line_1": "line_11",
                    "line_2": "line_23"
                  },
                  "customer": null,
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata1",
                    "key2": "metadata2"
                  },
                  "type": "type7",
                  "holder_document": "holder_document3",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits3",
                  "label": "label3"
                },
                "items": null,
                "statement_descriptor": "statement_descriptor3",
                "metadata": {
                  "key0": "metadata0"
                },
                "setup": {
                  "id": "id7",
                  "description": "description3",
                  "amount": 151,
                  "status": "status1"
                },
                "gateway_affiliation_id": "gateway_affiliation_id9",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id4",
                    "value": 20.46,
                    "increment_type": "increment_type4",
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
                    "value": 20.47,
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
                "boleto_due_days": null
              },
              "name": "name7",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            "statement_descriptor": "statement_descriptor9",
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5"
            },
            "setup": {
              "id": "id3",
              "description": "description3",
              "amount": 93,
              "status": "status5"
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
                "value": 158.1,
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
                "value": 158.11,
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
            "boleto_due_days": null
          },
          "name": "name3",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        }
      ],
      "statement_descriptor": "statement_descriptor5",
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "setup": {
        "id": "id9",
        "description": "description9",
        "amount": 185,
        "status": "status1"
      },
      "gateway_affiliation_id": "gateway_affiliation_id1",
      "next_billing_at": null,
      "billing_day": null,
      "minimum_price": null,
      "canceled_at": null,
      "discounts": null,
      "increments": [
        {
          "id": "id4",
          "value": 15.66,
          "increment_type": "increment_type6",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": null,
          "deleted_at": null,
          "description": null,
          "subscription": null,
          "subscription_item": null
        }
      ],
      "boleto_due_days": null
    },
    {
      "id": "id6",
      "code": "code4",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval4",
      "interval_count": 250,
      "billing_type": "billing_type0",
      "current_cycle": null,
      "payment_method": "payment_method6",
      "currency": "currency6",
      "installments": 162,
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": null,
      "card": {
        "id": "id0",
        "last_four_digits": "last_four_digits6",
        "brand": "brand4",
        "holder_name": "holder_name6",
        "exp_month": 56,
        "exp_year": 96,
        "status": "status2",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street2",
          "number": "number0",
          "zip_code": "zip_code6",
          "neighborhood": "neighborhood8",
          "city": "city2",
          "state": "state8",
          "country": "country6",
          "complement": "complement8",
          "line_1": "line_16",
          "line_2": "line_20"
        },
        "customer": null,
        "metadata": {
          "key0": "metadata9"
        },
        "type": "type0",
        "holder_document": "holder_document4",
        "deleted_at": null,
        "first_six_digits": "first_six_digits0",
        "label": "label0"
      },
      "items": [
        {
          "id": "id3",
          "description": "description3",
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
                "end_quantity": null,
                "overage_price": null
              }
            ],
            "minimum_price": null,
            "percentage": null
          },
          "discounts": [
            {
              "id": "id4",
              "value": 130.26,
              "discount_type": "discount_type2",
              "status": "status6",
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
              "id": "id2",
              "value": 241.54,
              "increment_type": "increment_type4",
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
              "value": 241.55,
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
          "subscription": {
            "id": "id9",
            "code": "code7",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval7",
            "interval_count": 157,
            "billing_type": "billing_type3",
            "current_cycle": null,
            "payment_method": "payment_method9",
            "currency": "currency9",
            "installments": 69,
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id3",
              "last_four_digits": "last_four_digits9",
              "brand": "brand7",
              "holder_name": "holder_name9",
              "exp_month": 37,
              "exp_year": 3,
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street5",
                "number": "number7",
                "zip_code": "zip_code9",
                "neighborhood": "neighborhood1",
                "city": "city5",
                "state": "state9",
                "country": "country9",
                "complement": "complement9",
                "line_1": "line_11",
                "line_2": "line_23"
              },
              "customer": null,
              "metadata": {
                "key0": "metadata0"
              },
              "type": "type7",
              "holder_document": "holder_document3",
              "deleted_at": null,
              "first_six_digits": "first_six_digits3",
              "label": "label3"
            },
            "items": {
              "id": "id7",
              "description": "description7",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 169,
                "scheme_type": "scheme_type9",
                "price_brackets": [
                  {
                    "start_quantity": 40,
                    "price": 22,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 41,
                    "price": 21,
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
                  "value": 197.4,
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
                  "value": 197.41,
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
                  "id": "id6",
                  "value": 52.68,
                  "increment_type": "increment_type8",
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
                  "value": 52.69,
                  "increment_type": "increment_type9",
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
                  "value": 52.7,
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
              "subscription": {
                "id": "id3",
                "code": "code1",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval9",
                "interval_count": 215,
                "billing_type": "billing_type3",
                "current_cycle": null,
                "payment_method": "payment_method7",
                "currency": "currency3",
                "installments": 127,
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id3",
                  "last_four_digits": "last_four_digits9",
                  "brand": "brand7",
                  "holder_name": "holder_name9",
                  "exp_month": 105,
                  "exp_year": 191,
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "billing_address": {
                    "street": "street5",
                    "number": "number7",
                    "zip_code": "zip_code9",
                    "neighborhood": "neighborhood1",
                    "city": "city5",
                    "state": "state9",
                    "country": "country9",
                    "complement": "complement9",
                    "line_1": "line_11",
                    "line_2": "line_23"
                  },
                  "customer": null,
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata1",
                    "key2": "metadata2"
                  },
                  "type": "type7",
                  "holder_document": "holder_document3",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits3",
                  "label": "label3"
                },
                "items": null,
                "statement_descriptor": "statement_descriptor3",
                "metadata": {
                  "key0": "metadata0"
                },
                "setup": {
                  "id": "id7",
                  "description": "description3",
                  "amount": 151,
                  "status": "status1"
                },
                "gateway_affiliation_id": "gateway_affiliation_id9",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id4",
                    "value": 20.46,
                    "increment_type": "increment_type4",
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
                    "value": 20.47,
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
                "boleto_due_days": null
              },
              "name": "name7",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            "statement_descriptor": "statement_descriptor9",
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5"
            },
            "setup": {
              "id": "id3",
              "description": "description3",
              "amount": 93,
              "status": "status5"
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
                "value": 158.1,
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
                "value": 158.11,
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
            "boleto_due_days": null
          },
          "name": "name3",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
        {
          "id": "id4",
          "description": "description4",
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
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 240,
                "price": 178,
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
              "value": 130.27,
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
              "value": 130.28,
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
              "value": 241.55,
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
              "value": 241.56,
              "increment_type": "increment_type6",
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
              "value": 241.57,
              "increment_type": "increment_type7",
              "status": "status7",
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
            "interval": "interval8",
            "interval_count": 158,
            "billing_type": "billing_type4",
            "current_cycle": null,
            "payment_method": "payment_method0",
            "currency": "currency0",
            "installments": 70,
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id4",
              "last_four_digits": "last_four_digits0",
              "brand": "brand8",
              "holder_name": "holder_name0",
              "exp_month": 36,
              "exp_year": 4,
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
                "key0": "metadata9",
                "key1": "metadata0",
                "key2": "metadata1"
              },
              "type": "type6",
              "holder_document": "holder_document2",
              "deleted_at": null,
              "first_six_digits": "first_six_digits4",
              "label": "label4"
            },
            "items": {
              "id": "id8",
              "description": "description8",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 168,
                "scheme_type": "scheme_type0",
                "price_brackets": [
                  {
                    "start_quantity": 41,
                    "price": 21,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 42,
                    "price": 20,
                    "end_quantity": null,
                    "overage_price": null
                  },
                  {
                    "start_quantity": 43,
                    "price": 19,
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
                  "value": 197.41,
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
                  "value": 197.42,
                  "discount_type": "discount_type8",
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
                  "value": 197.43,
                  "discount_type": "discount_type9",
                  "status": "status3",
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
                  "id": "id7",
                  "value": 52.69,
                  "increment_type": "increment_type9",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "subscription": {
                "id": "id4",
                "code": "code2",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval8",
                "interval_count": 216,
                "billing_type": "billing_type2",
                "current_cycle": null,
                "payment_method": "payment_method6",
                "currency": "currency4",
                "installments": 128,
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id2",
                  "last_four_digits": "last_four_digits8",
                  "brand": "brand6",
                  "holder_name": "holder_name8",
                  "exp_month": 106,
                  "exp_year": 190,
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
                    "key0": "metadata1"
                  },
                  "type": "type8",
                  "holder_document": "holder_document4",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits2",
                  "label": "label2"
                },
                "items": null,
                "statement_descriptor": "statement_descriptor4",
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata0",
                  "key2": "metadata1"
                },
                "setup": {
                  "id": "id8",
                  "description": "description2",
                  "amount": 152,
                  "status": "status0"
                },
                "gateway_affiliation_id": "gateway_affiliation_id0",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id3",
                    "value": 20.45,
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
                "boleto_due_days": null
              },
              "name": "name8",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            "statement_descriptor": "statement_descriptor0",
            "metadata": {
              "key0": "metadata7"
            },
            "setup": {
              "id": "id4",
              "description": "description4",
              "amount": 94,
              "status": "status6"
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
                "value": 158.11,
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
                "value": 158.12,
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
                "id": "id1",
                "value": 158.13,
                "increment_type": "increment_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": null,
                "deleted_at": null,
                "description": null,
                "subscription": null,
                "subscription_item": null
              }
            ],
            "boleto_due_days": null
          },
          "name": "name4",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
        {
          "id": "id5",
          "description": "description5",
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
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 241,
                "price": 179,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 242,
                "price": 180,
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
              "value": 130.28,
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
              "value": 130.29,
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
              "value": 130.3,
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
              "value": 241.56,
              "increment_type": "increment_type6",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            }
          ],
          "subscription": {
            "id": "id1",
            "code": "code9",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval9",
            "interval_count": 159,
            "billing_type": "billing_type5",
            "current_cycle": null,
            "payment_method": "payment_method1",
            "currency": "currency1",
            "installments": 71,
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id5",
              "last_four_digits": "last_four_digits1",
              "brand": "brand9",
              "holder_name": "holder_name1",
              "exp_month": 35,
              "exp_year": 5,
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
                "key0": "metadata8",
                "key1": "metadata9"
              },
              "type": "type5",
              "holder_document": "holder_document1",
              "deleted_at": null,
              "first_six_digits": "first_six_digits5",
              "label": "label5"
            },
            "items": {
              "id": "id9",
              "description": "description9",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 167,
                "scheme_type": "scheme_type1",
                "price_brackets": [
                  {
                    "start_quantity": 42,
                    "price": 20,
                    "end_quantity": null,
                    "overage_price": null
                  }
                ],
                "minimum_price": null,
                "percentage": null
              },
              "discounts": [
                {
                  "id": "id0",
                  "value": 197.42,
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
                  "id": "id8",
                  "value": 52.7,
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
                  "value": 52.71,
                  "increment_type": "increment_type1",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "cycles": null,
                  "deleted_at": null,
                  "description": null,
                  "subscription": null,
                  "subscription_item": null
                }
              ],
              "subscription": {
                "id": "id5",
                "code": "code3",
                "start_at": "2016-03-13T12:52:32.123Z",
                "interval": "interval7",
                "interval_count": 217,
                "billing_type": "billing_type1",
                "current_cycle": null,
                "payment_method": "payment_method5",
                "currency": "currency5",
                "installments": 129,
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": null,
                "card": {
                  "id": "id1",
                  "last_four_digits": "last_four_digits7",
                  "brand": "brand5",
                  "holder_name": "holder_name7",
                  "exp_month": 107,
                  "exp_year": 189,
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
                    "key1": "metadata3"
                  },
                  "type": "type9",
                  "holder_document": "holder_document5",
                  "deleted_at": null,
                  "first_six_digits": "first_six_digits1",
                  "label": "label1"
                },
                "items": null,
                "statement_descriptor": "statement_descriptor5",
                "metadata": {
                  "key0": "metadata8",
                  "key1": "metadata9"
                },
                "setup": {
                  "id": "id9",
                  "description": "description1",
                  "amount": 153,
                  "status": "status9"
                },
                "gateway_affiliation_id": "gateway_affiliation_id1",
                "next_billing_at": null,
                "billing_day": null,
                "minimum_price": null,
                "canceled_at": null,
                "discounts": null,
                "increments": [
                  {
                    "id": "id2",
                    "value": 20.44,
                    "increment_type": "increment_type6",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "cycles": null,
                    "deleted_at": null,
                    "description": null,
                    "subscription": null,
                    "subscription_item": null
                  },
                  {
                    "id": "id3",
                    "value": 20.45,
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
                    "value": 20.46,
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
                "boleto_due_days": null
              },
              "name": "name9",
              "quantity": null,
              "cycles": null,
              "deleted_at": null
            },
            "statement_descriptor": "statement_descriptor1",
            "metadata": {
              "key0": "metadata8",
              "key1": "metadata7",
              "key2": "metadata6"
            },
            "setup": {
              "id": "id5",
              "description": "description5",
              "amount": 95,
              "status": "status7"
            },
            "gateway_affiliation_id": "gateway_affiliation_id7",
            "next_billing_at": null,
            "billing_day": null,
            "minimum_price": null,
            "canceled_at": null,
            "discounts": null,
            "increments": [
              {
                "id": "id0",
                "value": 158.12,
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
            "boleto_due_days": null
          },
          "name": "name5",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        }
      ],
      "statement_descriptor": "statement_descriptor6",
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "setup": {
        "id": "id0",
        "description": "description0",
        "amount": 186,
        "status": "status2"
      },
      "gateway_affiliation_id": "gateway_affiliation_id2",
      "next_billing_at": null,
      "billing_day": null,
      "minimum_price": null,
      "canceled_at": null,
      "discounts": null,
      "increments": [
        {
          "id": "id5",
          "value": 15.67,
          "increment_type": "increment_type7",
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
          "value": 15.68,
          "increment_type": "increment_type8",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": null,
          "deleted_at": null,
          "description": null,
          "subscription": null,
          "subscription_item": null
        }
      ],
      "boleto_due_days": null
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

