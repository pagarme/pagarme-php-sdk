
# Get Sellers Request

## Structure

`GetSellersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `document` | `string` | Required | - | getDocument(): string | setDocument(string document): void |
| `code` | `string` | Required | - | getCode(): string | setCode(string code): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `createdSince` | `?string` | Optional | - | getCreatedSince(): ?string | setCreatedSince(?string createdSince): void |
| `createdUntil` | `?string` | Optional | - | getCreatedUntil(): ?string | setCreatedUntil(?string createdUntil): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "document": "document6",
  "code": "code8",
  "status": "status8",
  "type": "type0",
  "created_Since": null,
  "created_Until": null
}
```

