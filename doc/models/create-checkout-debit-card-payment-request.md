
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
  "statement_descriptor": null,
  "authentication": {
    "type": "type2",
    "threed_secure": {
      "mpi": "mpi6",
      "cavv": null,
      "eci": null,
      "transaction_id": null,
      "success_url": null,
      "ds_transaction_id": null,
      "version": null
    }
  }
}
```

