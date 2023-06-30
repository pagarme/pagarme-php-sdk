
# Create Bank Account Refunding DTO

Bank Account

## Structure

`CreateBankAccountRefundingDTO`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `holderName` | `string` | Required | Nome/razão social do favorecido | getHolderName(): string | setHolderName(string holderName): void |
| `holderType` | `string` | Required | Tipo de titular (pessoa física ou jurídica) | getHolderType(): string | setHolderType(string holderType): void |
| `holderDocument` | `string` | Required | CPF ou CNPJ do favorecido | getHolderDocument(): string | setHolderDocument(string holderDocument): void |
| `bank` | `string` | Required | Dígitos que identificam cada banco. | getBank(): string | setBank(string bank): void |
| `branchNumber` | `string` | Required | Número da agência bancária | getBranchNumber(): string | setBranchNumber(string branchNumber): void |
| `branchCheckDigit` | `string` | Required | Dígito da agência bancária | getBranchCheckDigit(): string | setBranchCheckDigit(string branchCheckDigit): void |
| `accountNumber` | `string` | Required | Número da conta | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `accountCheckDigit` | `string` | Required | Dígito verificador da conta | getAccountCheckDigit(): string | setAccountCheckDigit(string accountCheckDigit): void |
| `type` | `string` | Required | Tipo de conta | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "holder_name": "holder_name4",
  "holder_type": "holder_type2",
  "holder_document": "holder_document6",
  "bank": "bank8",
  "branch_number": "branch_number6",
  "branch_check_digit": "branch_check_digit4",
  "account_number": "account_number0",
  "account_check_digit": "account_check_digit6",
  "type": "type0"
}
```

