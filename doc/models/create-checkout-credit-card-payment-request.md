
# Create Checkout Credit Card Payment Request

Checkout card payment request

## Structure

`CreateCheckoutCreditCardPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Card invoice text descriptor | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `installments` | [`?(CreateCheckoutCardInstallmentOptionRequest[])`](../../doc/models/create-checkout-card-installment-option-request.md) | Optional | Payment installment options | getInstallments(): ?array | setInstallments(?array installments): void |
| `authentication` | [`?CreatePaymentAuthenticationRequest`](../../doc/models/create-payment-authentication-request.md) | Optional | Creates payment authentication | getAuthentication(): ?CreatePaymentAuthenticationRequest | setAuthentication(?CreatePaymentAuthenticationRequest authentication): void |
| `capture` | `?bool` | Optional | Authorize and capture? | getCapture(): ?bool | setCapture(?bool capture): void |

## Example (as JSON)

```json
{
  "statement_descriptor": "statement_descriptor0",
  "installments": [
    {
      "number": 164,
      "total": 16
    }
  ],
  "authentication": {
    "type": "type2",
    "threed_secure": {
      "mpi": "mpi0",
      "cavv": "cavv8",
      "eci": "eci2",
      "transaction_id": "transaction_id0",
      "success_url": "success_url4",
      "ds_transaction_id": "ds_transaction_id0"
    }
  },
  "capture": false
}
```

