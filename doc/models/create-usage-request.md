
# Create Usage Request

Request for creating a usage

## Structure

`CreateUsageRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | `int` | Required | - | getQuantity(): int | setQuantity(int quantity): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `usedAt` | `\DateTime` | Required | - | getUsedAt(): \DateTime | setUsedAt(\DateTime usedAt): void |
| `code` | `?string` | Optional | Identification code in the client system | getCode(): ?string | setCode(?string code): void |
| `group` | `?string` | Optional | identification group in the client system | getGroup(): ?string | setGroup(?string group): void |
| `amount` | `?int` | Optional | Field used in item scheme type 'Percent' | getAmount(): ?int | setAmount(?int amount): void |

## Example (as JSON)

```json
{
  "quantity": 68,
  "description": "description0",
  "used_at": "2016-03-13T12:52:32.123Z",
  "code": null,
  "group": null,
  "amount": null
}
```

