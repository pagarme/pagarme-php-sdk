
# Create Checkout Debit Card Payment Request

Checkout credit card payment request

## Structure

`CreateCheckoutDebitCardPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementDescriptor` | `?string` | Optional | Card invoice text descriptor | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `authentication` | [`CreatePaymentAuthenticationRequest`](../../doc/models/create-payment-authentication-request.md) | Required | Creates payment authentication | getAuthentication(): CreatePaymentAuthenticationRequest | setAuthentication(CreatePaymentAuthenticationRequest authentication): void |

## Example (as JSON)

```json
{
  "statement_descriptor": "statement_descriptor0",
  "authentication": {
    "type": "type2",
    "threed_secure": {
      "mpi": "mpi6",
      "cavv": "cavv2",
      "eci": "eci6",
      "transaction_id": "transaction_id4",
      "success_url": "success_url8",
      "ds_transaction_id": "ds_transaction_id4"
    }
  }
}
```

