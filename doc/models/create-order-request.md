
# Create Order Request

Request for creating an order

## Structure

`CreateOrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`CreateOrderItemRequest[]`](../../doc/models/create-order-item-request.md) | Required | Items | getItems(): array | setItems(array items): void |
| `customer` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Required | Customer | getCustomer(): CreateCustomerRequest | setCustomer(CreateCustomerRequest customer): void |
| `payments` | [`CreatePaymentRequest[]`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayments(): array | setPayments(array payments): void |
| `code` | `string` | Required | The order code | getCode(): string | setCode(string code): void |
| `customerId` | `?string` | Optional | The customer id | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `shipping` | [`?CreateShippingRequest`](../../doc/models/create-shipping-request.md) | Optional | Shipping data | getShipping(): ?CreateShippingRequest | setShipping(?CreateShippingRequest shipping): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `antifraudEnabled` | `?bool` | Optional | Defines whether the order will go through anti-fraud | getAntifraudEnabled(): ?bool | setAntifraudEnabled(?bool antifraudEnabled): void |
| `ip` | `?string` | Optional | Ip address | getIp(): ?string | setIp(?string ip): void |
| `sessionId` | `?string` | Optional | Session id | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `location` | [`?CreateLocationRequest`](../../doc/models/create-location-request.md) | Optional | Request's location | getLocation(): ?CreateLocationRequest | setLocation(?CreateLocationRequest location): void |
| `device` | [`?CreateDeviceRequest`](../../doc/models/create-device-request.md) | Optional | Device's informations | getDevice(): ?CreateDeviceRequest | setDevice(?CreateDeviceRequest device): void |
| `closed` | `bool` | Required | **Default**: `true` | getClosed(): bool | setClosed(bool closed): void |
| `currency` | `?string` | Optional | Currency | getCurrency(): ?string | setCurrency(?string currency): void |
| `antifraud` | [`?CreateAntifraudRequest`](../../doc/models/create-antifraud-request.md) | Optional | - | getAntifraud(): ?CreateAntifraudRequest | setAntifraud(?CreateAntifraudRequest antifraud): void |
| `submerchant` | [`?CreateSubMerchantRequest`](../../doc/models/create-sub-merchant-request.md) | Optional | SubMerchant | getSubmerchant(): ?CreateSubMerchantRequest | setSubmerchant(?CreateSubMerchantRequest submerchant): void |

## Example (as JSON)

```json
{
  "items": [
    {
      "amount": 164,
      "description": "description2",
      "quantity": 22,
      "category": "category6",
      "code": "code6"
    }
  ],
  "customer": {
    "name": "{\n    \"name\": \"Tony Stark\"\n}",
    "email": "email6",
    "document": "document6",
    "type": "type0",
    "address": {
      "street": "street6",
      "number": "number4",
      "zip_code": "zip_code0",
      "neighborhood": "neighborhood2",
      "city": "city6",
      "state": "state2",
      "country": "country0",
      "complement": "complement2",
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "line_1": "line_10",
      "line_2": "line_24"
    },
    "metadata": {
      "key0": "metadata3"
    },
    "phones": {
      "home_phone": {
        "country_code": "country_code0",
        "number": "number2",
        "area_code": "area_code0",
        "Type": "Type0"
      },
      "mobile_phone": {
        "country_code": "country_code0",
        "number": "number8",
        "area_code": "area_code0",
        "Type": "Type0"
      }
    },
    "code": "code8",
    "gender": "gender6",
    "document_type": "document_type8"
  },
  "payments": [
    {
      "payment_method": "payment_method8",
      "credit_card": {
        "installments": 52,
        "statement_descriptor": "statement_descriptor8",
        "card": {
          "number": "number6",
          "holder_name": "holder_name2",
          "exp_month": 228,
          "exp_year": 68,
          "cvv": "cvv4"
        },
        "card_id": "card_id4",
        "card_token": "card_token2"
      },
      "debit_card": {
        "statement_descriptor": "statement_descriptor4",
        "card": {
          "number": "number6",
          "holder_name": "holder_name2",
          "exp_month": 228,
          "exp_year": 68,
          "cvv": "cvv4"
        },
        "card_id": "card_id0",
        "card_token": "card_token6",
        "recurrence": false
      },
      "boleto": {
        "retries": 226,
        "bank": "bank8",
        "instructions": "instructions2",
        "due_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street8",
          "number": "number4",
          "zip_code": "zip_code2",
          "neighborhood": "neighborhood4",
          "city": "city2",
          "state": "state6",
          "country": "country2",
          "complement": "complement6",
          "metadata": {
            "key0": "metadata5",
            "key1": "metadata6"
          },
          "line_1": "line_18",
          "line_2": "line_26"
        },
        "billing_address_id": "billing_address_id6",
        "nosso_numero": "nosso_numero0",
        "document_number": "document_number6",
        "statement_descriptor": "statement_descriptor0",
        "interest": {
          "days": 156,
          "type": "type0",
          "amount": 230
        }
      },
      "currency": "currency2",
      "voucher": {
        "statement_descriptor": "statement_descriptor2",
        "card_id": "card_id8",
        "card_token": "card_token8",
        "Card": {
          "number": "number8",
          "holder_name": "holder_name6",
          "exp_month": 240,
          "exp_year": 56,
          "cvv": "cvv8"
        },
        "recurrency_cycle": "recurrency_cycle6"
      }
    }
  ],
  "code": "code6",
  "closed": true,
  "customer_id": "customer_id6",
  "shipping": {
    "amount": 52,
    "description": "description6",
    "recipient_name": "recipient_name2",
    "recipient_phone": "recipient_phone6",
    "address_id": "address_id6",
    "address": {
      "street": "street6",
      "number": "number4",
      "zip_code": "zip_code0",
      "neighborhood": "neighborhood2",
      "city": "city6",
      "state": "state2",
      "country": "country0",
      "complement": "complement2",
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "line_1": "line_10",
      "line_2": "line_24"
    },
    "max_delivery_date": "2016-03-13T12:52:32.123Z",
    "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
    "type": "type6"
  },
  "metadata": {
    "key0": "metadata5"
  },
  "antifraud_enabled": false,
  "ip": "ip2"
}
```

