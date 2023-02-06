
# Get Gateway Recipient Response

Information about the recipient on the gateway

## Structure

`GetGatewayRecipientResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `gateway` | `?string` | Optional | Gateway name | getGateway(): ?string | setGateway(?string gateway): void |
| `status` | `?string` | Optional | Status of the recipient on the gateway | getStatus(): ?string | setStatus(?string status): void |
| `pgid` | `?string` | Optional | Recipient id on the gateway | getPgid(): ?string | setPgid(?string pgid): void |
| `createdAt` | `?string` | Optional | Creation date | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | Last update date | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |

## Example (as JSON)

```json
{
  "gateway": null,
  "status": null,
  "pgid": null,
  "created_at": null,
  "updated_at": null
}
```

