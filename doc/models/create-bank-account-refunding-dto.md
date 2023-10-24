
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
  "holder_name": "holder_name2",
  "holder_type": "holder_type8",
  "holder_document": "holder_document0",
  "bank": "bank4",
  "branch_number": "branch_number2",
  "branch_check_digit": "branch_check_digit2",
  "account_number": "account_number6",
  "account_check_digit": "account_check_digit2",
  "type": "type4"
}
```

