
# Update Charge Payment Method Request

Request for updating the payment method of a charge

## Structure

`UpdateChargePaymentMethodRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `updateSubscription` | `bool` | Required | Indicates if the payment method from the subscription must also be updated | getUpdateSubscription(): bool | setUpdateSubscription(bool updateSubscription): void |
| `paymentMethod` | `string` | Required | The new payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `creditCard` | [`CreateCreditCardPaymentRequest`](../../doc/models/create-credit-card-payment-request.md) | Required | Credit card data | getCreditCard(): CreateCreditCardPaymentRequest | setCreditCard(CreateCreditCardPaymentRequest creditCard): void |
| `debitCard` | [`CreateDebitCardPaymentRequest`](../../doc/models/create-debit-card-payment-request.md) | Required | Debit card data | getDebitCard(): CreateDebitCardPaymentRequest | setDebitCard(CreateDebitCardPaymentRequest debitCard): void |
| `boleto` | [`CreateBoletoPaymentRequest`](../../doc/models/create-boleto-payment-request.md) | Required | Boleto data | getBoleto(): CreateBoletoPaymentRequest | setBoleto(CreateBoletoPaymentRequest boleto): void |
| `voucher` | [`CreateVoucherPaymentRequest`](../../doc/models/create-voucher-payment-request.md) | Required | Voucher data | getVoucher(): CreateVoucherPaymentRequest | setVoucher(CreateVoucherPaymentRequest voucher): void |
| `cash` | [`CreateCashPaymentRequest`](../../doc/models/create-cash-payment-request.md) | Required | Cash data | getCash(): CreateCashPaymentRequest | setCash(CreateCashPaymentRequest cash): void |
| `bankTransfer` | [`CreateBankTransferPaymentRequest`](../../doc/models/create-bank-transfer-payment-request.md) | Required | Bank Transfer data | getBankTransfer(): CreateBankTransferPaymentRequest | setBankTransfer(CreateBankTransferPaymentRequest bankTransfer): void |
| `privateLabel` | [`CreatePrivateLabelPaymentRequest`](../../doc/models/create-private-label-payment-request.md) | Required | - | getPrivateLabel(): CreatePrivateLabelPaymentRequest | setPrivateLabel(CreatePrivateLabelPaymentRequest privateLabel): void |

## Example (as JSON)

```json
{
  "update_subscription": null,
  "payment_method": null,
  "credit_card": {
    "installments": 1,
    "capture": true,
    "recurrency_cycle": "\"first\" or \"subsequent\""
  },
  "debit_card": null,
  "boleto": null,
  "voucher": {
    "recurrency_cycle": "\"first\" or \"subsequent\""
  },
  "cash": null,
  "bank_transfer": null,
  "private_label": {
    "installments": 1,
    "capture": true,
    "recurrency_cycle": "\"first\" or \"subsequent\""
  }
}
```

