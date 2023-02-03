
# Get Checkout Debit Card Payment Response

## Structure

`GetCheckoutDebitCardPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Descrição na fatura | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `authentication` | [`?GetPaymentAuthenticationResponse`](../../doc/models/get-payment-authentication-response.md) | Optional | Payment Authentication response object data | getAuthentication(): ?GetPaymentAuthenticationResponse | setAuthentication(?GetPaymentAuthenticationResponse authentication): void |

## Example (as JSON)

```json
{
  "statement_descriptor": null,
  "authentication": null
}
```

