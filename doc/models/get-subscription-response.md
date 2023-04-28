
# Get Subscription Response

## Structure

`GetSubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `startAt` | `?\DateTime` | Optional | - | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `interval` | `?string` | Optional | - | getInterval(): ?string | setInterval(?string interval): void |
| `intervalCount` | `?int` | Optional | - | getIntervalCount(): ?int | setIntervalCount(?int intervalCount): void |
| `billingType` | `?string` | Optional | - | getBillingType(): ?string | setBillingType(?string billingType): void |
| `currentCycle` | [`?GetPeriodResponse`](../../doc/models/get-period-response.md) | Optional | - | getCurrentCycle(): ?GetPeriodResponse | setCurrentCycle(?GetPeriodResponse currentCycle): void |
| `paymentMethod` | `?string` | Optional | - | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `installments` | `?int` | Optional | - | getInstallments(): ?int | setInstallments(?int installments): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `card` | [`?GetCardResponse`](../../doc/models/get-card-response.md) | Optional | - | getCard(): ?GetCardResponse | setCard(?GetCardResponse card): void |
| `items` | [`?(GetSubscriptionItemResponse[])`](../../doc/models/get-subscription-item-response.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `statementDescriptor` | `?string` | Optional | - | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `setup` | [`?GetSetupResponse`](../../doc/models/get-setup-response.md) | Optional | - | getSetup(): ?GetSetupResponse | setSetup(?GetSetupResponse setup): void |
| `gatewayAffiliationId` | `?string` | Optional | Affiliation Code | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |
| `nextBillingAt` | `?\DateTime` | Optional | - | getNextBillingAt(): ?\DateTime | setNextBillingAt(?\DateTime nextBillingAt): void |
| `billingDay` | `?int` | Optional | - | getBillingDay(): ?int | setBillingDay(?int billingDay): void |
| `minimumPrice` | `?int` | Optional | - | getMinimumPrice(): ?int | setMinimumPrice(?int minimumPrice): void |
| `canceledAt` | `?\DateTime` | Optional | - | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `discounts` | [`?(GetDiscountResponse[])`](../../doc/models/get-discount-response.md) | Optional | Subscription discounts | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `increments` | [`?(GetIncrementResponse[])`](../../doc/models/get-increment-response.md) | Optional | Subscription increments | getIncrements(): ?array | setIncrements(?array increments): void |
| `boletoDueDays` | `?int` | Optional | Days until boleto expires | getBoletoDueDays(): ?int | setBoletoDueDays(?int boletoDueDays): void |
| `split` | [`?GetSubscriptionSplitResponse`](../../doc/models/get-subscription-split-response.md) | Optional | Subscription's split response | getSplit(): ?GetSubscriptionSplitResponse | setSplit(?GetSubscriptionSplitResponse split): void |
| `boleto` | [`?GetSubscriptionBoletoResponse`](../../doc/models/get-subscription-boleto-response.md) | Optional | - | getBoleto(): ?GetSubscriptionBoletoResponse | setBoleto(?GetSubscriptionBoletoResponse boleto): void |
| `manualBilling` | `?bool` | Optional | - | getManualBilling(): ?bool | setManualBilling(?bool manualBilling): void |

## Example (as JSON)

```json
{
  "boleto": {
    "interest": {
      "days": 2,
      "type": "percentage",
      "amount": 20
    },
    "fine": {
      "days": 2,
      "type": "flat",
      "amount": 10
    },
    "max_days_to_pay_past_due": 2
  },
  "id": "id0",
  "code": "code8",
  "start_at": "2016-03-13T12:52:32.123Z",
  "interval": "interval2",
  "interval_count": 82,
  "billing_type": "billing_type6",
  "current_cycle": {
    "start_at": "2016-03-13T12:52:32.123Z",
    "end_at": "2016-03-13T12:52:32.123Z",
    "id": "id8",
    "billing_at": "2016-03-13T12:52:32.123Z",
    "subscription": {
      "id": "id6",
      "code": "code4",
      "start_at": "2016-03-13T12:52:32.123Z",
      "interval": "interval4",
      "interval_count": 24,
      "billing_type": "billing_type0",
      "current_cycle": {},
      "payment_method": "payment_method4",
      "currency": "currency6",
      "installments": 192,
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "customer": {
        "id": "id6",
        "name": "name6",
        "email": "email0",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document0",
        "type": "type4",
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
            "key0": "metadata7",
            "key1": "metadata6"
          },
          "line_1": "line_16",
          "line_2": "line_20",
          "deleted_at": "2016-03-13T12:52:32.123Z"
        },
        "metadata": {
          "key0": "metadata7",
          "key1": "metadata8",
          "key2": "metadata9"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code8",
            "number": "number6",
            "area_code": "area_code8"
          },
          "mobile_phone": {
            "country_code": "country_code2",
            "number": "number4",
            "area_code": "area_code8"
          }
        },
        "fb_id": 184,
        "code": "code4",
        "document_type": "document_type4"
      },
      "card": {
        "id": "id0",
        "last_four_digits": "last_four_digits6",
        "brand": "brand4",
        "holder_name": "holder_name6",
        "exp_month": 170,
        "exp_year": 126,
        "status": "status8",
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
        "customer": {
          "id": "id0",
          "name": "name0",
          "email": "email6",
          "delinquent": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document6",
          "type": "type0",
          "fb_access_token": "fb_access_token4",
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
            "customer": {},
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata2"
            },
            "line_1": "line_10",
            "line_2": "line_24",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata3",
            "key1": "metadata4"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code2",
              "number": "number0",
              "area_code": "area_code2"
            },
            "mobile_phone": {
              "country_code": "country_code8",
              "number": "number4",
              "area_code": "area_code8"
            }
          },
          "fb_id": 114,
          "code": "code8",
          "document_type": "document_type8"
        },
        "metadata": {
          "key0": "metadata3",
          "key1": "metadata4",
          "key2": "metadata5"
        },
        "type": "type0",
        "holder_document": "holder_document6",
        "deleted_at": "2016-03-13T12:52:32.123Z",
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
            "price": 197,
            "scheme_type": "scheme_type5",
            "price_brackets": [
              {
                "start_quantity": 12,
                "price": 50,
                "end_quantity": 20,
                "overage_price": 34
              },
              {
                "start_quantity": 13,
                "price": 49,
                "end_quantity": 21,
                "overage_price": 35
              }
            ],
            "minimum_price": 101,
            "percentage": 132.93
          },
          "discounts": [
            {
              "id": "id4",
              "value": 130.56,
              "discount_type": "discount_type2",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 24,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id5",
              "value": 130.57,
              "discount_type": "discount_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 25,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description5",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {
              "id": "id2",
              "value": 241.84,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 112,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description2",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id3",
              "value": 241.85,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 111,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description3",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id4",
              "value": 241.86,
              "increment_type": "increment_type6",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 110,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description4",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "subscription": {},
          "name": "name3",
          "quantity": 69,
          "cycles": 89,
          "deleted_at": "2016-03-13T12:52:32.123Z"
        }
      ],
      "statement_descriptor": "statement_descriptor6",
      "metadata": {
        "key0": "metadata3"
      },
      "setup": {
        "id": "id0",
        "description": "description0",
        "amount": 216,
        "status": "status2"
      },
      "gateway_affiliation_id": "gateway_affiliation_id2",
      "next_billing_at": "2016-03-13T12:52:32.123Z",
      "billing_day": 164,
      "minimum_price": 22,
      "canceled_at": "2016-03-13T12:52:32.123Z",
      "discounts": [
        {
          "id": "id7",
          "value": 160.69,
          "discount_type": "discount_type5",
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 221,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description7",
          "subscription": {},
          "subscription_item": {
            "id": "id3",
            "description": "description3",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 77,
              "scheme_type": "scheme_type5",
              "price_brackets": [
                {
                  "start_quantity": 132,
                  "price": 70,
                  "end_quantity": 140,
                  "overage_price": 154
                }
              ],
              "minimum_price": 19,
              "percentage": 198.13
            },
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id2",
                "value": 51.04,
                "increment_type": "increment_type4",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 8,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id3",
                "value": 51.05,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 9,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name3",
            "quantity": 189,
            "cycles": 209,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id8",
          "value": 160.7,
          "discount_type": "discount_type6",
          "status": "status0",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 222,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description8",
          "subscription": {},
          "subscription_item": {
            "id": "id4",
            "description": "description4",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 76,
              "scheme_type": "scheme_type6",
              "price_brackets": [
                {
                  "start_quantity": 133,
                  "price": 71,
                  "end_quantity": 141,
                  "overage_price": 155
                },
                {
                  "start_quantity": 134,
                  "price": 72,
                  "end_quantity": 142,
                  "overage_price": 156
                }
              ],
              "minimum_price": 20,
              "percentage": 198.14
            },
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id3",
                "value": 51.05,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 9,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id4",
                "value": 51.06,
                "increment_type": "increment_type6",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 10,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id5",
                "value": 51.07,
                "increment_type": "increment_type7",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 11,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name4",
            "quantity": 190,
            "cycles": 210,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "increments": [
        {
          "id": "id5",
          "value": 15.97,
          "increment_type": "increment_type3",
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 171,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description5",
          "subscription": {},
          "subscription_item": {
            "id": "id1",
            "description": "description9",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 75,
              "scheme_type": "scheme_type7",
              "price_brackets": [
                {
                  "start_quantity": 134,
                  "price": 72,
                  "end_quantity": 142,
                  "overage_price": 156
                },
                {
                  "start_quantity": 135,
                  "price": 73,
                  "end_quantity": 143,
                  "overage_price": 157
                }
              ],
              "minimum_price": 21,
              "percentage": 210.95
            },
            "discounts": [
              {
                "id": "id2",
                "value": 51.04,
                "discount_type": "discount_type0",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 8,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {},
              {},
              {}
            ],
            "subscription": {},
            "name": "name1",
            "quantity": 53,
            "cycles": 183,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id6",
          "value": 15.98,
          "increment_type": "increment_type2",
          "status": "status2",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 170,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description4",
          "subscription": {},
          "subscription_item": {
            "id": "id2",
            "description": "description8",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 76,
              "scheme_type": "scheme_type6",
              "price_brackets": [
                {
                  "start_quantity": 133,
                  "price": 71,
                  "end_quantity": 141,
                  "overage_price": 155
                }
              ],
              "minimum_price": 20,
              "percentage": 210.94
            },
            "discounts": [
              {
                "id": "id3",
                "value": 51.05,
                "discount_type": "discount_type1",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 9,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id4",
                "value": 51.06,
                "discount_type": "discount_type2",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 10,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {},
              {}
            ],
            "subscription": {},
            "name": "name2",
            "quantity": 54,
            "cycles": 182,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        },
        {
          "id": "id7",
          "value": 15.99,
          "increment_type": "increment_type1",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 169,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description3",
          "subscription": {},
          "subscription_item": {
            "id": "id3",
            "description": "description7",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 77,
              "scheme_type": "scheme_type5",
              "price_brackets": [
                {
                  "start_quantity": 132,
                  "price": 70,
                  "end_quantity": 140,
                  "overage_price": 154
                },
                {
                  "start_quantity": 133,
                  "price": 71,
                  "end_quantity": 141,
                  "overage_price": 155
                },
                {
                  "start_quantity": 134,
                  "price": 72,
                  "end_quantity": 142,
                  "overage_price": 156
                }
              ],
              "minimum_price": 19,
              "percentage": 210.93
            },
            "discounts": [
              {
                "id": "id4",
                "value": 51.06,
                "discount_type": "discount_type2",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 10,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id5",
                "value": 51.07,
                "discount_type": "discount_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 11,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 51.08,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 12,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {}
            ],
            "subscription": {},
            "name": "name3",
            "quantity": 55,
            "cycles": 181,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        }
      ],
      "boleto_due_days": 136,
      "split": {
        "enabled": false,
        "rules": [
          {
            "type": "type4",
            "amount": 96,
            "recipient": {
              "id": "id8",
              "name": "name8",
              "email": "email8",
              "document": "document8",
              "description": "description8",
              "type": "type2",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "default_bank_account": {
                "id": "id6",
                "holder_name": "holder_name2",
                "holder_type": "holder_type8",
                "bank": "bank4",
                "branch_number": "branch_number2",
                "branch_check_digit": "branch_check_digit2",
                "account_number": "account_number6",
                "account_check_digit": "account_check_digit2",
                "type": "type6",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "recipient": {},
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata2",
                  "key2": "metadata1"
                },
                "pix_key": "pix_key0"
              },
              "gateway_recipients": [
                {
                  "gateway": "gateway2",
                  "status": "status4",
                  "pgid": "pgid8",
                  "created_at": "created_at0",
                  "updated_at": "updated_at8"
                },
                {
                  "gateway": "gateway3",
                  "status": "status5",
                  "pgid": "pgid9",
                  "created_at": "created_at1",
                  "updated_at": "updated_at9"
                }
              ],
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6",
                "key2": "metadata7"
              },
              "automatic_anticipation_settings": {
                "enabled": false,
                "type": "type8",
                "volume_percentage": 42,
                "delay": 248,
                "days": [
                  224
                ]
              },
              "transfer_settings": {
                "transfer_enabled": false,
                "transfer_interval": "transfer_interval6",
                "transfer_day": 208
              },
              "code": "code6",
              "payment_mode": "payment_mode8"
            },
            "gateway_id": "gateway_id4",
            "options": {
              "liable": false,
              "charge_processing_fee": false,
              "charge_remainder_fee": "charge_remainder_fee2"
            },
            "id": "id6"
          }
        ]
      },
      "boleto": {
        "interest": {
          "days": 210,
          "type": "type6",
          "amount": 28
        },
        "fine": {
          "days": 80,
          "type": "type2",
          "amount": 154
        },
        "max_days_to_pay_past_due": 68
      },
      "manual_billing": false
    },
    "status": "status0",
    "duration": 66,
    "created_at": "created_at6",
    "updated_at": "updated_at6",
    "cycle": 6
  },
  "payment_method": "payment_method0",
  "currency": "currency0",
  "installments": 250,
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "customer": {
    "id": "id0",
    "name": "name0",
    "email": "email6",
    "delinquent": false,
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "document": "document6",
    "type": "type0",
    "fb_access_token": "fb_access_token4",
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
      "customer": {},
      "metadata": {
        "key0": "metadata3"
      },
      "line_1": "line_10",
      "line_2": "line_24",
      "deleted_at": "2016-03-13T12:52:32.123Z"
    },
    "metadata": {
      "key0": "metadata3"
    },
    "phones": {
      "home_phone": {
        "country_code": "country_code2",
        "number": "number0",
        "area_code": "area_code2"
      },
      "mobile_phone": {
        "country_code": "country_code8",
        "number": "number4",
        "area_code": "area_code8"
      }
    },
    "fb_id": 174,
    "code": "code8",
    "document_type": "document_type8"
  },
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
    "customer": {
      "id": "id6",
      "name": "name6",
      "email": "email0",
      "delinquent": false,
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "document": "document0",
      "type": "type4",
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
          "key0": "metadata9",
          "key1": "metadata8",
          "key2": "metadata7"
        },
        "line_1": "line_16",
        "line_2": "line_20",
        "deleted_at": "2016-03-13T12:52:32.123Z"
      },
      "metadata": {
        "key0": "metadata7",
        "key1": "metadata8",
        "key2": "metadata9"
      },
      "phones": {
        "home_phone": {
          "country_code": "country_code8",
          "number": "number4",
          "area_code": "area_code8"
        },
        "mobile_phone": {
          "country_code": "country_code2",
          "number": "number0",
          "area_code": "area_code2"
        }
      },
      "fb_id": 56,
      "code": "code4",
      "document_type": "document_type4"
    },
    "metadata": {
      "key0": "metadata7"
    },
    "type": "type4",
    "holder_document": "holder_document0",
    "deleted_at": "2016-03-13T12:52:32.123Z",
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
            "end_quantity": 68,
            "overage_price": 82
          },
          {
            "start_quantity": 61,
            "price": 1,
            "end_quantity": 69,
            "overage_price": 83
          },
          {
            "start_quantity": 62,
            "price": 0,
            "end_quantity": 70,
            "overage_price": 84
          }
        ],
        "minimum_price": 53,
        "percentage": 25.89
      },
      "discounts": [
        {
          "id": "id8",
          "value": 236.1,
          "discount_type": "discount_type6",
          "status": "status0",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 82,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description8",
          "subscription": {
            "id": "id4",
            "code": "code2",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval2",
            "interval_count": 180,
            "billing_type": "billing_type2",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id2",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status4",
              "duration": 164,
              "created_at": "created_at0",
              "updated_at": "updated_at8",
              "cycle": 104
            },
            "payment_method": "payment_method6",
            "currency": "currency4",
            "installments": 92,
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id4",
              "name": "name4",
              "email": "email2",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document2",
              "type": "type6",
              "fb_access_token": "fb_access_token8",
              "address": {
                "id": "id0",
                "street": "street0",
                "number": "number8",
                "complement": "complement6",
                "zip_code": "zip_code4",
                "neighborhood": "neighborhood6",
                "city": "city0",
                "state": "state6",
                "country": "country4",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata7",
                  "key1": "metadata6"
                },
                "line_1": "line_16",
                "line_2": "line_28",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata9",
                "key1": "metadata0"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code6",
                  "number": "number6",
                  "area_code": "area_code6"
                },
                "mobile_phone": {
                  "country_code": "country_code4",
                  "number": "number8",
                  "area_code": "area_code4"
                }
              },
              "fb_id": 84,
              "code": "code2",
              "document_type": "document_type2"
            },
            "card": {
              "id": "id2",
              "last_four_digits": "last_four_digits8",
              "brand": "brand6",
              "holder_name": "holder_name8",
              "exp_month": 70,
              "exp_year": 226,
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
              "customer": {
                "id": "id8",
                "name": "name8",
                "email": "email8",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document8",
                "type": "type2",
                "fb_access_token": "fb_access_token2",
                "address": {
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata1",
                    "key1": "metadata0",
                    "key2": "metadata9"
                  },
                  "line_1": "line_12",
                  "line_2": "line_22",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata5",
                  "key1": "metadata6",
                  "key2": "metadata7"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code0",
                    "number": "number2",
                    "area_code": "area_code0"
                  },
                  "mobile_phone": {
                    "country_code": "country_code0",
                    "number": "number2",
                    "area_code": "area_code0"
                  }
                },
                "fb_id": 202,
                "code": "code6",
                "document_type": "document_type6"
              },
              "metadata": {
                "key0": "metadata1"
              },
              "type": "type8",
              "holder_document": "holder_document4",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits2",
              "label": "label2"
            },
            "items": [
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor4",
            "metadata": {
              "key0": "metadata9",
              "key1": "metadata0",
              "key2": "metadata1"
            },
            "setup": {
              "id": "id8",
              "description": "description2",
              "amount": 116,
              "status": "status0"
            },
            "gateway_affiliation_id": "gateway_affiliation_id0",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 192,
            "minimum_price": 78,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {},
              {},
              {}
            ],
            "increments": [
              {
                "id": "id7",
                "value": 23.99,
                "increment_type": "increment_type9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 137,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 36,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type6",
                  "amount": 252,
                  "recipient": {
                    "id": "id4",
                    "name": "name4",
                    "email": "email2",
                    "document": "document2",
                    "description": "description6",
                    "type": "type6",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id2",
                      "holder_name": "holder_name8",
                      "holder_type": "holder_type4",
                      "bank": "bank0",
                      "branch_number": "branch_number8",
                      "branch_check_digit": "branch_check_digit8",
                      "account_number": "account_number2",
                      "account_check_digit": "account_check_digit8",
                      "type": "type8",
                      "status": "status4",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata9"
                      },
                      "pix_key": "pix_key4"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway8",
                        "status": "status0",
                        "pgid": "pgid4",
                        "created_at": "created_at6",
                        "updated_at": "updated_at4"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata9"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type2",
                      "volume_percentage": 58,
                      "delay": 232,
                      "days": [
                        208,
                        209,
                        210
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval0",
                      "transfer_day": 224
                    },
                    "code": "code2",
                    "payment_mode": "payment_mode2"
                  },
                  "gateway_id": "gateway_id6",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee6"
                  },
                  "id": "id4"
                },
                {
                  "type": "type5",
                  "amount": 253,
                  "recipient": {
                    "id": "id3",
                    "name": "name3",
                    "email": "email3",
                    "document": "document3",
                    "description": "description7",
                    "type": "type7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id1",
                      "holder_name": "holder_name7",
                      "holder_type": "holder_type3",
                      "bank": "bank9",
                      "branch_number": "branch_number7",
                      "branch_check_digit": "branch_check_digit7",
                      "account_number": "account_number1",
                      "account_check_digit": "account_check_digit7",
                      "type": "type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata8",
                        "key1": "metadata7"
                      },
                      "pix_key": "pix_key5"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway7",
                        "status": "status9",
                        "pgid": "pgid3",
                        "created_at": "created_at5",
                        "updated_at": "updated_at3"
                      },
                      {
                        "gateway": "gateway8",
                        "status": "status0",
                        "pgid": "pgid4",
                        "created_at": "created_at6",
                        "updated_at": "updated_at4"
                      },
                      {
                        "gateway": "gateway9",
                        "status": "status1",
                        "pgid": "pgid5",
                        "created_at": "created_at7",
                        "updated_at": "updated_at5"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata0",
                      "key1": "metadata1"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type3",
                      "volume_percentage": 59,
                      "delay": 231,
                      "days": [
                        207,
                        208
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval1",
                      "transfer_day": 225
                    },
                    "code": "code1",
                    "payment_mode": "payment_mode3"
                  },
                  "gateway_id": "gateway_id5",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee5"
                  },
                  "id": "id5"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 54,
                "type": "type6",
                "amount": 128
              },
              "fine": {
                "days": 220,
                "type": "type6",
                "amount": 146
              },
              "max_days_to_pay_past_due": 224
            },
            "manual_billing": false
          },
          "subscription_item": {}
        },
        {
          "id": "id9",
          "value": 236.11,
          "discount_type": "discount_type7",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 83,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description9",
          "subscription": {
            "id": "id5",
            "code": "code3",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval3",
            "interval_count": 181,
            "billing_type": "billing_type1",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id3",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status5",
              "duration": 165,
              "created_at": "created_at1",
              "updated_at": "updated_at9",
              "cycle": 105
            },
            "payment_method": "payment_method5",
            "currency": "currency5",
            "installments": 93,
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id5",
              "name": "name5",
              "email": "email1",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document1",
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
                  "key0": "metadata8"
                },
                "line_1": "line_15",
                "line_2": "line_29",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata8"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code7",
                  "number": "number5",
                  "area_code": "area_code7"
                },
                "mobile_phone": {
                  "country_code": "country_code3",
                  "number": "number9",
                  "area_code": "area_code3"
                }
              },
              "fb_id": 85,
              "code": "code3",
              "document_type": "document_type3"
            },
            "card": {
              "id": "id1",
              "last_four_digits": "last_four_digits7",
              "brand": "brand5",
              "holder_name": "holder_name7",
              "exp_month": 71,
              "exp_year": 225,
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
              "customer": {
                "id": "id9",
                "name": "name9",
                "email": "email7",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document7",
                "type": "type1",
                "fb_access_token": "fb_access_token3",
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata2",
                    "key1": "metadata1"
                  },
                  "line_1": "line_11",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata5"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number1",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 203,
                "code": "code7",
                "document_type": "document_type7"
              },
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3"
              },
              "type": "type9",
              "holder_document": "holder_document5",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits1",
              "label": "label1"
            },
            "items": [
              {},
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor5",
            "metadata": {
              "key0": "metadata8",
              "key1": "metadata9"
            },
            "setup": {
              "id": "id9",
              "description": "description1",
              "amount": 117,
              "status": "status9"
            },
            "gateway_affiliation_id": "gateway_affiliation_id1",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 191,
            "minimum_price": 77,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id8",
                "value": 24.0,
                "increment_type": "increment_type0",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 136,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id7",
                "value": 23.99,
                "increment_type": "increment_type9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 137,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 23.98,
                "increment_type": "increment_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 138,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 37,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type5",
                  "amount": 253,
                  "recipient": {
                    "id": "id3",
                    "name": "name3",
                    "email": "email3",
                    "document": "document3",
                    "description": "description7",
                    "type": "type7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id1",
                      "holder_name": "holder_name7",
                      "holder_type": "holder_type3",
                      "bank": "bank9",
                      "branch_number": "branch_number7",
                      "branch_check_digit": "branch_check_digit7",
                      "account_number": "account_number1",
                      "account_check_digit": "account_check_digit7",
                      "type": "type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata8",
                        "key1": "metadata7"
                      },
                      "pix_key": "pix_key5"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway7",
                        "status": "status9",
                        "pgid": "pgid3",
                        "created_at": "created_at5",
                        "updated_at": "updated_at3"
                      },
                      {
                        "gateway": "gateway8",
                        "status": "status0",
                        "pgid": "pgid4",
                        "created_at": "created_at6",
                        "updated_at": "updated_at4"
                      },
                      {
                        "gateway": "gateway9",
                        "status": "status1",
                        "pgid": "pgid5",
                        "created_at": "created_at7",
                        "updated_at": "updated_at5"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata0",
                      "key1": "metadata1"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type3",
                      "volume_percentage": 59,
                      "delay": 231,
                      "days": [
                        207,
                        208
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval1",
                      "transfer_day": 225
                    },
                    "code": "code1",
                    "payment_mode": "payment_mode3"
                  },
                  "gateway_id": "gateway_id5",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee5"
                  },
                  "id": "id5"
                },
                {
                  "type": "type4",
                  "amount": 254,
                  "recipient": {
                    "id": "id2",
                    "name": "name2",
                    "email": "email4",
                    "document": "document4",
                    "description": "description8",
                    "type": "type8",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id0",
                      "holder_name": "holder_name6",
                      "holder_type": "holder_type2",
                      "bank": "bank8",
                      "branch_number": "branch_number6",
                      "branch_check_digit": "branch_check_digit6",
                      "account_number": "account_number0",
                      "account_check_digit": "account_check_digit6",
                      "type": "type0",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata7",
                        "key1": "metadata6",
                        "key2": "metadata5"
                      },
                      "pix_key": "pix_key6"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway6",
                        "status": "status8",
                        "pgid": "pgid2",
                        "created_at": "created_at4",
                        "updated_at": "updated_at2"
                      },
                      {
                        "gateway": "gateway7",
                        "status": "status9",
                        "pgid": "pgid3",
                        "created_at": "created_at5",
                        "updated_at": "updated_at3"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata1",
                      "key1": "metadata2",
                      "key2": "metadata3"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type4",
                      "volume_percentage": 60,
                      "delay": 230,
                      "days": [
                        206
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval2",
                      "transfer_day": 226
                    },
                    "code": "code0",
                    "payment_mode": "payment_mode4"
                  },
                  "gateway_id": "gateway_id4",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee4"
                  },
                  "id": "id6"
                },
                {
                  "type": "type3",
                  "amount": 255,
                  "recipient": {
                    "id": "id1",
                    "name": "name1",
                    "email": "email5",
                    "document": "document5",
                    "description": "description9",
                    "type": "type9",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id9",
                      "holder_name": "holder_name5",
                      "holder_type": "holder_type1",
                      "bank": "bank7",
                      "branch_number": "branch_number5",
                      "branch_check_digit": "branch_check_digit5",
                      "account_number": "account_number9",
                      "account_check_digit": "account_check_digit5",
                      "type": "type1",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata6"
                      },
                      "pix_key": "pix_key7"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway5",
                        "status": "status7",
                        "pgid": "pgid1",
                        "created_at": "created_at3",
                        "updated_at": "updated_at1"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata2"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type5",
                      "volume_percentage": 61,
                      "delay": 229,
                      "days": [
                        205,
                        206,
                        207
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval3",
                      "transfer_day": 227
                    },
                    "code": "code9",
                    "payment_mode": "payment_mode5"
                  },
                  "gateway_id": "gateway_id3",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee3"
                  },
                  "id": "id7"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 53,
                "type": "type5",
                "amount": 127
              },
              "fine": {
                "days": 221,
                "type": "type7",
                "amount": 147
              },
              "max_days_to_pay_past_due": 225
            },
            "manual_billing": true
          },
          "subscription_item": {}
        },
        {
          "id": "id0",
          "value": 236.12,
          "discount_type": "discount_type8",
          "status": "status2",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 84,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description0",
          "subscription": {
            "id": "id6",
            "code": "code4",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval4",
            "interval_count": 182,
            "billing_type": "billing_type0",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id4",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status6",
              "duration": 166,
              "created_at": "created_at2",
              "updated_at": "updated_at0",
              "cycle": 106
            },
            "payment_method": "payment_method4",
            "currency": "currency6",
            "installments": 94,
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id6",
              "name": "name6",
              "email": "email0",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document0",
              "type": "type4",
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
                  "key0": "metadata9",
                  "key1": "metadata8",
                  "key2": "metadata7"
                },
                "line_1": "line_14",
                "line_2": "line_20",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata8",
                "key2": "metadata9"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code8",
                  "number": "number4",
                  "area_code": "area_code8"
                },
                "mobile_phone": {
                  "country_code": "country_code2",
                  "number": "number0",
                  "area_code": "area_code2"
                }
              },
              "fb_id": 86,
              "code": "code4",
              "document_type": "document_type4"
            },
            "card": {
              "id": "id0",
              "last_four_digits": "last_four_digits6",
              "brand": "brand4",
              "holder_name": "holder_name6",
              "exp_month": 72,
              "exp_year": 224,
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
              "customer": {
                "id": "id0",
                "name": "name0",
                "email": "email6",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document6",
                "type": "type0",
                "fb_access_token": "fb_access_token4",
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata3"
                  },
                  "line_1": "line_10",
                  "line_2": "line_24",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata3"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code8",
                    "number": "number0",
                    "area_code": "area_code2"
                  },
                  "mobile_phone": {
                    "country_code": "country_code8",
                    "number": "number4",
                    "area_code": "area_code8"
                  }
                },
                "fb_id": 204,
                "code": "code8",
                "document_type": "document_type8"
              },
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata4",
                "key2": "metadata5"
              },
              "type": "type0",
              "holder_document": "holder_document6",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits0",
              "label": "label0"
            },
            "items": [
              {}
            ],
            "statement_descriptor": "statement_descriptor6",
            "metadata": {
              "key0": "metadata7"
            },
            "setup": {
              "id": "id0",
              "description": "description0",
              "amount": 118,
              "status": "status8"
            },
            "gateway_affiliation_id": "gateway_affiliation_id2",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 190,
            "minimum_price": 76,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id9",
                "value": 24.01,
                "increment_type": "increment_type1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 135,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id8",
                "value": 24.0,
                "increment_type": "increment_type0",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 136,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 38,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type4",
                  "amount": 254,
                  "recipient": {
                    "id": "id2",
                    "name": "name2",
                    "email": "email4",
                    "document": "document4",
                    "description": "description8",
                    "type": "type8",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id0",
                      "holder_name": "holder_name6",
                      "holder_type": "holder_type2",
                      "bank": "bank8",
                      "branch_number": "branch_number6",
                      "branch_check_digit": "branch_check_digit6",
                      "account_number": "account_number0",
                      "account_check_digit": "account_check_digit6",
                      "type": "type0",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata7",
                        "key1": "metadata6",
                        "key2": "metadata5"
                      },
                      "pix_key": "pix_key6"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway6",
                        "status": "status8",
                        "pgid": "pgid2",
                        "created_at": "created_at4",
                        "updated_at": "updated_at2"
                      },
                      {
                        "gateway": "gateway7",
                        "status": "status9",
                        "pgid": "pgid3",
                        "created_at": "created_at5",
                        "updated_at": "updated_at3"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata1",
                      "key1": "metadata2",
                      "key2": "metadata3"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type4",
                      "volume_percentage": 60,
                      "delay": 230,
                      "days": [
                        206
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval2",
                      "transfer_day": 226
                    },
                    "code": "code0",
                    "payment_mode": "payment_mode4"
                  },
                  "gateway_id": "gateway_id4",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee4"
                  },
                  "id": "id6"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 52,
                "type": "type4",
                "amount": 126
              },
              "fine": {
                "days": 222,
                "type": "type8",
                "amount": 148
              },
              "max_days_to_pay_past_due": 226
            },
            "manual_billing": false
          },
          "subscription_item": {}
        }
      ],
      "increments": [
        {
          "id": "id0",
          "value": 92.72,
          "increment_type": "increment_type2",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 176,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description0",
          "subscription": {
            "id": "id4",
            "code": "code2",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval2",
            "interval_count": 242,
            "billing_type": "billing_type8",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id2",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status4",
              "duration": 226,
              "created_at": "created_at0",
              "updated_at": "updated_at8",
              "cycle": 166
            },
            "payment_method": "payment_method4",
            "currency": "currency4",
            "installments": 154,
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id4",
              "name": "name4",
              "email": "email2",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document8",
              "type": "type6",
              "fb_access_token": "fb_access_token8",
              "address": {
                "id": "id0",
                "street": "street0",
                "number": "number8",
                "complement": "complement6",
                "zip_code": "zip_code4",
                "neighborhood": "neighborhood6",
                "city": "city0",
                "state": "state6",
                "country": "country4",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata8",
                  "key2": "metadata7"
                },
                "line_1": "line_14",
                "line_2": "line_28",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata1",
                "key1": "metadata0"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code6",
                  "number": "number4",
                  "area_code": "area_code6"
                },
                "mobile_phone": {
                  "country_code": "country_code4",
                  "number": "number6",
                  "area_code": "area_code6"
                }
              },
              "fb_id": 146,
              "code": "code2",
              "document_type": "document_type2"
            },
            "card": {
              "id": "id8",
              "last_four_digits": "last_four_digits4",
              "brand": "brand2",
              "holder_name": "holder_name4",
              "exp_month": 208,
              "exp_year": 88,
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
              "customer": {
                "id": "id8",
                "name": "name8",
                "email": "email8",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document8",
                "type": "type2",
                "fb_access_token": "fb_access_token2",
                "address": {
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata1"
                  },
                  "line_1": "line_18",
                  "line_2": "line_22",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata5"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code0",
                    "number": "number2",
                    "area_code": "area_code0"
                  },
                  "mobile_phone": {
                    "country_code": "country_code0",
                    "number": "number2",
                    "area_code": "area_code0"
                  }
                },
                "fb_id": 76,
                "code": "code6",
                "document_type": "document_type6"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6"
              },
              "type": "type2",
              "holder_document": "holder_document8",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits8",
              "label": "label8"
            },
            "items": [
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor4",
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata0",
              "key2": "metadata9"
            },
            "setup": {
              "id": "id8",
              "description": "description8",
              "amount": 178,
              "status": "status0"
            },
            "gateway_affiliation_id": "gateway_affiliation_id0",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 126,
            "minimum_price": 240,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id5",
                "value": 252.47,
                "discount_type": "discount_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 183,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 252.48,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 184,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id7",
                "value": 252.49,
                "discount_type": "discount_type5",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 185,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description7",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {}
            ],
            "boleto_due_days": 98,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type6",
                  "amount": 58,
                  "recipient": {
                    "id": "id6",
                    "name": "name6",
                    "email": "email0",
                    "document": "document0",
                    "description": "description6",
                    "type": "type4",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id4",
                      "holder_name": "holder_name0",
                      "holder_type": "holder_type6",
                      "bank": "bank2",
                      "branch_number": "branch_number0",
                      "branch_check_digit": "branch_check_digit0",
                      "account_number": "account_number4",
                      "account_check_digit": "account_check_digit0",
                      "type": "type4",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata1",
                        "key1": "metadata0"
                      },
                      "pix_key": "pix_key8"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway0",
                        "status": "status2",
                        "pgid": "pgid6",
                        "created_at": "created_at8",
                        "updated_at": "updated_at6"
                      },
                      {
                        "gateway": "gateway1",
                        "status": "status3",
                        "pgid": "pgid7",
                        "created_at": "created_at9",
                        "updated_at": "updated_at7"
                      },
                      {
                        "gateway": "gateway2",
                        "status": "status4",
                        "pgid": "pgid8",
                        "created_at": "created_at0",
                        "updated_at": "updated_at8"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata7",
                      "key1": "metadata8"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type0",
                      "volume_percentage": 80,
                      "delay": 210,
                      "days": [
                        186,
                        187
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval8",
                      "transfer_day": 246
                    },
                    "code": "code4",
                    "payment_mode": "payment_mode0"
                  },
                  "gateway_id": "gateway_id6",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee0"
                  },
                  "id": "id4"
                },
                {
                  "type": "type5",
                  "amount": 59,
                  "recipient": {
                    "id": "id7",
                    "name": "name7",
                    "email": "email9",
                    "document": "document9",
                    "description": "description7",
                    "type": "type3",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id5",
                      "holder_name": "holder_name1",
                      "holder_type": "holder_type7",
                      "bank": "bank3",
                      "branch_number": "branch_number1",
                      "branch_check_digit": "branch_check_digit1",
                      "account_number": "account_number5",
                      "account_check_digit": "account_check_digit1",
                      "type": "type5",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata2"
                      },
                      "pix_key": "pix_key9"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway1",
                        "status": "status3",
                        "pgid": "pgid7",
                        "created_at": "created_at9",
                        "updated_at": "updated_at7"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata6"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type9",
                      "volume_percentage": 79,
                      "delay": 211,
                      "days": [
                        187,
                        188,
                        189
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval7",
                      "transfer_day": 245
                    },
                    "code": "code5",
                    "payment_mode": "payment_mode1"
                  },
                  "gateway_id": "gateway_id5",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee1"
                  },
                  "id": "id5"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 248,
                "type": "type4",
                "amount": 66
              },
              "fine": {
                "days": 42,
                "type": "type4",
                "amount": 116
              },
              "max_days_to_pay_past_due": 30
            },
            "manual_billing": false
          },
          "subscription_item": {}
        }
      ],
      "subscription": {
        "id": "id7",
        "code": "code5",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval5",
        "interval_count": 175,
        "billing_type": "billing_type1",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id5",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status7",
          "duration": 159,
          "created_at": "created_at3",
          "updated_at": "updated_at1",
          "cycle": 99
        },
        "payment_method": "payment_method3",
        "currency": "currency7",
        "installments": 87,
        "status": "status9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {
          "id": "id7",
          "name": "name7",
          "email": "email9",
          "delinquent": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document9",
          "type": "type3",
          "fb_access_token": "fb_access_token1",
          "address": {
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
            "customer": {},
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5",
              "key2": "metadata4"
            },
            "line_1": "line_17",
            "line_2": "line_21",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata6",
            "key1": "metadata7"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code9",
              "number": "number3",
              "area_code": "area_code9"
            },
            "mobile_phone": {
              "country_code": "country_code9",
              "number": "number1",
              "area_code": "area_code1"
            }
          },
          "fb_id": 79,
          "code": "code5",
          "document_type": "document_type5"
        },
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
          "customer": {
            "id": "id1",
            "name": "name1",
            "email": "email5",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document5",
            "type": "type9",
            "fb_access_token": "fb_access_token5",
            "address": {
              "id": "id7",
              "street": "street7",
              "number": "number5",
              "complement": "complement3",
              "zip_code": "zip_code1",
              "neighborhood": "neighborhood3",
              "city": "city7",
              "state": "state3",
              "country": "country1",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata4"
              },
              "line_1": "line_19",
              "line_2": "line_25",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata2"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code7",
                "number": "number9",
                "area_code": "area_code3"
              },
              "mobile_phone": {
                "country_code": "country_code7",
                "number": "number5",
                "area_code": "area_code7"
              }
            },
            "fb_id": 9,
            "code": "code9",
            "document_type": "document_type9"
          },
          "metadata": {
            "key0": "metadata2",
            "key1": "metadata3"
          },
          "type": "type9",
          "holder_document": "holder_document5",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "first_six_digits": "first_six_digits1",
          "label": "label1"
        },
        "items": [
          {},
          {}
        ],
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
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 59,
        "minimum_price": 83,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {
            "id": "id8",
            "value": 123.8,
            "discount_type": "discount_type6",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 116,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description8",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id9",
            "value": 123.81,
            "discount_type": "discount_type7",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 117,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description9",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id0",
            "value": 123.82,
            "discount_type": "discount_type8",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 118,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description0",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "increments": [
          {
            "id": "id4",
            "value": 11.96,
            "increment_type": "increment_type4",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 60,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description6",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "boleto_due_days": 31,
        "split": {
          "enabled": true,
          "rules": [
            {
              "type": "type3",
              "amount": 247,
              "recipient": {
                "id": "id9",
                "name": "name9",
                "email": "email7",
                "document": "document7",
                "description": "description1",
                "type": "type1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id7",
                  "holder_name": "holder_name3",
                  "holder_type": "holder_type9",
                  "bank": "bank5",
                  "branch_number": "branch_number3",
                  "branch_check_digit": "branch_check_digit3",
                  "account_number": "account_number7",
                  "account_check_digit": "account_check_digit3",
                  "type": "type7",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata4",
                    "key1": "metadata3"
                  },
                  "pix_key": "pix_key9"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway3",
                    "status": "status5",
                    "pgid": "pgid9",
                    "created_at": "created_at1",
                    "updated_at": "updated_at9"
                  },
                  {
                    "gateway": "gateway4",
                    "status": "status6",
                    "pgid": "pgid0",
                    "created_at": "created_at2",
                    "updated_at": "updated_at0"
                  },
                  {
                    "gateway": "gateway5",
                    "status": "status7",
                    "pgid": "pgid1",
                    "created_at": "created_at3",
                    "updated_at": "updated_at1"
                  }
                ],
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata5"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type7",
                  "volume_percentage": 147,
                  "delay": 143,
                  "days": [
                    119,
                    120
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval5",
                  "transfer_day": 57
                },
                "code": "code7",
                "payment_mode": "payment_mode7"
              },
              "gateway_id": "gateway_id3",
              "options": {
                "liable": true,
                "charge_processing_fee": true,
                "charge_remainder_fee": "charge_remainder_fee3"
              },
              "id": "id7"
            },
            {
              "type": "type2",
              "amount": 248,
              "recipient": {
                "id": "id0",
                "name": "name0",
                "email": "email6",
                "document": "document6",
                "description": "description0",
                "type": "type0",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id8",
                  "holder_name": "holder_name4",
                  "holder_type": "holder_type0",
                  "bank": "bank6",
                  "branch_number": "branch_number4",
                  "branch_check_digit": "branch_check_digit4",
                  "account_number": "account_number8",
                  "account_check_digit": "account_check_digit4",
                  "type": "type8",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata5"
                  },
                  "pix_key": "pix_key8"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway4",
                    "status": "status6",
                    "pgid": "pgid0",
                    "created_at": "created_at2",
                    "updated_at": "updated_at0"
                  }
                ],
                "metadata": {
                  "key0": "metadata3"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type6",
                  "volume_percentage": 146,
                  "delay": 144,
                  "days": [
                    120,
                    121,
                    122
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval4",
                  "transfer_day": 56
                },
                "code": "code8",
                "payment_mode": "payment_mode6"
              },
              "gateway_id": "gateway_id2",
              "options": {
                "liable": false,
                "charge_processing_fee": false,
                "charge_remainder_fee": "charge_remainder_fee4"
              },
              "id": "id8"
            }
          ]
        },
        "boleto": {
          "interest": {
            "days": 59,
            "type": "type7",
            "amount": 133
          },
          "fine": {
            "days": 231,
            "type": "type1",
            "amount": 49
          },
          "max_days_to_pay_past_due": 219
        },
        "manual_billing": true
      },
      "name": "name7",
      "quantity": 127,
      "cycles": 109,
      "deleted_at": "2016-03-13T12:52:32.123Z"
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
            "end_quantity": 67,
            "overage_price": 81
          },
          {
            "start_quantity": 60,
            "price": 2,
            "end_quantity": 68,
            "overage_price": 82
          }
        ],
        "minimum_price": 54,
        "percentage": 25.88
      },
      "discounts": [
        {
          "id": "id9",
          "value": 236.11,
          "discount_type": "discount_type7",
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 83,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description9",
          "subscription": {
            "id": "id5",
            "code": "code3",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval3",
            "interval_count": 181,
            "billing_type": "billing_type1",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id3",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status5",
              "duration": 165,
              "created_at": "created_at1",
              "updated_at": "updated_at9",
              "cycle": 105
            },
            "payment_method": "payment_method5",
            "currency": "currency5",
            "installments": 93,
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id5",
              "name": "name5",
              "email": "email1",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document1",
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
                  "key0": "metadata8"
                },
                "line_1": "line_15",
                "line_2": "line_29",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata8"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code7",
                  "number": "number5",
                  "area_code": "area_code7"
                },
                "mobile_phone": {
                  "country_code": "country_code3",
                  "number": "number9",
                  "area_code": "area_code3"
                }
              },
              "fb_id": 85,
              "code": "code3",
              "document_type": "document_type3"
            },
            "card": {
              "id": "id1",
              "last_four_digits": "last_four_digits7",
              "brand": "brand5",
              "holder_name": "holder_name7",
              "exp_month": 71,
              "exp_year": 225,
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
              "customer": {
                "id": "id9",
                "name": "name9",
                "email": "email7",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document7",
                "type": "type1",
                "fb_access_token": "fb_access_token3",
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata2",
                    "key1": "metadata1"
                  },
                  "line_1": "line_11",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata5"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number1",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 203,
                "code": "code7",
                "document_type": "document_type7"
              },
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3"
              },
              "type": "type9",
              "holder_document": "holder_document5",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits1",
              "label": "label1"
            },
            "items": [
              {},
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor5",
            "metadata": {
              "key0": "metadata8",
              "key1": "metadata9"
            },
            "setup": {
              "id": "id9",
              "description": "description1",
              "amount": 117,
              "status": "status9"
            },
            "gateway_affiliation_id": "gateway_affiliation_id1",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 191,
            "minimum_price": 77,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id8",
                "value": 24.0,
                "increment_type": "increment_type0",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 136,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description2",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id7",
                "value": 23.99,
                "increment_type": "increment_type9",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 137,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description3",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 23.98,
                "increment_type": "increment_type8",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 138,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "boleto_due_days": 37,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type5",
                  "amount": 253,
                  "recipient": {
                    "id": "id3",
                    "name": "name3",
                    "email": "email3",
                    "document": "document3",
                    "description": "description7",
                    "type": "type7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id1",
                      "holder_name": "holder_name7",
                      "holder_type": "holder_type3",
                      "bank": "bank9",
                      "branch_number": "branch_number7",
                      "branch_check_digit": "branch_check_digit7",
                      "account_number": "account_number1",
                      "account_check_digit": "account_check_digit7",
                      "type": "type9",
                      "status": "status3",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata8",
                        "key1": "metadata7"
                      },
                      "pix_key": "pix_key5"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway7",
                        "status": "status9",
                        "pgid": "pgid3",
                        "created_at": "created_at5",
                        "updated_at": "updated_at3"
                      },
                      {
                        "gateway": "gateway8",
                        "status": "status0",
                        "pgid": "pgid4",
                        "created_at": "created_at6",
                        "updated_at": "updated_at4"
                      },
                      {
                        "gateway": "gateway9",
                        "status": "status1",
                        "pgid": "pgid5",
                        "created_at": "created_at7",
                        "updated_at": "updated_at5"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata0",
                      "key1": "metadata1"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type3",
                      "volume_percentage": 59,
                      "delay": 231,
                      "days": [
                        207,
                        208
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval1",
                      "transfer_day": 225
                    },
                    "code": "code1",
                    "payment_mode": "payment_mode3"
                  },
                  "gateway_id": "gateway_id5",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee5"
                  },
                  "id": "id5"
                },
                {
                  "type": "type4",
                  "amount": 254,
                  "recipient": {
                    "id": "id2",
                    "name": "name2",
                    "email": "email4",
                    "document": "document4",
                    "description": "description8",
                    "type": "type8",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id0",
                      "holder_name": "holder_name6",
                      "holder_type": "holder_type2",
                      "bank": "bank8",
                      "branch_number": "branch_number6",
                      "branch_check_digit": "branch_check_digit6",
                      "account_number": "account_number0",
                      "account_check_digit": "account_check_digit6",
                      "type": "type0",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata7",
                        "key1": "metadata6",
                        "key2": "metadata5"
                      },
                      "pix_key": "pix_key6"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway6",
                        "status": "status8",
                        "pgid": "pgid2",
                        "created_at": "created_at4",
                        "updated_at": "updated_at2"
                      },
                      {
                        "gateway": "gateway7",
                        "status": "status9",
                        "pgid": "pgid3",
                        "created_at": "created_at5",
                        "updated_at": "updated_at3"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata1",
                      "key1": "metadata2",
                      "key2": "metadata3"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type4",
                      "volume_percentage": 60,
                      "delay": 230,
                      "days": [
                        206
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval2",
                      "transfer_day": 226
                    },
                    "code": "code0",
                    "payment_mode": "payment_mode4"
                  },
                  "gateway_id": "gateway_id4",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee4"
                  },
                  "id": "id6"
                },
                {
                  "type": "type3",
                  "amount": 255,
                  "recipient": {
                    "id": "id1",
                    "name": "name1",
                    "email": "email5",
                    "document": "document5",
                    "description": "description9",
                    "type": "type9",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id9",
                      "holder_name": "holder_name5",
                      "holder_type": "holder_type1",
                      "bank": "bank7",
                      "branch_number": "branch_number5",
                      "branch_check_digit": "branch_check_digit5",
                      "account_number": "account_number9",
                      "account_check_digit": "account_check_digit5",
                      "type": "type1",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata6"
                      },
                      "pix_key": "pix_key7"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway5",
                        "status": "status7",
                        "pgid": "pgid1",
                        "created_at": "created_at3",
                        "updated_at": "updated_at1"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata2"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type5",
                      "volume_percentage": 61,
                      "delay": 229,
                      "days": [
                        205,
                        206,
                        207
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval3",
                      "transfer_day": 227
                    },
                    "code": "code9",
                    "payment_mode": "payment_mode5"
                  },
                  "gateway_id": "gateway_id3",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee3"
                  },
                  "id": "id7"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 53,
                "type": "type5",
                "amount": 127
              },
              "fine": {
                "days": 221,
                "type": "type7",
                "amount": 147
              },
              "max_days_to_pay_past_due": 225
            },
            "manual_billing": true
          },
          "subscription_item": {}
        }
      ],
      "increments": [
        {
          "id": "id1",
          "value": 92.73,
          "increment_type": "increment_type3",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 175,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description9",
          "subscription": {
            "id": "id3",
            "code": "code1",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval1",
            "interval_count": 241,
            "billing_type": "billing_type7",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id1",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status3",
              "duration": 225,
              "created_at": "created_at9",
              "updated_at": "updated_at7",
              "cycle": 165
            },
            "payment_method": "payment_method3",
            "currency": "currency3",
            "installments": 153,
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id3",
              "name": "name3",
              "email": "email3",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document7",
              "type": "type7",
              "fb_access_token": "fb_access_token7",
              "address": {
                "id": "id9",
                "street": "street9",
                "number": "number7",
                "complement": "complement5",
                "zip_code": "zip_code3",
                "neighborhood": "neighborhood5",
                "city": "city9",
                "state": "state5",
                "country": "country3",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata0",
                  "key1": "metadata9"
                },
                "line_1": "line_13",
                "line_2": "line_27",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata0",
                "key1": "metadata9",
                "key2": "metadata8"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code5",
                  "number": "number3",
                  "area_code": "area_code5"
                },
                "mobile_phone": {
                  "country_code": "country_code5",
                  "number": "number7",
                  "area_code": "area_code5"
                }
              },
              "fb_id": 145,
              "code": "code1",
              "document_type": "document_type1"
            },
            "card": {
              "id": "id7",
              "last_four_digits": "last_four_digits3",
              "brand": "brand1",
              "holder_name": "holder_name3",
              "exp_month": 209,
              "exp_year": 87,
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
              "customer": {
                "id": "id7",
                "name": "name7",
                "email": "email9",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document9",
                "type": "type3",
                "fb_access_token": "fb_access_token1",
                "address": {
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata9"
                  },
                  "line_1": "line_17",
                  "line_2": "line_21",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata6",
                  "key1": "metadata7"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  },
                  "mobile_phone": {
                    "country_code": "country_code1",
                    "number": "number1",
                    "area_code": "area_code1"
                  }
                },
                "fb_id": 75,
                "code": "code5",
                "document_type": "document_type5"
              },
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata7",
                "key2": "metadata8"
              },
              "type": "type3",
              "holder_document": "holder_document9",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits7",
              "label": "label7"
            },
            "items": [
              {}
            ],
            "statement_descriptor": "statement_descriptor3",
            "metadata": {
              "key0": "metadata0"
            },
            "setup": {
              "id": "id7",
              "description": "description7",
              "amount": 177,
              "status": "status9"
            },
            "gateway_affiliation_id": "gateway_affiliation_id9",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 125,
            "minimum_price": 239,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id4",
                "value": 252.46,
                "discount_type": "discount_type2",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 182,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description4",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id5",
                "value": 252.47,
                "discount_type": "discount_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 183,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {},
              {},
              {}
            ],
            "boleto_due_days": 97,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type7",
                  "amount": 57,
                  "recipient": {
                    "id": "id5",
                    "name": "name5",
                    "email": "email1",
                    "document": "document1",
                    "description": "description5",
                    "type": "type5",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id3",
                      "holder_name": "holder_name9",
                      "holder_type": "holder_type5",
                      "bank": "bank1",
                      "branch_number": "branch_number9",
                      "branch_check_digit": "branch_check_digit9",
                      "account_number": "account_number3",
                      "account_check_digit": "account_check_digit9",
                      "type": "type3",
                      "status": "status5",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata0",
                        "key1": "metadata9",
                        "key2": "metadata8"
                      },
                      "pix_key": "pix_key7"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway9",
                        "status": "status1",
                        "pgid": "pgid5",
                        "created_at": "created_at7",
                        "updated_at": "updated_at5"
                      },
                      {
                        "gateway": "gateway0",
                        "status": "status2",
                        "pgid": "pgid6",
                        "created_at": "created_at8",
                        "updated_at": "updated_at6"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata8",
                      "key1": "metadata9",
                      "key2": "metadata0"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type1",
                      "volume_percentage": 81,
                      "delay": 209,
                      "days": [
                        185
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval9",
                      "transfer_day": 247
                    },
                    "code": "code3",
                    "payment_mode": "payment_mode9"
                  },
                  "gateway_id": "gateway_id7",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee9"
                  },
                  "id": "id3"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 249,
                "type": "type3",
                "amount": 67
              },
              "fine": {
                "days": 41,
                "type": "type5",
                "amount": 115
              },
              "max_days_to_pay_past_due": 29
            },
            "manual_billing": true
          },
          "subscription_item": {}
        },
        {
          "id": "id0",
          "value": 92.72,
          "increment_type": "increment_type2",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 176,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description0",
          "subscription": {
            "id": "id4",
            "code": "code2",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval2",
            "interval_count": 242,
            "billing_type": "billing_type8",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id2",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status4",
              "duration": 226,
              "created_at": "created_at0",
              "updated_at": "updated_at8",
              "cycle": 166
            },
            "payment_method": "payment_method4",
            "currency": "currency4",
            "installments": 154,
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id4",
              "name": "name4",
              "email": "email2",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document8",
              "type": "type6",
              "fb_access_token": "fb_access_token8",
              "address": {
                "id": "id0",
                "street": "street0",
                "number": "number8",
                "complement": "complement6",
                "zip_code": "zip_code4",
                "neighborhood": "neighborhood6",
                "city": "city0",
                "state": "state6",
                "country": "country4",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata8",
                  "key2": "metadata7"
                },
                "line_1": "line_14",
                "line_2": "line_28",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata1",
                "key1": "metadata0"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code6",
                  "number": "number4",
                  "area_code": "area_code6"
                },
                "mobile_phone": {
                  "country_code": "country_code4",
                  "number": "number6",
                  "area_code": "area_code6"
                }
              },
              "fb_id": 146,
              "code": "code2",
              "document_type": "document_type2"
            },
            "card": {
              "id": "id8",
              "last_four_digits": "last_four_digits4",
              "brand": "brand2",
              "holder_name": "holder_name4",
              "exp_month": 208,
              "exp_year": 88,
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
              "customer": {
                "id": "id8",
                "name": "name8",
                "email": "email8",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document8",
                "type": "type2",
                "fb_access_token": "fb_access_token2",
                "address": {
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata1"
                  },
                  "line_1": "line_18",
                  "line_2": "line_22",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata5"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code0",
                    "number": "number2",
                    "area_code": "area_code0"
                  },
                  "mobile_phone": {
                    "country_code": "country_code0",
                    "number": "number2",
                    "area_code": "area_code0"
                  }
                },
                "fb_id": 76,
                "code": "code6",
                "document_type": "document_type6"
              },
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata6"
              },
              "type": "type2",
              "holder_document": "holder_document8",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits8",
              "label": "label8"
            },
            "items": [
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor4",
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata0",
              "key2": "metadata9"
            },
            "setup": {
              "id": "id8",
              "description": "description8",
              "amount": 178,
              "status": "status0"
            },
            "gateway_affiliation_id": "gateway_affiliation_id0",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 126,
            "minimum_price": 240,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id5",
                "value": 252.47,
                "discount_type": "discount_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 183,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 252.48,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 184,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id7",
                "value": 252.49,
                "discount_type": "discount_type5",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 185,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description7",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {}
            ],
            "boleto_due_days": 98,
            "split": {
              "enabled": false,
              "rules": [
                {
                  "type": "type6",
                  "amount": 58,
                  "recipient": {
                    "id": "id6",
                    "name": "name6",
                    "email": "email0",
                    "document": "document0",
                    "description": "description6",
                    "type": "type4",
                    "status": "status8",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id4",
                      "holder_name": "holder_name0",
                      "holder_type": "holder_type6",
                      "bank": "bank2",
                      "branch_number": "branch_number0",
                      "branch_check_digit": "branch_check_digit0",
                      "account_number": "account_number4",
                      "account_check_digit": "account_check_digit0",
                      "type": "type4",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata1",
                        "key1": "metadata0"
                      },
                      "pix_key": "pix_key8"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway0",
                        "status": "status2",
                        "pgid": "pgid6",
                        "created_at": "created_at8",
                        "updated_at": "updated_at6"
                      },
                      {
                        "gateway": "gateway1",
                        "status": "status3",
                        "pgid": "pgid7",
                        "created_at": "created_at9",
                        "updated_at": "updated_at7"
                      },
                      {
                        "gateway": "gateway2",
                        "status": "status4",
                        "pgid": "pgid8",
                        "created_at": "created_at0",
                        "updated_at": "updated_at8"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata7",
                      "key1": "metadata8"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type0",
                      "volume_percentage": 80,
                      "delay": 210,
                      "days": [
                        186,
                        187
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval8",
                      "transfer_day": 246
                    },
                    "code": "code4",
                    "payment_mode": "payment_mode0"
                  },
                  "gateway_id": "gateway_id6",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee0"
                  },
                  "id": "id4"
                },
                {
                  "type": "type5",
                  "amount": 59,
                  "recipient": {
                    "id": "id7",
                    "name": "name7",
                    "email": "email9",
                    "document": "document9",
                    "description": "description7",
                    "type": "type3",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id5",
                      "holder_name": "holder_name1",
                      "holder_type": "holder_type7",
                      "bank": "bank3",
                      "branch_number": "branch_number1",
                      "branch_check_digit": "branch_check_digit1",
                      "account_number": "account_number5",
                      "account_check_digit": "account_check_digit1",
                      "type": "type5",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata2"
                      },
                      "pix_key": "pix_key9"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway1",
                        "status": "status3",
                        "pgid": "pgid7",
                        "created_at": "created_at9",
                        "updated_at": "updated_at7"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata6"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type9",
                      "volume_percentage": 79,
                      "delay": 211,
                      "days": [
                        187,
                        188,
                        189
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval7",
                      "transfer_day": 245
                    },
                    "code": "code5",
                    "payment_mode": "payment_mode1"
                  },
                  "gateway_id": "gateway_id5",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee1"
                  },
                  "id": "id5"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 248,
                "type": "type4",
                "amount": 66
              },
              "fine": {
                "days": 42,
                "type": "type4",
                "amount": 116
              },
              "max_days_to_pay_past_due": 30
            },
            "manual_billing": false
          },
          "subscription_item": {}
        },
        {
          "id": "id9",
          "value": 92.71,
          "increment_type": "increment_type1",
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "cycles": 177,
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "description": "description1",
          "subscription": {
            "id": "id5",
            "code": "code3",
            "start_at": "2016-03-13T12:52:32.123Z",
            "interval": "interval3",
            "interval_count": 243,
            "billing_type": "billing_type9",
            "current_cycle": {
              "start_at": "2016-03-13T12:52:32.123Z",
              "end_at": "2016-03-13T12:52:32.123Z",
              "id": "id3",
              "billing_at": "2016-03-13T12:52:32.123Z",
              "subscription": {},
              "status": "status5",
              "duration": 227,
              "created_at": "created_at1",
              "updated_at": "updated_at9",
              "cycle": 167
            },
            "payment_method": "payment_method5",
            "currency": "currency5",
            "installments": 155,
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "customer": {
              "id": "id5",
              "name": "name5",
              "email": "email1",
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
                  "key0": "metadata8"
                },
                "line_1": "line_15",
                "line_2": "line_29",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata2"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code7",
                  "number": "number5",
                  "area_code": "area_code7"
                },
                "mobile_phone": {
                  "country_code": "country_code3",
                  "number": "number5",
                  "area_code": "area_code7"
                }
              },
              "fb_id": 147,
              "code": "code3",
              "document_type": "document_type3"
            },
            "card": {
              "id": "id9",
              "last_four_digits": "last_four_digits5",
              "brand": "brand3",
              "holder_name": "holder_name5",
              "exp_month": 207,
              "exp_year": 89,
              "status": "status9",
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
              "customer": {
                "id": "id9",
                "name": "name9",
                "email": "email7",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document7",
                "type": "type1",
                "fb_access_token": "fb_access_token3",
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata2",
                    "key1": "metadata1",
                    "key2": "metadata0"
                  },
                  "line_1": "line_19",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata5",
                  "key2": "metadata6"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code1",
                    "number": "number1",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 77,
                "code": "code7",
                "document_type": "document_type7"
              },
              "metadata": {
                "key0": "metadata4"
              },
              "type": "type1",
              "holder_document": "holder_document7",
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "first_six_digits": "first_six_digits9",
              "label": "label9"
            },
            "items": [
              {},
              {},
              {}
            ],
            "statement_descriptor": "statement_descriptor5",
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata1"
            },
            "setup": {
              "id": "id9",
              "description": "description9",
              "amount": 179,
              "status": "status1"
            },
            "gateway_affiliation_id": "gateway_affiliation_id1",
            "next_billing_at": "2016-03-13T12:52:32.123Z",
            "billing_day": 127,
            "minimum_price": 241,
            "canceled_at": "2016-03-13T12:52:32.123Z",
            "discounts": [
              {
                "id": "id6",
                "value": 252.48,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 184,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {},
              {}
            ],
            "boleto_due_days": 99,
            "split": {
              "enabled": true,
              "rules": [
                {
                  "type": "type5",
                  "amount": 59,
                  "recipient": {
                    "id": "id7",
                    "name": "name7",
                    "email": "email9",
                    "document": "document9",
                    "description": "description7",
                    "type": "type3",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id5",
                      "holder_name": "holder_name1",
                      "holder_type": "holder_type7",
                      "bank": "bank3",
                      "branch_number": "branch_number1",
                      "branch_check_digit": "branch_check_digit1",
                      "account_number": "account_number5",
                      "account_check_digit": "account_check_digit1",
                      "type": "type5",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata2"
                      },
                      "pix_key": "pix_key9"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway1",
                        "status": "status3",
                        "pgid": "pgid7",
                        "created_at": "created_at9",
                        "updated_at": "updated_at7"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata6"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type9",
                      "volume_percentage": 79,
                      "delay": 211,
                      "days": [
                        187,
                        188,
                        189
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval7",
                      "transfer_day": 245
                    },
                    "code": "code5",
                    "payment_mode": "payment_mode1"
                  },
                  "gateway_id": "gateway_id5",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee1"
                  },
                  "id": "id5"
                },
                {
                  "type": "type4",
                  "amount": 60,
                  "recipient": {
                    "id": "id8",
                    "name": "name8",
                    "email": "email8",
                    "document": "document8",
                    "description": "description8",
                    "type": "type2",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id6",
                      "holder_name": "holder_name2",
                      "holder_type": "holder_type8",
                      "bank": "bank4",
                      "branch_number": "branch_number2",
                      "branch_check_digit": "branch_check_digit2",
                      "account_number": "account_number6",
                      "account_check_digit": "account_check_digit2",
                      "type": "type6",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata3",
                        "key1": "metadata2",
                        "key2": "metadata1"
                      },
                      "pix_key": "pix_key0"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway2",
                        "status": "status4",
                        "pgid": "pgid8",
                        "created_at": "created_at0",
                        "updated_at": "updated_at8"
                      },
                      {
                        "gateway": "gateway3",
                        "status": "status5",
                        "pgid": "pgid9",
                        "created_at": "created_at1",
                        "updated_at": "updated_at9"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata5",
                      "key1": "metadata6",
                      "key2": "metadata7"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": false,
                      "type": "type8",
                      "volume_percentage": 78,
                      "delay": 212,
                      "days": [
                        188
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": false,
                      "transfer_interval": "transfer_interval6",
                      "transfer_day": 244
                    },
                    "code": "code6",
                    "payment_mode": "payment_mode2"
                  },
                  "gateway_id": "gateway_id4",
                  "options": {
                    "liable": false,
                    "charge_processing_fee": false,
                    "charge_remainder_fee": "charge_remainder_fee2"
                  },
                  "id": "id6"
                },
                {
                  "type": "type3",
                  "amount": 61,
                  "recipient": {
                    "id": "id9",
                    "name": "name9",
                    "email": "email7",
                    "document": "document7",
                    "description": "description9",
                    "type": "type1",
                    "status": "status1",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "default_bank_account": {
                      "id": "id7",
                      "holder_name": "holder_name3",
                      "holder_type": "holder_type9",
                      "bank": "bank5",
                      "branch_number": "branch_number3",
                      "branch_check_digit": "branch_check_digit3",
                      "account_number": "account_number7",
                      "account_check_digit": "account_check_digit3",
                      "type": "type7",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "recipient": {},
                      "metadata": {
                        "key0": "metadata4",
                        "key1": "metadata3"
                      },
                      "pix_key": "pix_key1"
                    },
                    "gateway_recipients": [
                      {
                        "gateway": "gateway3",
                        "status": "status5",
                        "pgid": "pgid9",
                        "created_at": "created_at1",
                        "updated_at": "updated_at9"
                      },
                      {
                        "gateway": "gateway4",
                        "status": "status6",
                        "pgid": "pgid0",
                        "created_at": "created_at2",
                        "updated_at": "updated_at0"
                      },
                      {
                        "gateway": "gateway5",
                        "status": "status7",
                        "pgid": "pgid1",
                        "created_at": "created_at3",
                        "updated_at": "updated_at1"
                      }
                    ],
                    "metadata": {
                      "key0": "metadata4",
                      "key1": "metadata5"
                    },
                    "automatic_anticipation_settings": {
                      "enabled": true,
                      "type": "type7",
                      "volume_percentage": 77,
                      "delay": 213,
                      "days": [
                        189,
                        190
                      ]
                    },
                    "transfer_settings": {
                      "transfer_enabled": true,
                      "transfer_interval": "transfer_interval5",
                      "transfer_day": 243
                    },
                    "code": "code7",
                    "payment_mode": "payment_mode3"
                  },
                  "gateway_id": "gateway_id3",
                  "options": {
                    "liable": true,
                    "charge_processing_fee": true,
                    "charge_remainder_fee": "charge_remainder_fee3"
                  },
                  "id": "id7"
                }
              ]
            },
            "boleto": {
              "interest": {
                "days": 247,
                "type": "type5",
                "amount": 65
              },
              "fine": {
                "days": 43,
                "type": "type3",
                "amount": 117
              },
              "max_days_to_pay_past_due": 31
            },
            "manual_billing": true
          },
          "subscription_item": {}
        }
      ],
      "subscription": {
        "id": "id6",
        "code": "code4",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval4",
        "interval_count": 174,
        "billing_type": "billing_type0",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id4",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status6",
          "duration": 158,
          "created_at": "created_at2",
          "updated_at": "updated_at0",
          "cycle": 98
        },
        "payment_method": "payment_method4",
        "currency": "currency6",
        "installments": 86,
        "status": "status8",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {
          "id": "id6",
          "name": "name6",
          "email": "email0",
          "delinquent": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document0",
          "type": "type4",
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
              "key0": "metadata7",
              "key1": "metadata6"
            },
            "line_1": "line_16",
            "line_2": "line_20",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata8",
            "key2": "metadata9"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code8",
              "number": "number4",
              "area_code": "area_code8"
            },
            "mobile_phone": {
              "country_code": "country_code8",
              "number": "number0",
              "area_code": "area_code2"
            }
          },
          "fb_id": 78,
          "code": "code4",
          "document_type": "document_type4"
        },
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
          "customer": {
            "id": "id0",
            "name": "name0",
            "email": "email6",
            "delinquent": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document6",
            "type": "type0",
            "fb_access_token": "fb_access_token4",
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
              "customer": {},
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata2"
              },
              "line_1": "line_10",
              "line_2": "line_24",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata3",
              "key1": "metadata4"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code8",
                "number": "number0",
                "area_code": "area_code2"
              },
              "mobile_phone": {
                "country_code": "country_code8",
                "number": "number4",
                "area_code": "area_code8"
              }
            },
            "fb_id": 8,
            "code": "code8",
            "document_type": "document_type8"
          },
          "metadata": {
            "key0": "metadata3",
            "key1": "metadata4",
            "key2": "metadata5"
          },
          "type": "type0",
          "holder_document": "holder_document6",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "first_six_digits": "first_six_digits0",
          "label": "label0"
        },
        "items": [
          {}
        ],
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
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 58,
        "minimum_price": 84,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {
            "id": "id7",
            "value": 123.79,
            "discount_type": "discount_type5",
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 115,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description7",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id8",
            "value": 123.8,
            "discount_type": "discount_type6",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 116,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description8",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "increments": [
          {
            "id": "id5",
            "value": 11.97,
            "increment_type": "increment_type3",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 59,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description5",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id4",
            "value": 11.96,
            "increment_type": "increment_type4",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 60,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description6",
            "subscription": {},
            "subscription_item": {}
          },
          {
            "id": "id3",
            "value": 11.95,
            "increment_type": "increment_type5",
            "status": "status5",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 61,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description7",
            "subscription": {},
            "subscription_item": {}
          }
        ],
        "boleto_due_days": 30,
        "split": {
          "enabled": false,
          "rules": [
            {
              "type": "type4",
              "amount": 246,
              "recipient": {
                "id": "id8",
                "name": "name8",
                "email": "email8",
                "document": "document8",
                "description": "description2",
                "type": "type2",
                "status": "status0",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id6",
                  "holder_name": "holder_name2",
                  "holder_type": "holder_type8",
                  "bank": "bank4",
                  "branch_number": "branch_number2",
                  "branch_check_digit": "branch_check_digit2",
                  "account_number": "account_number6",
                  "account_check_digit": "account_check_digit2",
                  "type": "type6",
                  "status": "status8",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata3",
                    "key1": "metadata2",
                    "key2": "metadata1"
                  },
                  "pix_key": "pix_key0"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway2",
                    "status": "status4",
                    "pgid": "pgid8",
                    "created_at": "created_at0",
                    "updated_at": "updated_at8"
                  },
                  {
                    "gateway": "gateway3",
                    "status": "status5",
                    "pgid": "pgid9",
                    "created_at": "created_at1",
                    "updated_at": "updated_at9"
                  }
                ],
                "metadata": {
                  "key0": "metadata5",
                  "key1": "metadata6",
                  "key2": "metadata7"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type8",
                  "volume_percentage": 148,
                  "delay": 142,
                  "days": [
                    118
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval6",
                  "transfer_day": 58
                },
                "code": "code6",
                "payment_mode": "payment_mode8"
              },
              "gateway_id": "gateway_id4",
              "options": {
                "liable": false,
                "charge_processing_fee": false,
                "charge_remainder_fee": "charge_remainder_fee2"
              },
              "id": "id6"
            }
          ]
        },
        "boleto": {
          "interest": {
            "days": 60,
            "type": "type6",
            "amount": 134
          },
          "fine": {
            "days": 230,
            "type": "type2",
            "amount": 48
          },
          "max_days_to_pay_past_due": 218
        },
        "manual_billing": false
      },
      "name": "name8",
      "quantity": 128,
      "cycles": 108,
      "deleted_at": "2016-03-13T12:52:32.123Z"
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
  "next_billing_at": "2016-03-13T12:52:32.123Z",
  "billing_day": 34,
  "minimum_price": 176,
  "canceled_at": "2016-03-13T12:52:32.123Z",
  "discounts": [
    {
      "id": "id1",
      "value": 10.23,
      "discount_type": "discount_type9",
      "status": "status3",
      "created_at": "2016-03-13T12:52:32.123Z",
      "cycles": 233,
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "description": "description1",
      "subscription": {
        "id": "id3",
        "code": "code1",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval9",
        "interval_count": 43,
        "billing_type": "billing_type3",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id1",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status7",
          "duration": 27,
          "created_at": "created_at9",
          "updated_at": "updated_at7",
          "cycle": 223
        },
        "payment_method": "payment_method7",
        "currency": "currency7",
        "installments": 211,
        "status": "status5",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {
          "id": "id7",
          "name": "name7",
          "email": "email9",
          "delinquent": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document9",
          "type": "type3",
          "fb_access_token": "fb_access_token1",
          "address": {
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
            "customer": {},
            "metadata": {
              "key0": "metadata0"
            },
            "line_1": "line_13",
            "line_2": "line_21",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata6"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code1",
              "number": "number3",
              "area_code": "area_code9"
            },
            "mobile_phone": {
              "country_code": "country_code1",
              "number": "number1",
              "area_code": "area_code1"
            }
          },
          "fb_id": 213,
          "code": "code5",
          "document_type": "document_type5"
        },
        "card": {
          "id": "id3",
          "last_four_digits": "last_four_digits9",
          "brand": "brand7",
          "holder_name": "holder_name9",
          "exp_month": 189,
          "exp_year": 107,
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
          "customer": {
            "id": "id3",
            "name": "name3",
            "email": "email3",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document3",
            "type": "type7",
            "fb_access_token": "fb_access_token7",
            "address": {
              "id": "id9",
              "street": "street9",
              "number": "number7",
              "complement": "complement5",
              "zip_code": "zip_code3",
              "neighborhood": "neighborhood5",
              "city": "city9",
              "state": "state5",
              "country": "country3",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata5",
                "key2": "metadata4"
              },
              "line_1": "line_17",
              "line_2": "line_27",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata0",
              "key1": "metadata1",
              "key2": "metadata2"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code5",
                "number": "number7",
                "area_code": "area_code5"
              },
              "mobile_phone": {
                "country_code": "country_code5",
                "number": "number7",
                "area_code": "area_code5"
              }
            },
            "fb_id": 95,
            "code": "code1",
            "document_type": "document_type1"
          },
          "metadata": {
            "key0": "metadata0"
          },
          "type": "type7",
          "holder_document": "holder_document3",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "first_six_digits": "first_six_digits3",
          "label": "label3"
        },
        "items": [
          {
            "id": "id0",
            "description": "description0",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 110,
              "scheme_type": "scheme_type8",
              "price_brackets": [
                {
                  "start_quantity": 99,
                  "price": 219,
                  "end_quantity": 107,
                  "overage_price": 121
                },
                {
                  "start_quantity": 100,
                  "price": 218,
                  "end_quantity": 108,
                  "overage_price": 122
                },
                {
                  "start_quantity": 101,
                  "price": 217,
                  "end_quantity": 109,
                  "overage_price": 123
                }
              ],
              "minimum_price": 14,
              "percentage": 213.16
            },
            "discounts": [
              {},
              {},
              {}
            ],
            "increments": [
              {
                "id": "id1",
                "value": 86.93,
                "increment_type": "increment_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 243,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description9",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name0",
            "quantity": 88,
            "cycles": 148,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          {
            "id": "id1",
            "description": "description1",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 111,
              "scheme_type": "scheme_type7",
              "price_brackets": [
                {
                  "start_quantity": 98,
                  "price": 220,
                  "end_quantity": 106,
                  "overage_price": 120
                },
                {
                  "start_quantity": 99,
                  "price": 219,
                  "end_quantity": 107,
                  "overage_price": 121
                }
              ],
              "minimum_price": 15,
              "percentage": 213.15
            },
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id0",
                "value": 86.92,
                "increment_type": "increment_type2",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 244,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id9",
                "value": 86.91,
                "increment_type": "increment_type1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 245,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description1",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name1",
            "quantity": 89,
            "cycles": 147,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor3",
        "metadata": {
          "key0": "metadata0",
          "key1": "metadata1",
          "key2": "metadata2"
        },
        "setup": {
          "id": "id7",
          "description": "description3",
          "amount": 21,
          "status": "status1"
        },
        "gateway_affiliation_id": "gateway_affiliation_id9",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 73,
        "minimum_price": 215,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {},
          {},
          {}
        ],
        "increments": [
          {
            "id": "id4",
            "value": 55.46,
            "increment_type": "increment_type6",
            "status": "status4",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 62,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description6",
            "subscription": {},
            "subscription_item": {
              "id": "id0",
              "description": "description0",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 184,
                "scheme_type": "scheme_type8",
                "price_brackets": [
                  {
                    "start_quantity": 25,
                    "price": 219,
                    "end_quantity": 33,
                    "overage_price": 47
                  }
                ],
                "minimum_price": 168,
                "percentage": 171.46
              },
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "subscription": {},
              "name": "name0",
              "quantity": 162,
              "cycles": 74,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "boleto_due_days": 155,
        "split": {
          "enabled": true,
          "rules": [
            {
              "type": "type7",
              "amount": 141,
              "recipient": {
                "id": "id5",
                "name": "name5",
                "email": "email1",
                "document": "document1",
                "description": "description5",
                "type": "type5",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id3",
                  "holder_name": "holder_name9",
                  "holder_type": "holder_type5",
                  "bank": "bank1",
                  "branch_number": "branch_number9",
                  "branch_check_digit": "branch_check_digit9",
                  "account_number": "account_number3",
                  "account_check_digit": "account_check_digit9",
                  "type": "type7",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata0"
                  },
                  "pix_key": "pix_key3"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway9",
                    "status": "status1",
                    "pgid": "pgid5",
                    "created_at": "created_at7",
                    "updated_at": "updated_at5"
                  }
                ],
                "metadata": {
                  "key0": "metadata8"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type1",
                  "volume_percentage": 177,
                  "delay": 113,
                  "days": [
                    89,
                    90,
                    91
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval9",
                  "transfer_day": 87
                },
                "code": "code3",
                "payment_mode": "payment_mode1"
              },
              "gateway_id": "gateway_id7",
              "options": {
                "liable": true,
                "charge_processing_fee": true,
                "charge_remainder_fee": "charge_remainder_fee7"
              },
              "id": "id3"
            },
            {
              "type": "type6",
              "amount": 140,
              "recipient": {
                "id": "id4",
                "name": "name4",
                "email": "email2",
                "document": "document2",
                "description": "description6",
                "type": "type6",
                "status": "status4",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id2",
                  "holder_name": "holder_name8",
                  "holder_type": "holder_type4",
                  "bank": "bank0",
                  "branch_number": "branch_number8",
                  "branch_check_digit": "branch_check_digit8",
                  "account_number": "account_number2",
                  "account_check_digit": "account_check_digit8",
                  "type": "type8",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata8"
                  },
                  "pix_key": "pix_key4"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway8",
                    "status": "status0",
                    "pgid": "pgid4",
                    "created_at": "created_at6",
                    "updated_at": "updated_at4"
                  },
                  {
                    "gateway": "gateway9",
                    "status": "status1",
                    "pgid": "pgid5",
                    "created_at": "created_at7",
                    "updated_at": "updated_at5"
                  },
                  {
                    "gateway": "gateway0",
                    "status": "status2",
                    "pgid": "pgid6",
                    "created_at": "created_at8",
                    "updated_at": "updated_at6"
                  }
                ],
                "metadata": {
                  "key0": "metadata9",
                  "key1": "metadata0"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type2",
                  "volume_percentage": 178,
                  "delay": 112,
                  "days": [
                    88,
                    89
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval0",
                  "transfer_day": 88
                },
                "code": "code2",
                "payment_mode": "payment_mode2"
              },
              "gateway_id": "gateway_id6",
              "options": {
                "liable": false,
                "charge_processing_fee": false,
                "charge_remainder_fee": "charge_remainder_fee6"
              },
              "id": "id4"
            }
          ]
        },
        "boleto": {
          "interest": {
            "days": 121,
            "type": "type3",
            "amount": 195
          },
          "fine": {
            "days": 103,
            "type": "type9",
            "amount": 79
          },
          "max_days_to_pay_past_due": 157
        },
        "manual_billing": true
      },
      "subscription_item": {
        "id": "id7",
        "description": "description7",
        "status": "status9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 19,
          "scheme_type": "scheme_type9",
          "price_brackets": [
            {
              "start_quantity": 190,
              "price": 128,
              "end_quantity": 198,
              "overage_price": 212
            },
            {
              "start_quantity": 191,
              "price": 127,
              "end_quantity": 199,
              "overage_price": 213
            }
          ],
          "minimum_price": 179,
          "percentage": 47.67
        },
        "discounts": [
          {},
          {}
        ],
        "increments": [
          {
            "id": "id6",
            "value": 156.58,
            "increment_type": "increment_type8",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 190,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description4",
            "subscription": {
              "id": "id8",
              "code": "code6",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval6",
              "interval_count": 0,
              "billing_type": "billing_type2",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id6",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status8",
                "duration": 240,
                "created_at": "created_at4",
                "updated_at": "updated_at2",
                "cycle": 180
              },
              "payment_method": "payment_method2",
              "currency": "currency8",
              "installments": 168,
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id8",
                "name": "name8",
                "email": "email8",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document2",
                "type": "type2",
                "fb_access_token": "fb_access_token2",
                "address": {
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata5"
                  },
                  "line_1": "line_18",
                  "line_2": "line_22",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata5"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code0",
                    "number": "number8",
                    "area_code": "area_code0"
                  },
                  "mobile_phone": {
                    "country_code": "country_code0",
                    "number": "number2",
                    "area_code": "area_code0"
                  }
                },
                "fb_id": 160,
                "code": "code6",
                "document_type": "document_type6"
              },
              "card": {
                "id": "id2",
                "last_four_digits": "last_four_digits8",
                "brand": "brand6",
                "holder_name": "holder_name8",
                "exp_month": 194,
                "exp_year": 102,
                "status": "status6",
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
                "customer": {
                  "id": "id2",
                  "name": "name2",
                  "email": "email4",
                  "delinquent": false,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document4",
                  "type": "type8",
                  "fb_access_token": "fb_access_token6",
                  "address": {
                    "id": "id8",
                    "street": "street8",
                    "number": "number6",
                    "complement": "complement4",
                    "zip_code": "zip_code2",
                    "neighborhood": "neighborhood4",
                    "city": "city8",
                    "state": "state4",
                    "country": "country2",
                    "status": "status0",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "customer": {},
                    "metadata": {
                      "key0": "metadata5",
                      "key1": "metadata4",
                      "key2": "metadata3"
                    },
                    "line_1": "line_12",
                    "line_2": "line_26",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata1",
                    "key1": "metadata2",
                    "key2": "metadata3"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code4",
                      "number": "number8",
                      "area_code": "area_code4"
                    },
                    "mobile_phone": {
                      "country_code": "country_code6",
                      "number": "number6",
                      "area_code": "area_code6"
                    }
                  },
                  "fb_id": 90,
                  "code": "code0",
                  "document_type": "document_type0"
                },
                "metadata": {
                  "key0": "metadata1"
                },
                "type": "type8",
                "holder_document": "holder_document4",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits2",
                "label": "label2"
              },
              "items": [
                {},
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor8",
              "metadata": {
                "key0": "metadata5",
                "key1": "metadata4"
              },
              "setup": {
                "id": "id2",
                "description": "description2",
                "amount": 192,
                "status": "status4"
              },
              "gateway_affiliation_id": "gateway_affiliation_id4",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 140,
              "minimum_price": 254,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "boleto_due_days": 112,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type2",
                    "amount": 72,
                    "recipient": {
                      "id": "id0",
                      "name": "name0",
                      "email": "email6",
                      "document": "document6",
                      "description": "description0",
                      "type": "type0",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id8",
                        "holder_name": "holder_name4",
                        "holder_type": "holder_type0",
                        "bank": "bank6",
                        "branch_number": "branch_number4",
                        "branch_check_digit": "branch_check_digit4",
                        "account_number": "account_number8",
                        "account_check_digit": "account_check_digit4",
                        "type": "type8",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata5"
                        },
                        "pix_key": "pix_key8"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway4",
                          "status": "status6",
                          "pgid": "pgid0",
                          "created_at": "created_at2",
                          "updated_at": "updated_at0"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata3"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type6",
                        "volume_percentage": 66,
                        "delay": 224,
                        "days": [
                          200,
                          201,
                          202
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval4",
                        "transfer_day": 232
                      },
                      "code": "code8",
                      "payment_mode": "payment_mode4"
                    },
                    "gateway_id": "gateway_id2",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee4"
                    },
                    "id": "id8"
                  },
                  {
                    "type": "type1",
                    "amount": 73,
                    "recipient": {
                      "id": "id1",
                      "name": "name1",
                      "email": "email5",
                      "document": "document5",
                      "description": "description1",
                      "type": "type9",
                      "status": "status7",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id9",
                        "holder_name": "holder_name5",
                        "holder_type": "holder_type1",
                        "bank": "bank7",
                        "branch_number": "branch_number5",
                        "branch_check_digit": "branch_check_digit5",
                        "account_number": "account_number9",
                        "account_check_digit": "account_check_digit5",
                        "type": "type9",
                        "status": "status1",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata6",
                          "key1": "metadata5",
                          "key2": "metadata4"
                        },
                        "pix_key": "pix_key7"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway5",
                          "status": "status7",
                          "pgid": "pgid1",
                          "created_at": "created_at3",
                          "updated_at": "updated_at1"
                        },
                        {
                          "gateway": "gateway6",
                          "status": "status8",
                          "pgid": "pgid2",
                          "created_at": "created_at4",
                          "updated_at": "updated_at2"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata2",
                        "key1": "metadata3",
                        "key2": "metadata4"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type5",
                        "volume_percentage": 65,
                        "delay": 225,
                        "days": [
                          201
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval3",
                        "transfer_day": 231
                      },
                      "code": "code9",
                      "payment_mode": "payment_mode5"
                    },
                    "gateway_id": "gateway_id1",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee5"
                    },
                    "id": "id9"
                  },
                  {
                    "type": "type0",
                    "amount": 74,
                    "recipient": {
                      "id": "id2",
                      "name": "name2",
                      "email": "email4",
                      "document": "document4",
                      "description": "description2",
                      "type": "type8",
                      "status": "status6",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id0",
                        "holder_name": "holder_name6",
                        "holder_type": "holder_type2",
                        "bank": "bank8",
                        "branch_number": "branch_number6",
                        "branch_check_digit": "branch_check_digit6",
                        "account_number": "account_number0",
                        "account_check_digit": "account_check_digit6",
                        "type": "type0",
                        "status": "status2",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata7",
                          "key1": "metadata6"
                        },
                        "pix_key": "pix_key6"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway6",
                          "status": "status8",
                          "pgid": "pgid2",
                          "created_at": "created_at4",
                          "updated_at": "updated_at2"
                        },
                        {
                          "gateway": "gateway7",
                          "status": "status9",
                          "pgid": "pgid3",
                          "created_at": "created_at5",
                          "updated_at": "updated_at3"
                        },
                        {
                          "gateway": "gateway8",
                          "status": "status0",
                          "pgid": "pgid4",
                          "created_at": "created_at6",
                          "updated_at": "updated_at4"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata1",
                        "key1": "metadata2"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type4",
                        "volume_percentage": 64,
                        "delay": 226,
                        "days": [
                          202,
                          203
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval2",
                        "transfer_day": 230
                      },
                      "code": "code0",
                      "payment_mode": "payment_mode6"
                    },
                    "gateway_id": "gateway_id0",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee6"
                    },
                    "id": "id0"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 234,
                  "type": "type8",
                  "amount": 52
                },
                "fine": {
                  "days": 56,
                  "type": "type0",
                  "amount": 130
                },
                "max_days_to_pay_past_due": 44
              },
              "manual_billing": false
            },
            "subscription_item": {}
          },
          {
            "id": "id7",
            "value": 156.59,
            "increment_type": "increment_type9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 189,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {
              "id": "id7",
              "code": "code5",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval5",
              "interval_count": 255,
              "billing_type": "billing_type1",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id5",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status7",
                "duration": 239,
                "created_at": "created_at3",
                "updated_at": "updated_at1",
                "cycle": 179
              },
              "payment_method": "payment_method3",
              "currency": "currency7",
              "installments": 167,
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id7",
                "name": "name7",
                "email": "email9",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document1",
                "type": "type3",
                "fb_access_token": "fb_access_token1",
                "address": {
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata6",
                    "key1": "metadata5",
                    "key2": "metadata4"
                  },
                  "line_1": "line_17",
                  "line_2": "line_21",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata3"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number7",
                    "area_code": "area_code9"
                  },
                  "mobile_phone": {
                    "country_code": "country_code1",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 159,
                "code": "code5",
                "document_type": "document_type5"
              },
              "card": {
                "id": "id1",
                "last_four_digits": "last_four_digits7",
                "brand": "brand5",
                "holder_name": "holder_name7",
                "exp_month": 195,
                "exp_year": 101,
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street3",
                  "number": "number9",
                  "zip_code": "zip_code7",
                  "neighborhood": "neighborhood9",
                  "city": "city7",
                  "state": "state1",
                  "country": "country7",
                  "complement": "complement1",
                  "line_1": "line_13",
                  "line_2": "line_21"
                },
                "customer": {
                  "id": "id1",
                  "name": "name1",
                  "email": "email5",
                  "delinquent": true,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document5",
                  "type": "type9",
                  "fb_access_token": "fb_access_token5",
                  "address": {
                    "id": "id7",
                    "street": "street7",
                    "number": "number5",
                    "complement": "complement3",
                    "zip_code": "zip_code1",
                    "neighborhood": "neighborhood3",
                    "city": "city7",
                    "state": "state3",
                    "country": "country1",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "customer": {},
                    "metadata": {
                      "key0": "metadata4"
                    },
                    "line_1": "line_11",
                    "line_2": "line_25",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata2"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code3",
                      "number": "number9",
                      "area_code": "area_code3"
                    },
                    "mobile_phone": {
                      "country_code": "country_code7",
                      "number": "number5",
                      "area_code": "area_code7"
                    }
                  },
                  "fb_id": 89,
                  "code": "code9",
                  "document_type": "document_type9"
                },
                "metadata": {
                  "key0": "metadata2",
                  "key1": "metadata3"
                },
                "type": "type9",
                "holder_document": "holder_document5",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits1",
                "label": "label1"
              },
              "items": [
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor7",
              "metadata": {
                "key0": "metadata4",
                "key1": "metadata3",
                "key2": "metadata2"
              },
              "setup": {
                "id": "id1",
                "description": "description1",
                "amount": 191,
                "status": "status3"
              },
              "gateway_affiliation_id": "gateway_affiliation_id3",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 139,
              "minimum_price": 253,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "boleto_due_days": 111,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type3",
                    "amount": 71,
                    "recipient": {
                      "id": "id9",
                      "name": "name9",
                      "email": "email7",
                      "document": "document7",
                      "description": "description9",
                      "type": "type1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id7",
                        "holder_name": "holder_name3",
                        "holder_type": "holder_type9",
                        "bank": "bank5",
                        "branch_number": "branch_number3",
                        "branch_check_digit": "branch_check_digit3",
                        "account_number": "account_number7",
                        "account_check_digit": "account_check_digit3",
                        "type": "type7",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata4",
                          "key1": "metadata3"
                        },
                        "pix_key": "pix_key9"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway3",
                          "status": "status5",
                          "pgid": "pgid9",
                          "created_at": "created_at1",
                          "updated_at": "updated_at9"
                        },
                        {
                          "gateway": "gateway4",
                          "status": "status6",
                          "pgid": "pgid0",
                          "created_at": "created_at2",
                          "updated_at": "updated_at0"
                        },
                        {
                          "gateway": "gateway5",
                          "status": "status7",
                          "pgid": "pgid1",
                          "created_at": "created_at3",
                          "updated_at": "updated_at1"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata4",
                        "key1": "metadata5"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type7",
                        "volume_percentage": 67,
                        "delay": 223,
                        "days": [
                          199,
                          200
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval5",
                        "transfer_day": 233
                      },
                      "code": "code7",
                      "payment_mode": "payment_mode3"
                    },
                    "gateway_id": "gateway_id3",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee3"
                    },
                    "id": "id7"
                  },
                  {
                    "type": "type2",
                    "amount": 72,
                    "recipient": {
                      "id": "id0",
                      "name": "name0",
                      "email": "email6",
                      "document": "document6",
                      "description": "description0",
                      "type": "type0",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id8",
                        "holder_name": "holder_name4",
                        "holder_type": "holder_type0",
                        "bank": "bank6",
                        "branch_number": "branch_number4",
                        "branch_check_digit": "branch_check_digit4",
                        "account_number": "account_number8",
                        "account_check_digit": "account_check_digit4",
                        "type": "type8",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata5"
                        },
                        "pix_key": "pix_key8"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway4",
                          "status": "status6",
                          "pgid": "pgid0",
                          "created_at": "created_at2",
                          "updated_at": "updated_at0"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata3"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type6",
                        "volume_percentage": 66,
                        "delay": 224,
                        "days": [
                          200,
                          201,
                          202
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval4",
                        "transfer_day": 232
                      },
                      "code": "code8",
                      "payment_mode": "payment_mode4"
                    },
                    "gateway_id": "gateway_id2",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee4"
                    },
                    "id": "id8"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 235,
                  "type": "type7",
                  "amount": 53
                },
                "fine": {
                  "days": 55,
                  "type": "type1",
                  "amount": 129
                },
                "max_days_to_pay_past_due": 43
              },
              "manual_billing": true
            },
            "subscription_item": {}
          },
          {
            "id": "id8",
            "value": 156.6,
            "increment_type": "increment_type0",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 188,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {
              "id": "id6",
              "code": "code4",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval4",
              "interval_count": 254,
              "billing_type": "billing_type0",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id4",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status6",
                "duration": 238,
                "created_at": "created_at2",
                "updated_at": "updated_at0",
                "cycle": 178
              },
              "payment_method": "payment_method4",
              "currency": "currency6",
              "installments": 166,
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id6",
                "name": "name6",
                "email": "email0",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document0",
                "type": "type4",
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
                    "key0": "metadata7",
                    "key1": "metadata6"
                  },
                  "line_1": "line_16",
                  "line_2": "line_20",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata2",
                  "key2": "metadata1"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code8",
                    "number": "number6",
                    "area_code": "area_code8"
                  },
                  "mobile_phone": {
                    "country_code": "country_code2",
                    "number": "number4",
                    "area_code": "area_code8"
                  }
                },
                "fb_id": 158,
                "code": "code4",
                "document_type": "document_type4"
              },
              "card": {
                "id": "id0",
                "last_four_digits": "last_four_digits6",
                "brand": "brand4",
                "holder_name": "holder_name6",
                "exp_month": 196,
                "exp_year": 100,
                "status": "status8",
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
                "customer": {
                  "id": "id0",
                  "name": "name0",
                  "email": "email6",
                  "delinquent": false,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document6",
                  "type": "type0",
                  "fb_access_token": "fb_access_token4",
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
                    "customer": {},
                    "metadata": {
                      "key0": "metadata3",
                      "key1": "metadata2"
                    },
                    "line_1": "line_10",
                    "line_2": "line_24",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata3",
                    "key1": "metadata4"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code2",
                      "number": "number0",
                      "area_code": "area_code2"
                    },
                    "mobile_phone": {
                      "country_code": "country_code8",
                      "number": "number4",
                      "area_code": "area_code8"
                    }
                  },
                  "fb_id": 88,
                  "code": "code8",
                  "document_type": "document_type8"
                },
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata4",
                  "key2": "metadata5"
                },
                "type": "type0",
                "holder_document": "holder_document6",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits0",
                "label": "label0"
              },
              "items": [
                {}
              ],
              "statement_descriptor": "statement_descriptor6",
              "metadata": {
                "key0": "metadata3"
              },
              "setup": {
                "id": "id0",
                "description": "description0",
                "amount": 190,
                "status": "status2"
              },
              "gateway_affiliation_id": "gateway_affiliation_id2",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 138,
              "minimum_price": 252,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "boleto_due_days": 110,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type4",
                    "amount": 70,
                    "recipient": {
                      "id": "id8",
                      "name": "name8",
                      "email": "email8",
                      "document": "document8",
                      "description": "description8",
                      "type": "type2",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id6",
                        "holder_name": "holder_name2",
                        "holder_type": "holder_type8",
                        "bank": "bank4",
                        "branch_number": "branch_number2",
                        "branch_check_digit": "branch_check_digit2",
                        "account_number": "account_number6",
                        "account_check_digit": "account_check_digit2",
                        "type": "type6",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata3",
                          "key1": "metadata2",
                          "key2": "metadata1"
                        },
                        "pix_key": "pix_key0"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway2",
                          "status": "status4",
                          "pgid": "pgid8",
                          "created_at": "created_at0",
                          "updated_at": "updated_at8"
                        },
                        {
                          "gateway": "gateway3",
                          "status": "status5",
                          "pgid": "pgid9",
                          "created_at": "created_at1",
                          "updated_at": "updated_at9"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata5",
                        "key1": "metadata6",
                        "key2": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 68,
                        "delay": 222,
                        "days": [
                          198
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 234
                      },
                      "code": "code6",
                      "payment_mode": "payment_mode2"
                    },
                    "gateway_id": "gateway_id4",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee2"
                    },
                    "id": "id6"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 236,
                  "type": "type6",
                  "amount": 54
                },
                "fine": {
                  "days": 54,
                  "type": "type2",
                  "amount": 128
                },
                "max_days_to_pay_past_due": 42
              },
              "manual_billing": false
            },
            "subscription_item": {}
          }
        ],
        "subscription": {
          "id": "id7",
          "code": "code5",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval5",
          "interval_count": 55,
          "billing_type": "billing_type9",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id5",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status3",
            "duration": 39,
            "created_at": "created_at3",
            "updated_at": "updated_at1",
            "cycle": 235
          },
          "payment_method": "payment_method3",
          "currency": "currency3",
          "installments": 223,
          "status": "status1",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id3",
            "name": "name3",
            "email": "email3",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document3",
            "type": "type7",
            "fb_access_token": "fb_access_token7",
            "address": {
              "id": "id9",
              "street": "street9",
              "number": "number7",
              "complement": "complement5",
              "zip_code": "zip_code3",
              "neighborhood": "neighborhood5",
              "city": "city9",
              "state": "state5",
              "country": "country3",
              "status": "status1",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata6",
                "key1": "metadata5"
              },
              "line_1": "line_17",
              "line_2": "line_27",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata0",
              "key1": "metadata1"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code5",
                "number": "number7",
                "area_code": "area_code5"
              },
              "mobile_phone": {
                "country_code": "country_code5",
                "number": "number7",
                "area_code": "area_code5"
              }
            },
            "fb_id": 201,
            "code": "code1",
            "document_type": "document_type1"
          },
          "card": {
            "id": "id9",
            "last_four_digits": "last_four_digits5",
            "brand": "brand3",
            "holder_name": "holder_name5",
            "exp_month": 201,
            "exp_year": 95,
            "status": "status9",
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
            "customer": {
              "id": "id9",
              "name": "name9",
              "email": "email7",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document7",
              "type": "type1",
              "fb_access_token": "fb_access_token3",
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
                "customer": {},
                "metadata": {
                  "key0": "metadata2"
                },
                "line_1": "line_19",
                "line_2": "line_23",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata4"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code1",
                  "number": "number1",
                  "area_code": "area_code1"
                },
                "mobile_phone": {
                  "country_code": "country_code9",
                  "number": "number3",
                  "area_code": "area_code9"
                }
              },
              "fb_id": 83,
              "code": "code7",
              "document_type": "document_type7"
            },
            "metadata": {
              "key0": "metadata4",
              "key1": "metadata5"
            },
            "type": "type1",
            "holder_document": "holder_document7",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits9",
            "label": "label9"
          },
          "items": [
            {},
            {},
            {}
          ],
          "statement_descriptor": "statement_descriptor7",
          "metadata": {
            "key0": "metadata6",
            "key1": "metadata7"
          },
          "setup": {
            "id": "id1",
            "description": "description9",
            "amount": 9,
            "status": "status7"
          },
          "gateway_affiliation_id": "gateway_affiliation_id3",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 61,
          "minimum_price": 203,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {}
          ],
          "increments": [
            {
              "id": "id0",
              "value": 75.82,
              "increment_type": "increment_type2",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 74,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description0",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id1",
              "value": 75.83,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 73,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id2",
              "value": 75.84,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 72,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "boleto_due_days": 167,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type7",
                "amount": 219,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "document": "document1",
                  "description": "description5",
                  "type": "type5",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id3",
                    "holder_name": "holder_name9",
                    "holder_type": "holder_type5",
                    "bank": "bank1",
                    "branch_number": "branch_number9",
                    "branch_check_digit": "branch_check_digit9",
                    "account_number": "account_number3",
                    "account_check_digit": "account_check_digit9",
                    "type": "type7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata0"
                    },
                    "pix_key": "pix_key3"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 99,
                    "delay": 191,
                    "days": [
                      167,
                      168,
                      169
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 9
                  },
                  "code": "code3",
                  "payment_mode": "payment_mode1"
                },
                "gateway_id": "gateway_id7",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee7"
                },
                "id": "id3"
              },
              {
                "type": "type8",
                "amount": 220,
                "recipient": {
                  "id": "id6",
                  "name": "name6",
                  "email": "email0",
                  "document": "document0",
                  "description": "description4",
                  "type": "type4",
                  "status": "status2",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id4",
                    "holder_name": "holder_name0",
                    "holder_type": "holder_type6",
                    "bank": "bank2",
                    "branch_number": "branch_number0",
                    "branch_check_digit": "branch_check_digit0",
                    "account_number": "account_number4",
                    "account_check_digit": "account_check_digit0",
                    "type": "type6",
                    "status": "status6",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata1",
                      "key1": "metadata0",
                      "key2": "metadata9"
                    },
                    "pix_key": "pix_key2"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    },
                    {
                      "gateway": "gateway1",
                      "status": "status3",
                      "pgid": "pgid7",
                      "created_at": "created_at9",
                      "updated_at": "updated_at7"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8",
                    "key2": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type0",
                    "volume_percentage": 98,
                    "delay": 192,
                    "days": [
                      168
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval8",
                    "transfer_day": 8
                  },
                  "code": "code4",
                  "payment_mode": "payment_mode0"
                },
                "gateway_id": "gateway_id8",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee8"
                },
                "id": "id2"
              },
              {
                "type": "type9",
                "amount": 221,
                "recipient": {
                  "id": "id7",
                  "name": "name7",
                  "email": "email9",
                  "document": "document9",
                  "description": "description3",
                  "type": "type3",
                  "status": "status1",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id5",
                    "holder_name": "holder_name1",
                    "holder_type": "holder_type7",
                    "bank": "bank3",
                    "branch_number": "branch_number1",
                    "branch_check_digit": "branch_check_digit1",
                    "account_number": "account_number5",
                    "account_check_digit": "account_check_digit1",
                    "type": "type5",
                    "status": "status7",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata2",
                      "key1": "metadata1"
                    },
                    "pix_key": "pix_key1"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway1",
                      "status": "status3",
                      "pgid": "pgid7",
                      "created_at": "created_at9",
                      "updated_at": "updated_at7"
                    },
                    {
                      "gateway": "gateway2",
                      "status": "status4",
                      "pgid": "pgid8",
                      "created_at": "created_at0",
                      "updated_at": "updated_at8"
                    },
                    {
                      "gateway": "gateway3",
                      "status": "status5",
                      "pgid": "pgid9",
                      "created_at": "created_at1",
                      "updated_at": "updated_at9"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata6",
                    "key1": "metadata7"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type9",
                    "volume_percentage": 97,
                    "delay": 193,
                    "days": [
                      169,
                      170
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval7",
                    "transfer_day": 7
                  },
                  "code": "code5",
                  "payment_mode": "payment_mode9"
                },
                "gateway_id": "gateway_id9",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee9"
                },
                "id": "id1"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 133,
              "type": "type7",
              "amount": 207
            },
            "fine": {
              "days": 115,
              "type": "type5",
              "amount": 67
            },
            "max_days_to_pay_past_due": 145
          },
          "manual_billing": true
        },
        "name": "name7",
        "quantity": 247,
        "cycles": 11,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      }
    },
    {
      "id": "id2",
      "value": 10.24,
      "discount_type": "discount_type0",
      "status": "status4",
      "created_at": "2016-03-13T12:52:32.123Z",
      "cycles": 232,
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "description": "description2",
      "subscription": {
        "id": "id2",
        "code": "code0",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval0",
        "interval_count": 42,
        "billing_type": "billing_type4",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id0",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status8",
          "duration": 26,
          "created_at": "created_at8",
          "updated_at": "updated_at6",
          "cycle": 222
        },
        "payment_method": "payment_method8",
        "currency": "currency8",
        "installments": 210,
        "status": "status6",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {
          "id": "id8",
          "name": "name8",
          "email": "email8",
          "delinquent": false,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document8",
          "type": "type2",
          "fb_access_token": "fb_access_token2",
          "address": {
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
            "customer": {},
            "metadata": {
              "key0": "metadata1",
              "key1": "metadata0",
              "key2": "metadata9"
            },
            "line_1": "line_12",
            "line_2": "line_22",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata6",
            "key2": "metadata7"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code0",
              "number": "number2",
              "area_code": "area_code0"
            },
            "mobile_phone": {
              "country_code": "country_code0",
              "number": "number2",
              "area_code": "area_code0"
            }
          },
          "fb_id": 214,
          "code": "code6",
          "document_type": "document_type6"
        },
        "card": {
          "id": "id4",
          "last_four_digits": "last_four_digits0",
          "brand": "brand8",
          "holder_name": "holder_name0",
          "exp_month": 188,
          "exp_year": 108,
          "status": "status4",
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
          "customer": {
            "id": "id4",
            "name": "name4",
            "email": "email2",
            "delinquent": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document2",
            "type": "type6",
            "fb_access_token": "fb_access_token8",
            "address": {
              "id": "id0",
              "street": "street0",
              "number": "number8",
              "complement": "complement6",
              "zip_code": "zip_code4",
              "neighborhood": "neighborhood6",
              "city": "city0",
              "state": "state6",
              "country": "country4",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata7",
                "key1": "metadata6"
              },
              "line_1": "line_16",
              "line_2": "line_28",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata9",
              "key1": "metadata0"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code6",
                "number": "number6",
                "area_code": "area_code6"
              },
              "mobile_phone": {
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 96,
            "code": "code2",
            "document_type": "document_type2"
          },
          "metadata": {
            "key0": "metadata9",
            "key1": "metadata0",
            "key2": "metadata1"
          },
          "type": "type6",
          "holder_document": "holder_document2",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "first_six_digits": "first_six_digits4",
          "label": "label4"
        },
        "items": [
          {
            "id": "id9",
            "description": "description9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 109,
              "scheme_type": "scheme_type9",
              "price_brackets": [
                {
                  "start_quantity": 100,
                  "price": 218,
                  "end_quantity": 108,
                  "overage_price": 122
                }
              ],
              "minimum_price": 13,
              "percentage": 213.17
            },
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id2",
                "value": 86.94,
                "increment_type": "increment_type4",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 242,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description8",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 86.93,
                "increment_type": "increment_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 243,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description9",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id0",
                "value": 86.92,
                "increment_type": "increment_type2",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 244,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name9",
            "quantity": 87,
            "cycles": 149,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor2",
        "metadata": {
          "key0": "metadata1"
        },
        "setup": {
          "id": "id6",
          "description": "description4",
          "amount": 22,
          "status": "status2"
        },
        "gateway_affiliation_id": "gateway_affiliation_id8",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 74,
        "minimum_price": 216,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {},
          {}
        ],
        "increments": [
          {
            "id": "id5",
            "value": 55.47,
            "increment_type": "increment_type7",
            "status": "status3",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 61,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description5",
            "subscription": {},
            "subscription_item": {
              "id": "id1",
              "description": "description9",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 185,
                "scheme_type": "scheme_type7",
                "price_brackets": [
                  {
                    "start_quantity": 24,
                    "price": 218,
                    "end_quantity": 32,
                    "overage_price": 46
                  },
                  {
                    "start_quantity": 25,
                    "price": 219,
                    "end_quantity": 33,
                    "overage_price": 47
                  },
                  {
                    "start_quantity": 26,
                    "price": 220,
                    "end_quantity": 34,
                    "overage_price": 48
                  }
                ],
                "minimum_price": 167,
                "percentage": 171.45
              },
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "subscription": {},
              "name": "name1",
              "quantity": 163,
              "cycles": 73,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id6",
            "value": 55.48,
            "increment_type": "increment_type8",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 60,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description4",
            "subscription": {},
            "subscription_item": {
              "id": "id2",
              "description": "description8",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 186,
                "scheme_type": "scheme_type6",
                "price_brackets": [
                  {
                    "start_quantity": 23,
                    "price": 217,
                    "end_quantity": 31,
                    "overage_price": 45
                  },
                  {
                    "start_quantity": 24,
                    "price": 218,
                    "end_quantity": 32,
                    "overage_price": 46
                  }
                ],
                "minimum_price": 166,
                "percentage": 171.44
              },
              "discounts": [
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "subscription": {},
              "name": "name2",
              "quantity": 164,
              "cycles": 72,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "boleto_due_days": 154,
        "split": {
          "enabled": false,
          "rules": [
            {
              "type": "type8",
              "amount": 142,
              "recipient": {
                "id": "id6",
                "name": "name6",
                "email": "email0",
                "document": "document0",
                "description": "description4",
                "type": "type4",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id4",
                  "holder_name": "holder_name0",
                  "holder_type": "holder_type6",
                  "bank": "bank2",
                  "branch_number": "branch_number0",
                  "branch_check_digit": "branch_check_digit0",
                  "account_number": "account_number4",
                  "account_check_digit": "account_check_digit0",
                  "type": "type6",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata1",
                    "key1": "metadata0",
                    "key2": "metadata9"
                  },
                  "pix_key": "pix_key2"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway0",
                    "status": "status2",
                    "pgid": "pgid6",
                    "created_at": "created_at8",
                    "updated_at": "updated_at6"
                  },
                  {
                    "gateway": "gateway1",
                    "status": "status3",
                    "pgid": "pgid7",
                    "created_at": "created_at9",
                    "updated_at": "updated_at7"
                  }
                ],
                "metadata": {
                  "key0": "metadata7",
                  "key1": "metadata8",
                  "key2": "metadata9"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type0",
                  "volume_percentage": 176,
                  "delay": 114,
                  "days": [
                    90
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval8",
                  "transfer_day": 86
                },
                "code": "code4",
                "payment_mode": "payment_mode0"
              },
              "gateway_id": "gateway_id8",
              "options": {
                "liable": false,
                "charge_processing_fee": false,
                "charge_remainder_fee": "charge_remainder_fee8"
              },
              "id": "id2"
            }
          ]
        },
        "boleto": {
          "interest": {
            "days": 120,
            "type": "type2",
            "amount": 194
          },
          "fine": {
            "days": 102,
            "type": "type0",
            "amount": 80
          },
          "max_days_to_pay_past_due": 158
        },
        "manual_billing": false
      },
      "subscription_item": {
        "id": "id8",
        "description": "description8",
        "status": "status0",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 18,
          "scheme_type": "scheme_type0",
          "price_brackets": [
            {
              "start_quantity": 191,
              "price": 127,
              "end_quantity": 199,
              "overage_price": 213
            },
            {
              "start_quantity": 192,
              "price": 126,
              "end_quantity": 200,
              "overage_price": 214
            },
            {
              "start_quantity": 193,
              "price": 125,
              "end_quantity": 201,
              "overage_price": 215
            }
          ],
          "minimum_price": 178,
          "percentage": 47.68
        },
        "discounts": [
          {},
          {},
          {}
        ],
        "increments": [
          {
            "id": "id7",
            "value": 156.59,
            "increment_type": "increment_type9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 189,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {
              "id": "id7",
              "code": "code5",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval5",
              "interval_count": 255,
              "billing_type": "billing_type1",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id5",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status7",
                "duration": 239,
                "created_at": "created_at3",
                "updated_at": "updated_at1",
                "cycle": 179
              },
              "payment_method": "payment_method3",
              "currency": "currency7",
              "installments": 167,
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id7",
                "name": "name7",
                "email": "email9",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document1",
                "type": "type3",
                "fb_access_token": "fb_access_token1",
                "address": {
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata6",
                    "key1": "metadata5",
                    "key2": "metadata4"
                  },
                  "line_1": "line_17",
                  "line_2": "line_21",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata3"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number7",
                    "area_code": "area_code9"
                  },
                  "mobile_phone": {
                    "country_code": "country_code1",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 159,
                "code": "code5",
                "document_type": "document_type5"
              },
              "card": {
                "id": "id1",
                "last_four_digits": "last_four_digits7",
                "brand": "brand5",
                "holder_name": "holder_name7",
                "exp_month": 195,
                "exp_year": 101,
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street3",
                  "number": "number9",
                  "zip_code": "zip_code7",
                  "neighborhood": "neighborhood9",
                  "city": "city7",
                  "state": "state1",
                  "country": "country7",
                  "complement": "complement1",
                  "line_1": "line_13",
                  "line_2": "line_21"
                },
                "customer": {
                  "id": "id1",
                  "name": "name1",
                  "email": "email5",
                  "delinquent": true,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document5",
                  "type": "type9",
                  "fb_access_token": "fb_access_token5",
                  "address": {
                    "id": "id7",
                    "street": "street7",
                    "number": "number5",
                    "complement": "complement3",
                    "zip_code": "zip_code1",
                    "neighborhood": "neighborhood3",
                    "city": "city7",
                    "state": "state3",
                    "country": "country1",
                    "status": "status9",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "customer": {},
                    "metadata": {
                      "key0": "metadata4"
                    },
                    "line_1": "line_11",
                    "line_2": "line_25",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata2"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code3",
                      "number": "number9",
                      "area_code": "area_code3"
                    },
                    "mobile_phone": {
                      "country_code": "country_code7",
                      "number": "number5",
                      "area_code": "area_code7"
                    }
                  },
                  "fb_id": 89,
                  "code": "code9",
                  "document_type": "document_type9"
                },
                "metadata": {
                  "key0": "metadata2",
                  "key1": "metadata3"
                },
                "type": "type9",
                "holder_document": "holder_document5",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits1",
                "label": "label1"
              },
              "items": [
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor7",
              "metadata": {
                "key0": "metadata4",
                "key1": "metadata3",
                "key2": "metadata2"
              },
              "setup": {
                "id": "id1",
                "description": "description1",
                "amount": 191,
                "status": "status3"
              },
              "gateway_affiliation_id": "gateway_affiliation_id3",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 139,
              "minimum_price": 253,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "boleto_due_days": 111,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type3",
                    "amount": 71,
                    "recipient": {
                      "id": "id9",
                      "name": "name9",
                      "email": "email7",
                      "document": "document7",
                      "description": "description9",
                      "type": "type1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id7",
                        "holder_name": "holder_name3",
                        "holder_type": "holder_type9",
                        "bank": "bank5",
                        "branch_number": "branch_number3",
                        "branch_check_digit": "branch_check_digit3",
                        "account_number": "account_number7",
                        "account_check_digit": "account_check_digit3",
                        "type": "type7",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata4",
                          "key1": "metadata3"
                        },
                        "pix_key": "pix_key9"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway3",
                          "status": "status5",
                          "pgid": "pgid9",
                          "created_at": "created_at1",
                          "updated_at": "updated_at9"
                        },
                        {
                          "gateway": "gateway4",
                          "status": "status6",
                          "pgid": "pgid0",
                          "created_at": "created_at2",
                          "updated_at": "updated_at0"
                        },
                        {
                          "gateway": "gateway5",
                          "status": "status7",
                          "pgid": "pgid1",
                          "created_at": "created_at3",
                          "updated_at": "updated_at1"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata4",
                        "key1": "metadata5"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type7",
                        "volume_percentage": 67,
                        "delay": 223,
                        "days": [
                          199,
                          200
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval5",
                        "transfer_day": 233
                      },
                      "code": "code7",
                      "payment_mode": "payment_mode3"
                    },
                    "gateway_id": "gateway_id3",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee3"
                    },
                    "id": "id7"
                  },
                  {
                    "type": "type2",
                    "amount": 72,
                    "recipient": {
                      "id": "id0",
                      "name": "name0",
                      "email": "email6",
                      "document": "document6",
                      "description": "description0",
                      "type": "type0",
                      "status": "status8",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id8",
                        "holder_name": "holder_name4",
                        "holder_type": "holder_type0",
                        "bank": "bank6",
                        "branch_number": "branch_number4",
                        "branch_check_digit": "branch_check_digit4",
                        "account_number": "account_number8",
                        "account_check_digit": "account_check_digit4",
                        "type": "type8",
                        "status": "status0",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata5"
                        },
                        "pix_key": "pix_key8"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway4",
                          "status": "status6",
                          "pgid": "pgid0",
                          "created_at": "created_at2",
                          "updated_at": "updated_at0"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata3"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type6",
                        "volume_percentage": 66,
                        "delay": 224,
                        "days": [
                          200,
                          201,
                          202
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval4",
                        "transfer_day": 232
                      },
                      "code": "code8",
                      "payment_mode": "payment_mode4"
                    },
                    "gateway_id": "gateway_id2",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee4"
                    },
                    "id": "id8"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 235,
                  "type": "type7",
                  "amount": 53
                },
                "fine": {
                  "days": 55,
                  "type": "type1",
                  "amount": 129
                },
                "max_days_to_pay_past_due": 43
              },
              "manual_billing": true
            },
            "subscription_item": {}
          }
        ],
        "subscription": {
          "id": "id6",
          "code": "code4",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval6",
          "interval_count": 54,
          "billing_type": "billing_type0",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id4",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status4",
            "duration": 38,
            "created_at": "created_at2",
            "updated_at": "updated_at0",
            "cycle": 234
          },
          "payment_method": "payment_method4",
          "currency": "currency4",
          "installments": 222,
          "status": "status2",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id4",
            "name": "name4",
            "email": "email2",
            "delinquent": false,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document2",
            "type": "type6",
            "fb_access_token": "fb_access_token8",
            "address": {
              "id": "id0",
              "street": "street0",
              "number": "number8",
              "complement": "complement6",
              "zip_code": "zip_code4",
              "neighborhood": "neighborhood6",
              "city": "city0",
              "state": "state6",
              "country": "country4",
              "status": "status2",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata7"
              },
              "line_1": "line_16",
              "line_2": "line_28",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata9"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code6",
                "number": "number6",
                "area_code": "area_code6"
              },
              "mobile_phone": {
                "country_code": "country_code4",
                "number": "number8",
                "area_code": "area_code4"
              }
            },
            "fb_id": 202,
            "code": "code2",
            "document_type": "document_type2"
          },
          "card": {
            "id": "id0",
            "last_four_digits": "last_four_digits6",
            "brand": "brand4",
            "holder_name": "holder_name6",
            "exp_month": 200,
            "exp_year": 96,
            "status": "status8",
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
            "customer": {
              "id": "id0",
              "name": "name0",
              "email": "email6",
              "delinquent": false,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document6",
              "type": "type0",
              "fb_access_token": "fb_access_token4",
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
                "customer": {},
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata2",
                  "key2": "metadata1"
                },
                "line_1": "line_10",
                "line_2": "line_24",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata3",
                "key1": "metadata4",
                "key2": "metadata5"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code2",
                  "number": "number0",
                  "area_code": "area_code2"
                },
                "mobile_phone": {
                  "country_code": "country_code8",
                  "number": "number4",
                  "area_code": "area_code8"
                }
              },
              "fb_id": 84,
              "code": "code8",
              "document_type": "document_type8"
            },
            "metadata": {
              "key0": "metadata3"
            },
            "type": "type0",
            "holder_document": "holder_document6",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits0",
            "label": "label0"
          },
          "items": [
            {},
            {}
          ],
          "statement_descriptor": "statement_descriptor6",
          "metadata": {
            "key0": "metadata7",
            "key1": "metadata8",
            "key2": "metadata9"
          },
          "setup": {
            "id": "id0",
            "description": "description0",
            "amount": 10,
            "status": "status8"
          },
          "gateway_affiliation_id": "gateway_affiliation_id2",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 62,
          "minimum_price": 204,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {},
            {},
            {}
          ],
          "increments": [
            {
              "id": "id1",
              "value": 75.83,
              "increment_type": "increment_type3",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 73,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description9",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "boleto_due_days": 166,
          "split": {
            "enabled": false,
            "rules": [
              {
                "type": "type6",
                "amount": 218,
                "recipient": {
                  "id": "id4",
                  "name": "name4",
                  "email": "email2",
                  "document": "document2",
                  "description": "description6",
                  "type": "type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id2",
                    "holder_name": "holder_name8",
                    "holder_type": "holder_type4",
                    "bank": "bank0",
                    "branch_number": "branch_number8",
                    "branch_check_digit": "branch_check_digit8",
                    "account_number": "account_number2",
                    "account_check_digit": "account_check_digit8",
                    "type": "type8",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata9",
                      "key1": "metadata8"
                    },
                    "pix_key": "pix_key4"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway8",
                      "status": "status0",
                      "pgid": "pgid4",
                      "created_at": "created_at6",
                      "updated_at": "updated_at4"
                    },
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    },
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type2",
                    "volume_percentage": 100,
                    "delay": 190,
                    "days": [
                      166,
                      167
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 10
                  },
                  "code": "code2",
                  "payment_mode": "payment_mode2"
                },
                "gateway_id": "gateway_id6",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee6"
                },
                "id": "id4"
              },
              {
                "type": "type7",
                "amount": 219,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "document": "document1",
                  "description": "description5",
                  "type": "type5",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id3",
                    "holder_name": "holder_name9",
                    "holder_type": "holder_type5",
                    "bank": "bank1",
                    "branch_number": "branch_number9",
                    "branch_check_digit": "branch_check_digit9",
                    "account_number": "account_number3",
                    "account_check_digit": "account_check_digit9",
                    "type": "type7",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata0"
                    },
                    "pix_key": "pix_key3"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 99,
                    "delay": 191,
                    "days": [
                      167,
                      168,
                      169
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 9
                  },
                  "code": "code3",
                  "payment_mode": "payment_mode1"
                },
                "gateway_id": "gateway_id7",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee7"
                },
                "id": "id3"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 132,
              "type": "type6",
              "amount": 206
            },
            "fine": {
              "days": 114,
              "type": "type6",
              "amount": 68
            },
            "max_days_to_pay_past_due": 146
          },
          "manual_billing": false
        },
        "name": "name8",
        "quantity": 248,
        "cycles": 12,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      }
    },
    {
      "id": "id3",
      "value": 10.25,
      "discount_type": "discount_type1",
      "status": "status5",
      "created_at": "2016-03-13T12:52:32.123Z",
      "cycles": 231,
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "description": "description3",
      "subscription": {
        "id": "id1",
        "code": "code9",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval1",
        "interval_count": 41,
        "billing_type": "billing_type5",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id9",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status9",
          "duration": 25,
          "created_at": "created_at7",
          "updated_at": "updated_at5",
          "cycle": 221
        },
        "payment_method": "payment_method9",
        "currency": "currency9",
        "installments": 209,
        "status": "status7",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {
          "id": "id9",
          "name": "name9",
          "email": "email7",
          "delinquent": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document7",
          "type": "type1",
          "fb_access_token": "fb_access_token3",
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
            "customer": {},
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata1"
            },
            "line_1": "line_11",
            "line_2": "line_23",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata4",
            "key1": "metadata5"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code9",
              "number": "number1",
              "area_code": "area_code1"
            },
            "mobile_phone": {
              "country_code": "country_code9",
              "number": "number3",
              "area_code": "area_code9"
            }
          },
          "fb_id": 215,
          "code": "code7",
          "document_type": "document_type7"
        },
        "card": {
          "id": "id5",
          "last_four_digits": "last_four_digits1",
          "brand": "brand9",
          "holder_name": "holder_name1",
          "exp_month": 187,
          "exp_year": 109,
          "status": "status3",
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
          "customer": {
            "id": "id5",
            "name": "name5",
            "email": "email1",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document1",
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
                "key0": "metadata8"
              },
              "line_1": "line_15",
              "line_2": "line_29",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata8"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code7",
                "number": "number5",
                "area_code": "area_code7"
              },
              "mobile_phone": {
                "country_code": "country_code3",
                "number": "number9",
                "area_code": "area_code3"
              }
            },
            "fb_id": 97,
            "code": "code3",
            "document_type": "document_type3"
          },
          "metadata": {
            "key0": "metadata8",
            "key1": "metadata9"
          },
          "type": "type5",
          "holder_document": "holder_document1",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "first_six_digits": "first_six_digits5",
          "label": "label5"
        },
        "items": [
          {
            "id": "id8",
            "description": "description8",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 108,
              "scheme_type": "scheme_type0",
              "price_brackets": [
                {
                  "start_quantity": 101,
                  "price": 217,
                  "end_quantity": 109,
                  "overage_price": 123
                },
                {
                  "start_quantity": 102,
                  "price": 216,
                  "end_quantity": 110,
                  "overage_price": 124
                }
              ],
              "minimum_price": 12,
              "percentage": 213.18
            },
            "discounts": [
              {}
            ],
            "increments": [
              {
                "id": "id3",
                "value": 86.95,
                "increment_type": "increment_type5",
                "status": "status5",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 241,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description7",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id2",
                "value": 86.94,
                "increment_type": "increment_type4",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 242,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description8",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name8",
            "quantity": 86,
            "cycles": 150,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          {
            "id": "id9",
            "description": "description9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 109,
              "scheme_type": "scheme_type9",
              "price_brackets": [
                {
                  "start_quantity": 100,
                  "price": 218,
                  "end_quantity": 108,
                  "overage_price": 122
                }
              ],
              "minimum_price": 13,
              "percentage": 213.17
            },
            "discounts": [
              {},
              {}
            ],
            "increments": [
              {
                "id": "id2",
                "value": 86.94,
                "increment_type": "increment_type4",
                "status": "status6",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 242,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description8",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id1",
                "value": 86.93,
                "increment_type": "increment_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 243,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description9",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id0",
                "value": 86.92,
                "increment_type": "increment_type2",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 244,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description0",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name9",
            "quantity": 87,
            "cycles": 149,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          {
            "id": "id0",
            "description": "description0",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 110,
              "scheme_type": "scheme_type8",
              "price_brackets": [
                {
                  "start_quantity": 99,
                  "price": 219,
                  "end_quantity": 107,
                  "overage_price": 121
                },
                {
                  "start_quantity": 100,
                  "price": 218,
                  "end_quantity": 108,
                  "overage_price": 122
                },
                {
                  "start_quantity": 101,
                  "price": 217,
                  "end_quantity": 109,
                  "overage_price": 123
                }
              ],
              "minimum_price": 14,
              "percentage": 213.16
            },
            "discounts": [
              {},
              {},
              {}
            ],
            "increments": [
              {
                "id": "id1",
                "value": 86.93,
                "increment_type": "increment_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 243,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description9",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "subscription": {},
            "name": "name0",
            "quantity": 88,
            "cycles": 148,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor1",
        "metadata": {
          "key0": "metadata2",
          "key1": "metadata3"
        },
        "setup": {
          "id": "id5",
          "description": "description5",
          "amount": 23,
          "status": "status3"
        },
        "gateway_affiliation_id": "gateway_affiliation_id7",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 75,
        "minimum_price": 217,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {}
        ],
        "increments": [
          {
            "id": "id6",
            "value": 55.48,
            "increment_type": "increment_type8",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 60,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description4",
            "subscription": {},
            "subscription_item": {
              "id": "id2",
              "description": "description8",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 186,
                "scheme_type": "scheme_type6",
                "price_brackets": [
                  {
                    "start_quantity": 23,
                    "price": 217,
                    "end_quantity": 31,
                    "overage_price": 45
                  },
                  {
                    "start_quantity": 24,
                    "price": 218,
                    "end_quantity": 32,
                    "overage_price": 46
                  }
                ],
                "minimum_price": 166,
                "percentage": 171.44
              },
              "discounts": [
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "subscription": {},
              "name": "name2",
              "quantity": 164,
              "cycles": 72,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id7",
            "value": 55.49,
            "increment_type": "increment_type9",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 59,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description3",
            "subscription": {},
            "subscription_item": {
              "id": "id3",
              "description": "description7",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 187,
                "scheme_type": "scheme_type5",
                "price_brackets": [
                  {
                    "start_quantity": 22,
                    "price": 216,
                    "end_quantity": 30,
                    "overage_price": 44
                  }
                ],
                "minimum_price": 165,
                "percentage": 171.43
              },
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "subscription": {},
              "name": "name3",
              "quantity": 165,
              "cycles": 71,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id8",
            "value": 55.5,
            "increment_type": "increment_type0",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 58,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {},
            "subscription_item": {
              "id": "id4",
              "description": "description6",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 188,
                "scheme_type": "scheme_type4",
                "price_brackets": [
                  {
                    "start_quantity": 21,
                    "price": 215,
                    "end_quantity": 29,
                    "overage_price": 43
                  },
                  {
                    "start_quantity": 22,
                    "price": 216,
                    "end_quantity": 30,
                    "overage_price": 44
                  },
                  {
                    "start_quantity": 23,
                    "price": 217,
                    "end_quantity": 31,
                    "overage_price": 45
                  }
                ],
                "minimum_price": 164,
                "percentage": 171.42
              },
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "subscription": {},
              "name": "name4",
              "quantity": 166,
              "cycles": 70,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "boleto_due_days": 153,
        "split": {
          "enabled": true,
          "rules": [
            {
              "type": "type9",
              "amount": 143,
              "recipient": {
                "id": "id7",
                "name": "name7",
                "email": "email9",
                "document": "document9",
                "description": "description3",
                "type": "type3",
                "status": "status1",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id5",
                  "holder_name": "holder_name1",
                  "holder_type": "holder_type7",
                  "bank": "bank3",
                  "branch_number": "branch_number1",
                  "branch_check_digit": "branch_check_digit1",
                  "account_number": "account_number5",
                  "account_check_digit": "account_check_digit1",
                  "type": "type5",
                  "status": "status7",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata2",
                    "key1": "metadata1"
                  },
                  "pix_key": "pix_key1"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway1",
                    "status": "status3",
                    "pgid": "pgid7",
                    "created_at": "created_at9",
                    "updated_at": "updated_at7"
                  },
                  {
                    "gateway": "gateway2",
                    "status": "status4",
                    "pgid": "pgid8",
                    "created_at": "created_at0",
                    "updated_at": "updated_at8"
                  },
                  {
                    "gateway": "gateway3",
                    "status": "status5",
                    "pgid": "pgid9",
                    "created_at": "created_at1",
                    "updated_at": "updated_at9"
                  }
                ],
                "metadata": {
                  "key0": "metadata6",
                  "key1": "metadata7"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type9",
                  "volume_percentage": 175,
                  "delay": 115,
                  "days": [
                    91,
                    92
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval7",
                  "transfer_day": 85
                },
                "code": "code5",
                "payment_mode": "payment_mode9"
              },
              "gateway_id": "gateway_id9",
              "options": {
                "liable": true,
                "charge_processing_fee": true,
                "charge_remainder_fee": "charge_remainder_fee9"
              },
              "id": "id1"
            },
            {
              "type": "type8",
              "amount": 142,
              "recipient": {
                "id": "id6",
                "name": "name6",
                "email": "email0",
                "document": "document0",
                "description": "description4",
                "type": "type4",
                "status": "status2",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id4",
                  "holder_name": "holder_name0",
                  "holder_type": "holder_type6",
                  "bank": "bank2",
                  "branch_number": "branch_number0",
                  "branch_check_digit": "branch_check_digit0",
                  "account_number": "account_number4",
                  "account_check_digit": "account_check_digit0",
                  "type": "type6",
                  "status": "status6",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata1",
                    "key1": "metadata0",
                    "key2": "metadata9"
                  },
                  "pix_key": "pix_key2"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway0",
                    "status": "status2",
                    "pgid": "pgid6",
                    "created_at": "created_at8",
                    "updated_at": "updated_at6"
                  },
                  {
                    "gateway": "gateway1",
                    "status": "status3",
                    "pgid": "pgid7",
                    "created_at": "created_at9",
                    "updated_at": "updated_at7"
                  }
                ],
                "metadata": {
                  "key0": "metadata7",
                  "key1": "metadata8",
                  "key2": "metadata9"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type0",
                  "volume_percentage": 176,
                  "delay": 114,
                  "days": [
                    90
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval8",
                  "transfer_day": 86
                },
                "code": "code4",
                "payment_mode": "payment_mode0"
              },
              "gateway_id": "gateway_id8",
              "options": {
                "liable": false,
                "charge_processing_fee": false,
                "charge_remainder_fee": "charge_remainder_fee8"
              },
              "id": "id2"
            },
            {
              "type": "type7",
              "amount": 141,
              "recipient": {
                "id": "id5",
                "name": "name5",
                "email": "email1",
                "document": "document1",
                "description": "description5",
                "type": "type5",
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id3",
                  "holder_name": "holder_name9",
                  "holder_type": "holder_type5",
                  "bank": "bank1",
                  "branch_number": "branch_number9",
                  "branch_check_digit": "branch_check_digit9",
                  "account_number": "account_number3",
                  "account_check_digit": "account_check_digit9",
                  "type": "type7",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata0"
                  },
                  "pix_key": "pix_key3"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway9",
                    "status": "status1",
                    "pgid": "pgid5",
                    "created_at": "created_at7",
                    "updated_at": "updated_at5"
                  }
                ],
                "metadata": {
                  "key0": "metadata8"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type1",
                  "volume_percentage": 177,
                  "delay": 113,
                  "days": [
                    89,
                    90,
                    91
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval9",
                  "transfer_day": 87
                },
                "code": "code3",
                "payment_mode": "payment_mode1"
              },
              "gateway_id": "gateway_id7",
              "options": {
                "liable": true,
                "charge_processing_fee": true,
                "charge_remainder_fee": "charge_remainder_fee7"
              },
              "id": "id3"
            }
          ]
        },
        "boleto": {
          "interest": {
            "days": 119,
            "type": "type1",
            "amount": 193
          },
          "fine": {
            "days": 101,
            "type": "type1",
            "amount": 81
          },
          "max_days_to_pay_past_due": 159
        },
        "manual_billing": true
      },
      "subscription_item": {
        "id": "id9",
        "description": "description9",
        "status": "status1",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 17,
          "scheme_type": "scheme_type1",
          "price_brackets": [
            {
              "start_quantity": 192,
              "price": 126,
              "end_quantity": 200,
              "overage_price": 214
            }
          ],
          "minimum_price": 177,
          "percentage": 47.69
        },
        "discounts": [
          {}
        ],
        "increments": [
          {
            "id": "id8",
            "value": 156.6,
            "increment_type": "increment_type0",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 188,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description2",
            "subscription": {
              "id": "id6",
              "code": "code4",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval4",
              "interval_count": 254,
              "billing_type": "billing_type0",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id4",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status6",
                "duration": 238,
                "created_at": "created_at2",
                "updated_at": "updated_at0",
                "cycle": 178
              },
              "payment_method": "payment_method4",
              "currency": "currency6",
              "installments": 166,
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id6",
                "name": "name6",
                "email": "email0",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document0",
                "type": "type4",
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
                    "key0": "metadata7",
                    "key1": "metadata6"
                  },
                  "line_1": "line_16",
                  "line_2": "line_20",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata2",
                  "key2": "metadata1"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code8",
                    "number": "number6",
                    "area_code": "area_code8"
                  },
                  "mobile_phone": {
                    "country_code": "country_code2",
                    "number": "number4",
                    "area_code": "area_code8"
                  }
                },
                "fb_id": 158,
                "code": "code4",
                "document_type": "document_type4"
              },
              "card": {
                "id": "id0",
                "last_four_digits": "last_four_digits6",
                "brand": "brand4",
                "holder_name": "holder_name6",
                "exp_month": 196,
                "exp_year": 100,
                "status": "status8",
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
                "customer": {
                  "id": "id0",
                  "name": "name0",
                  "email": "email6",
                  "delinquent": false,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document6",
                  "type": "type0",
                  "fb_access_token": "fb_access_token4",
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
                    "customer": {},
                    "metadata": {
                      "key0": "metadata3",
                      "key1": "metadata2"
                    },
                    "line_1": "line_10",
                    "line_2": "line_24",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata3",
                    "key1": "metadata4"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code2",
                      "number": "number0",
                      "area_code": "area_code2"
                    },
                    "mobile_phone": {
                      "country_code": "country_code8",
                      "number": "number4",
                      "area_code": "area_code8"
                    }
                  },
                  "fb_id": 88,
                  "code": "code8",
                  "document_type": "document_type8"
                },
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata4",
                  "key2": "metadata5"
                },
                "type": "type0",
                "holder_document": "holder_document6",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits0",
                "label": "label0"
              },
              "items": [
                {}
              ],
              "statement_descriptor": "statement_descriptor6",
              "metadata": {
                "key0": "metadata3"
              },
              "setup": {
                "id": "id0",
                "description": "description0",
                "amount": 190,
                "status": "status2"
              },
              "gateway_affiliation_id": "gateway_affiliation_id2",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 138,
              "minimum_price": 252,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "boleto_due_days": 110,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type4",
                    "amount": 70,
                    "recipient": {
                      "id": "id8",
                      "name": "name8",
                      "email": "email8",
                      "document": "document8",
                      "description": "description8",
                      "type": "type2",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id6",
                        "holder_name": "holder_name2",
                        "holder_type": "holder_type8",
                        "bank": "bank4",
                        "branch_number": "branch_number2",
                        "branch_check_digit": "branch_check_digit2",
                        "account_number": "account_number6",
                        "account_check_digit": "account_check_digit2",
                        "type": "type6",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata3",
                          "key1": "metadata2",
                          "key2": "metadata1"
                        },
                        "pix_key": "pix_key0"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway2",
                          "status": "status4",
                          "pgid": "pgid8",
                          "created_at": "created_at0",
                          "updated_at": "updated_at8"
                        },
                        {
                          "gateway": "gateway3",
                          "status": "status5",
                          "pgid": "pgid9",
                          "created_at": "created_at1",
                          "updated_at": "updated_at9"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata5",
                        "key1": "metadata6",
                        "key2": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 68,
                        "delay": 222,
                        "days": [
                          198
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 234
                      },
                      "code": "code6",
                      "payment_mode": "payment_mode2"
                    },
                    "gateway_id": "gateway_id4",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee2"
                    },
                    "id": "id6"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 236,
                  "type": "type6",
                  "amount": 54
                },
                "fine": {
                  "days": 54,
                  "type": "type2",
                  "amount": 128
                },
                "max_days_to_pay_past_due": 42
              },
              "manual_billing": false
            },
            "subscription_item": {}
          },
          {
            "id": "id9",
            "value": 156.61,
            "increment_type": "increment_type1",
            "status": "status9",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 187,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description1",
            "subscription": {
              "id": "id5",
              "code": "code3",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval3",
              "interval_count": 253,
              "billing_type": "billing_type9",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id3",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status5",
                "duration": 237,
                "created_at": "created_at1",
                "updated_at": "updated_at9",
                "cycle": 177
              },
              "payment_method": "payment_method5",
              "currency": "currency5",
              "installments": 165,
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id5",
                "name": "name5",
                "email": "email1",
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
                    "key0": "metadata8"
                  },
                  "line_1": "line_15",
                  "line_2": "line_29",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata2"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code7",
                    "number": "number5",
                    "area_code": "area_code7"
                  },
                  "mobile_phone": {
                    "country_code": "country_code3",
                    "number": "number5",
                    "area_code": "area_code7"
                  }
                },
                "fb_id": 157,
                "code": "code3",
                "document_type": "document_type3"
              },
              "card": {
                "id": "id9",
                "last_four_digits": "last_four_digits5",
                "brand": "brand3",
                "holder_name": "holder_name5",
                "exp_month": 197,
                "exp_year": 99,
                "status": "status9",
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
                "customer": {
                  "id": "id9",
                  "name": "name9",
                  "email": "email7",
                  "delinquent": true,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document7",
                  "type": "type1",
                  "fb_access_token": "fb_access_token3",
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
                    "customer": {},
                    "metadata": {
                      "key0": "metadata2",
                      "key1": "metadata1",
                      "key2": "metadata0"
                    },
                    "line_1": "line_19",
                    "line_2": "line_23",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata4",
                    "key1": "metadata5",
                    "key2": "metadata6"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code1",
                      "number": "number1",
                      "area_code": "area_code1"
                    },
                    "mobile_phone": {
                      "country_code": "country_code9",
                      "number": "number3",
                      "area_code": "area_code9"
                    }
                  },
                  "fb_id": 87,
                  "code": "code7",
                  "document_type": "document_type7"
                },
                "metadata": {
                  "key0": "metadata4"
                },
                "type": "type1",
                "holder_document": "holder_document7",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits9",
                "label": "label9"
              },
              "items": [
                {},
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor5",
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata1"
              },
              "setup": {
                "id": "id9",
                "description": "description9",
                "amount": 189,
                "status": "status1"
              },
              "gateway_affiliation_id": "gateway_affiliation_id1",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 137,
              "minimum_price": 251,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "boleto_due_days": 109,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type5",
                    "amount": 69,
                    "recipient": {
                      "id": "id7",
                      "name": "name7",
                      "email": "email9",
                      "document": "document9",
                      "description": "description7",
                      "type": "type3",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id5",
                        "holder_name": "holder_name1",
                        "holder_type": "holder_type7",
                        "bank": "bank3",
                        "branch_number": "branch_number1",
                        "branch_check_digit": "branch_check_digit1",
                        "account_number": "account_number5",
                        "account_check_digit": "account_check_digit1",
                        "type": "type5",
                        "status": "status7",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata2"
                        },
                        "pix_key": "pix_key1"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway1",
                          "status": "status3",
                          "pgid": "pgid7",
                          "created_at": "created_at9",
                          "updated_at": "updated_at7"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata6"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type9",
                        "volume_percentage": 69,
                        "delay": 221,
                        "days": [
                          197,
                          198,
                          199
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 235
                      },
                      "code": "code5",
                      "payment_mode": "payment_mode1"
                    },
                    "gateway_id": "gateway_id5",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee1"
                    },
                    "id": "id5"
                  },
                  {
                    "type": "type4",
                    "amount": 70,
                    "recipient": {
                      "id": "id8",
                      "name": "name8",
                      "email": "email8",
                      "document": "document8",
                      "description": "description8",
                      "type": "type2",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id6",
                        "holder_name": "holder_name2",
                        "holder_type": "holder_type8",
                        "bank": "bank4",
                        "branch_number": "branch_number2",
                        "branch_check_digit": "branch_check_digit2",
                        "account_number": "account_number6",
                        "account_check_digit": "account_check_digit2",
                        "type": "type6",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata3",
                          "key1": "metadata2",
                          "key2": "metadata1"
                        },
                        "pix_key": "pix_key0"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway2",
                          "status": "status4",
                          "pgid": "pgid8",
                          "created_at": "created_at0",
                          "updated_at": "updated_at8"
                        },
                        {
                          "gateway": "gateway3",
                          "status": "status5",
                          "pgid": "pgid9",
                          "created_at": "created_at1",
                          "updated_at": "updated_at9"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata5",
                        "key1": "metadata6",
                        "key2": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 68,
                        "delay": 222,
                        "days": [
                          198
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 234
                      },
                      "code": "code6",
                      "payment_mode": "payment_mode2"
                    },
                    "gateway_id": "gateway_id4",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee2"
                    },
                    "id": "id6"
                  },
                  {
                    "type": "type3",
                    "amount": 71,
                    "recipient": {
                      "id": "id9",
                      "name": "name9",
                      "email": "email7",
                      "document": "document7",
                      "description": "description9",
                      "type": "type1",
                      "status": "status9",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id7",
                        "holder_name": "holder_name3",
                        "holder_type": "holder_type9",
                        "bank": "bank5",
                        "branch_number": "branch_number3",
                        "branch_check_digit": "branch_check_digit3",
                        "account_number": "account_number7",
                        "account_check_digit": "account_check_digit3",
                        "type": "type7",
                        "status": "status9",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata4",
                          "key1": "metadata3"
                        },
                        "pix_key": "pix_key9"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway3",
                          "status": "status5",
                          "pgid": "pgid9",
                          "created_at": "created_at1",
                          "updated_at": "updated_at9"
                        },
                        {
                          "gateway": "gateway4",
                          "status": "status6",
                          "pgid": "pgid0",
                          "created_at": "created_at2",
                          "updated_at": "updated_at0"
                        },
                        {
                          "gateway": "gateway5",
                          "status": "status7",
                          "pgid": "pgid1",
                          "created_at": "created_at3",
                          "updated_at": "updated_at1"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata4",
                        "key1": "metadata5"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type7",
                        "volume_percentage": 67,
                        "delay": 223,
                        "days": [
                          199,
                          200
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval5",
                        "transfer_day": 233
                      },
                      "code": "code7",
                      "payment_mode": "payment_mode3"
                    },
                    "gateway_id": "gateway_id3",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee3"
                    },
                    "id": "id7"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 237,
                  "type": "type5",
                  "amount": 55
                },
                "fine": {
                  "days": 53,
                  "type": "type3",
                  "amount": 127
                },
                "max_days_to_pay_past_due": 41
              },
              "manual_billing": true
            },
            "subscription_item": {}
          }
        ],
        "subscription": {
          "id": "id5",
          "code": "code3",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval7",
          "interval_count": 53,
          "billing_type": "billing_type1",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id3",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status5",
            "duration": 37,
            "created_at": "created_at1",
            "updated_at": "updated_at9",
            "cycle": 233
          },
          "payment_method": "payment_method5",
          "currency": "currency5",
          "installments": 221,
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id5",
            "name": "name5",
            "email": "email1",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document1",
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
                "key0": "metadata8",
                "key1": "metadata7",
                "key2": "metadata6"
              },
              "line_1": "line_15",
              "line_2": "line_29",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata8",
              "key1": "metadata9",
              "key2": "metadata0"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code7",
                "number": "number5",
                "area_code": "area_code7"
              },
              "mobile_phone": {
                "country_code": "country_code3",
                "number": "number9",
                "area_code": "area_code3"
              }
            },
            "fb_id": 203,
            "code": "code3",
            "document_type": "document_type3"
          },
          "card": {
            "id": "id1",
            "last_four_digits": "last_four_digits7",
            "brand": "brand5",
            "holder_name": "holder_name7",
            "exp_month": 199,
            "exp_year": 97,
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "billing_address": {
              "street": "street3",
              "number": "number9",
              "zip_code": "zip_code7",
              "neighborhood": "neighborhood9",
              "city": "city7",
              "state": "state1",
              "country": "country7",
              "complement": "complement1",
              "line_1": "line_13",
              "line_2": "line_21"
            },
            "customer": {
              "id": "id1",
              "name": "name1",
              "email": "email5",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document5",
              "type": "type9",
              "fb_access_token": "fb_access_token5",
              "address": {
                "id": "id7",
                "street": "street7",
                "number": "number5",
                "complement": "complement3",
                "zip_code": "zip_code1",
                "neighborhood": "neighborhood3",
                "city": "city7",
                "state": "state3",
                "country": "country1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "customer": {},
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata3"
                },
                "line_1": "line_11",
                "line_2": "line_25",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code3",
                  "number": "number9",
                  "area_code": "area_code3"
                },
                "mobile_phone": {
                  "country_code": "country_code7",
                  "number": "number5",
                  "area_code": "area_code7"
                }
              },
              "fb_id": 85,
              "code": "code9",
              "document_type": "document_type9"
            },
            "metadata": {
              "key0": "metadata2",
              "key1": "metadata3",
              "key2": "metadata4"
            },
            "type": "type9",
            "holder_document": "holder_document5",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits1",
            "label": "label1"
          },
          "items": [
            {}
          ],
          "statement_descriptor": "statement_descriptor5",
          "metadata": {
            "key0": "metadata8"
          },
          "setup": {
            "id": "id9",
            "description": "description1",
            "amount": 11,
            "status": "status9"
          },
          "gateway_affiliation_id": "gateway_affiliation_id1",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 63,
          "minimum_price": 205,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {},
            {}
          ],
          "increments": [
            {
              "id": "id2",
              "value": 75.84,
              "increment_type": "increment_type4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 72,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description8",
              "subscription": {},
              "subscription_item": {}
            },
            {
              "id": "id3",
              "value": 75.85,
              "increment_type": "increment_type5",
              "status": "status5",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 71,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description7",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "boleto_due_days": 165,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type5",
                "amount": 217,
                "recipient": {
                  "id": "id3",
                  "name": "name3",
                  "email": "email3",
                  "document": "document3",
                  "description": "description7",
                  "type": "type7",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id1",
                    "holder_name": "holder_name7",
                    "holder_type": "holder_type3",
                    "bank": "bank9",
                    "branch_number": "branch_number7",
                    "branch_check_digit": "branch_check_digit7",
                    "account_number": "account_number1",
                    "account_check_digit": "account_check_digit7",
                    "type": "type9",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata8",
                      "key1": "metadata7",
                      "key2": "metadata6"
                    },
                    "pix_key": "pix_key5"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway7",
                      "status": "status9",
                      "pgid": "pgid3",
                      "created_at": "created_at5",
                      "updated_at": "updated_at3"
                    },
                    {
                      "gateway": "gateway8",
                      "status": "status0",
                      "pgid": "pgid4",
                      "created_at": "created_at6",
                      "updated_at": "updated_at4"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata0",
                    "key1": "metadata1",
                    "key2": "metadata2"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type3",
                    "volume_percentage": 101,
                    "delay": 189,
                    "days": [
                      165
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval1",
                    "transfer_day": 11
                  },
                  "code": "code1",
                  "payment_mode": "payment_mode3"
                },
                "gateway_id": "gateway_id5",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee5"
                },
                "id": "id5"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 131,
              "type": "type5",
              "amount": 205
            },
            "fine": {
              "days": 113,
              "type": "type7",
              "amount": 69
            },
            "max_days_to_pay_past_due": 147
          },
          "manual_billing": true
        },
        "name": "name9",
        "quantity": 249,
        "cycles": 13,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      }
    }
  ],
  "increments": [
    {
      "id": "id7",
      "value": 124.19,
      "increment_type": "increment_type9",
      "status": "status1",
      "created_at": "2016-03-13T12:52:32.123Z",
      "cycles": 101,
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "description": "description3",
      "subscription": {
        "id": "id7",
        "code": "code5",
        "start_at": "2016-03-13T12:52:32.123Z",
        "interval": "interval5",
        "interval_count": 167,
        "billing_type": "billing_type1",
        "current_cycle": {
          "start_at": "2016-03-13T12:52:32.123Z",
          "end_at": "2016-03-13T12:52:32.123Z",
          "id": "id5",
          "billing_at": "2016-03-13T12:52:32.123Z",
          "subscription": {},
          "status": "status7",
          "duration": 151,
          "created_at": "created_at3",
          "updated_at": "updated_at1",
          "cycle": 91
        },
        "payment_method": "payment_method3",
        "currency": "currency7",
        "installments": 79,
        "status": "status9",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "customer": {
          "id": "id7",
          "name": "name7",
          "email": "email9",
          "delinquent": true,
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "document": "document1",
          "type": "type3",
          "fb_access_token": "fb_access_token1",
          "address": {
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
            "customer": {},
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5",
              "key2": "metadata4"
            },
            "line_1": "line_17",
            "line_2": "line_21",
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          "metadata": {
            "key0": "metadata4",
            "key1": "metadata3"
          },
          "phones": {
            "home_phone": {
              "country_code": "country_code9",
              "number": "number7",
              "area_code": "area_code9"
            },
            "mobile_phone": {
              "country_code": "country_code1",
              "number": "number3",
              "area_code": "area_code9"
            }
          },
          "fb_id": 71,
          "code": "code5",
          "document_type": "document_type5"
        },
        "card": {
          "id": "id1",
          "last_four_digits": "last_four_digits7",
          "brand": "brand5",
          "holder_name": "holder_name7",
          "exp_month": 27,
          "exp_year": 13,
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "billing_address": {
            "street": "street3",
            "number": "number9",
            "zip_code": "zip_code7",
            "neighborhood": "neighborhood9",
            "city": "city7",
            "state": "state1",
            "country": "country7",
            "complement": "complement1",
            "line_1": "line_13",
            "line_2": "line_21"
          },
          "customer": {
            "id": "id1",
            "name": "name1",
            "email": "email5",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document5",
            "type": "type9",
            "fb_access_token": "fb_access_token5",
            "address": {
              "id": "id7",
              "street": "street7",
              "number": "number5",
              "complement": "complement3",
              "zip_code": "zip_code1",
              "neighborhood": "neighborhood3",
              "city": "city7",
              "state": "state3",
              "country": "country1",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata4"
              },
              "line_1": "line_11",
              "line_2": "line_25",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata2"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code3",
                "number": "number9",
                "area_code": "area_code3"
              },
              "mobile_phone": {
                "country_code": "country_code7",
                "number": "number5",
                "area_code": "area_code7"
              }
            },
            "fb_id": 1,
            "code": "code9",
            "document_type": "document_type9"
          },
          "metadata": {
            "key0": "metadata2",
            "key1": "metadata3"
          },
          "type": "type9",
          "holder_document": "holder_document5",
          "deleted_at": "2016-03-13T12:52:32.123Z",
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
              "price": 54,
              "scheme_type": "scheme_type6",
              "price_brackets": [
                {
                  "start_quantity": 155,
                  "price": 163,
                  "end_quantity": 163,
                  "overage_price": 177
                },
                {
                  "start_quantity": 156,
                  "price": 162,
                  "end_quantity": 164,
                  "overage_price": 178
                },
                {
                  "start_quantity": 157,
                  "price": 161,
                  "end_quantity": 165,
                  "overage_price": 179
                }
              ],
              "minimum_price": 214,
              "percentage": 193.24
            },
            "discounts": [
              {
                "id": "id5",
                "value": 190.87,
                "discount_type": "discount_type3",
                "status": "status7",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 167,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description5",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id6",
                "value": 190.88,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 168,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              },
              {
                "id": "id7",
                "value": 190.89,
                "discount_type": "discount_type5",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 169,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description7",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {}
            ],
            "subscription": {},
            "name": "name4",
            "quantity": 212,
            "cycles": 232,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          },
          {
            "id": "id5",
            "description": "description5",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "pricing_scheme": {
              "price": 53,
              "scheme_type": "scheme_type7",
              "price_brackets": [
                {
                  "start_quantity": 156,
                  "price": 162,
                  "end_quantity": 164,
                  "overage_price": 178
                }
              ],
              "minimum_price": 213,
              "percentage": 193.25
            },
            "discounts": [
              {
                "id": "id6",
                "value": 190.88,
                "discount_type": "discount_type4",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "cycles": 168,
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "description": "description6",
                "subscription": {},
                "subscription_item": {}
              }
            ],
            "increments": [
              {},
              {}
            ],
            "subscription": {},
            "name": "name5",
            "quantity": 213,
            "cycles": 233,
            "deleted_at": "2016-03-13T12:52:32.123Z"
          }
        ],
        "statement_descriptor": "statement_descriptor7",
        "metadata": {
          "key0": "metadata4",
          "key1": "metadata3",
          "key2": "metadata2"
        },
        "setup": {
          "id": "id1",
          "description": "description1",
          "amount": 103,
          "status": "status3"
        },
        "gateway_affiliation_id": "gateway_affiliation_id3",
        "next_billing_at": "2016-03-13T12:52:32.123Z",
        "billing_day": 51,
        "minimum_price": 165,
        "canceled_at": "2016-03-13T12:52:32.123Z",
        "discounts": [
          {
            "id": "id8",
            "value": 221.0,
            "discount_type": "discount_type6",
            "status": "status0",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 108,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description8",
            "subscription": {},
            "subscription_item": {
              "id": "id4",
              "description": "description4",
              "status": "status6",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 66,
                "scheme_type": "scheme_type6",
                "price_brackets": [
                  {
                    "start_quantity": 19,
                    "price": 213,
                    "end_quantity": 27,
                    "overage_price": 41
                  },
                  {
                    "start_quantity": 20,
                    "price": 214,
                    "end_quantity": 28,
                    "overage_price": 42
                  }
                ],
                "minimum_price": 162,
                "percentage": 2.44
              },
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {},
                {}
              ],
              "subscription": {},
              "name": "name4",
              "quantity": 76,
              "cycles": 96,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id9",
            "value": 221.01,
            "discount_type": "discount_type7",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 109,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description9",
            "subscription": {},
            "subscription_item": {
              "id": "id5",
              "description": "description5",
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 67,
                "scheme_type": "scheme_type7",
                "price_brackets": [
                  {
                    "start_quantity": 20,
                    "price": 214,
                    "end_quantity": 28,
                    "overage_price": 42
                  },
                  {
                    "start_quantity": 21,
                    "price": 215,
                    "end_quantity": 29,
                    "overage_price": 43
                  },
                  {
                    "start_quantity": 22,
                    "price": 216,
                    "end_quantity": 30,
                    "overage_price": 44
                  }
                ],
                "minimum_price": 163,
                "percentage": 2.45
              },
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "subscription": {},
              "name": "name5",
              "quantity": 77,
              "cycles": 97,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          },
          {
            "id": "id0",
            "value": 221.02,
            "discount_type": "discount_type8",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 110,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description0",
            "subscription": {},
            "subscription_item": {
              "id": "id6",
              "description": "description6",
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "pricing_scheme": {
                "price": 68,
                "scheme_type": "scheme_type8",
                "price_brackets": [
                  {
                    "start_quantity": 21,
                    "price": 215,
                    "end_quantity": 29,
                    "overage_price": 43
                  }
                ],
                "minimum_price": 164,
                "percentage": 2.46
              },
              "discounts": [
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "subscription": {},
              "name": "name6",
              "quantity": 78,
              "cycles": 98,
              "deleted_at": "2016-03-13T12:52:32.123Z"
            }
          }
        ],
        "increments": [
          {}
        ],
        "boleto_due_days": 23,
        "split": {
          "enabled": true,
          "rules": [
            {
              "type": "type3",
              "amount": 239,
              "recipient": {
                "id": "id9",
                "name": "name9",
                "email": "email7",
                "document": "document7",
                "description": "description9",
                "type": "type1",
                "status": "status9",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id7",
                  "holder_name": "holder_name3",
                  "holder_type": "holder_type9",
                  "bank": "bank5",
                  "branch_number": "branch_number3",
                  "branch_check_digit": "branch_check_digit3",
                  "account_number": "account_number7",
                  "account_check_digit": "account_check_digit3",
                  "type": "type7",
                  "status": "status9",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata4",
                    "key1": "metadata3"
                  },
                  "pix_key": "pix_key1"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway3",
                    "status": "status5",
                    "pgid": "pgid9",
                    "created_at": "created_at1",
                    "updated_at": "updated_at9"
                  },
                  {
                    "gateway": "gateway4",
                    "status": "status6",
                    "pgid": "pgid0",
                    "created_at": "created_at2",
                    "updated_at": "updated_at0"
                  },
                  {
                    "gateway": "gateway5",
                    "status": "status7",
                    "pgid": "pgid1",
                    "created_at": "created_at3",
                    "updated_at": "updated_at1"
                  }
                ],
                "metadata": {
                  "key0": "metadata4",
                  "key1": "metadata5"
                },
                "automatic_anticipation_settings": {
                  "enabled": true,
                  "type": "type7",
                  "volume_percentage": 155,
                  "delay": 135,
                  "days": [
                    111,
                    112
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": true,
                  "transfer_interval": "transfer_interval5",
                  "transfer_day": 65
                },
                "code": "code7",
                "payment_mode": "payment_mode3"
              },
              "gateway_id": "gateway_id3",
              "options": {
                "liable": true,
                "charge_processing_fee": true,
                "charge_remainder_fee": "charge_remainder_fee3"
              },
              "id": "id7"
            },
            {
              "type": "type2",
              "amount": 240,
              "recipient": {
                "id": "id0",
                "name": "name0",
                "email": "email6",
                "document": "document6",
                "description": "description0",
                "type": "type0",
                "status": "status8",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "default_bank_account": {
                  "id": "id8",
                  "holder_name": "holder_name4",
                  "holder_type": "holder_type0",
                  "bank": "bank6",
                  "branch_number": "branch_number4",
                  "branch_check_digit": "branch_check_digit4",
                  "account_number": "account_number8",
                  "account_check_digit": "account_check_digit4",
                  "type": "type8",
                  "status": "status0",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "recipient": {},
                  "metadata": {
                    "key0": "metadata5"
                  },
                  "pix_key": "pix_key2"
                },
                "gateway_recipients": [
                  {
                    "gateway": "gateway4",
                    "status": "status6",
                    "pgid": "pgid0",
                    "created_at": "created_at2",
                    "updated_at": "updated_at0"
                  }
                ],
                "metadata": {
                  "key0": "metadata3"
                },
                "automatic_anticipation_settings": {
                  "enabled": false,
                  "type": "type6",
                  "volume_percentage": 154,
                  "delay": 136,
                  "days": [
                    112,
                    113,
                    114
                  ]
                },
                "transfer_settings": {
                  "transfer_enabled": false,
                  "transfer_interval": "transfer_interval4",
                  "transfer_day": 64
                },
                "code": "code8",
                "payment_mode": "payment_mode4"
              },
              "gateway_id": "gateway_id2",
              "options": {
                "liable": false,
                "charge_processing_fee": false,
                "charge_remainder_fee": "charge_remainder_fee4"
              },
              "id": "id8"
            }
          ]
        },
        "boleto": {
          "interest": {
            "days": 67,
            "type": "type7",
            "amount": 141
          },
          "fine": {
            "days": 223,
            "type": "type1",
            "amount": 41
          },
          "max_days_to_pay_past_due": 211
        },
        "manual_billing": true
      },
      "subscription_item": {
        "id": "id3",
        "description": "description7",
        "status": "status5",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "pricing_scheme": {
          "price": 145,
          "scheme_type": "scheme_type5",
          "price_brackets": [
            {
              "start_quantity": 64,
              "price": 2,
              "end_quantity": 72,
              "overage_price": 86
            }
          ],
          "minimum_price": 49,
          "percentage": 102.73
        },
        "discounts": [
          {
            "id": "id4",
            "value": 159.26,
            "discount_type": "discount_type2",
            "status": "status6",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 78,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description4",
            "subscription": {
              "id": "id0",
              "code": "code8",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval2",
              "interval_count": 176,
              "billing_type": "billing_type6",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id8",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status0",
                "duration": 160,
                "created_at": "created_at6",
                "updated_at": "updated_at4",
                "cycle": 100
              },
              "payment_method": "payment_method0",
              "currency": "currency0",
              "installments": 88,
              "status": "status8",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id0",
                "name": "name0",
                "email": "email6",
                "delinquent": false,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document6",
                "type": "type0",
                "fb_access_token": "fb_access_token4",
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata3",
                    "key1": "metadata2",
                    "key2": "metadata1"
                  },
                  "line_1": "line_10",
                  "line_2": "line_24",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata3",
                  "key1": "metadata4",
                  "key2": "metadata5"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code8",
                    "number": "number0",
                    "area_code": "area_code2"
                  },
                  "mobile_phone": {
                    "country_code": "country_code8",
                    "number": "number4",
                    "area_code": "area_code8"
                  }
                },
                "fb_id": 80,
                "code": "code8",
                "document_type": "document_type8"
              },
              "card": {
                "id": "id6",
                "last_four_digits": "last_four_digits2",
                "brand": "brand0",
                "holder_name": "holder_name2",
                "exp_month": 66,
                "exp_year": 230,
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
                "customer": {
                  "id": "id6",
                  "name": "name6",
                  "email": "email0",
                  "delinquent": false,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document0",
                  "type": "type4",
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
                      "key0": "metadata9",
                      "key1": "metadata8"
                    },
                    "line_1": "line_14",
                    "line_2": "line_20",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata7",
                    "key1": "metadata8"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code8",
                      "number": "number4",
                      "area_code": "area_code8"
                    },
                    "mobile_phone": {
                      "country_code": "country_code2",
                      "number": "number0",
                      "area_code": "area_code2"
                    }
                  },
                  "fb_id": 218,
                  "code": "code4",
                  "document_type": "document_type4"
                },
                "metadata": {
                  "key0": "metadata7",
                  "key1": "metadata8",
                  "key2": "metadata9"
                },
                "type": "type4",
                "holder_document": "holder_document0",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits6",
                "label": "label6"
              },
              "items": [
                {}
              ],
              "statement_descriptor": "statement_descriptor0",
              "metadata": {
                "key0": "metadata3"
              },
              "setup": {
                "id": "id4",
                "description": "description6",
                "amount": 144,
                "status": "status4"
              },
              "gateway_affiliation_id": "gateway_affiliation_id6",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 196,
              "minimum_price": 82,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {}
              ],
              "increments": [
                {},
                {}
              ],
              "boleto_due_days": 32,
              "split": {
                "enabled": false,
                "rules": [
                  {
                    "type": "type0",
                    "amount": 8,
                    "recipient": {
                      "id": "id8",
                      "name": "name8",
                      "email": "email8",
                      "document": "document8",
                      "description": "description2",
                      "type": "type2",
                      "status": "status0",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id6",
                        "holder_name": "holder_name2",
                        "holder_type": "holder_type8",
                        "bank": "bank4",
                        "branch_number": "branch_number2",
                        "branch_check_digit": "branch_check_digit2",
                        "account_number": "account_number6",
                        "account_check_digit": "account_check_digit2",
                        "type": "type4",
                        "status": "status8",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata3",
                          "key1": "metadata2",
                          "key2": "metadata1"
                        },
                        "pix_key": "pix_key0"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway2",
                          "status": "status4",
                          "pgid": "pgid8",
                          "created_at": "created_at0",
                          "updated_at": "updated_at8"
                        },
                        {
                          "gateway": "gateway3",
                          "status": "status5",
                          "pgid": "pgid9",
                          "created_at": "created_at1",
                          "updated_at": "updated_at9"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata5",
                        "key1": "metadata6",
                        "key2": "metadata7"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type8",
                        "volume_percentage": 54,
                        "delay": 236,
                        "days": [
                          212
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval6",
                        "transfer_day": 220
                      },
                      "code": "code6",
                      "payment_mode": "payment_mode8"
                    },
                    "gateway_id": "gateway_id0",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee0"
                    },
                    "id": "id0"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 254,
                  "type": "type0",
                  "amount": 72
                },
                "fine": {
                  "days": 236,
                  "type": "type2",
                  "amount": 202
                },
                "max_days_to_pay_past_due": 24
              },
              "manual_billing": false
            },
            "subscription_item": {}
          },
          {
            "id": "id5",
            "value": 159.27,
            "discount_type": "discount_type3",
            "status": "status7",
            "created_at": "2016-03-13T12:52:32.123Z",
            "cycles": 79,
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "description": "description5",
            "subscription": {
              "id": "id1",
              "code": "code9",
              "start_at": "2016-03-13T12:52:32.123Z",
              "interval": "interval1",
              "interval_count": 177,
              "billing_type": "billing_type5",
              "current_cycle": {
                "start_at": "2016-03-13T12:52:32.123Z",
                "end_at": "2016-03-13T12:52:32.123Z",
                "id": "id9",
                "billing_at": "2016-03-13T12:52:32.123Z",
                "subscription": {},
                "status": "status1",
                "duration": 161,
                "created_at": "created_at7",
                "updated_at": "updated_at5",
                "cycle": 101
              },
              "payment_method": "payment_method9",
              "currency": "currency9",
              "installments": 89,
              "status": "status7",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {
                "id": "id9",
                "name": "name9",
                "email": "email7",
                "delinquent": true,
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "document": "document7",
                "type": "type1",
                "fb_access_token": "fb_access_token3",
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
                  "customer": {},
                  "metadata": {
                    "key0": "metadata2"
                  },
                  "line_1": "line_11",
                  "line_2": "line_23",
                  "deleted_at": "2016-03-13T12:52:32.123Z"
                },
                "metadata": {
                  "key0": "metadata4"
                },
                "phones": {
                  "home_phone": {
                    "country_code": "country_code9",
                    "number": "number1",
                    "area_code": "area_code1"
                  },
                  "mobile_phone": {
                    "country_code": "country_code9",
                    "number": "number3",
                    "area_code": "area_code9"
                  }
                },
                "fb_id": 79,
                "code": "code7",
                "document_type": "document_type7"
              },
              "card": {
                "id": "id5",
                "last_four_digits": "last_four_digits1",
                "brand": "brand9",
                "holder_name": "holder_name1",
                "exp_month": 67,
                "exp_year": 229,
                "status": "status3",
                "created_at": "2016-03-13T12:52:32.123Z",
                "updated_at": "2016-03-13T12:52:32.123Z",
                "billing_address": {
                  "street": "street3",
                  "number": "number9",
                  "zip_code": "zip_code7",
                  "neighborhood": "neighborhood9",
                  "city": "city7",
                  "state": "state1",
                  "country": "country7",
                  "complement": "complement1",
                  "line_1": "line_13",
                  "line_2": "line_21"
                },
                "customer": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "delinquent": true,
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "document": "document1",
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
                      "key0": "metadata8",
                      "key1": "metadata7",
                      "key2": "metadata6"
                    },
                    "line_1": "line_15",
                    "line_2": "line_29",
                    "deleted_at": "2016-03-13T12:52:32.123Z"
                  },
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata9",
                    "key2": "metadata0"
                  },
                  "phones": {
                    "home_phone": {
                      "country_code": "country_code7",
                      "number": "number5",
                      "area_code": "area_code7"
                    },
                    "mobile_phone": {
                      "country_code": "country_code3",
                      "number": "number9",
                      "area_code": "area_code3"
                    }
                  },
                  "fb_id": 217,
                  "code": "code3",
                  "document_type": "document_type3"
                },
                "metadata": {
                  "key0": "metadata8"
                },
                "type": "type5",
                "holder_document": "holder_document1",
                "deleted_at": "2016-03-13T12:52:32.123Z",
                "first_six_digits": "first_six_digits5",
                "label": "label5"
              },
              "items": [
                {},
                {}
              ],
              "statement_descriptor": "statement_descriptor1",
              "metadata": {
                "key0": "metadata2",
                "key1": "metadata3",
                "key2": "metadata4"
              },
              "setup": {
                "id": "id5",
                "description": "description5",
                "amount": 143,
                "status": "status3"
              },
              "gateway_affiliation_id": "gateway_affiliation_id7",
              "next_billing_at": "2016-03-13T12:52:32.123Z",
              "billing_day": 195,
              "minimum_price": 81,
              "canceled_at": "2016-03-13T12:52:32.123Z",
              "discounts": [
                {},
                {},
                {}
              ],
              "increments": [
                {}
              ],
              "boleto_due_days": 33,
              "split": {
                "enabled": true,
                "rules": [
                  {
                    "type": "type9",
                    "amount": 7,
                    "recipient": {
                      "id": "id7",
                      "name": "name7",
                      "email": "email9",
                      "document": "document9",
                      "description": "description3",
                      "type": "type3",
                      "status": "status1",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id5",
                        "holder_name": "holder_name1",
                        "holder_type": "holder_type7",
                        "bank": "bank3",
                        "branch_number": "branch_number1",
                        "branch_check_digit": "branch_check_digit1",
                        "account_number": "account_number5",
                        "account_check_digit": "account_check_digit1",
                        "type": "type5",
                        "status": "status7",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata2"
                        },
                        "pix_key": "pix_key1"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway1",
                          "status": "status3",
                          "pgid": "pgid7",
                          "created_at": "created_at9",
                          "updated_at": "updated_at7"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata6"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": true,
                        "type": "type9",
                        "volume_percentage": 55,
                        "delay": 235,
                        "days": [
                          211,
                          212,
                          213
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": true,
                        "transfer_interval": "transfer_interval7",
                        "transfer_day": 221
                      },
                      "code": "code5",
                      "payment_mode": "payment_mode9"
                    },
                    "gateway_id": "gateway_id9",
                    "options": {
                      "liable": true,
                      "charge_processing_fee": true,
                      "charge_remainder_fee": "charge_remainder_fee9"
                    },
                    "id": "id1"
                  },
                  {
                    "type": "type8",
                    "amount": 6,
                    "recipient": {
                      "id": "id6",
                      "name": "name6",
                      "email": "email0",
                      "document": "document0",
                      "description": "description4",
                      "type": "type4",
                      "status": "status2",
                      "created_at": "2016-03-13T12:52:32.123Z",
                      "updated_at": "2016-03-13T12:52:32.123Z",
                      "deleted_at": "2016-03-13T12:52:32.123Z",
                      "default_bank_account": {
                        "id": "id4",
                        "holder_name": "holder_name0",
                        "holder_type": "holder_type6",
                        "bank": "bank2",
                        "branch_number": "branch_number0",
                        "branch_check_digit": "branch_check_digit0",
                        "account_number": "account_number4",
                        "account_check_digit": "account_check_digit0",
                        "type": "type6",
                        "status": "status6",
                        "created_at": "2016-03-13T12:52:32.123Z",
                        "updated_at": "2016-03-13T12:52:32.123Z",
                        "deleted_at": "2016-03-13T12:52:32.123Z",
                        "recipient": {},
                        "metadata": {
                          "key0": "metadata1",
                          "key1": "metadata0"
                        },
                        "pix_key": "pix_key2"
                      },
                      "gateway_recipients": [
                        {
                          "gateway": "gateway0",
                          "status": "status2",
                          "pgid": "pgid6",
                          "created_at": "created_at8",
                          "updated_at": "updated_at6"
                        },
                        {
                          "gateway": "gateway1",
                          "status": "status3",
                          "pgid": "pgid7",
                          "created_at": "created_at9",
                          "updated_at": "updated_at7"
                        },
                        {
                          "gateway": "gateway2",
                          "status": "status4",
                          "pgid": "pgid8",
                          "created_at": "created_at0",
                          "updated_at": "updated_at8"
                        }
                      ],
                      "metadata": {
                        "key0": "metadata7",
                        "key1": "metadata8"
                      },
                      "automatic_anticipation_settings": {
                        "enabled": false,
                        "type": "type0",
                        "volume_percentage": 56,
                        "delay": 234,
                        "days": [
                          210,
                          211
                        ]
                      },
                      "transfer_settings": {
                        "transfer_enabled": false,
                        "transfer_interval": "transfer_interval8",
                        "transfer_day": 222
                      },
                      "code": "code4",
                      "payment_mode": "payment_mode0"
                    },
                    "gateway_id": "gateway_id8",
                    "options": {
                      "liable": false,
                      "charge_processing_fee": false,
                      "charge_remainder_fee": "charge_remainder_fee8"
                    },
                    "id": "id2"
                  }
                ]
              },
              "boleto": {
                "interest": {
                  "days": 255,
                  "type": "type1",
                  "amount": 73
                },
                "fine": {
                  "days": 237,
                  "type": "type1",
                  "amount": 201
                },
                "max_days_to_pay_past_due": 23
              },
              "manual_billing": true
            },
            "subscription_item": {}
          }
        ],
        "increments": [
          {},
          {}
        ],
        "subscription": {
          "id": "id1",
          "code": "code9",
          "start_at": "2016-03-13T12:52:32.123Z",
          "interval": "interval9",
          "interval_count": 179,
          "billing_type": "billing_type5",
          "current_cycle": {
            "start_at": "2016-03-13T12:52:32.123Z",
            "end_at": "2016-03-13T12:52:32.123Z",
            "id": "id9",
            "billing_at": "2016-03-13T12:52:32.123Z",
            "subscription": {},
            "status": "status1",
            "duration": 163,
            "created_at": "created_at7",
            "updated_at": "updated_at5",
            "cycle": 103
          },
          "payment_method": "payment_method9",
          "currency": "currency1",
          "installments": 91,
          "status": "status3",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "customer": {
            "id": "id1",
            "name": "name1",
            "email": "email5",
            "delinquent": true,
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "document": "document5",
            "type": "type9",
            "fb_access_token": "fb_access_token5",
            "address": {
              "id": "id7",
              "street": "street7",
              "number": "number5",
              "complement": "complement3",
              "zip_code": "zip_code1",
              "neighborhood": "neighborhood3",
              "city": "city7",
              "state": "state3",
              "country": "country1",
              "status": "status9",
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "customer": {},
              "metadata": {
                "key0": "metadata2"
              },
              "line_1": "line_11",
              "line_2": "line_25",
              "deleted_at": "2016-03-13T12:52:32.123Z"
            },
            "metadata": {
              "key0": "metadata8"
            },
            "phones": {
              "home_phone": {
                "country_code": "country_code3",
                "number": "number1",
                "area_code": "area_code3"
              },
              "mobile_phone": {
                "country_code": "country_code7",
                "number": "number9",
                "area_code": "area_code3"
              }
            },
            "fb_id": 83,
            "code": "code9",
            "document_type": "document_type9"
          },
          "card": {
            "id": "id5",
            "last_four_digits": "last_four_digits1",
            "brand": "brand9",
            "holder_name": "holder_name1",
            "exp_month": 15,
            "exp_year": 25,
            "status": "status3",
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
            "customer": {
              "id": "id5",
              "name": "name5",
              "email": "email1",
              "delinquent": true,
              "created_at": "2016-03-13T12:52:32.123Z",
              "updated_at": "2016-03-13T12:52:32.123Z",
              "document": "document1",
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
                  "key0": "metadata8",
                  "key1": "metadata7",
                  "key2": "metadata6"
                },
                "line_1": "line_15",
                "line_2": "line_29",
                "deleted_at": "2016-03-13T12:52:32.123Z"
              },
              "metadata": {
                "key0": "metadata8",
                "key1": "metadata9",
                "key2": "metadata0"
              },
              "phones": {
                "home_phone": {
                  "country_code": "country_code7",
                  "number": "number5",
                  "area_code": "area_code7"
                },
                "mobile_phone": {
                  "country_code": "country_code3",
                  "number": "number9",
                  "area_code": "area_code3"
                }
              },
              "fb_id": 13,
              "code": "code3",
              "document_type": "document_type3"
            },
            "metadata": {
              "key0": "metadata8"
            },
            "type": "type5",
            "holder_document": "holder_document1",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "first_six_digits": "first_six_digits5",
            "label": "label5"
          },
          "items": [
            {},
            {},
            {}
          ],
          "statement_descriptor": "statement_descriptor1",
          "metadata": {
            "key0": "metadata8",
            "key1": "metadata7"
          },
          "setup": {
            "id": "id5",
            "description": "description5",
            "amount": 115,
            "status": "status7"
          },
          "gateway_affiliation_id": "gateway_affiliation_id7",
          "next_billing_at": "2016-03-13T12:52:32.123Z",
          "billing_day": 63,
          "minimum_price": 177,
          "canceled_at": "2016-03-13T12:52:32.123Z",
          "discounts": [
            {
              "id": "id2",
              "value": 200.64,
              "discount_type": "discount_type0",
              "status": "status4",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": 120,
              "deleted_at": "2016-03-13T12:52:32.123Z",
              "description": "description2",
              "subscription": {},
              "subscription_item": {}
            }
          ],
          "increments": [
            {},
            {}
          ],
          "boleto_due_days": 35,
          "split": {
            "enabled": true,
            "rules": [
              {
                "type": "type9",
                "amount": 251,
                "recipient": {
                  "id": "id3",
                  "name": "name3",
                  "email": "email3",
                  "document": "document3",
                  "description": "description3",
                  "type": "type7",
                  "status": "status5",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id1",
                    "holder_name": "holder_name7",
                    "holder_type": "holder_type3",
                    "bank": "bank9",
                    "branch_number": "branch_number7",
                    "branch_check_digit": "branch_check_digit7",
                    "account_number": "account_number1",
                    "account_check_digit": "account_check_digit7",
                    "type": "type1",
                    "status": "status3",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata8"
                    },
                    "pix_key": "pix_key5"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway7",
                      "status": "status9",
                      "pgid": "pgid3",
                      "created_at": "created_at5",
                      "updated_at": "updated_at3"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata0"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type3",
                    "volume_percentage": 143,
                    "delay": 147,
                    "days": [
                      123,
                      124,
                      125
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval1",
                    "transfer_day": 53
                  },
                  "code": "code1",
                  "payment_mode": "payment_mode7"
                },
                "gateway_id": "gateway_id9",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee7"
                },
                "id": "id1"
              },
              {
                "type": "type8",
                "amount": 252,
                "recipient": {
                  "id": "id4",
                  "name": "name4",
                  "email": "email2",
                  "document": "document2",
                  "description": "description4",
                  "type": "type6",
                  "status": "status4",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id2",
                    "holder_name": "holder_name8",
                    "holder_type": "holder_type4",
                    "bank": "bank0",
                    "branch_number": "branch_number8",
                    "branch_check_digit": "branch_check_digit8",
                    "account_number": "account_number2",
                    "account_check_digit": "account_check_digit8",
                    "type": "type2",
                    "status": "status4",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata9",
                      "key1": "metadata8",
                      "key2": "metadata7"
                    },
                    "pix_key": "pix_key4"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway8",
                      "status": "status0",
                      "pgid": "pgid4",
                      "created_at": "created_at6",
                      "updated_at": "updated_at4"
                    },
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata9",
                    "key1": "metadata0",
                    "key2": "metadata1"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": false,
                    "type": "type2",
                    "volume_percentage": 142,
                    "delay": 148,
                    "days": [
                      124
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": false,
                    "transfer_interval": "transfer_interval0",
                    "transfer_day": 52
                  },
                  "code": "code2",
                  "payment_mode": "payment_mode8"
                },
                "gateway_id": "gateway_id8",
                "options": {
                  "liable": false,
                  "charge_processing_fee": false,
                  "charge_remainder_fee": "charge_remainder_fee8"
                },
                "id": "id2"
              },
              {
                "type": "type7",
                "amount": 253,
                "recipient": {
                  "id": "id5",
                  "name": "name5",
                  "email": "email1",
                  "document": "document1",
                  "description": "description5",
                  "type": "type5",
                  "status": "status3",
                  "created_at": "2016-03-13T12:52:32.123Z",
                  "updated_at": "2016-03-13T12:52:32.123Z",
                  "deleted_at": "2016-03-13T12:52:32.123Z",
                  "default_bank_account": {
                    "id": "id3",
                    "holder_name": "holder_name9",
                    "holder_type": "holder_type5",
                    "bank": "bank1",
                    "branch_number": "branch_number9",
                    "branch_check_digit": "branch_check_digit9",
                    "account_number": "account_number3",
                    "account_check_digit": "account_check_digit9",
                    "type": "type3",
                    "status": "status5",
                    "created_at": "2016-03-13T12:52:32.123Z",
                    "updated_at": "2016-03-13T12:52:32.123Z",
                    "deleted_at": "2016-03-13T12:52:32.123Z",
                    "recipient": {},
                    "metadata": {
                      "key0": "metadata0",
                      "key1": "metadata9"
                    },
                    "pix_key": "pix_key3"
                  },
                  "gateway_recipients": [
                    {
                      "gateway": "gateway9",
                      "status": "status1",
                      "pgid": "pgid5",
                      "created_at": "created_at7",
                      "updated_at": "updated_at5"
                    },
                    {
                      "gateway": "gateway0",
                      "status": "status2",
                      "pgid": "pgid6",
                      "created_at": "created_at8",
                      "updated_at": "updated_at6"
                    },
                    {
                      "gateway": "gateway1",
                      "status": "status3",
                      "pgid": "pgid7",
                      "created_at": "created_at9",
                      "updated_at": "updated_at7"
                    }
                  ],
                  "metadata": {
                    "key0": "metadata8",
                    "key1": "metadata9"
                  },
                  "automatic_anticipation_settings": {
                    "enabled": true,
                    "type": "type1",
                    "volume_percentage": 141,
                    "delay": 149,
                    "days": [
                      125,
                      126
                    ]
                  },
                  "transfer_settings": {
                    "transfer_enabled": true,
                    "transfer_interval": "transfer_interval9",
                    "transfer_day": 51
                  },
                  "code": "code3",
                  "payment_mode": "payment_mode9"
                },
                "gateway_id": "gateway_id7",
                "options": {
                  "liable": true,
                  "charge_processing_fee": true,
                  "charge_remainder_fee": "charge_remainder_fee9"
                },
                "id": "id3"
              }
            ]
          },
          "boleto": {
            "interest": {
              "days": 55,
              "type": "type1",
              "amount": 129
            },
            "fine": {
              "days": 235,
              "type": "type7",
              "amount": 53
            },
            "max_days_to_pay_past_due": 223
          },
          "manual_billing": true
        },
        "name": "name3",
        "quantity": 123,
        "cycles": 113,
        "deleted_at": "2016-03-13T12:52:32.123Z"
      }
    }
  ],
  "boleto_due_days": 194,
  "split": {
    "enabled": false,
    "rules": [
      {
        "type": "type4",
        "amount": 246,
        "recipient": {
          "id": "id2",
          "name": "name2",
          "email": "email4",
          "document": "document4",
          "description": "description8",
          "type": "type8",
          "status": "status6",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "default_bank_account": {
            "id": "id0",
            "holder_name": "holder_name6",
            "holder_type": "holder_type2",
            "bank": "bank8",
            "branch_number": "branch_number6",
            "branch_check_digit": "branch_check_digit6",
            "account_number": "account_number0",
            "account_check_digit": "account_check_digit6",
            "type": "type0",
            "status": "status2",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "recipient": {},
            "metadata": {
              "key0": "metadata7"
            },
            "pix_key": "pix_key6"
          },
          "gateway_recipients": [
            {
              "gateway": "gateway6",
              "status": "status8",
              "pgid": "pgid2",
              "created_at": "created_at4",
              "updated_at": "updated_at2"
            }
          ],
          "metadata": {
            "key0": "metadata1"
          },
          "automatic_anticipation_settings": {
            "enabled": false,
            "type": "type4",
            "volume_percentage": 72,
            "delay": 218,
            "days": [
              194,
              195,
              196
            ]
          },
          "transfer_settings": {
            "transfer_enabled": false,
            "transfer_interval": "transfer_interval2",
            "transfer_day": 238
          },
          "code": "code0",
          "payment_mode": "payment_mode4"
        },
        "gateway_id": "gateway_id4",
        "options": {
          "liable": false,
          "charge_processing_fee": false,
          "charge_remainder_fee": "charge_remainder_fee4"
        },
        "id": "id6"
      },
      {
        "type": "type3",
        "amount": 245,
        "recipient": {
          "id": "id1",
          "name": "name1",
          "email": "email5",
          "document": "document5",
          "description": "description9",
          "type": "type9",
          "status": "status7",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "default_bank_account": {
            "id": "id9",
            "holder_name": "holder_name5",
            "holder_type": "holder_type1",
            "bank": "bank7",
            "branch_number": "branch_number5",
            "branch_check_digit": "branch_check_digit5",
            "account_number": "account_number9",
            "account_check_digit": "account_check_digit5",
            "type": "type1",
            "status": "status1",
            "created_at": "2016-03-13T12:52:32.123Z",
            "updated_at": "2016-03-13T12:52:32.123Z",
            "deleted_at": "2016-03-13T12:52:32.123Z",
            "recipient": {},
            "metadata": {
              "key0": "metadata6",
              "key1": "metadata5"
            },
            "pix_key": "pix_key7"
          },
          "gateway_recipients": [
            {
              "gateway": "gateway5",
              "status": "status7",
              "pgid": "pgid1",
              "created_at": "created_at3",
              "updated_at": "updated_at1"
            },
            {
              "gateway": "gateway6",
              "status": "status8",
              "pgid": "pgid2",
              "created_at": "created_at4",
              "updated_at": "updated_at2"
            },
            {
              "gateway": "gateway7",
              "status": "status9",
              "pgid": "pgid3",
              "created_at": "created_at5",
              "updated_at": "updated_at3"
            }
          ],
          "metadata": {
            "key0": "metadata2",
            "key1": "metadata3"
          },
          "automatic_anticipation_settings": {
            "enabled": true,
            "type": "type5",
            "volume_percentage": 73,
            "delay": 217,
            "days": [
              193,
              194
            ]
          },
          "transfer_settings": {
            "transfer_enabled": true,
            "transfer_interval": "transfer_interval3",
            "transfer_day": 239
          },
          "code": "code9",
          "payment_mode": "payment_mode5"
        },
        "gateway_id": "gateway_id3",
        "options": {
          "liable": true,
          "charge_processing_fee": true,
          "charge_remainder_fee": "charge_remainder_fee3"
        },
        "id": "id7"
      }
    ]
  },
  "manual_billing": false
}
```

