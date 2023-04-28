
# Get Checkout Payment Response

Resposta das configurações de pagamento do checkout

## Structure

`GetCheckoutPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `amount` | `?int` | Optional | Valor em centavos | getAmount(): ?int | setAmount(?int amount): void |
| `defaultPaymentMethod` | `?string` | Optional | Meio de pagamento padrão no checkout | getDefaultPaymentMethod(): ?string | setDefaultPaymentMethod(?string defaultPaymentMethod): void |
| `successUrl` | `?string` | Optional | Url de redirecionamento de sucesso após o checkou | getSuccessUrl(): ?string | setSuccessUrl(?string successUrl): void |
| `paymentUrl` | `?string` | Optional | Url para pagamento usando o checkout | getPaymentUrl(): ?string | setPaymentUrl(?string paymentUrl): void |
| `gatewayAffiliationId` | `?string` | Optional | Código da afiliação onde o pagamento será processado no gateway | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |
| `acceptedPaymentMethods` | `?(string[])` | Optional | Meios de pagamento aceitos no checkout | getAcceptedPaymentMethods(): ?array | setAcceptedPaymentMethods(?array acceptedPaymentMethods): void |
| `status` | `?string` | Optional | Status do checkout | getStatus(): ?string | setStatus(?string status): void |
| `skipCheckoutSuccessPage` | `?bool` | Optional | Pular tela de sucesso pós-pagamento? | getSkipCheckoutSuccessPage(): ?bool | setSkipCheckoutSuccessPage(?bool skipCheckoutSuccessPage): void |
| `createdAt` | `?\DateTime` | Optional | Data de criação | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | Data de atualização | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `canceledAt` | `?\DateTime` | Optional | Data de cancelamento | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `customerEditable` | `?bool` | Optional | Torna o objeto customer editável | getCustomerEditable(): ?bool | setCustomerEditable(?bool customerEditable): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | Dados do comprador | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `billingaddress` | [`?GetAddressResponse`](../../doc/models/get-address-response.md) | Optional | Dados do endereço de cobrança | getBillingaddress(): ?GetAddressResponse | setBillingaddress(?GetAddressResponse billingaddress): void |
| `creditCard` | [`?GetCheckoutCreditCardPaymentResponse`](../../doc/models/get-checkout-credit-card-payment-response.md) | Optional | Configurações de cartão de crédito | getCreditCard(): ?GetCheckoutCreditCardPaymentResponse | setCreditCard(?GetCheckoutCreditCardPaymentResponse creditCard): void |
| `boleto` | [`?GetCheckoutBoletoPaymentResponse`](../../doc/models/get-checkout-boleto-payment-response.md) | Optional | Configurações de boleto | getBoleto(): ?GetCheckoutBoletoPaymentResponse | setBoleto(?GetCheckoutBoletoPaymentResponse boleto): void |
| `billingAddressEditable` | `?bool` | Optional | Indica se o billing address poderá ser editado | getBillingAddressEditable(): ?bool | setBillingAddressEditable(?bool billingAddressEditable): void |
| `shipping` | [`?GetShippingResponse`](../../doc/models/get-shipping-response.md) | Optional | Configurações  de entrega | getShipping(): ?GetShippingResponse | setShipping(?GetShippingResponse shipping): void |
| `shippable` | `?bool` | Optional | Indica se possui entrega | getShippable(): ?bool | setShippable(?bool shippable): void |
| `closedAt` | `?\DateTime` | Optional | Data de fechamento | getClosedAt(): ?\DateTime | setClosedAt(?\DateTime closedAt): void |
| `expiresAt` | `?\DateTime` | Optional | Data de expiração | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `currency` | `?string` | Optional | Moeda | getCurrency(): ?string | setCurrency(?string currency): void |
| `debitCard` | [`?GetCheckoutDebitCardPaymentResponse`](../../doc/models/get-checkout-debit-card-payment-response.md) | Optional | Configurações de cartão de débito | getDebitCard(): ?GetCheckoutDebitCardPaymentResponse | setDebitCard(?GetCheckoutDebitCardPaymentResponse debitCard): void |
| `bankTransfer` | [`?GetCheckoutBankTransferPaymentResponse`](../../doc/models/get-checkout-bank-transfer-payment-response.md) | Optional | Bank transfer payment response | getBankTransfer(): ?GetCheckoutBankTransferPaymentResponse | setBankTransfer(?GetCheckoutBankTransferPaymentResponse bankTransfer): void |
| `acceptedBrands` | `?(string[])` | Optional | Accepted Brands | getAcceptedBrands(): ?array | setAcceptedBrands(?array acceptedBrands): void |
| `pix` | [`?GetCheckoutPixPaymentResponse`](../../doc/models/get-checkout-pix-payment-response.md) | Optional | Pix payment response | getPix(): ?GetCheckoutPixPaymentResponse | setPix(?GetCheckoutPixPaymentResponse pix): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "amount": 46,
  "default_payment_method": "default_payment_method0",
  "success_url": "success_url2",
  "payment_url": "payment_url6",
  "gateway_affiliation_id": "gateway_affiliation_id4",
  "accepted_payment_methods": [
    "accepted_payment_methods3",
    "accepted_payment_methods4",
    "accepted_payment_methods5"
  ],
  "status": "status8",
  "skip_checkout_success_page": false,
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "canceled_at": "2016-03-13T12:52:32.123Z",
  "customer_editable": false,
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
  "billingaddress": {
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
      "address": {},
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
      "fb_id": 68,
      "code": "code6",
      "document_type": "document_type6"
    },
    "metadata": {
      "key0": "metadata5"
    },
    "line_1": "line_18",
    "line_2": "line_26",
    "deleted_at": "2016-03-13T12:52:32.123Z"
  },
  "credit_card": {
    "statementDescriptor": "statementDescriptor4",
    "installments": [
      {
        "number": "number1",
        "total": 167
      }
    ],
    "authentication": {
      "type": "type0",
      "threed_secure": {
        "mpi": "mpi0",
        "eci": "eci2",
        "cavv": "cavv8",
        "transaction_Id": "transaction_Id2",
        "success_url": "success_url4"
      }
    }
  },
  "boleto": {
    "due_at": "2016-03-13T12:52:32.123Z",
    "instructions": "instructions2"
  },
  "billing_address_editable": false,
  "shipping": {
    "amount": 52,
    "description": "description6",
    "recipient_name": "recipient_name2",
    "recipient_phone": "recipient_phone6",
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
      "customer": {
        "id": "id0",
        "name": "name0",
        "email": "email6",
        "delinquent": false,
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "document": "document4",
        "type": "type0",
        "fb_access_token": "fb_access_token4",
        "address": {},
        "metadata": {
          "key0": "metadata7",
          "key1": "metadata6",
          "key2": "metadata5"
        },
        "phones": {
          "home_phone": {
            "country_code": "country_code2",
            "number": "number0",
            "area_code": "area_code2"
          },
          "mobile_phone": {
            "country_code": "country_code2",
            "number": "number0",
            "area_code": "area_code2"
          }
        },
        "fb_id": 100,
        "code": "code8",
        "document_type": "document_type8"
      },
      "metadata": {
        "key0": "metadata7"
      },
      "line_1": "line_14",
      "line_2": "line_28",
      "deleted_at": "2016-03-13T12:52:32.123Z"
    },
    "max_delivery_date": "2016-03-13T12:52:32.123Z",
    "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
    "type": "type6"
  },
  "shippable": false,
  "closed_at": "2016-03-13T12:52:32.123Z",
  "expires_at": "2016-03-13T12:52:32.123Z",
  "currency": "currency0",
  "debit_card": {
    "statement_descriptor": "statement_descriptor4",
    "authentication": {
      "type": "type6",
      "threed_secure": {
        "mpi": "mpi0",
        "eci": "eci2",
        "cavv": "cavv2",
        "transaction_Id": "transaction_Id2",
        "success_url": "success_url4"
      }
    }
  },
  "bank_transfer": {
    "bank": [
      "bank9",
      "bank0"
    ]
  },
  "accepted_brands": [
    "accepted_brands8",
    "accepted_brands9"
  ],
  "pix": {
    "expires_at": "2016-03-13T12:52:32.123Z",
    "additional_information": [
      {
        "Name": "Name7",
        "Value": "Value5"
      },
      {
        "Name": "Name8",
        "Value": "Value6"
      },
      {
        "Name": "Name9",
        "Value": "Value7"
      }
    ]
  }
}
```

