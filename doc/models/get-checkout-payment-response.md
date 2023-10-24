
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
| `createdAt` | `?DateTime` | Optional | Data de criação | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Data de atualização | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `canceledAt` | `?DateTime` | Optional | Data de cancelamento | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `customerEditable` | `?bool` | Optional | Torna o objeto customer editável | getCustomerEditable(): ?bool | setCustomerEditable(?bool customerEditable): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | Dados do comprador | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |
| `billingaddress` | [`?GetAddressResponse`](../../doc/models/get-address-response.md) | Optional | Dados do endereço de cobrança | getBillingaddress(): ?GetAddressResponse | setBillingaddress(?GetAddressResponse billingaddress): void |
| `creditCard` | [`?GetCheckoutCreditCardPaymentResponse`](../../doc/models/get-checkout-credit-card-payment-response.md) | Optional | Configurações de cartão de crédito | getCreditCard(): ?GetCheckoutCreditCardPaymentResponse | setCreditCard(?GetCheckoutCreditCardPaymentResponse creditCard): void |
| `boleto` | [`?GetCheckoutBoletoPaymentResponse`](../../doc/models/get-checkout-boleto-payment-response.md) | Optional | Configurações de boleto | getBoleto(): ?GetCheckoutBoletoPaymentResponse | setBoleto(?GetCheckoutBoletoPaymentResponse boleto): void |
| `billingAddressEditable` | `?bool` | Optional | Indica se o billing address poderá ser editado | getBillingAddressEditable(): ?bool | setBillingAddressEditable(?bool billingAddressEditable): void |
| `shipping` | [`?GetShippingResponse`](../../doc/models/get-shipping-response.md) | Optional | Configurações  de entrega | getShipping(): ?GetShippingResponse | setShipping(?GetShippingResponse shipping): void |
| `shippable` | `?bool` | Optional | Indica se possui entrega | getShippable(): ?bool | setShippable(?bool shippable): void |
| `closedAt` | `?DateTime` | Optional | Data de fechamento | getClosedAt(): ?\DateTime | setClosedAt(?\DateTime closedAt): void |
| `expiresAt` | `?DateTime` | Optional | Data de expiração | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `currency` | `?string` | Optional | Moeda | getCurrency(): ?string | setCurrency(?string currency): void |
| `debitCard` | [`?GetCheckoutDebitCardPaymentResponse`](../../doc/models/get-checkout-debit-card-payment-response.md) | Optional | Configurações de cartão de débito | getDebitCard(): ?GetCheckoutDebitCardPaymentResponse | setDebitCard(?GetCheckoutDebitCardPaymentResponse debitCard): void |
| `bankTransfer` | [`?GetCheckoutBankTransferPaymentResponse`](../../doc/models/get-checkout-bank-transfer-payment-response.md) | Optional | Bank transfer payment response | getBankTransfer(): ?GetCheckoutBankTransferPaymentResponse | setBankTransfer(?GetCheckoutBankTransferPaymentResponse bankTransfer): void |
| `acceptedBrands` | `?(string[])` | Optional | Accepted Brands | getAcceptedBrands(): ?array | setAcceptedBrands(?array acceptedBrands): void |
| `pix` | [`?GetCheckoutPixPaymentResponse`](../../doc/models/get-checkout-pix-payment-response.md) | Optional | Pix payment response | getPix(): ?GetCheckoutPixPaymentResponse | setPix(?GetCheckoutPixPaymentResponse pix): void |

## Example (as JSON)

```json
{
  "id": "id6",
  "amount": 148,
  "default_payment_method": "default_payment_method6",
  "success_url": "success_url8",
  "payment_url": "payment_url0"
}
```

