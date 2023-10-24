
# Create Recipient Request

Request for creating a recipient

## Structure

`CreateRecipientRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Recipient name | getName(): string | setName(string name): void |
| `email` | `string` | Required | Recipient email | getEmail(): string | setEmail(string email): void |
| `description` | `string` | Required | Recipient description | getDescription(): string | setDescription(string description): void |
| `document` | `string` | Required | Recipient document number | getDocument(): string | setDocument(string document): void |
| `type` | `string` | Required | Recipient type | getType(): string | setType(string type): void |
| `defaultBankAccount` | [`CreateBankAccountRequest`](../../doc/models/create-bank-account-request.md) | Required | Bank account | getDefaultBankAccount(): CreateBankAccountRequest | setDefaultBankAccount(CreateBankAccountRequest defaultBankAccount): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `transferSettings` | [`?CreateTransferSettingsRequest`](../../doc/models/create-transfer-settings-request.md) | Optional | Receiver Transfer Information | getTransferSettings(): ?CreateTransferSettingsRequest | setTransferSettings(?CreateTransferSettingsRequest transferSettings): void |
| `code` | `string` | Required | Recipient code | getCode(): string | setCode(string code): void |
| `paymentMode` | `string` | Required | Payment mode<br>**Default**: `'bank_transfer'` | getPaymentMode(): string | setPaymentMode(string paymentMode): void |

## Example (as JSON)

```json
{
  "name": "name6",
  "email": "email0",
  "description": "description6",
  "document": "document0",
  "type": "type4",
  "default_bank_account": {
    "holder_name": "holder_name4",
    "holder_type": "holder_type0",
    "holder_document": "holder_document2",
    "bank": "bank6",
    "branch_number": "branch_number4",
    "branch_check_digit": "branch_check_digit4",
    "account_number": "account_number8",
    "account_check_digit": "account_check_digit4",
    "type": "type2",
    "metadata": {
      "key0": "metadata5",
      "key1": "metadata4",
      "key2": "metadata3"
    },
    "pix_key": "pix_key8"
  },
  "metadata": {
    "key0": "metadata3"
  },
  "code": "code4",
  "payment_mode": "bank_transfer",
  "transfer_settings": {
    "transfer_enabled": false,
    "transfer_interval": "transfer_interval4",
    "transfer_day": 10
  }
}
```

