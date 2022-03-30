
# Get Access Token Response

Response object for getting a access token

## Structure

`GetAccessTokenResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `code` | `string` | Required | - | getCode(): string | setCode(string code): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `createdAt` | `\DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `customer` | [`?GetCustomerResponse`](../../doc/models/get-customer-response.md) | Optional | - | getCustomer(): ?GetCustomerResponse | setCustomer(?GetCustomerResponse customer): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "code": "code8",
  "status": "status8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "customer": null
}
```

