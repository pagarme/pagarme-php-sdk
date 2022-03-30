
# Get Gateway Response Response

The Transaction Gateway Response

## Structure

`GetGatewayResponseResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | The error code | getCode(): string | setCode(string code): void |
| `errors` | [`GetGatewayErrorResponse[]`](../../doc/models/get-gateway-error-response.md) | Required | The gateway response errors list | getErrors(): array | setErrors(array errors): void |

## Example (as JSON)

```json
{
  "code": "code8",
  "errors": [
    {
      "message": "message5"
    },
    {
      "message": "message6"
    },
    {
      "message": "message7"
    }
  ]
}
```

