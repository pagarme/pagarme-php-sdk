
# Create Payment Request

Payment data

## Structure

`CreatePaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentMethod` | `string` | Required | Payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `creditCard` | [`?CreateCreditCardPaymentRequest`](../../doc/models/create-credit-card-payment-request.md) | Optional | Settings for credit card payment | getCreditCard(): ?CreateCreditCardPaymentRequest | setCreditCard(?CreateCreditCardPaymentRequest creditCard): void |
| `debitCard` | [`?CreateDebitCardPaymentRequest`](../../doc/models/create-debit-card-payment-request.md) | Optional | Settings for debit card payment | getDebitCard(): ?CreateDebitCardPaymentRequest | setDebitCard(?CreateDebitCardPaymentRequest debitCard): void |
| `boleto` | [`?CreateBoletoPaymentRequest`](../../doc/models/create-boleto-payment-request.md) | Optional | Settings for boleto payment | getBoleto(): ?CreateBoletoPaymentRequest | setBoleto(?CreateBoletoPaymentRequest boleto): void |
| `currency` | `?string` | Optional | Currency. Must be informed using 3 characters | getCurrency(): ?string | setCurrency(?string currency): void |
| `voucher` | [`?CreateVoucherPaymentRequest`](../../doc/models/create-voucher-payment-request.md) | Optional | Settings for voucher payment | getVoucher(): ?CreateVoucherPaymentRequest | setVoucher(?CreateVoucherPaymentRequest voucher): void |
| `split` | [`?(CreateSplitRequest[])`](../../doc/models/create-split-request.md) | Optional | Splits | getSplit(): ?array | setSplit(?array split): void |
| `bankTransfer` | [`?CreateBankTransferPaymentRequest`](../../doc/models/create-bank-transfer-payment-request.md) | Optional | Settings for bank transfer payment | getBankTransfer(): ?CreateBankTransferPaymentRequest | setBankTransfer(?CreateBankTransferPaymentRequest bankTransfer): void |
| `gatewayAffiliationId` | `?string` | Optional | Gateway affiliation code | getGatewayAffiliationId(): ?string | setGatewayAffiliationId(?string gatewayAffiliationId): void |
| `amount` | `?int` | Optional | The amount of the payment, in cents | getAmount(): ?int | setAmount(?int amount): void |
| `checkout` | [`?CreateCheckoutPaymentRequest`](../../doc/models/create-checkout-payment-request.md) | Optional | Settings for checkout payment | getCheckout(): ?CreateCheckoutPaymentRequest | setCheckout(?CreateCheckoutPaymentRequest checkout): void |
| `customerId` | `?string` | Optional | Customer Id | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `customer` | [`?CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Optional | Customer | getCustomer(): ?CreateCustomerRequest | setCustomer(?CreateCustomerRequest customer): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `cash` | [`?CreateCashPaymentRequest`](../../doc/models/create-cash-payment-request.md) | Optional | Settings for cash payment | getCash(): ?CreateCashPaymentRequest | setCash(?CreateCashPaymentRequest cash): void |
| `privateLabel` | [`?CreatePrivateLabelPaymentRequest`](../../doc/models/create-private-label-payment-request.md) | Optional | Settings for private label payment | getPrivateLabel(): ?CreatePrivateLabelPaymentRequest | setPrivateLabel(?CreatePrivateLabelPaymentRequest privateLabel): void |
| `pix` | [`?CreatePixPaymentRequest`](../../doc/models/create-pix-payment-request.md) | Optional | Settings for pix payment | getPix(): ?CreatePixPaymentRequest | setPix(?CreatePixPaymentRequest pix): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreatePaymentRequestBuilder;

$createPaymentRequest = CreatePaymentRequestBuilder::init(
    'payment_method6'
)
    ->creditCard(
        null
    )
    ->debitCard(
        null
    )
    ->boleto(
        null
    )
    ->currency('currency4')
    ->voucher(
        null
    )
    ->build();
```

