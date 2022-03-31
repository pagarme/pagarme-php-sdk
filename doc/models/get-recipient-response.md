
# Get Recipient Response

Recipient response

## Structure

`GetRecipientResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Id | getId(): string | setId(string id): void |
| `name` | `string` | Required | Name | getName(): string | setName(string name): void |
| `email` | `string` | Required | Email | getEmail(): string | setEmail(string email): void |
| `document` | `string` | Required | Document | getDocument(): string | setDocument(string document): void |
| `description` | `string` | Required | Description | getDescription(): string | setDescription(string description): void |
| `type` | `string` | Required | Type | getType(): string | setType(string type): void |
| `status` | `string` | Required | Status | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | Creation date | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `updatedAt` | `\DateTime` | Required | Last update date | getUpdatedAt(): \DateTime | setUpdatedAt(\DateTime updatedAt): void |
| `deletedAt` | `\DateTime` | Required | Deletion date | getDeletedAt(): \DateTime | setDeletedAt(\DateTime deletedAt): void |
| `defaultBankAccount` | [`GetBankAccountResponse`](../../doc/models/get-bank-account-response.md) | Required | Default bank account | getDefaultBankAccount(): GetBankAccountResponse | setDefaultBankAccount(GetBankAccountResponse defaultBankAccount): void |
| `gatewayRecipients` | [`GetGatewayRecipientResponse[]`](../../doc/models/get-gateway-recipient-response.md) | Required | Info about the recipient on the gateway | getGatewayRecipients(): array | setGatewayRecipients(array gatewayRecipients): void |
| `metadata` | `array<string,string>` | Required | Metadata | getMetadata(): array | setMetadata(array metadata): void |
| `automaticAnticipationSettings` | [`?GetAutomaticAnticipationResponse`](../../doc/models/get-automatic-anticipation-response.md) | Optional | - | getAutomaticAnticipationSettings(): ?GetAutomaticAnticipationResponse | setAutomaticAnticipationSettings(?GetAutomaticAnticipationResponse automaticAnticipationSettings): void |
| `transferSettings` | [`?GetTransferSettingsResponse`](../../doc/models/get-transfer-settings-response.md) | Optional | - | getTransferSettings(): ?GetTransferSettingsResponse | setTransferSettings(?GetTransferSettingsResponse transferSettings): void |
| `code` | `string` | Required | Recipient code | getCode(): string | setCode(string code): void |
| `paymentMode` | `string` | Required | Payment mode<br>**Default**: `'bank_transfer'` | getPaymentMode(): string | setPaymentMode(string paymentMode): void |

## Example (as JSON)

```json
{
  "id": null,
  "name": null,
  "email": null,
  "document": null,
  "description": null,
  "type": null,
  "status": null,
  "created_at": null,
  "updated_at": null,
  "deleted_at": null,
  "default_bank_account": null,
  "gateway_recipients": null,
  "metadata": null,
  "code": null,
  "payment_mode": "bank_transfer"
}
```

