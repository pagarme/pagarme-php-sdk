
# Get Pix Payer Response

Pix payer data.

## Structure

`GetPixPayerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Required | - | getName(): ?string | setName(?string name): void |
| `document` | `?string` | Required | - | getDocument(): ?string | setDocument(?string document): void |
| `documentType` | `?string` | Required | - | getDocumentType(): ?string | setDocumentType(?string documentType): void |
| `bankAccount` | [`?GetPixBankAccountResponse`](../../doc/models/get-pix-bank-account-response.md) | Required | - | getBankAccount(): ?GetPixBankAccountResponse | setBankAccount(?GetPixBankAccountResponse bankAccount): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "document": "document6",
  "document_type": "document_type8",
  "bank_account": {
    "bank_name": "bank_name0",
    "ispb": "ispb8",
    "branch_code": "branch_code2",
    "account_number": "account_number4"
  }
}
```

