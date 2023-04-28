
# Get Recipient Response

Recipient response

## Structure

`GetRecipientResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | Name | getName(): ?string | setName(?string name): void |
| `email` | `?string` | Optional | Email | getEmail(): ?string | setEmail(?string email): void |
| `document` | `?string` | Optional | Document | getDocument(): ?string | setDocument(?string document): void |
| `description` | `?string` | Optional | Description | getDescription(): ?string | setDescription(?string description): void |
| `type` | `?string` | Optional | Type | getType(): ?string | setType(?string type): void |
| `status` | `?string` | Optional | Status | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?\DateTime` | Optional | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?\DateTime` | Optional | Last update date | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `deletedAt` | `?\DateTime` | Optional | Deletion date | getDeletedAt(): ?\DateTime | setDeletedAt(?\DateTime deletedAt): void |
| `defaultBankAccount` | [`?GetBankAccountResponse`](../../doc/models/get-bank-account-response.md) | Optional | Default bank account | getDefaultBankAccount(): ?GetBankAccountResponse | setDefaultBankAccount(?GetBankAccountResponse defaultBankAccount): void |
| `gatewayRecipients` | [`?(GetGatewayRecipientResponse[])`](../../doc/models/get-gateway-recipient-response.md) | Optional | Info about the recipient on the gateway | getGatewayRecipients(): ?array | setGatewayRecipients(?array gatewayRecipients): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `automaticAnticipationSettings` | [`?GetAutomaticAnticipationResponse`](../../doc/models/get-automatic-anticipation-response.md) | Optional | - | getAutomaticAnticipationSettings(): ?GetAutomaticAnticipationResponse | setAutomaticAnticipationSettings(?GetAutomaticAnticipationResponse automaticAnticipationSettings): void |
| `transferSettings` | [`?GetTransferSettingsResponse`](../../doc/models/get-transfer-settings-response.md) | Optional | - | getTransferSettings(): ?GetTransferSettingsResponse | setTransferSettings(?GetTransferSettingsResponse transferSettings): void |
| `code` | `?string` | Optional | Recipient code | getCode(): ?string | setCode(?string code): void |
| `paymentMode` | `?string` | Optional | Payment mode<br>**Default**: `'bank_transfer'` | getPaymentMode(): ?string | setPaymentMode(?string paymentMode): void |

## Example (as JSON)

```json
{
  "payment_mode": "bank_transfer",
  "id": "id0",
  "name": "name0",
  "email": "email6",
  "document": "document6",
  "description": "description0",
  "type": "type0",
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z",
  "deleted_at": "2016-03-13T12:52:32.123Z",
  "default_bank_account": {
    "id": "id8",
    "holder_name": "holder_name4",
    "holder_type": "holder_type0",
    "bank": "bank6",
    "branch_number": "branch_number4",
    "branch_check_digit": "branch_check_digit4",
    "account_number": "account_number8",
    "account_check_digit": "account_check_digit4",
    "type": "type2",
    "status": "status0",
    "created_at": "2016-03-13T12:52:32.123Z",
    "updated_at": "2016-03-13T12:52:32.123Z",
    "deleted_at": "2016-03-13T12:52:32.123Z",
    "recipient": {
      "id": "id0",
      "name": "name0",
      "email": "email6",
      "document": "document6",
      "description": "description0",
      "type": "type0",
      "status": "status8",
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "deleted_at": "2016-03-13T12:52:32.123Z",
      "default_bank_account": {},
      "gateway_recipients": [
        {
          "gateway": "gateway4",
          "status": "status6",
          "pgid": "pgid0",
          "created_at": "created_at2",
          "updated_at": "updated_at0"
        },
        {
          "gateway": "gateway5",
          "status": "status7",
          "pgid": "pgid1",
          "created_at": "created_at3",
          "updated_at": "updated_at1"
        }
      ],
      "metadata": {
        "key0": "metadata3",
        "key1": "metadata4",
        "key2": "metadata5"
      },
      "automatic_anticipation_settings": {
        "enabled": false,
        "type": "type6",
        "volume_percentage": 30,
        "delay": 4,
        "days": [
          236
        ]
      },
      "transfer_settings": {
        "transfer_enabled": false,
        "transfer_interval": "transfer_interval4",
        "transfer_day": 196
      },
      "code": "code8",
      "payment_mode": "payment_mode6"
    },
    "metadata": {
      "key0": "metadata5",
      "key1": "metadata4",
      "key2": "metadata3"
    },
    "pix_key": "pix_key8"
  },
  "gateway_recipients": [
    {
      "gateway": "gateway4",
      "status": "status6",
      "pgid": "pgid0",
      "created_at": "created_at2",
      "updated_at": "updated_at0"
    },
    {
      "gateway": "gateway5",
      "status": "status7",
      "pgid": "pgid1",
      "created_at": "created_at3",
      "updated_at": "updated_at1"
    }
  ],
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "automatic_anticipation_settings": {
    "enabled": false,
    "type": "type6",
    "volume_percentage": 100,
    "delay": 190,
    "days": [
      166
    ]
  },
  "transfer_settings": {
    "transfer_enabled": false,
    "transfer_interval": "transfer_interval4",
    "transfer_day": 10
  },
  "code": "code8"
}
```

