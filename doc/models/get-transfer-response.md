
# Get Transfer Response

Transfer response

## Structure

`GetTransferResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Id | getId(): string | setId(string id): void |
| `amount` | `int` | Required | Transfer amount | getAmount(): int | setAmount(int amount): void |
| `status` | `string` | Required | Transfer status | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | Transfer creation date | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | Transfer last update date | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `bankAccount` | [`GetBankAccountResponse`](../../doc/models/get-bank-account-response.md) | Required | Bank account | getBankAccount(): GetBankAccountResponse | setBankAccount(GetBankAccountResponse bankAccount): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "amount": 46,
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "bank_account": {
    "id": "id4",
    "holder_name": "holder_name0",
    "holder_type": "holder_type6",
    "bank": "bank2",
    "branch_number": "branch_number0",
    "branch_check_digit": "branch_check_digit0",
    "account_number": "account_number4",
    "account_check_digit": "account_check_digit0",
    "type": "type6",
    "status": "status6",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "deleted_at": "2016-03-13T12:52:32.123Z",
    "recipient": null,
    "metadata": {
      "key0": "metadata1",
      "key1": "metadata0"
    },
    "pix_key": "pix_key2"
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  }
}
```

