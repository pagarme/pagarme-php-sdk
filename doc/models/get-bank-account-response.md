
# Get Bank Account Response

## Structure

`GetBankAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Id | getId(): string | setId(string id): void |
| `holderName` | `string` | Required | Holder name | getHolderName(): string | setHolderName(string holderName): void |
| `holderType` | `string` | Required | Holder type | getHolderType(): string | setHolderType(string holderType): void |
| `bank` | `string` | Required | Bank | getBank(): string | setBank(string bank): void |
| `branchNumber` | `string` | Required | Branch number | getBranchNumber(): string | setBranchNumber(string branchNumber): void |
| `branchCheckDigit` | `string` | Required | Branch check digit | getBranchCheckDigit(): string | setBranchCheckDigit(string branchCheckDigit): void |
| `accountNumber` | `string` | Required | Account number | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `accountCheckDigit` | `string` | Required | Account check digit | getAccountCheckDigit(): string | setAccountCheckDigit(string accountCheckDigit): void |
| `type` | `string` | Required | Bank account type | getType(): string | setType(string type): void |
| `status` | `string` | Required | Bank account status | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | Creation date | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | Last update date | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `deletedAt` | `\DateTime` | Required | Deletion date | getDeletedAt(): \DateTime | setDeletedAt(\DateTime deletedAt): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `pixKey` | `string` | Required | Pix Key | getPixKey(): string | setPixKey(string pixKey): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "holder_name": "holder_name4",
  "holder_type": "holder_type2",
  "bank": "bank8",
  "branch_number": "branch_number6",
  "branch_check_digit": "branch_check_digit4",
  "account_number": "account_number0",
  "account_check_digit": "account_check_digit6",
  "type": "type0",
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "deleted_at": "2016-03-13T12:52:32.123Z",
  "recipient": null,
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "pix_key": "pix_key6"
}
```

