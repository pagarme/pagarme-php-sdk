
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
  "statement_descriptor": "statement_descriptor4",
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
  }
}
```

