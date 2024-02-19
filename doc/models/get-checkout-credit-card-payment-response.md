
# Get Checkout Credit Card Payment Response

## Structure

`GetCheckoutCreditCardPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Descrição na fatura | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `installments` | [`?(GetCheckoutCardInstallmentOptionsResponse[])`](../../doc/models/get-checkout-card-installment-options-response.md) | Optional | Parcelas | getInstallments(): ?array | setInstallments(?array installments): void |
| `authentication` | [`?GetPaymentAuthenticationResponse`](../../doc/models/get-payment-authentication-response.md) | Optional | Payment Authentication response | getAuthentication(): ?GetPaymentAuthenticationResponse | setAuthentication(?GetPaymentAuthenticationResponse authentication): void |

## Example (as JSON)

```json
{
  "statementDescriptor": "statementDescriptor8",
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
      "eci": "eci2",
      "cavv": "cavv8",
      "transaction_Id": "transaction_Id2",
      "success_url": "success_url4"
    }
  }
}
```

