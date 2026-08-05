
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\CreateBankAccountRefundingDTOBuilder;

$createBankAccountRefundingDTO = CreateBankAccountRefundingDTOBuilder::init(
    'holder_name4',
    'holder_type0',
    'holder_document8',
    'bank6',
    'branch_number4',
    'branch_check_digit4',
    'account_number2',
    'account_check_digit4',
    'type2'
)->build();
```

