
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
| `createdAt` | `?\DateTime` | Optional | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | Last update date | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `deletedAt` | `?\DateTime` | Optional | Deletion date | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `recipient` | [`?GetRecipientResponse`](../../doc/models/get-recipient-response.md) | Optional | Recipient | getRecipient(): ?GetRecipientResponse | setRecipient(?GetRecipientResponse recipient): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `pixKey` | `?string` | Optional | Pix Key | getPixKey(): ?string | setPixKey(?string pixKey): void |

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
  "recipient": {
    "id": "id8",
    "name": "name8",
    "email": "email8",
    "document": "document8",
    "description": "description2",
    "type": "type2",
    "status": "status0",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "deleted_at": "2016-03-13T12:52:32.123Z",
    "default_bank_account": {
      "id": "id6",
      "holder_name": "holder_name2",
      "holder_type": "holder_type8",
      "bank": "bank4",
      "branch_number": "branch_number2",
      "branch_check_digit": "branch_check_digit2",
      "account_number": "account_number6",
      "account_check_digit": "account_check_digit2",
      "type": "type4",
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "recipient": {
        "id": "id8",
        "name": "name8",
        "email": "email8",
        "document": "document2",
        "description": "description8",
        "type": "type2",
        "status": "status0",
        "created_at": "2016-03-13T12:52:32.123Z",
        "updated_at": "2016-03-13T12:52:32.123Z",
        "deleted_at": "2016-03-13T12:52:32.123Z",
        "default_bank_account": {
          "id": "id6",
          "holder_name": "holder_name2",
          "holder_type": "holder_type8",
          "bank": "bank4",
          "branch_number": "branch_number2",
          "branch_check_digit": "branch_check_digit2",
          "account_number": "account_number6",
          "account_check_digit": "account_check_digit2",
          "type": "type6",
          "status": "status8",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "deleted_at": "2016-03-13T12:52:32.123Z",
          "recipient": {},
          "metadata": {
            "key0": "metadata3",
            "key1": "metadata2"
          },
          "pix_key": "pix_key0"
        },
        "gateway_recipients": [
          {
            "gateway": "gateway2",
            "status": "status4",
            "pgid": "pgid8",
            "created_at": "created_at0",
            "updated_at": "updated_at8"
          },
          {
            "gateway": "gateway3",
            "status": "status5",
            "pgid": "pgid9",
            "created_at": "created_at1",
            "updated_at": "updated_at9"
          }
        ],
        "metadata": {
          "key0": "metadata5",
          "key1": "metadata4",
          "key2": "metadata3"
        },
        "automatic_anticipation_settings": {
          "enabled": false,
          "type": "type8",
          "volume_percentage": 202,
          "delay": 88,
          "days": [
            64
          ]
        },
        "transfer_settings": {
          "transfer_enabled": false,
          "transfer_interval": "transfer_interval6",
          "transfer_day": 112
        },
        "code": "code6",
        "payment_mode": "payment_mode2"
      },
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata2",
        "key2": "metadata1"
      },
      "pix_key": "pix_key0"
    },
    "gateway_recipients": [
      {},
      {}
    ],
    "metadata": {
      "key0": "metadata5",
      "key1": "metadata6",
      "key2": "metadata7"
    },
    "automatic_anticipation_settings": {
      "enabled": false,
      "type": "type8",
      "volume_percentage": 16,
      "delay": 18,
      "days": [
        250
      ]
    },
    "transfer_settings": {
      "transfer_enabled": false,
      "transfer_interval": "transfer_interval6",
      "transfer_day": 182
    },
    "code": "code6",
    "payment_mode": "payment_mode8"
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "pix_key": "pix_key6"
}
```

