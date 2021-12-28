
# Create Transaction Report File Request

## Structure

`CreateTransactionReportFileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `startAt` | `?\DateTime` | Optional | - | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `endAt` | `?string` | Optional | - | getEndAt(): ?string | setEndAt(?string endAt): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "start_at": null,
  "end_at": null
}
```

