
# Update Recipient Bank Account Request

Updates the default bank account for a recipient

## Structure

`UpdateRecipientBankAccountRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAccount` | [`CreateBankAccountRequest`](../../doc/models/create-bank-account-request.md) | Required | Bank account | getBankAccount(): CreateBankAccountRequest | setBankAccount(CreateBankAccountRequest bankAccount): void |
| `paymentMode` | `string` | Required | Payment mode<br>**Default**: `'bank_transfer'` | getPaymentMode(): string | setPaymentMode(string paymentMode): void |

## Example (as JSON)

```json
{
  "bank_account": null,
  "payment_mode": "bank_transfer"
}
```

