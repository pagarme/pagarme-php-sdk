
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

## Example

```php
use PagarmeApiSDKLib\Models\Builders\GetGatewayRecipientResponseBuilder;

$getGatewayRecipientResponse = GetGatewayRecipientResponseBuilder::init()
    ->gateway('gateway0')
    ->status('status2')
    ->pgid('pgid6')
    ->createdAt('created_at8')
    ->updatedAt('updated_at6')
    ->build();
```

