
# Error Exception

Api Error Exception

## Structure

`ErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `errors` | `array` | Required | - | getErrors(): array | setErrors(array errors): void |
| `request` | `array` | Required | - | getRequest(): array | setRequest(array request): void |

## Example (as JSON)

```json
{
  "message": "message0",
  "errors": {
    "key1": "val1",
    "key2": "val2"
  },
  "request": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

