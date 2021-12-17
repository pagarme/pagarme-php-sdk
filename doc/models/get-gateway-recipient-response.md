
# Get Gateway Recipient Response

Information about the recipient on the gateway

## Structure

`GetGatewayRecipientResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `gateway` | `string` | Required | Gateway name | getGateway(): string | setGateway(string gateway): void |
| `status` | `string` | Required | Status of the recipient on the gateway | getStatus(): string | setStatus(string status): void |
| `pgid` | `string` | Required | Recipient id on the gateway | getPgid(): string | setPgid(string pgid): void |
| `createdAt` | `string` | Required | Creation date | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | Last update date | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |

## Example (as JSON)

```json
{
  "gateway": "gateway0",
  "status": "status8",
  "pgid": "pgid4",
  "created_at": "created_at2",
  "updated_at": "updated_at4"
}
```

