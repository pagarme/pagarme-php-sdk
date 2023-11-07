
# Get Bank Account Response

## Structure

`GetBankAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id | getId(): ?string | setId(?string id): void |
| `holderName` | `?string` | Optional | Holder name | getHolderName(): ?string | setHolderName(?string holderName): void |
| `holderType` | `?string` | Optional | Holder type | getHolderType(): ?string | setHolderType(?string holderType): void |
| `bank` | `?string` | Optional | Bank | getBank(): ?string | setBank(?string bank): void |
| `branchNumber` | `?string` | Optional | Branch number | getBranchNumber(): ?string | setBranchNumber(?string branchNumber): void |
| `branchCheckDigit` | `?string` | Optional | Branch check digit | getBranchCheckDigit(): ?string | setBranchCheckDigit(?string branchCheckDigit): void |
| `accountNumber` | `?string` | Optional | Account number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountCheckDigit` | `?string` | Optional | Account check digit | getAccountCheckDigit(): ?string | setAccountCheckDigit(?string accountCheckDigit): void |
| `type` | `?string` | Optional | Bank account type | getType(): ?string | setType(?string type): void |
| `status` | `?string` | Optional | Bank account status | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Last update date | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `deletedAt` | `?DateTime` | Optional | Deletion date | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `pixKey` | `?string` | Optional | Pix Key | getPixKey(): ?string | setPixKey(?string pixKey): void |

## Example (as JSON)

```json
{
  "id": "id6",
  "holder_name": "holder_name2",
  "holder_type": "holder_type8",
  "bank": "bank4",
  "branch_number": "branch_number2"
}
```

