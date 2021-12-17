
# Get Antifraud Response

## Structure

`GetAntifraudResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `returnCode` | `string` | Required | - | getReturnCode(): string | setReturnCode(string returnCode): void |
| `returnMessage` | `string` | Required | - | getReturnMessage(): string | setReturnMessage(string returnMessage): void |
| `providerName` | `string` | Required | - | getProviderName(): string | setProviderName(string providerName): void |
| `score` | `string` | Required | - | getScore(): string | setScore(string score): void |

## Example (as JSON)

```json
{
  "status": "status8",
  "return_code": "return_code0",
  "return_message": "return_message2",
  "provider_name": "provider_name2",
  "score": "score0"
}
```

