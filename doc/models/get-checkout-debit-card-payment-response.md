
# Get Checkout Debit Card Payment Response

## Structure

`GetCheckoutDebitCardPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `string` | Required | Descrição na fatura | getStatementDescriptor(): string | setStatementDescriptor(string statementDescriptor): void |
| `authentication` | [`GetPaymentAuthenticationResponse`](../../doc/models/get-payment-authentication-response.md) | Required | Payment Authentication response object data | getAuthentication(): GetPaymentAuthenticationResponse | setAuthentication(GetPaymentAuthenticationResponse authentication): void |

## Example (as JSON)

```json
{
  "statement_descriptor": "statement_descriptor0",
  "authentication": {
    "type": "type2",
    "threed_secure": {
      "mpi": "mpi6",
      "eci": "eci6",
      "cavv": "cavv2",
      "transaction_Id": "transaction_Id8",
      "success_url": "success_url8"
    }
  }
}
```

