
# Get Transfer Response

Transfer response

## Structure

`GetTransferResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id | getId(): ?string | setId(?string id): void |
| `amount` | `?int` | Optional | Transfer amount | getAmount(): ?int | setAmount(?int amount): void |
| `status` | `?string` | Optional | Transfer status | getStatus(): ?string | setStatus(?string status): void |
| `createdAt` | `?DateTime` | Optional | Transfer creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Transfer last update date | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `bankAccount` | [`?GetBankAccountResponse`](../../doc/models/get-bank-account-response.md) | Optional | Bank account | getBankAccount(): ?GetBankAccountResponse | setBankAccount(?GetBankAccountResponse bankAccount): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "amount": 146,
  "status": "status4",
  "created_at": "2016-03-13T12:52:32.123Z",
  "updated_at": "2016-03-13T12:52:32.123Z"
}
```

