
# Get Pix Bank Account Response

Payer's bank details.

## Structure

`GetPixBankAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankName` | `?string` | Optional | - | getBankName(): ?string | setBankName(?string bankName): void |
| `ispb` | `?string` | Optional | - | getIspb(): ?string | setIspb(?string ispb): void |
| `branchCode` | `?string` | Optional | - | getBranchCode(): ?string | setBranchCode(?string branchCode): void |
| `accountNumber` | `?string` | Optional | - | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetPixBankAccountResponseBuilder;

$getPixBankAccountResponse = GetPixBankAccountResponseBuilder::init()
    ->bankName('bank_name4')
    ->ispb('ispb4')
    ->branchCode('branch_code8')
    ->accountNumber('account_number0')
    ->build();
```

