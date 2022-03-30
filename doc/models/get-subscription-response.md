
# Get Subscription Response

## Structure

`GetSubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `code` | `string` | Required | - | getCode(): string | setCode(string code): void |
| `startAt` | `\DateTime` | Required | - | getStartAt(): \DateTime | setStartAt(\DateTime startAt): void |
| `interval` | `string` | Required | - | getInterval(): string | setInterval(string interval): void |
| `intervalCount` | `int` | Required | - | getIntervalCount(): int | setIntervalCount(int intervalCount): void |
| `billingType` | `string` | Required | - | getBillingType(): string | setBillingType(string billingType): void |
| `currentCycle` | [`?GetPeriodResponse`](../../doc/models/get-period-response.md) | Optional | - | getCurrentCycle(): ?GetPeriodResponse | setCurrentCycle(?GetPeriodResponse currentCycle): void |
| `paymentMethod` | `string` | Required | - | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `currency` | `string` | Required | - | getCurrency(): string | setCurrency(string currency): void |
| `installments` | `int` | Required | - | getInstallments(): int | setInstallments(int installments): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | - | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `card` | [`GetCardResponse`](../../doc/models/get-card-response.md) | Required | - | getCard(): GetCardResponse | setCard(GetCardResponse card): void |
| `items` | [`GetSubscriptionItemResponse[]`](../../doc/models/get-subscription-item-response.md) | Required | - | getItems(): array | setItems(array items): void |
| `statementDescriptor` | `string` | Required | - | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `metadata` | `array<string,string>` | Required | - | getMetadata(): array | setMetadata(array metadata): void |
| `setup` | [`GetSetupResponse`](../../doc/models/get-setup-response.md) | Required | - | getSetup(): GetSetupResponse | setSetup(GetSetupResponse setup): void |
| `gatewayAffiliationId` | `string` | Required | Affiliation Code | getGatewayAffiliationId(): string | setGatewayAffiliationId(string gatewayAffiliationId): void |
| `nextBillingAt` | `?\DateTime` | Optional | - | getNextBillingAt(): ?\DateTime | setNextBillingAt(?\DateTime nextBillingAt): void |
| `billingDay` | `?int` | Optional | - | getBillingDay(): ?int | setBillingDay(?int billingDay): void |
| `minimumPrice` | `?int` | Optional | - | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `canceledAt` | `?\DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `discounts` | [`?(GetDiscountResponse[])`](../../doc/models/get-discount-response.md) | Optional | Subscription discounts | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `increments` | [`GetIncrementResponse[]`](../../doc/models/get-increment-response.md) | Required | Subscription increments | getIncrements(): array | setIncrements(array increments): void |
| `boletoDueDays` | `?int` | Optional | Days until boleto expires | getBoletoDueDays(): ?int | setBoletoDueDays(?int boletoDueDays): void |
| `split` | [`GetSubscriptionSplitResponse`](../../doc/models/get-subscription-split-response.md) | Required | Subscription's split response | getSplit(): GetSubscriptionSplitResponse | setSplit(GetSubscriptionSplitResponse split): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": "code8",
  "start_at": "2016-03-13T12:52:32.123Z",
  "interval": "interval2",
  "interval_count": 82,
  "billing_type": "billing_type6",
  "current_cycle": null,
  "payment_method": "payment_method0",
  "currency": "currency0",
  "installments": 250,
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "customer": null,
  "card": {
    "id": "id6",
    "last_four_digits": "last_four_digits2",
    "brand": "brand0",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
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
      "key0": "metadata7"
    },
    "type": "type4",
    "holder_document": "holder_document0",
    "deleted_at": null,
    "first_six_digits": "first_six_digits6",
    "label": "label6"
  },
  "items": [
    {
      "id": "id7",
      "description": "description7",
      "status": "status1",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "pricing_scheme": {
        "price": 149,
        "scheme_type": "scheme_type1",
        "price_brackets": [
          {
            "start_quantity": 60,
            "price": 2,
            "end_quantity": null,
            "overage_price": null
          },
          {
            "start_quantity": 61,
            "price": 1,
            "end_quantity": null,
            "overage_price": null
          },
          {
            "start_quantity": 62,
            "price": 0,
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
          "value": 236.1,
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
          "value": 236.11,
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
          "value": 236.12,
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
          "id": "id0",
          "value": 92.72,
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
      "subscription": {
        "id": "id7",
        "code": "code5",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval5",
        "interval_count": 175,
        "billing_type": "billing_type1",
        "current_cycle": null,
        "payment_method": "payment_method3",
        "currency": "currency7",
        "installments": 87,
        "status": "status9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": null,
        "card": {
          "id": "id1",
          "last_four_digits": "last_four_digits7",
          "brand": "brand5",
          "holder_name": "holder_name7",
          "exp_month": 19,
          "exp_year": 21,
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
        "items": {
          "id": "id5",
          "description": "description5",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 151,
            "scheme_type": "scheme_type7",
            "price_brackets": [
              {
                "start_quantity": 58,
                "price": 4,
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
              "value": 18.38,
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
              "id": "id4",
              "value": 129.66,
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
              "value": 129.67,
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
            "id": "id9",
            "code": "code7",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval3",
            "interval_count": 187,
            "billing_type": "billing_type7",
            "current_cycle": null,
            "payment_method": "payment_method1",
            "currency": "currency1",
            "installments": 99,
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id7",
              "last_four_digits": "last_four_digits3",
              "brand": "brand1",
              "holder_name": "holder_name3",
              "exp_month": 77,
              "exp_year": 219,
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street1",
                "number": "number1",
                "zip_code": "zip_code5",
                "neighborhood": "neighborhood7",
                "city": "city9",
                "state": "state3",
                "country": "country5",
                "complement": "complement3",
                "line_1": "line_15",
                "line_2": "line_29"
              },
              "customer": null,
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata7",
                "key2": "metadata8"
              },
              "type": "type3",
              "holder_document": "holder_document9",
              "deleted_at": null,
              "first_six_digits": "first_six_digits7",
              "label": "label7"
            },
            "items": null,
            "statement_descriptor": "statement_descriptor9",
            "metadata": {
              "key0": "metadata4"
            },
            "setup": {
              "id": "id3",
              "description": "description7",
              "amount": 133,
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
                "value": 48.9,
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
                "value": 48.91,
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
              "enabled": true,
              "rules": [
                {
                  "type": "type1",
                  "amount": 253,
                  "recipient": null,
                  "gateway_id": "gateway_id1",
                  "options": null,
                  "id": "id9"
                }
              ]
            }
          },
          "name": "name5",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
        "statement_descriptor": "statement_descriptor7",
        "metadata": {
          "key0": "metadata4",
          "key1": "metadata3",
          "key2": "metadata2"
        },
        "setup": {
          "id": "id1",
          "description": "description1",
          "amount": 111,
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
            "value": 11.96,
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
        "boleto_due_days": null,
        "split": {
          "enabled": true,
          "rules": [
            {
              "type": "type3",
              "amount": 247,
              "recipient": null,
              "gateway_id": "gateway_id3",
              "options": null,
              "id": "id7"
            },
            {
              "type": "type2",
              "amount": 248,
              "recipient": null,
              "gateway_id": "gateway_id2",
              "options": null,
              "id": "id8"
            }
          ]
        }
      },
      "name": "name7",
      "quantity": null,
      "cycles": null,
      "deleted_at": null
    },
    {
      "id": "id8",
      "description": "description8",
      "status": "status0",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "pricing_scheme": {
        "price": 150,
        "scheme_type": "scheme_type0",
        "price_brackets": [
          {
            "start_quantity": 59,
            "price": 3,
            "end_quantity": null,
            "overage_price": null
          },
          {
            "start_quantity": 60,
            "price": 2,
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
          "value": 236.11,
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
          "id": "id1",
          "value": 92.73,
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
          "value": 92.72,
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
          "value": 92.71,
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
      "subscription": {
        "id": "id6",
        "code": "code4",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval4",
        "interval_count": 174,
        "billing_type": "billing_type0",
        "current_cycle": null,
        "payment_method": "payment_method4",
        "currency": "currency6",
        "installments": 86,
        "status": "status8",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": null,
        "card": {
          "id": "id0",
          "last_four_digits": "last_four_digits6",
          "brand": "brand4",
          "holder_name": "holder_name6",
          "exp_month": 20,
          "exp_year": 20,
          "status": "status8",
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
            "key0": "metadata3",
            "key1": "metadata4",
            "key2": "metadata5"
          },
          "type": "type0",
          "holder_document": "holder_document6",
          "deleted_at": null,
          "first_six_digits": "first_six_digits0",
          "label": "label0"
        },
        "items": {
          "id": "id4",
          "description": "description4",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 152,
            "scheme_type": "scheme_type6",
            "price_brackets": [
              {
                "start_quantity": 57,
                "price": 5,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 58,
                "price": 4,
                "end_quantity": null,
                "overage_price": null
              },
              {
                "start_quantity": 59,
                "price": 3,
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
              "value": 18.37,
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
              "value": 18.38,
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
              "value": 18.39,
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
              "id": "id3",
              "value": 129.65,
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
            "id": "id0",
            "code": "code8",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval2",
            "interval_count": 188,
            "billing_type": "billing_type6",
            "current_cycle": null,
            "payment_method": "payment_method0",
            "currency": "currency0",
            "installments": 100,
            "status": "status8",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": null,
            "card": {
              "id": "id6",
              "last_four_digits": "last_four_digits2",
              "brand": "brand0",
              "holder_name": "holder_name2",
              "exp_month": 78,
              "exp_year": 218,
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "billing_address": {
                "street": "street2",
                "number": "number0",
                "zip_code": "zip_code6",
                "neighborhood": "neighborhood8",
                "city": "city8",
                "state": "state2",
                "country": "country6",
                "complement": "complement2",
                "line_1": "line_14",
                "line_2": "line_20"
              },
              "customer": null,
              "metadata": {
                "key0": "metadata7"
              },
              "type": "type4",
              "holder_document": "holder_document0",
              "deleted_at": null,
              "first_six_digits": "first_six_digits6",
              "label": "label6"
            },
            "items": null,
            "statement_descriptor": "statement_descriptor0",
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata4",
              "key2": "metadata5"
            },
            "setup": {
              "id": "id4",
              "description": "description6",
              "amount": 132,
              "status": "status4"
            },
            "gateway_affiliation_id": "gateway_affiliation_id6",
            "next_billing_at": null,
            "billing_day": null,
            "minimum_price": null,
            "canceled_at": null,
            "discounts": null,
            "increments": [
              {
                "id": "id7",
                "value": 48.89,
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
            "boleto_due_days": null,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type0",
                  "amount": 252,
                  "recipient": null,
                  "gateway_id": "gateway_id0",
                  "options": null,
                  "id": "id0"
                },
                {
                  "type": "type9",
                  "amount": 251,
                  "recipient": null,
                  "gateway_id": "gateway_id9",
                  "options": null,
                  "id": "id1"
                }
              ]
            }
          },
          "name": "name4",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
        "statement_descriptor": "statement_descriptor6",
        "metadata": {
          "key0": "metadata3"
        },
        "setup": {
          "id": "id0",
          "description": "description0",
          "amount": 110,
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
            "value": 11.97,
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
            "id": "id4",
            "value": 11.96,
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
            "value": 11.95,
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
              "type": "type4",
              "amount": 246,
              "recipient": null,
              "gateway_id": "gateway_id4",
              "options": null,
              "id": "id6"
            }
          ]
        }
      },
      "name": "name8",
      "quantity": null,
      "cycles": null,
      "deleted_at": null
    }
  ],
  "statement_descriptor": "statement_descriptor0",
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "setup": {
    "id": "id6",
    "description": "description4",
    "amount": 110,
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
      "value": 124.19,
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
  "boleto_due_days": null,
  "split": {
    "enabled": false,
    "rules": [
      {
        "type": "type4",
        "amount": 246,
        "recipient": null,
        "gateway_id": "gateway_id4",
        "options": null,
        "id": "id6"
      },
      {
        "type": "type3",
        "amount": 245,
        "recipient": null,
        "gateway_id": "gateway_id3",
        "options": null,
        "id": "id7"
      }
    ]
  }
}
```

