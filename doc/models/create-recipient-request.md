
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
  "name": null,
  "email": null,
  "description": null,
  "document": null,
  "type": null,
  "default_bank_account": null,
  "metadata": null,
  "code": null,
  "payment_mode": "bank_transfer"
}
```

