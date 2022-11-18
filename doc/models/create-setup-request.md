
# Create Setup Request

Request for creating a Setup for a subscription. The setup is an order that will be created at the subscription creation.

## Structure

`CreateSetupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Setup amount | getAmount(): int | setAmount(int amount): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `payment` | [`CreatePaymentRequest`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayment(): CreatePaymentRequest | setPayment(CreatePaymentRequest payment): void |

## Example (as JSON)

```json
{
  "amount": 46,
  "description": "description0",
  "payment": {
    "payment_method": "payment_method4",
    "credit_card": null,
    "debit_card": null,
    "boleto": null,
    "currency": null,
    "voucher": null,
    "split": null,
    "bank_transfer": null,
    "gateway_affiliation_id": null,
    "amount": null,
    "checkout": null,
    "customer_id": null,
    "customer": null,
    "metadata": null,
    "cash": null,
    "private_label": {
      "installments": null,
      "statement_descriptor": null,
      "card": null,
      "card_id": null,
      "card_token": null,
      "recurrence": null,
      "capture": null,
      "extended_limit_enabled": null,
      "extended_limit_code": null,
      "recurrency_cycle": null
    },
    "pix": null
  }
}
```

