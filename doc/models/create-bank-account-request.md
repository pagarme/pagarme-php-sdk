
# Create Bank Account Request

Request for creating a bank account

## Structure

`CreateBankAccountRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `holderName` | `string` | Required | Bank account holder name | getHolderName(): string | setHolderName(string holderName): void |
| `holderType` | `string` | Required | Bank account holder type | getHolderType(): string | setHolderType(string holderType): void |
| `holderDocument` | `string` | Required | Bank account holder document | getHolderDocument(): string | setHolderDocument(string holderDocument): void |
| `bank` | `string` | Required | Bank | getBank(): string | setBank(string bank): void |
| `branchNumber` | `string` | Required | Branch number | getBranchNumber(): string | setBranchNumber(string branchNumber): void |
| `branchCheckDigit` | `string` | Required | Branch check digit | getBranchCheckDigit(): string | setBranchCheckDigit(string branchCheckDigit): void |
| `accountNumber` | `string` | Required | Account number | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `accountCheckDigit` | `string` | Required | Account check digit | getAccountCheckDigit(): string | setAccountCheckDigit(string accountCheckDigit): void |
| `type` | `string` | Required | Bank account type | getType(): string | setType(string type): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `pixKey` | `string` | Required | Pix key | getPixKey(): string | setPixKey(string pixKey): void |

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
  "type": "type0",
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "pix_key": "pix_key6"
}
```

